<?php

namespace App\Http\Controllers;

use App\Model\course;
use App\Model\instructor;
use Illuminate\Http\Request;

class AnycourseController extends Controller
{
    public function index($id){


        $courses=course::all();
        $instructores=instructor::all();
        return view('anycourse',['result'=>$courses ,'old_id'=>$id,'instructores'=>$instructores]);
    }
    public function indexall(Request $request){

        $id =$request->id;
        $courses=course::all();
        return view('courses',['result'=>$courses ,'old_id'=>$id]);
    }
    public function profile($id){

        $courses=course::all();
        $instruct=instructor::all();
        return view('profile',['result'=>$courses ,'instructores'=>$instruct,'old_id'=>$id]);
    }
}
