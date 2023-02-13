<?php

namespace Database\Seeders;

use App\Models\ToDoList;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        ToDoList::factory(10)->create();
        // \App\Models\User::factory(10)->create();
    }
}
