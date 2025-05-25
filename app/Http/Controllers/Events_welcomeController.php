<?php

namespace App\Http\Controllers;

use App\Model\course;
use App\Model\Events;
use App\Model\Instructors;
use Illuminate\Http\Request;

class Events_welcomeController extends Controller
{
    function index () {
        $events =Events::orderBy('created_at', 'desc')->paginate(3);
        $courses=course::all();
        return view('event',['event'=>$events,'result'=>$courses]);
    }
}


