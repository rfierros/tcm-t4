<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use Illuminate\Validation\Rule;
use Livewire\Volt\Component;
use App\Models\User;
use App\Models\Equipo;
use App\Models\Ciclista;

class EquipoController extends Controller
{
    public $currentTemporada = 4; // Temporada actual
    public $equipo;
    public $ciclistas;

    public function mount()
    {
        // Obtener el equipo del usuario autenticado
        $this->equipo = Auth::user()->equipo;
        dd($this->equipo);

        // Obtener los ciclistas asociados a ese equipo
        $this->ciclistas = $this->equipo ? $this->equipo->ciclistas : collect();
    }

    public function render()
    {
        dd($this->equipo);
        return view('livewire.equipo.listing', [
            'equipo' => $this->equipo,
            'ciclistas' => $this->ciclistas,
        ]);
    }
}
