<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Support\Str;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class Admin extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name' => 'Admin',
            'email' => 'admin@villatoro.dev',
            'email_verified_at' => now(),
            'password' => bcrypt('admin123.'),
            'remember_token' => Str::random(10),
            'is_admin' => 1,
        ]);
    }
}
