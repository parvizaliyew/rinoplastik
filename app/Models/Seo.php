<?php

namespace App\Models;

use App\Helpers\ITranslatable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Seo extends Model 
{
    use HasFactory;

    protected  $fillable=
    [
      'title',
      'meta_desc',
      'meta_keyword',
      'type',
    ];

}
