<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class booking extends Model
{
    protected $fillable = [
        'name',
        'course',
        'phone',
        'nafigation',
        'book_id'
    ];
}
