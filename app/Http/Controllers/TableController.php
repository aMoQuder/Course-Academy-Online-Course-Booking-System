<?php

namespace App\Http\Controllers;

use App\Model\Contact;
use App\Model\course;
use App\Model\Events;
use App\Model\instructor;
use App\Model\Instructors;
use App\User;
use Illuminate\Http\Request;

class TableController extends Controller
{
    public function index()
    {
        $user = User::all();
        $contact = Contact::all();
        $instruct = Instructors::all();
        $event =Events::all();
        return view('table', ['ahmed' => $contact, 'instructor' => $instruct ,"event" =>$event ]);
    }


    public function delete($id)
    {
        $users = User::findOrFail($id);
        $users->delete();
        return redirect()->route('table')->with('message', 'Deleted Successfully');
    }
    public function create()
    {
        $instruct=instructor::all();

        $courses=course::all();
        return view('Users.create',['result'=>$courses],['instructores'=>$instruct]);
    }
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|min:5|max:255',
            'email' => 'required|min:5|max:255',
            'password' => 'required|min:5|max:255'
        ]);

        User::create([
            "name" => $request->name,
            "email" => $request->email,
            "role" => $request->role,
            "status" => $request->status,
            "password" => $request->password,

        ]);
        return redirect()->route('table')->with('message', 'Created Successfully');
    }
    public function edit($id)
    {
        $instruct=instructor::all();

        $courses=course::all();
        $user = User::findOrFail($id);
        return view('Users.edit', ['iprahim' => $user,'result'=>$courses,'instructores'=>$instruct]);
    }


    public function save(Request $request)
    {
        $old_id = $request->old_id;
        $user = User::findOrFail($old_id);

        $validatedData = $request->validate([
            'id' => 'required|max:11',
            'name' => 'required|min:5|max:255',
            'email' => 'required|min:5|max:255',
            'password' => 'required|min:5|max:255'
        ]);
        $user->update([
            "id" => $request->id,
            "name" => $request->name,
            "email" => $request->email,
            "role" => $request->role,
            "status" => $request->status,
            "opinion" => $request->opinion,
            "password" => $request->password,
        ]);

        return redirect()->route('table');
    }
}
