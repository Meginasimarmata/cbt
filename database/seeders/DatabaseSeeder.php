<?php

namespace Database\Seeders;

use App\Models\User;
use Hash;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;


class DatabaseSeeder extends Seeder
{
    use WithoutModelEvents;

    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        User::factory()->create([
            'name' => 'Megina',
            'email' => 'megina@gmail.com',
            'username'=> 'developer',
            'is_staff'=>true,
            //use Illuminate\Support\Facades\Hash; import password
            'password'=> Hash::make('rahasia'),
        ]);
    }
}

