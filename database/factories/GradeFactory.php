<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class GradeFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'test_name'=>$this->faker->streetName(),
            'lowest_passing_grade'=>$this->faker->name(),
            'EC'=>$this->faker->numberBetween(1, 10),
        ];
    }
}
