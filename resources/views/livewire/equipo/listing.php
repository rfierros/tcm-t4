@extends('layouts.app')

@section('content')
<div class="container">
    @if ($equipo)
        <h1>Team: {{ $equipo->nombreEquipo }} (Season: {{ $equipo->temporada }})</h1>

        <h2>Cyclists Associated with the Team</h2>
        <table class="table">
            <thead>
                <tr>
                    <th>Name</th>
                    <th>Country</th>
                    <th>Age</th>
                    <th>Specialty</th>
                    <th>Overall Rating</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($ciclistas as $ciclista)
                    <tr>
                        <td>{{ $ciclista->nombre }} {{ $ciclista->apellido }}</td>
                        <td>{{ $ciclista->pais }}</td>
                        <td>{{ $ciclista->edad }}</td>
                        <td>{{ ucfirst($ciclista->especialidad) }}</td>
                        <td>{{ $ciclista->media }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    @else
        <p>The user does not have an assigned team yet.</p>
    @endif
</div>
@endsection