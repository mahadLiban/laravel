<?php

namespace Database\Factories;

use App\Models\Batiment;
use App\Models\Model;
use Illuminate\Database\Eloquent\Factories\Factory;

class BatimentFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Batiment::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            "nom"=>$this->faker->firstName(),
            "adresse"=>$this->faker->address(),
            "description"=>$this->faker->catchphrase()

        ];
    }
}
