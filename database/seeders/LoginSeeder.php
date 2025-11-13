<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class LoginSeeder extends Seeder
{
    use WithoutModelEvents;

    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $email = 'admin@techonika.com';
        $password ='123456789';

        User::firstOrCreate(
            ['email' => $email],
            [
                'name' => 'Admin',
                'password' => $password, 
            ]
        );
    }
}
