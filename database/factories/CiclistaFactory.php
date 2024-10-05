<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Ciclista>
 */
class CiclistaFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'clave_id' => $this->faker->unique()->numberBetween(1, 1000), // Número único entre 1 y 1000
            'nombre' => $this->faker->firstName(),                         // Nombre aleatorio
            'apellido' => $this->faker->lastName(),                        // Apellido aleatorio
            'pais' => $this->faker->countryCode(),                         // Código de país aleatorio (COL, FRA, etc.)
            'pos_ini' => $this->faker->numberBetween(1, 200),              // Posición inicial entre 1 y 200
            'pos_fin' => $this->faker->numberBetween(1, 200),              // Posición final entre 1 y 200
            'victorias' => $this->faker->numberBetween(0, 50),             // Número de victorias entre 0 y 50
            'pts' => $this->faker->randomFloat(2, 0, 1000),                // Puntos aleatorios entre 0 y 1000
            'especialidad' => $this->faker->randomElement(['escalador', 'combatividad', 'sprinter', 'flandes', 'ardenas', 'croner']), // Especialidad aleatoria
            'edad' => $this->faker->numberBetween(18, 40),                 // Edad entre 18 y 40 años
            'lla' => $this->faker->randomFloat(3, 50, 82),                // Valoración LLA entre 50 y 82
            'mon' => $this->faker->randomFloat(3, 50, 82),                // Valoración MON entre 50 y 82
            'col' => $this->faker->randomFloat(3, 50, 82),                // Valoración COL entre 50 y 82
            'cri' => $this->faker->randomFloat(3, 50, 82),                // Valoración CRI entre 50 y 82
            'pro' => $this->faker->randomFloat(3, 50, 82),                // Valoración PRO entre 50 y 82
            'pav' => $this->faker->randomFloat(3, 50, 82),                // Valoración PAV entre 50 y 82
            'spr' => $this->faker->randomFloat(3, 50, 82),                // Valoración SPR entre 50 y 82
            'acc' => $this->faker->randomFloat(3, 50, 82),                // Valoración ACC entre 50 y 82
            'des' => $this->faker->randomFloat(3, 50, 82),                // Valoración DES entre 50 y 82
            'com' => $this->faker->randomFloat(3, 50, 82),                // Valoración COM entre 50 y 82
            'ene' => $this->faker->randomFloat(3, 50, 82),                // Valoración ENE entre 50 y 82
            'res' => $this->faker->randomFloat(3, 50, 82),                // Valoración RES entre 50 y 82
            'rec' => $this->faker->randomFloat(3, 50, 82),                // Valoración REC entre 50 y 82
            'media' => $this->faker->randomFloat(8, 50, 82),              // Media general entre 50 y 82 con 8 decimales
            'equipo_id' => null,                                           // Puedes poner `null` o usar un ID de equipo aleatorio si ya tienes equipos generados
        ];
    }
}
