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
            'title' => 'বদরগঞ্জ সরকারি কলেজ',
            'subtitle' => 'Badarganj Goverment Collge',
            'button1' => 'Badarganj Goverment Collge',
            'button2' => 'Badarganj Goverment Collge',
        ]);
    }
}
