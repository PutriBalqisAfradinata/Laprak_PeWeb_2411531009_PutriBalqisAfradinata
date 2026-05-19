<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MahasiswaSeeder extends Seeder
{
    public function run(): void
    {
        DB::table('mahasiswas')->insert([
            [
                'nama' => 'Putri Balqis',
                'nim' => '2311521001',
                'jurusan' => 'Informatika',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nama' => 'Ahmad Sumbul',
                'nim' => '2411531005',
                'jurusan' => 'Informatika',
                'created_at' => now(),
                'updated_at' => now(),
            ]
            
        ]);
    }
}