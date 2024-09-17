<?php

namespace App\Http\Controllers;
use App\Model\course;
use App\Model\instructor;
use App\User;
use Illuminate\Http\Request;

class AboutController extends Controller
{
    public function index()
    {

        $instruct = instructor::all();
        $courses = course::all();
        $user = User::all();
        return view('About', ['result' => $courses, 'user' => $user, 'instructores' => $instruct]);
    }
    public function addopinion(Request $request)
    {
        $id = $request->id;
        $request->validate([
            'opinion' => 'required|string|max:255',
        ]);
        $user = User::findOrFail($id);
        $user->opinion = $request->input('opinion');
        $user->save();

        return redirect()->back()->with('massege', 'Opinion updated successfully.');
    }

    public function DashbourdAbout(){
        $instruct=instructor::all();
        $courses=course::all();
        return view('aboutDashbourd',['result'=>$courses],['instructores'=>$instruct]);
    }
}
