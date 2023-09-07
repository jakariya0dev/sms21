<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class news_event_seeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('news_event')->insert(
            [
                [
                    'title' => 'আন্তঃহাউস বিজ্ঞান মেলা ২০২৩ অনুষ্ঠিত',
                    'description' => 'নতুনকে জানার আগ্রহ এবং প্রাত্যহিক প্রয়োজনের তাগিদেই মূলত বিজ্ঞানের উদ্ভব। কোমলমতি শিক্ষার্থীদের মাঝে বিজ্ঞান চর্চার আগ্রহ সৃষ্টির লক্ষ্যে ৩০ আগস্ট ২০২৩ তারিখ ভাটিয়ারি ক্যান্টনমেন্ট স্কুল অ্যান্ড কলেজে আন্তঃ হাউস বিজ্ঞান মেলা-২০২৩ আয়োজন করা হয়। প্রধান অতিথি হিসেবে মেলা পরিদর্শন করেন ডেপুটি কমান্ড্যান্ট, বাংলাদেশ মিলিটারি একাডেমি ও ভাটিয়ারি ক্যান্টনমেন্ট স্কুল অ্যান্ড কলেজের পরিচালনা পর্ষদের সম্মানিত সভাপতি ব্রিগেডিয়ার জেনারেল আবুল হাসনাত মোহাম্মদ তারিক, এনডিইউ, এএফডব্লিউসি, পিএসসি। প্রতিষ্ঠানের অধ্যক্ষ মেজর মোঃ নাসির উদ্দিন মাহমুদ, এইসি এর দিকনির্দেশনায় এবং উপাধ্যক্ষ নাহিদ শামীম রূপা এর তত্ত্বাবধানে, আবু সাইদ আরেফিন স্যারের ব্যবস্থাপনায় বিজ্ঞান বিষয়ের শিক্ষকবৃন্দ ও হাউস মাস্টারসহ সংশ্লিষ্ট সকল শিক্ষকের সহযোগিতায় উল্লেখযোগ্য সংখ্যক শিক্ষার্থী মেলায় প্রজেক্ট উপস্থাপন করে। মেলার উদ্বোধন শেষে সকল শিক্ষার্থী প্রদর্শনীসমূহ উপভোগ করে।',
                    'image' => 'image1.jpeg',
                ],
                [
                    'title' => 'বাংলা ও ইংরেজি আবৃত্তি প্রতিযোগিতা ২০২৩',
                    'description' => 'আবৃত্তির নিজস্ব ছন্দ, তাল/লয় এবং বিশেষ ‘ঢং’ রয়েছে। যা একজন শিক্ষার্থীর বাচন ভঙ্গি তথা ব্যক্তিত্বের বিকাশে অত্যন্ত সহায়ক ভূমিকা রাখে। তাই আবৃত্তির গুরুত্ব অনুধাবন করে ভাটিয়ারি ক্যান্টনমেন্ট স্কুল অ্যান্ড কলেজ ব্যাপক উৎসাহ উদ্দীপনার মধ্য দিয়ে কলেজ অডিটোরিয়ামে “বার্ষিক আন্তঃ হাউজ বাংলা ও ইংরেজি আবৃত্তি প্রতিযোগিতা-২০২৩” এর আয়োজন করে। এতে ছান্দসিক ভাষায় বিভিন্ন শ্রেণির শিক্ষার্থীরা তাদের অব্যক্ত অভিব্যক্তি প্রকাশ করে। প্রতিযোগিতার শেষে মানসম্মত ভাষা ব্যবহার করতে উৎসাহিত করার পাশাপাশি আবৃত্তির উপর গুরুত্বারোপ করা হয়।',
                    'image' => 'image2.jpeg',
                ],
                [
                    'title' => 'Tree Plantation 2023',
                    'description' => 'Brig Gen Abul Hasnat Mohammad Tariq, afwc, psc, acting Commandant of Bangladesh Military Academy and Chairman of Bhatiary Cantonment School and College paid a kind visit to Bhatiary Cantonment School and College and joyfully joined a general conference with teachers on  16th July, 2023. He was received with flowers by the Principal and the Vice Principal of the institution. After arriving at the institution, he first planted a tree sapling and visited the institutions garden.Later,he attended the meeting where he delivered  valuable instructions for the teachers and exchanged his views regarding academic development.In his speech,he laid emphasis on using reference books outside of textbooks, special attention to weak students, regular contact with parents, increasing the knowledge of teachers, quality and life oriented education. He also formulated some important guidelines on moral teaching of the students and professional development of faculty members.He concluded the meeting by wishing for the further development of the institution.',
                    'image' => 'image3.jpeg',
                ],
                [
                    'title' => 'আন্তঃহাউস সাধারণ জ্ঞান ও গণিত অলিম্পিয়াড -২০২৩',
                    'description' => 'মানসম্মত আধুনিক শিক্ষা এবং শিক্ষার্থীদের মেধাবিকাশের লক্ষ্যে ভাটিয়ারি ক্যান্টনমেন্ট স্কুল অ্যান্ড কলেজে অনুষ্ঠিত হয় "আন্তঃহাউস সাধারণ জ্ঞান ও গণিত অলিম্পিয়াড -২০২৩"। বরাবরের মতো এবারও প্রতি হাউস থেকে  দশজন করে উভয় গ্রুপে সর্বমোট আশি জন শিক্ষার্থীর স্বতঃস্ফূর্ত অংশগ্রহণে মুখরিত ছিল আজকের বিসিএসসি প্রাঙ্গণ। একদিকে যেমন মেধা এবং কৌশলের দ্রুততম প্রয়োগে ব্যতিব্যস্ত গণিত অলিম্পিয়াড প্রতিযোগিরা ,অন্যদিকে তেমনি সাধারণ জ্ঞান এর মহাসমুদ্র থেকে সঠিক উত্তরের খোঁজে ব্যস্ত ছিল সাধারণ জ্ঞান প্রতিযোগীগণ। হল পরিদর্শনে গিয়ে সঠিক জ্ঞান অন্বেষার মাধ্যমে দেশ ও জাতি গঠনে সবাইকে উদ্বুদ্ধ হতে পরামর্শ দেন প্রতিষ্ঠানের অধ্যক্ষ মেজর নাসির উদ্দিন মাহমুদ, এইসি।',
                    'image' => 'image3.jpeg',
                ]
            ]
        );
    }
}
