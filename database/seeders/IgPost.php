<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class IgPost extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $igpost = [
            [
                'post_foto' => 'lalalala',
                'linkig' => 'https://www.instagram.com/p/DCCArUzSmTB/?utm_source=ig_web_copy_link&igsh=MzRlODBiNWFlZA==',
                'tipepostingan' => '1',
                'bidang_id'=> '2',
                'deskripsi_foto' => 'Percobaan 1',
            ],
        ];

        DB::table('igposts')->insert($igpost);
    }
}
