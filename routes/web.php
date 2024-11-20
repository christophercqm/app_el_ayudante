<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProyectosController;
use App\Http\Controllers\BlogController;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

Route::get('/', [HomeController::class, 'index']);

Route::get('/dashboard', function () {
    return Inertia::render('Admin/Dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');


Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

      // Rutas para Proyectos
  // Rutas CRUD para Proyectos
  Route::get('/proyectos', [ProyectosController::class, 'index'])->name('admin.proyectos.index');  // Listar proyectos
  Route::get('/proyectos/create', [ProyectosController::class, 'create'])->name('admin.proyectos.create'); // Mostrar el formulario para crear
  Route::post('/proyectos', [ProyectosController::class, 'store'])->name('admin.proyectos.store');  // Guardar el nuevo proyecto
  Route::get('/proyectos/{proyecto}', [ProyectosController::class, 'show'])->name('admin.proyectos.show');  // Mostrar detalle de proyecto
  Route::get('/proyectos/{proyecto}/edit', [ProyectosController::class, 'edit'])->name('admin.proyectos.edit');  // Mostrar formulario de edición
  Route::post('/proyectos/{proyecto}', [ProyectosController::class, 'update'])->name('admin.proyectos.update');  // Actualizar proyecto
  Route::delete('/proyectos/{proyecto}', [ProyectosController::class, 'destroy'])->name('admin.proyectos.destroy');  // Eliminar proyecto});


    // Rutas para Blogs
    Route::get('/admin/blogs', [BlogController::class, 'index'])->name('admin.blogs.index'); // Mostrar la lista de blogs
    Route::get('/admin/blogs/create', [BlogController::class, 'create'])->name('admin.blogs.create'); // Mostrar formulario para crear blog
    Route::post('/admin/blogs', [BlogController::class, 'store'])->name('admin.blogs.store'); // Almacenar nuevo blog
    Route::get('/admin/blogs/{slug}/edit', [BlogController::class, 'edit'])->name('admin.blogs.edit'); // Mostrar formulario de edición
    Route::post('/admin/blogs/{slug}', [BlogController::class, 'update'])->name('admin.blogs.update'); // Actualizar blog
    Route::delete('/admin/blogs/{slug}', [BlogController::class, 'destroy'])->name('admin.blogs.destroy'); // Eliminar blog
});

require __DIR__.'/auth.php';
