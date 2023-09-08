<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class achievement_seeder extends Seeder
{

    public function run(): void
    {
        DB::table('achievement')->insert(
            [
                [
                    'title' => 'জাতীয় বিশ্ববিদ্যালয়ে চার কোর্সে অন-ক্যাম্পাস অনার্সের ভর্তি কার্যক্রম শেষ ৫ সেপ্টেম্বর',
                    'image' => 'image1.webp',
                ],
                [
                    'title' => 'সৈয়দপুরের এক কলেজ থেকে বুয়েটে ভর্তির সুযোগ পেলেন ১৪ শিক্ষার্থী',
                    'image' => 'image2.webp',
                ],
                [
                    'title' => 'আন্তঃহাউস সাধারণ জ্ঞান ও গণিত অলিম্পিয়াড - ২০২৩',
                    'image' => 'image3.webp',
                ]
            ]
        );
    }
}
