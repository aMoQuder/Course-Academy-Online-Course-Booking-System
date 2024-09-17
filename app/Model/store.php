<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;
class store extends Model
{
      protected $fillable = [
        'id',
        'name',
        'img',
        'description_en',
        'description_ar',
        'price'
    ];
}
