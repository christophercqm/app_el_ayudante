<?php

namespace App\Http\Controllers;

use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Inertia\Inertia;

use App\Models\Proyecto;


class ProyectosController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // Pasamos los proyectos a la vista
        $proyectos = Proyecto::all();
        return Inertia::render('Admin/Proyectos/Index', [
            'proyectos' => $proyectos,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // Validación de los campos
        $request->validate([
            'titulo' => 'required|string|max:255',
            'enlace' => 'required|string|max:255',
            'description' => 'required|string',
            'imagen' => 'required|file|mimes:jpeg,png,jpg,gif,webp,webm',
        ]);

        // Obtenemos los datos del formulario
        $data = $request->only(['titulo', 'enlace', 'description']);

        // Verificamos si se ha subido una imagen
        if ($request->hasFile('imagen')) {
            // Obtenemos el archivo de la imagen
            $file = $request->file('imagen');

            // Generamos un nombre único para la imagen
            $imageName = Str::random(20) . '.' . $file->getClientOriginalExtension();

            // Verificamos si la carpeta 'public/images/Proyectos' existe
            $directory = public_path('images/Proyectos');

            // Si la carpeta no existe, la creamos
            if (!is_dir($directory)) {
                mkdir($directory, 0755, true); // 0755 es el modo de permisos para la carpeta
            }

            // Guardamos la imagen en 'public/images/Proyectos'
            $file->move($directory, $imageName);

            // Almacenamos la ruta de la imagen en la base de datos
            $data['link'] = 'images/Proyectos/' . $imageName; // Guardamos la ruta relativa en la base de datos
        }

        // Creamos el proyecto con los datos
        Proyecto::create($data);

        // Obtener los proyectos actualizados
        $proyectos = Proyecto::all();

        // Retornamos la vista con los proyectos actualizados
        return Inertia::render('Admin/Proyectos/Index', [
            'proyectos' => $proyectos,
            'success' => 'Proyecto creado exitosamente'
        ]);
    }








    /**
     * Display the specified resource.
     */
    public function show(string $slug)
    {
        $proyecto = Proyecto::where('slug', $slug)->firstOrFail();
        return Inertia::render('Admin/Proyectos/Show', [
            'proyecto' => $proyecto,
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
