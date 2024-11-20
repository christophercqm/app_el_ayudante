<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Models\Proyecto;
use App\Models\Blog;

use Illuminate\Foundation\Application;

use Inertia\Inertia;


class HomeController extends Controller
{
    public function index() {

        $proyectos = Proyecto::all();
        $blogs = Blog::all();

        
        return Inertia::render('Public/Home/Index', [
            'canLogin' => Route::has('login'),
            'canRegister' => Route::has('register'),
            'laravelVersion' => Application::VERSION,
            'phpVersion' => PHP_VERSION,
            'proyectos' => $proyectos,
            'blogs' => $blogs
        ]);
    }
}
