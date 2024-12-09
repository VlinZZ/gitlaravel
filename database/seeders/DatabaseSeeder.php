<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // Contoh data user
        DB::table('users')->insert([
            'nama' => 'Admin',
            'email' => 'admin@example.com',
            'password' => Hash::make('admin123'), // Hash password di sini
        ]);

        // Tambahkan data lainnya jika perlu
        DB::table('users')->insert([
            'nama' => 'User1',
            'email' => 'user1@example.com',
            'password' => Hash::make('user123'),
        ]);

        // Pastikan 'Valin@gmail.com' ada
        if (!DB::table('users')->where('email', 'Valin@gmail.com')->exists()) {
            DB::table('users')->insert([
                'nama' => 'Valin',
                'email' => 'Valin@gmail.com',
                'password' => Hash::make('112233'),
            ]);
        } else {
            DB::table('users')->where('email', 'Valin@gmail.com')->update([
                'password' => Hash::make('112233'), // Hash password
            ]);
        }
    }
}
