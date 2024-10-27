<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class anggota extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $anggota = [
            [
                'nama' =>'Hana Tsabita', 
                'bidang_id' => 13, 
                'jabatan' => 'Ketua Badan Eksekutif Mahasiswa FSM'
            ],
        ];

        DB::table('anggotas')->insert($anggota);
    }
}
