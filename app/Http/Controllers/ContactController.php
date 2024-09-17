<?php

namespace App\Http\Controllers;

use App\Http\Requests\ContactRequest;
use App\Model\Contact;
use App\Model\Course;
use App\Model\Instructor;
use App\User;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function index()
    {
        $instructors = Instructor::all();
        $courses = Course::all();
        return view('contact', [
            'result' => $courses,
            'instructors' => $instructors
        ]);
    }

    public function save(ContactRequest $request)
    {
        Contact::create([
            "name" => $request->name,
            "email" => $request->email,
            "subject" => $request->subject,
            "message" => $request->message,
        ]);
        return redirect()->back()->with('success', "Created successfully");
    }

    public function delete($id)
    {
        $contact = Contact::findOrFail($id);
        $contact->delete();
        $instruct = instructor::all();
        $user = User::all();
        $table="contact";
        // session()->flash('message', 'contact');

        return view('table', ['hatem' => $user, 'instructores' => $instruct,'ahmed'=>$contact,'table'=>$table]);
    }
}
    
       
