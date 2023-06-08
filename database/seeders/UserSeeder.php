<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Models\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // User::create([
        //     'name' => 'Admin',
        //     'email' => 'admin@gmail.com',
        //     'password' => '$2y$10$zzWW52nPZZZhNWemPawgD.4g01GlRN7dWSB1pEz/GeLYGQhC7kcRa',
        // ]);
        $data =[
            [
                'name' => 'Admin',
                'email' => 'admin@gmail.com',
                'password' => '$2y$10$zzWW52nPZZZhNWemPawgD.4g01GlRN7dWSB1pEz/GeLYGQhC7kcRa',
            ],
            [
                'name' => 'Admin',
                'email' => 'admin@gmail.com',
                'password' => '$2y$10$zzWW52nPZZZhNWemPawgD.4g01GlRN7dWSB1pEz/GeLYGQhC7kcRa',
            ],
            ];
        DB::table('users')->insert($data);

    }
}
