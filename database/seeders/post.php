<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

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
                'password' => 'riungmandala123',
            ],
        ];
    }
}
