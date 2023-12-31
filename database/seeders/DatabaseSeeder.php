<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Client;
use App\Models\Task;
use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        User::create([
            'name' => "Liakat Biswas",
            'email' => "liakat@inve.test",
            'password' => bcrypt(12345),
            'thumbnail' => 'https://picsum.photos/300'
        ]);

        Client::factory()->count(10)->create();
        Task::factory()->count(10)->create();
    }
}
