<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AgendaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $agenda = [
            //tim pmo
            [
                'namaagenda' => 'Open Recruitment',
                'bidang_id' => 1,
                'deskripsi' => 'Open Recruitment merupakan rangkaian proses perekrutan Kepala Divisi dan Staf Tim/Bidang/Biro BEM FSM Undip 2024. Proses perekrutan dilakukan pada awal kepengurusan dengan menetapkan standar dan tahap penyeleksian dalam kualifikasi tertentu.',
                'path_foto_agenda' => '',
            ],
        ];
    }
}
