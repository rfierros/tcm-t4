<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Equipo extends Model
{
    use HasFactory;

    protected $table = 'equipos'; // Nombre de la tabla

    protected $fillable = [
        'temporada',
        'nombre_equipo',
        'user_id', // Clave foránea de la tabla `users`
    ];

    // Relación con el modelo User
    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    public function ciclistas()
    {
        return $this->hasMany(Ciclista::class, 'id');
    }    
}
