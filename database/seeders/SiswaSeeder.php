<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SiswaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // \App\Models\Bebas::insert([
        //     [
        //         "nama_siswa" => "Contoh",
        //         "kelas" => "XII SIJA",
        //         "absen" => 20
        //     ]
        // ]);

        DB::table('tb_bebas')->insert([
            [
                "nama_siswa" => "Contoh 1",
                "kelas" => "XII SIJA",
                "absen" => 20
            ],
            [
                "nama_siswa" => "Contoh 2",
                "kelas" => "XI SIJA",
                "absen" => 20
            ],
            [
                "nama_siswa" => "Contoh 1",
                "kelas" => "XII SIJA",
                "absen" => 20
            ]
        ]);
    }
}
