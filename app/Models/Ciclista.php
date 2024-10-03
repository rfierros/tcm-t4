<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ciclista extends Model
{
    use HasFactory;

    protected $table = 'ciclistas'; // Nombre de la tabla

    // Definir los campos que pueden ser asignados masivamente
    protected $fillable = [
        'Nombre', 'Pais', 'PosIni', 'PosFin', 'Pts', 'Especialidad', 'Edad', 
        'LLA', 'MON', 'COL', 'CRI', 'PRO', 'PAV', 'SPR', 'ACC', 'DES', 'COM',
        'ENE', 'RES', 'REC', 'Media', 'equipo_id'
    ];

    // Relación de pertenencia a un equipo
    public function equipo()
    {
        return $this->belongsTo(Equipo::class, 'equipo_id', 'id');
    }
}
