<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class banner_seeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('banner')->insert([
            'title' => 'বদরগঞ্জ সরকারি কলেজ',
            'subtitle' => 'স্থাপিত: ১৯৯০ সাল',
            'logo' => 'image1.jpg',
            'banner_bg' => 'image1.jpg',
        ]);
    }
}
