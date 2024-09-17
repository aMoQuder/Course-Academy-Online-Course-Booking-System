<?php

namespace App\Http\Controllers;

use App\Model\course;
use App\Model\Events;
use App\Model\instructor;
use App\Model\Instructors;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class EventsController extends Controller
{
    /////////////////////Create///////////////////////
    public function create()
    {
        $instruct = instructor::all();
        $courses = course::all();
        return view('event.create', ['result' => $courses], ['instructores' => $instruct]);
    }
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'id' => 'required|unique:Events|max:11',
            'event_img' => 'required|max:2048|image|',
            'title' => 'required|min:5|max:2000',
            'description' => 'required|min:5|max:2000',
        ]);
        $imageName = "";
        if ($request->hasFile("event_img")) {
            $image = $request->event_img;
            $imageName = rand(1, 1000) . time() . "." . $image->extension();
            $image->move(public_path("Events/img/"), $imageName);
        }


        Events::create([
            "id" => $request->id,
            "event_img" => $imageName,
            "title" => $request->title,

            "description" => $request->description,
        ]);
        return redirect()->route('table');
    }

    /////////////////////Delete///////////////////////
    public function delete($id)
    {
        $events = Events::findOrFail($id);
        if (File::exists(public_path('Events/img/' . $events->event_img))) {
            File::delete(public_path('Events/img/' . $events->event_img));
        }
        $events->delete();
        return redirect()->route('table');
    }



    /////////////////////  Edit///////////////////////
    public function edit($id)
    {
        $instruct = instructor::all();
        $courses = course::all();
        $events = Events::findOrFail($id);
        return view("event.edit", ['events' => $events ,'result' => $courses,'instructores' => $instruct]);
    }



    ///////////////////// Save Edit///////////////////////


    public function save(Request $request)
    {   $imageName = "";
        $old_id = $request->old_id;
        if ($old_id != $request->id) {
            $validateData = $request->validate([
                'id' => 'required|unique:events|max:11',
            ], ['id.unique' => "please Enter ather id or use old id "]);
        }

         if ($request->description == "") {
            $old_description = $request->old_description;
        } else {
            $old_description= $request->description;
        }


        $events = Events::findOrFail($old_id);
      
        if ($request->hasFile('event_img')) {
            if (File::exists(public_path('Events/img/' . $events->event_img))) {
                File::delete(public_path('Events/img/' . $events->event_img));
            }
            $image = $request->event_img;
            $imageName = rand(1, 1000) . time().".".$image->extension();
            $image->move(public_path("Events/img/"), $imageName);
        } else {
            $imageName = $request->old_img;
        }

        $events->update([
            "id" => $request->id,
            "event_img" => $imageName,
            "title" => $request->title,
            "description" => $old_description
        ]);
        return redirect()->route('table')->with("massege","Event successfuly created");
    }

}
