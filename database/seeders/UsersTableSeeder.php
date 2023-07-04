<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::create([
            'name' => 'John Doe',
            'email' => 'johndoe@example.com',
            'password' => bcrypt('secret'),
        ]);

        Profile::create([
            'user_id' => 1,
            'address' => '123 Main Street',
            'phone' => '123-456-7890',
            'gender' => 'male',
        ]);

        User::create([
            'name' => 'Jane Doe',
            'email' => 'janedoe@example.com',
            'password' => bcrypt('secret'),
        ]);

        Profile::create([
            'user_id' => 2,
            'address' => '456 Elm Street',
            'phone' => '456-789-0123',
            'gender' => 'female',
        ]);
    }
}
