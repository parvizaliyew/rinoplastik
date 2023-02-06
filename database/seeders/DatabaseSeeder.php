<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\About;
use App\Models\Product;
use App\Models\DoctorAbout;
use Illuminate\Database\Seeder;
use Database\Seeders\UserSeeder;
use Database\Seeders\AboutSeeder;
use Database\Seeders\SettingSeeder;
use Database\Factories\AboutFactory;
use Database\Factories\AboutDoctorFactory;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {

         About::factory(1)->create();
        DoctorAbout::factory(1)->create();

        
        $this->call([
            UserSeeder::class,
            SettingSeeder::class,

        ]);
    }
}
