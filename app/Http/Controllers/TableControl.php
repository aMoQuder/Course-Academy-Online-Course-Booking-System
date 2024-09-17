<?php

namespace App\Http\Controllers;

use App\Model\Contact;
use App\Model\course;
use App\Model\Events;
use App\Model\instructor;
use App\Model\store;
use App\User;
use Illuminate\Contracts\Session\Session;
use Illuminate\Http\Request;

class TableControl extends Controller
{
    public function index()
    {
        $instruct = instructor::all();
        $courses = course::all();
        $user = User::all();
        $contact = Contact::all();
        $event = Events::all();
        $table="all";
        return view('table', ['event' => $event, 'ahmed' => $contact, 'hatem' => $user, 'result' => $courses,'table'=>$table, 'instructores' => $instruct]);
    }
    public function indexuser()
    {
        $instruct = instructor::all();
        $user = User::all();
      $table="user";

        return view('table', ['hatem' => $user, 'instructores' => $instruct,'table'=>$table]);
    }
    public function indexcontact()
    {
        $instruct = instructor::all();
        $user = User::all();
        $contact = Contact::all();
        $table="contact";
        // session()->flash('message', 'contact');

        return view('table', ['hatem' => $user, 'instructores' => $instruct,'ahmed'=>$contact,'table'=>$table]);
    }
}
