<?php

namespace Database\Factories;

use App\Models\Portofolio;
use Illuminate\Database\Eloquent\Factories\Factory;

class PortofolioFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Portofolio::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            "titre"=>$this->faker->firstName(),
            "description"=>$this->faker->catchphrase(),
            "path"=>$this->faker->firstName(),
            "catégorie"=>$this->faker->firstName()
        ];
    }
}
