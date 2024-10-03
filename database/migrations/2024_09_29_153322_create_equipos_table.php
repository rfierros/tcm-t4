<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB; // Asegúrate de importar la clase DB

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('equipos', function (Blueprint $table) {
            $table->id(); // ID autoincremental para el equipo
            $table->integer('temporada'); // Temporada del equipo
            $table->string('NombreEquipo'); // Nombre del equipo
            $table->unsignedBigInteger('user_id')->nullable(); // Relación con la tabla `users`

            $table->timestamps(); // created_at y updated_at

            // Definir la relación con la tabla `users`
            $table->foreign('user_id')->references('id')->on('users')->onDelete('set null');
        });

        // Insertar equipos iniciales con `user_id` correspondiente
        DB::table('equipos')->insert([
            ['temporada' => 4, 'NombreEquipo' => 'Lidl', 'user_id' => 1], // user_id 1 corresponde a 'BarbaRoja'
            ['temporada' => 4, 'NombreEquipo' => 'Sky', 'user_id' => null],
            ['temporada' => 4, 'NombreEquipo' => 'Phonak', 'user_id' => 2], // user_id 2 corresponde a 'Jonathan9'
            ['temporada' => 4, 'NombreEquipo' => 'Trek - Segafredo', 'user_id' => 3],
            ['temporada' => 4, 'NombreEquipo' => 'Uno-X', 'user_id' => 4],
            ['temporada' => 4, 'NombreEquipo' => 'Hummel', 'user_id' => 5],
            ['temporada' => 4, 'NombreEquipo' => 'DSM', 'user_id' => 6],
            ['temporada' => 4, 'NombreEquipo' => 'Twitch - BH', 'user_id' => 7],
            ['temporada' => 4, 'NombreEquipo' => 'INEOS Grenadiers', 'user_id' => 8],
            ['temporada' => 4, 'NombreEquipo' => 'Orbea', 'user_id' => 9],
            ['temporada' => 4, 'NombreEquipo' => 'UAE', 'user_id' => 10],
            ['temporada' => 4, 'NombreEquipo' => 'Illes Balears', 'user_id' => 11],
            ['temporada' => 4, 'NombreEquipo' => 'Kaiku', 'user_id' => 12],
            ['temporada' => 4, 'NombreEquipo' => 'Xacobeo', 'user_id' => 13],
            ['temporada' => 4, 'NombreEquipo' => 'Repsol', 'user_id' => 14],
            ['temporada' => 4, 'NombreEquipo' => 'F1 Paddock', 'user_id' => 15],
            ['temporada' => 4, 'NombreEquipo' => 'Kimetsu No Yaiba', 'user_id' => 16],
            ['temporada' => 4, 'NombreEquipo' => 'Mercatone Uno', 'user_id' => 17],
            ['temporada' => 4, 'NombreEquipo' => 'Nike', 'user_id' => 18],
            ['temporada' => 4, 'NombreEquipo' => 'Caja Rural', 'user_id' => 19],
            ['temporada' => 4, 'NombreEquipo' => 'Movistar', 'user_id' => 20],
            ['temporada' => 4, 'NombreEquipo' => 'Bancolombia', 'user_id' => 21],
            ['temporada' => 4, 'NombreEquipo' => 'Carambar', 'user_id' => 22],
            ['temporada' => 4, 'NombreEquipo' => 'Roma Cycling Project', 'user_id' => 23],
        ]);
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('equipos');
    }
};
