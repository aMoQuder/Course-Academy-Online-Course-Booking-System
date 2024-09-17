<?php

namespace App\Http\Controllers;

use App\Model\Instructors;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class InstructorsController extends Controller
{
    public function create()
    {
        return view('instructor.create');
    }

    public function store(Request $requestInstructore)
    {

        $validatedData = $requestInstructore->validate([
            'id' => 'required|unique:Instructors|max:11',
            'name' => 'required|min:5|max:255',
            'phone' => 'required',
            'img' => 'required',
            'your_job' => 'required|min:5|max:255',
        ]);
        if ($requestInstructore->hasFile('img')) {
            $image = $requestInstructore->img;
            $imageName = rand(1, 1000) . time() . "." . $image->extension();
            $image->move(public_path('instructore/img/'), $imageName);
        }
        Instructors::create([
            'id' => $requestInstructore->id,
            'name' => $requestInstructore->name,
            'phone' => $requestInstructore->phone,
            'img' => $imageName,
            'your_job' => $requestInstructore->your_job,
            'facebook' => $requestInstructore->facebook,
            'instagram' => $requestInstructore->instagram,
            'linked_in' => $requestInstructore->linked_in,
        ]);
        return redirect()->route('table');
    }

    public function edit($id)
    {
        $instructor = Instructors::findOrFail($id);
        return view('instructor.edit', ["result" => $instructor]);
    }
    public function save(Request $request)
    {
        $old_id = $request->old_id;
        $instructore = Instructors::FindOrfail($old_id);
        if ($old_id != $request->id) {
            $validateData = $request->validate([
                'id' => 'required|unique:instructors|max:11',
            ], ['id.unique' => "please Enter ather id or use old id "]);
        }
        if ($request->hasFile('img')) {
            if (File::exists(public_path('instructore/img/' . $request->img1))) {
                File::delete(public_path('instructore/img/' . $request->img1));
            }
            $image = $request->img;
            $imageName2 = rand(1, 1000) . time() . "." . $image->extension();
            $image->move(public_path('instructore/img/'), $imageName2);
        } else {
            $imageName2 = $request->img1;
        }
        $instructore->update(
            [
                'id' => $request->id,
                'name' => $request->name,
                'phone' => $request->phone,
                'your_job' => $request->your_job,
                'facebook' => $request->facebook,
                'linked_in' => $request->linked_in,
                'instagram' => $request->instagram,
                'img' => $imageName2,
            ]
        );
        return redirect()->route('table')->with("massege", "you edit instuctore now");

    }

    public function delete($id)
    {
        $old_id = $id;
        $instructore = Instructors::findOrFail($old_id);
        if (File::exists(public_path('instructore/img/' . $instructore->img))) {
            File::delete(public_path('instructore/img/' . $instructore->img));
        };
        $instructore->delete();
        return redirect()->route('table')->with("massege", "you delete instructore now");
    }

    public function show($id)
    {
       $instructore= Instructors::findOrFail($id);
       return view('instructor.show',['result'=>$instructore]);
    }
}

