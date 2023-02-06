<?php

namespace Database\Seeders;

use App\Models\Setting;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class SettingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $setting = Setting::create(
            [
                'phone_1' => '055 555 55 55',
                'adress'=>'Baki',
                'email' => 'admin@gmail.com',
                'fb' => 'www',
                'ins' => 'www' ,  
                'wp' => 'www' , 
                'youtube'=>'www' 
            ]);
    }
}
