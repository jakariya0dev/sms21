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
            hero_seeder::class,
            notice_seeder::class,
            contact_seeder::class,
        ]);
    }
}
