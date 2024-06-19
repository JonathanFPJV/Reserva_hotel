<?php

namespace Database\Factories;

use App\Models\Habitacion;
use Illuminate\Database\Eloquent\Factories\Factory;

class HabitacionFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Habitacion::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'Numero_habitacion' => $this->faker->unique()->numberBetween(100, 500),
            'Tipo_habitacion' => $this->faker->randomElement(['Individual', 'Doble', 'Suite']),
            'Capacidad' => $this->faker->numberBetween(1, 5),
            'Precio' => $this->faker->numberBetween(50, 300),
            'Estado_habitacion' => $this->faker->randomElement(['Disponible', 'Ocupada', 'Mantenimiento']),
            'Piso' => $this->faker->numberBetween(1, 10),
        ];
    }
}

