<?php

namespace Database\Factories;

use App\Models\SiteContato;
use Illuminate\Database\Eloquent\Factories\Factory;

class SiteContatoFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = SiteContato::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'nome' => $this->faker->name,
            'telefone' => $this->faker->tollFreePhoneNumber,
            'email' => $this->faker->unique()->email,
            // 'motivo_contato' => $this->faker->numberBetween(1,3), // obsoleto na migrations 2021_06_30_213746
            'motivo_contatos_id' => $this->faker->numberBetween(1,3),
            'mensagem' => $this->faker->text(200),
        ];
    }
}
