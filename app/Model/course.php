<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class course extends Model
{

    protected $fillable = [
        'id',
        'name',
        'imgHome',
        'description',
        'vidueCourse',
        'Bigdescription',
        'benfit',
        'price',
        'parent_id',
        'number_hour',
    ];
}
