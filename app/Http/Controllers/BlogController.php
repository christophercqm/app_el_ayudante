<?php
namespace App\Http\Controllers;

use App\Models\Blog;
use Illuminate\Http\Request;
use Inertia\Inertia;
use Illuminate\Support\Str; // Asegúrate de incluir esta línea
use Illuminate\Support\Facades\Storage; // Importa Storage

class BlogController extends Controller
{
    // Método para listar todos los blogs
    public function index()
    {
        $blogs = Blog::all(); // Obtener todos los blogs
        return Inertia::render('Admin/Blog/Index', [
            'blogs' => $blogs,
        ]);
    }

    // Método para mostrar el formulario de creación
    public function create()
    {
        return Inertia::render('Admin/Blogs/Create');
    }

    // Método para almacenar un nuevo blog
    public function store(Request $request)
    {
        $request->validate([
            'titulo' => 'required|string|max:255',
            'descripcion' => 'required|string',
            'imagen' => 'nullable|image|mimes:jpeg,png,jpg,gif,webp|max:2048', // Validación para archivos de imagen
            'enlace_blog' => 'nullable|url',
        ]);

        // Crear el slug a partir del título
        $slug = Str::slug($request->titulo, '-');

        // Inicializamos la variable para la URL de la imagen
        $imagenURL = null;

        // Verificamos si la imagen fue subida
        if ($request->hasFile('imagen')) {
            // Obtenemos el archivo
            $file = $request->file('imagen');

            // Verificamos si la carpeta 'public/images/Blogs' existe
            $directory = public_path('images/Blogs');

            // Si la carpeta no existe, la creamos
            if (!is_dir($directory)) {
                mkdir($directory, 0755, true); // 0755 es el modo de permisos para la carpeta
            }

            // Generamos un nombre único para la imagen (esto evita conflictos de nombre)
            $imageName = time() . '.' . $file->getClientOriginalExtension(); // Usamos timestamp para asegurar que el nombre sea único

            // Guardamos la imagen en 'public/images/Blogs'
            $file->move($directory, $imageName);

            // Almacenamos la ruta relativa de la imagen en la base de datos
            $imagenURL = 'images/Blogs/' . $imageName;
        }

        // Crear el blog en la base de datos
        Blog::create([
            'titulo' => $request->titulo,
            'slug' => $slug,
            'descripcion' => $request->descripcion,
            'imagen' => $imagenURL, // Guardamos la ruta relativa de la imagen
            'enlace_blog' => $request->enlace_blog,
        ]);

        // Obtener los blogs actualizados
        $blogs = Blog::all();

        // Retornamos la vista con los proyectos actualizados
        return Inertia::render('Admin/Blog/Index', [
            'blogs' => $blogs,
            'success' => 'Blog creado exitosamente'
        ]);
    }

    // Método para mostrar el formulario de edición
    public function edit($slug)
    {
        $blog = Blog::where('slug', $slug)->firstOrFail();
        return Inertia::render('Admin/Blogs/Edit', [
            'blog' => $blog,
        ]);
    }

    // Método para actualizar un blog
    public function update(Request $request, $slug)
    {
        $blog = Blog::where('slug', $slug)->firstOrFail();

        $request->validate([
            'titulo' => 'required|string|max:255',
            'descripcion' => 'required|string',
            'imagen' => 'nullable|image|mimes:jpeg,png,jpg,gif,webp|max:2048', // Validación para archivos de imagen
            'enlace_blog' => 'nullable|url',
        ]);

        // Crear el slug a partir del título
        $slug = Str::slug($request->titulo, '-');

        // Inicializamos la variable para la URL de la imagen
        $imagenURL = $blog->imagen; // Mantenemos la imagen anterior si no se sube una nueva

        // Verificamos si la imagen fue subida
        if ($request->hasFile('imagen')) {
            // Obtenemos el archivo
            $file = $request->file('imagen');

            // Verificamos si la carpeta 'public/images/Blogs' existe
            $directory = public_path('images/Blogs');

            // Si la carpeta no existe, la creamos
            if (!is_dir($directory)) {
                mkdir($directory, 0755, true); // 0755 es el modo de permisos para la carpeta
            }

            // Generamos un nombre único para la imagen (esto evita conflictos de nombre)
            $imageName = time() . '.' . $file->getClientOriginalExtension(); // Usamos timestamp para asegurar que el nombre sea único

            // Guardamos la imagen en 'public/images/Blogs'
            $file->move($directory, $imageName);

            // Almacenamos la ruta relativa de la imagen en la base de datos
            $imagenURL = 'images/Blogs/' . $imageName;
        }

        // Actualizamos el blog
        $blog->update([
            'titulo' => $request->titulo,
            'slug' => $slug,
            'descripcion' => $request->descripcion,
            'imagen' => $imagenURL, // Actualizamos la ruta de la imagen
            'enlace_blog' => $request->enlace_blog,
        ]);

        // Redirigir a la lista de blogs
        return redirect()->route('admin.blogs.index')->with('success', 'Blog actualizado exitosamente');
    }

    // Método para eliminar un blog
    public function destroy($slug)
    {
        $blog = Blog::where('slug', $slug)->firstOrFail();
        $blog->delete();

        // Redirigir a la lista de blogs
        return redirect()->route('admin.blogs.index')->with('success', 'Blog eliminado exitosamente');
    }
}
