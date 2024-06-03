<?php

namespace Database\Factories;

use App\Models\Servicio;
use Illuminate\Database\Eloquent\Factories\Factory;

class ServicioFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Servicio::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'fecha_recibido' => $this->faker->word,
        'fecha_entrega' => $this->faker->word,
        'cliente_id' => $this->faker->word,
        'tecnico_id' => $this->faker->word,
        'tiposervicio_id' => $this->faker->word,
        'estado_id' => $this->faker->word,
        'equipo_id' => $this->faker->word,
        'costo_servicio' => $this->faker->word,
        'created_at' => $this->faker->date('Y-m-d H:i:s'),
        'updated_at' => $this->faker->date('Y-m-d H:i:s')
        ];
    }
}
