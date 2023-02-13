<?php

namespace Database\Factories;

use App\Models\ToDoList;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

// use Illuminate\Database\Seeder;
// use Faker\Factory as Faker;
// use App\Directory;

class TodolistFactory extends Factory
{
    protected $model = ToDoList::class;

    /**
     * Define the model's default state.
     *
     * @return array
    */

    public function definition()
    {
        return [
            'title' => $this->faker->sentence($nbWords = 6, $variableNbWords = true),
            'description' => $this->faker->text,
            'date_start' => now(),
            'date_end' => now(),
            'complited' => random_int(0,1),
            'user_id' => User::get()->random()->id
        ];
    }
}
