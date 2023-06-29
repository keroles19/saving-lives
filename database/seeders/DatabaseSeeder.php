<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call([
            UserSeeder::class,
            SettingSeeder::class,
            ArticleSeeder::class,
            HospitalSeeder::class,
            DonorSeeder::class,
            ReceiverSeeder::class
        ]);

    }
}
