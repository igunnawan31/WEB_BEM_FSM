<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class user extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $user = 
        [
            [
                'name' => 'admin',
                'email' => 'admin@admin.com',
                'password' => bcrypt('riungmandala123'),
            ],
        ];

        
        DB::table('users')->insert($user);
    }
}
