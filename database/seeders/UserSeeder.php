<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create(
            [
            'name' => 'admin',
            'email' => 'admin@admin.com',
            'password' => Hash::make('kero2020'),
            'phone'=>'01040505060',
            'whatsapp'=>'0105030302',
            'status' => 1,
            'country_id' => 1,
            'is_admin' => 1
        ]);
    }
}
