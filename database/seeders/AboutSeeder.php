<?php

namespace Database\Seeders;

use App\Models\About;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class AboutSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $about = About::create(
            [
                'name' => '.',
                'position' => '.',
                'desc' => '.',
                'img' => $this->faker()->image(),
                 
            ]);
    }
}
