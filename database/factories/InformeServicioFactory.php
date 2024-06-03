<?php

namespace Database\Factories;

use App\Models\InformeServicio;
use Illuminate\Database\Eloquent\Factories\Factory;

class InformeServicioFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = InformeServicio::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'diagnostico' => $this->faker->word,
        'solucion' => $this->faker->word,
        'servicio_id' => $this->faker->word,
        'created_at' => $this->faker->date('Y-m-d H:i:s'),
        'updated_at' => $this->faker->date('Y-m-d H:i:s')
        ];
    }
}
