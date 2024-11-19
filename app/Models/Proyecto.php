<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Proyecto extends Model
{
    use HasFactory;

    // Definir los campos que pueden ser asignados masivamente
    protected $fillable = [
        'titulo',
        'enlace',
        'description',
        'link',
        'slug',
    ];

    /**
     * Genera un slug automáticamente antes de guardar el modelo.
     *
     * @return void
     */
    public static function boot()
    {
        parent::boot();

        // Al crear o actualizar un proyecto, generamos el slug
        static::saving(function ($proyecto) {
            if (!$proyecto->slug) {  // Si no tiene slug asignado, lo generamos
                $proyecto->slug = Str::slug($proyecto->titulo);
            }
        });
    }
}
