<?php

namespace App\Http\Controllers;

use App\Http\Requests\CoursreRequest;
use App\Model\course;
use App\Model\instructor;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Storage;

class CourseController extends Controller
{

    // --------edit operation----
    public function edit($id)
    {
        $old_id = $id;
        $courses = course::FindOrfail($old_id);
        $instructores = instructor::all();
        return view('course.edit', ["result" => $courses], ['instructores' => $instructores]);
    }
    public function save(Request $request)
    {
        $old_id = $request->old_id;


        // ------------------------------------------------------------------------------------
        //  قيمة ثابتة في حالة المستخدم لم يدخل قيمة في وصف في الصفحة الرئسية


        // defulr value of description  in home bage in case user doesn't give any value
        if ($request->description_home == "") {
            $old_descriptionHome = $request->old_descriptionHome;
        } else {
            $old_descriptionHome= $request->description_home;
        }


        //  قيمة ثابتة في حالة المستخدم لم يدخل قيمة في وصف في الصفحة الذي تعرض في صفحة الكورس
        if ($request->description_course == "") {
            $old_descriptionCourse = $request->old_descriptionCourse;
        } else {
            $old_descriptionCourse =  $request->description_course;
        }



        // defulr value of benfit in course bage in case user doesn't give any value
        if ($request->benfit == "") {
            $old_benfit = $request->old_benfit;
        } else {
            $old_benfit =  $request->benfit;
        }

        // ------------------------------------------------------------------------------------------
        $courses = course::FindOrfail($old_id);
        if ($old_id != $request->id) {
            $validateData = $request->validate([
                'id' => 'required|unique:courses|max:11',
            ], ['id.unique' => "please Enter ather id or use old id "]);
        }
        if ($request->hasFile('imgHome')) {
            if (File::exists(public_path('Course/img/' . $courses->imgHome))) {
                File::delete(public_path('Course/img/' . $courses->imgHome));
            };
            $image = $request->imgHome;
            $imageName1 = rand(1, 1000) . time().".".$image->extension();
            $image->move(public_path("Course/img/"), $imageName1);
        } else {
            $imageName1 = $request->old_imgHome;
        }
        if ($request->hasFile('vidueCourse')) {
            if (File::exists(public_path('Course/vidue/' . $courses->vidueCourse))) {
                File::delete(public_path('Course/vidue/' . $courses->vidueCourse));
            };
            $vidue = $request->vidueCourse;
            $vidueName = rand(1, 1000) . time() . "." . $vidue->extension();
            $vidue->move(public_path('Course/vidue/'), $vidueName);
        } else {
            $vidueName = $request->old_vidueCourse;
        }
        $courses->update(
            [
                'id' => $request->id,
                'name' => $request->name,
                'imgHome' => $imageName1,
                'description' => $old_descriptionHome,
                'vidueCourse' => $vidueName,
                'Bigdescription' => $old_descriptionCourse,
                'benfit' => $old_benfit,
                'parent_id' => $request->parent_id,
                'price' => $request->price,
                'number_hour' => $request->number_hour,
            ]
        );
        return redirect()->route('table')->with("massege", "you edit course now");
    }
    // --------------------------------------------------

    // --------delete operation----
    public function delet(Request $request)
    {
        $old_id = $request->old_id;
        $courses = course::FindOrfail($old_id);
        if (File::exists(public_path('Course/vidue/' . $courses->vidueCourse))) {
            File::delete(public_path('Course/vidue/' . $courses->vidueCourse));
        };
        if (File::exists(public_path('Course/img/' . $courses->imgHome))) {
            File::delete(public_path('Course/img/' . $courses->imgHome));
        };
        $courses->delete();
        return redirect()->route('table')->with("massege", "you delete course now");
    }
    // --------------------------------------------------

    // --------create operation----
    public function create()
    {
        $instructores = instructor::all();
        return view('course.create', ['instructores' => $instructores]);
    }



    public function store(CoursreRequest $request)
    {
        if ($request->hasFile('imgHome')) {
            $image = $request->imgHome;
            $imageName = rand(1, 1000) . time() . "." . $image->extension();
            $image->move(public_path('Course/img/'), $imageName);
        }

        if ($request->hasFile('vidueCourse')) {
            $video = $request->vidueCourse;
            $vidueCourse = rand(1, 1000) . time() . "." . $video->extension();
            $video->move(public_path('Course/vidue/'), $vidueCourse);
        }
        course::create([
            'id' => $request->id,
            'name' => $request->name,
            'price' => $request->price,
            'imgHome' => $imageName,
            'vidueCourse' => $vidueCourse,
            'Bigdescription' => $request->Bigdescription,
            'description' => $request->description,
            'benfit' => $request->benfit,
            'parent_id' => $request->parent_id,
            'number_hour' => $request->number_hour,
        ]);

        return redirect()->route('table')->with('massege', 'Course created successfully!');
    }

    // --------------------------------------------------

    // --------show operation----
    public function show(Request $request)
    {
        $id = $request->id;
        $courses = course::findOrFail($id);
        $instructores = instructor::all();

        return view('course.show', ["result" => $courses], ['instructores' => $instructores]);
    }
    // --------------------------------------------------

}
