<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use function Laravel\Prompts\password;


class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $user = User::factory(1)->create([
            'email'  => env('DEFAULT_USER_EMAIL', 'user@example.com'),
            'name' =>  env('DEFAULT_USER_NAME', 'user name'),
            'password' =>  bcrypt(env('DEFAULT_USER_PASSWORD', 'password'),)
        ]);

        $user = User::factory(10)->create();
    }
}
