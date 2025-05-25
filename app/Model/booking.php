<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class booking extends Model
{
    protected $fillable = [
        'name',
        'course',
        'phone',
        'status',
        'book_id'
    ];
}
