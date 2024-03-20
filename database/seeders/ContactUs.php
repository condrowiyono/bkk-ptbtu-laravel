<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ContactUs extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('contact_us')->insert([
            [
                'name' => 'Sample Name',
                'email' => 'sample@mail.com',
                'phone' => '08998816627',
                'message' => 'Sample Message'
            ],
        ]);
    }
}
