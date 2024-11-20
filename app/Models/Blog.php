<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str; // Asegúrate de incluir esta línea

class Blog extends Model
{
    use HasFactory;

    // Especificamos qué campos se pueden llenar masivamente
    protected $fillable = [
        'titulo',
        'descripcion',
        'imagen',
        'enlace_blog',
        'slug',
    ];

    // Si quieres que el slug se genere automáticamente cuando se crea o actualiza el blog
    public static function boot()
    {
        parent::boot();

        // Generar el slug automáticamente antes de crear o actualizar el blog
        static::saving(function ($blog) {
            if (empty($blog->slug)) {
                $blog->slug = Str::slug($blog->titulo); // Usar Str::slug aquí
            }
        });
    }
}
