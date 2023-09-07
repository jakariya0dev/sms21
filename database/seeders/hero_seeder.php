<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class hero_seeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('hero_section')->insert([
            'name' => 'বদরগঞ্জ সরকারি কলেজ',
            'year' => 'স্থাপিত: ১৯৯০ সাল',
            'logo' => 'image1.jpg',
        ]);
    }
}
