<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class UserInfoFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'user_id' =>$this->faker->numberBetween(1,10),
            'phone'=>$this->faker->phoneNumber(),
            'address'=>$this->faker->city()
        ];
    }
}
