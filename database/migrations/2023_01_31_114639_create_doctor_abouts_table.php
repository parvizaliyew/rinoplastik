<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('doctor_abouts', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('ixt');
            $table->string('tel');
            $table->string('email');
            $table->string('xestexana');
            $table->text('tehsil');
            $table->text('is_tecrubesi');
            $table->text('ixtisaslasma');
            $table->text('uzvluk');
            $table->text('xidmetler');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('doctor_abouts');
    }
};
