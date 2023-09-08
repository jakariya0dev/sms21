<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        $this->call([
            about_seeder::class,
            achievement_seeder::class,
            administration_seeder::class,
            counter_seeder::class,
            banner_seeder::class,
            notice_seeder::class,
            contact_seeder::class,
            feature_seeder::class,
            news_event_seeder::class,
            photo_gallery_seeder::class
        ]);
    }
}
