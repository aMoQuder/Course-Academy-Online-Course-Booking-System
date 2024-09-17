<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Instructors extends Model
{
    protected $fillable = [
        'id',
        'name',
        'your_job',
        'facebook',
        'linked_in',
        'instagram',
        'img',
        'phone'
    ];
}
