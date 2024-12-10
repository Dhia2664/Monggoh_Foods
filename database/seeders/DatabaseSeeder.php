<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;



class DatabaseSeeder extends Seeder
{
     /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Membuat user admin
        DB::table('users')->insert([
            'name' => 'Admin User',
            'email' => 'admin@example.com',
            'password' => Hash::make('password123'), // pastikan passwordnya di-hash
            'role' => 'admin', // Role admin
            'address' => 'Jl. Admin No. 1, Jakarta', // Alamat dummy untuk admin
            'phone_number' => '081234567890', // Nomor telepon dummy untuk admin
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        // Membuat user biasa
        DB::table('users')->insert([
            'name' => 'Regular User',
            'email' => 'user@example.com',
            'password' => Hash::make('password123'), // password biasa
            'role' => 'user', // Role user
            'address' => 'Jl. User No. 2, Jakarta', // Alamat dummy untuk user
            'phone_number' => '081987654321', // Nomor telepon dummy untuk user
            'created_at' => now(),
            'updated_at' => now(),
        ]);
    }
}