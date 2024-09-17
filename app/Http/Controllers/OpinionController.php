<?php

namespace App\Http\Controllers;

use App\Model\course;
use App\Model\instructor;
use App\User;
use Illuminate\Http\Request;

class OpinionController extends Controller
{ // خلي بالك الخطوتين دول مهمين لازم تعملهم في  كرييت و ايديت  و شوو علشان دول بيتعرضو في الناف بار داشبورد والا هيطلع ايرور
    // $instruct=instructor::all();

    // $courses=course::all();
    //  لازم تبعت السيجن اللي تحت دة كمان في اي صفحة
    // ['result'=>$courses],['instructores'=>$instruct]

    public function index()
    {

        $instruct = instructor::all();
        $courses = course::all();
        $user = User::all();
        return view('opinions', ['result' => $courses, 'user' => $user, 'instructores' => $instruct]);
    }
    public function opinionDashbourd()
    {

        $instruct = instructor::all();
        $courses = course::all();
        $user = User::all();
        return view('opinionDashbourd', ['result' => $courses, 'user' => $user, 'instructores' => $instruct]);
    }
    public function addopiniondash(Request $request)
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

    public function deleteopinion($id)
    {
        $opin_id=$id;
        $opinion="noOpinion";
        $user = User::findOrFail($opin_id);
        $user->opinion = $opinion;
        $user->save();

        return redirect()->back()->with('massege', 'Opinion deleted successfully.');
    }
}
