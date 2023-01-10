<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class ProductFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            //
            'title' => $this->faker->sentence(),
            'content' => $this->faker->paragraph(),
            'price' => $this->faker->randomFloat(100,500),
            'image' => $this->faker->imageUrl(640, 480, 'cats', true, 'Faker')
        ];
    }
}
