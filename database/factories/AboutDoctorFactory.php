<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class AboutDoctorFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'name'=>'.',
            'ixt'=>'.',
            'tel'=>'.',
            'email'=>'.',
            'xestexana'=>'.',
            'tehsil'=>'.',
            'is_tecrubesi'=>'.',
            'ixtisaslasma'=>'.',
            'uzvluk'=>'.',
            'xidmetler'=>'.',
        ];
    }
}
