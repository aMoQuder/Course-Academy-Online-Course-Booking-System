<?php

namespace App\Http\Controllers;

use App\Model\Contact;
use App\Model\course;
use App\Model\instructor;
use App\User;
use Illuminate\Http\Request;

class HomeController extends Controller
{// خلي بالك الخطوتين دول مهمين لازم تعملهم في  كرييت و ايديت  و شوو علشان دول بيتعرضو في الناف بار داشبورد والا هيطلع ايرور
        // $instruct=instructor::all();

        // $courses=course::all();
        //  لازم تبعت السيجن اللي تحت دة كمان في اي صفحة
// ['result'=>$courses],['instructores'=>$instruct]

    // public function __construct()
    // {
    //     $this->middleware('auth');
    // }
    public function index()
    {
        $instruct=instructor::all();
        $courses=course::all();
        $user=User::all();
        $contact=Contact::all();
        return view('home',['result'=>$courses,'instructores'=>$instruct,'user'=>$user,'contact'=>$contact]);
    }
}
