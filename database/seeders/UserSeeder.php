<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('users')->insert([
            [
                'nama' => 'John Doe',
                'umur' => 10,
            ],
            [
                'nama' => 'Doe',
                'umur' => 20,
            ],
            [
                'nama' => 'John',
                'umur' => 14,
            ],
        ]);
    }
}
