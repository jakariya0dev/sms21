<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class contact_seeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('contact')->insert([
           'email' => 'jhalhadi@mail.com',
           'cell' => '+8801762940480',
           'address' => 'Badargonj, Rangpur',
           'maps' => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d28767.647822502186!2d89.04050525233502!3d25.67275398413349!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39e34b27ec3f4b55%3A0x1f52160fa35ae74b!2sBadarganj%20Shahid%20Minar!5e0!3m2!1sen!2sbd!4v1694008708513!5m2!1sen!2sbd',
            'youtube' => 'https://www.youtube.com',
            'facebook' => 'https://www.facebook.com',
            'linkedin' => 'https://www.linkedin.com',
            'instagram' => 'https://www.instagram.com',
            'twitter' => 'https://www.twitter.com',
            ]);
    }
}
