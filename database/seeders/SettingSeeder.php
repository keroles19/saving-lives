<?php

namespace Database\Seeders;

use App\Models\Setting;
use Illuminate\Database\Seeder;

class SettingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //   'subhead','content', 'team_name',  'title', 'about','facebook', 'whatsapp', 'email', 'copyright'
        Setting::factory()->create();
    }
}
