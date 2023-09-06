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
            'caption1' => 'শিক্ষার্থী',
            'caption2' => 'শিক্ষক',
            'caption3' => 'কর্মচারী',
            'caption4' => 'শিক্ষক শিক্ষার্থীর অনুপাত',
            'value1' => '120',
            'value2' => '20',
            'value3' => '25',
            'value4' => '5',
        ]);
    }
}
