<?php

namespace App\Http\Controllers;

use App\Model\course;
use App\Model\Events;
use App\Model\instructor;
use Illuminate\Http\Request;

class EventController extends Controller
{
     public function create()

    {
        $instruct=instructor::all();
        $courses=course::all();
        $event = Events::all();
        return view('event',['event'=>$event,'result'=>$courses,'instructores'=>$instruct]);
    }
}
