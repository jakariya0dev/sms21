<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class notice_seeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('notice')->insert(
            [
                [
                    'title' => 'ঈদুল আজহা উপলক্ষ্যে কলেজের ছুটি ঘোষণা',
                    'description' => 'ঈদুল আজহা উপলক্ষ্যে কলেজের ছুটি ঘোষণা ঈদুল আজহা উপলক্ষ্যে কলেজের ছুটি ঘোষণা ঈদুল আজহা উপলক্ষ্যে কলেজের ছুটি ঘোষণা',
                    'file' => 'notice1',
                ],
                [
                    'title' => 'ঈদুল ফিতর উপলক্ষ্যে কলেজের ছুটি ঘোষণা',
                    'description' => 'ঈদুল আজহা উপলক্ষ্যে কলেজের ছুটি ঘোষণা ঈদুল আজহা উপলক্ষ্যে কলেজের ছুটি ঘোষণা ঈদুল আজহা উপলক্ষ্যে কলেজের ছুটি ঘোষণা',
                    'file' => 'notice1',
                ],
                [
                    'title' => 'স্বাধীনতা দিবসে কলেজের ছুটি ঘোষণা',
                    'description' => 'ঈদুল আজহা উপলক্ষ্যে কলেজের ছুটি ঘোষণা ঈদুল আজহা উপলক্ষ্যে কলেজের ছুটি ঘোষণা ঈদুল আজহা উপলক্ষ্যে কলেজের ছুটি ঘোষণা',
                    'file' => 'notice1',
                ]
            ]
        );
    }
}
