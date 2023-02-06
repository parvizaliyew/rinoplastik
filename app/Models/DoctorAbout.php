<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DoctorAbout extends Model
{
    use HasFactory;

    protected  $fillable=
    [
      'img',
      'desc',
      'position',
      'name',
      'ixt',
      'tel',
      'email',
      'xestexana',
      'tehsil',
      'is_tecrubesi',
      'ixtisaslasma',
      'uzvluk',
      'xidmetler',
    ];
}
