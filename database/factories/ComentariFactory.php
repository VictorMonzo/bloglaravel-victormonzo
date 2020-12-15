<?php

namespace Database\Factories;

use App\Models\Comentari;
use Illuminate\Database\Eloquent\Factories\Factory;

use App\Models\User;

class ComentariFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Comentari::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'comentari' => $this->faker->text($maxNbChars = 200),
            'usuari_id' => User::inRandomOrder()->first()
        ];
    }
}
