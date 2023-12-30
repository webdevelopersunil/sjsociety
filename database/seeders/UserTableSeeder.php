<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Seeder;
use App\Models\User;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $password   =   'Deepak.malik@123';

        $user = User::create([
            'name' => 'Deepak Malik',
            'email' => 'deepak.malik@hotmail.com',
            'password' => Hash::make($password),
        ]);
    }
}
