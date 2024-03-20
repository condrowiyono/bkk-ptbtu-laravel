<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class Activities extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('activities')->insert([
            [
                'name' => '12th',
                'description' => 'Masa Konsesi',
            ],
            [
                'name' => '37',
                'description' => 'Jembatan CH',
            ],
            [
                'name' => 'DBFOM',
                'description' => 'Design, Build, Finance, Operate, Maintain, Transfer',
            ],
            [
                'name' => 'AP',
                'description' => 'Availability Payment',
            ]
        ]);
    }
}
