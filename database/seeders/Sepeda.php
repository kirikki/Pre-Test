<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class Sepeda extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('sepedas')->insert([
            [
                'model' => 'bmx',
                'harga' => 10,
                'peminjam' => 1,
            ],
            [
                'model' => 'vario',
                'harga' => 230,
                'peminjam' => 1,
            ],
            [
                'model' => 'gunung',
                'harga' => 120,
                'peminjam' => 2,
            ],
        ]);
    }
}
