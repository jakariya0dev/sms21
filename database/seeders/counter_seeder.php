<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class counter_seeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('counter')->insert([
            'student' => '120',
            'teacher' => '20',
            'official' => '25',
            'admin' => '5',
        ]);
    }
}
