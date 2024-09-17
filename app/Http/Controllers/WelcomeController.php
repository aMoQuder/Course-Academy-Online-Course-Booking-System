<?php

namespace App\Http\Controllers;

use App\Model\course;
use App\Model\Events;
use App\Model\instructor;
use App\Model\store;
use Illuminate\Http\Request;
class WelcomeController extends Controller
{
    public function index(){
        $instruct=instructor::all();
        $courses=course::all();
        $events=Events::all();
        return view('welcome',['event'=>$events,'result'=>$courses,'instructores'=>$instruct]);
    }
}
