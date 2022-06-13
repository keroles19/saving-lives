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

        Setting::create(
            [
                'subhead' => 'subhead',
                'content' => 'content',
                'team_name' => 'team_name',
                'title' => 'title',
                'about' => 'about',
                'facebook' => 'facebook',
                'whatsapp'=>'whatsapp',
                'email'=>'email',
                'copyright'=>'copyright',
            ]);
    }
}
