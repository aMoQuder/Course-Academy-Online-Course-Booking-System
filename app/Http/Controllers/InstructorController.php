<?php

namespace App\Http\Controllers;

use App\Http\Requests\InstructoreRequest;
use App\Model\course;
use App\Model\instructor;
use Facade\FlareClient\Stacktrace\File as StacktraceFile;
use Illuminate\Auth\Events\Validated;
use Illuminate\Http\File as HttpFile;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File as FacadesFile;
use Illuminate\Validation\ValidationData;
use League\Flysystem\File;

class InstructorController extends Controller
{  // --------create operation----
    public function create(Request $request)
    {  $instruct=instructor::all();

        $courses=course::all();
        return view('Instructore.create',['result'=>$courses],['instructores'=>$instruct]);
    }
    public function store(InstructoreRequest $requestInstructore)
    {

        if($requestInstructore->hasFile('img')){
            $image=$requestInstructore->img;
            $imageName=rand(1,1000).time().".".$image->extension();
            $image->move(public_path('instructore/img/'),$imageName);
        }
        instructor::create([
            'id' => $requestInstructore->id,
            'name' => $requestInstructore->name,
            'phone' => $requestInstructore->phone,
            'img' => $imageName,
            'your_job' => $requestInstructore->your_job,
            'facebook' => $requestInstructore->facebook,
            'instagram' => $requestInstructore->instagram,
            'linked_in' => $requestInstructore->linked_in,
        ]);
        return redirect()->route('table')->with("massege", "you add new instructore");
    }
// --------------------------------------------------
  // --------delete operation----
    public function delet(Request $request)
    {
        $old_id=$request->old_id;
        $instructore=instructor::FindOrfail($old_id);
        if(FacadesFile::exists(public_path('instructore/img/'.$instructore->img))){
            FacadesFile::delete(public_path('instructore/img/'.$instructore->img));
        };
        $instructore->delete();
        return redirect()->route('table')->with("massege", "you delete instructore now");
    }
// --------------------------------------------------
      // --------show operation----
    public function show(Request $request)
    {

        $courses=course::all();
        $old_id = $request->id;
        $instructore = instructor::FindOrfail($old_id);
        $instruct=instructor::all();
         return view('Instructore.show',["result"=>$instructore,'instructores'=>$instruct],['result'=>$courses]);
    }
    // --------------------------------------------------

    // --------editing operation----
    public function updateIn($id)
    {

        $courses=course::all();
        $old_id = $id;
        $instructore = instructor::FindOrfail($old_id);
        $instruct=instructor::all();
         return view('Instructore.update',["result"=>$instructore,'instructores'=>$instruct],['result'=>$courses]);
    }

    public function save(Request $request)
    {
        $old_id = $request->old_id;
        $instructore = instructor::FindOrfail($old_id);
        if($old_id!=$request->id){
            $validateData=$request->validate([
               'id' => 'required|unique:instructors|max:11',
            ],['id.unique'=>"please Enter ather id or use old id "]);
        }
        if($request->hasFile('img')){
            if(FacadesFile::exists(public_path('instructore/img/'.$request->img1))){
                FacadesFile::delete(public_path('instructore/img/'.$request->img1));
            };
            $image=$request->img;
            $imageName2=rand(1,1000).time().".".$image->extension();
            $image->move(public_path('instructore/img/'),$imageName2);
        }else{
            $imageName2=$request->img1;
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
                'img' =>$imageName2,
            ]
        );
        return redirect()->route('table')->with("massege", "you edit instuctore now");

    }
// --------------------------------------------------
}
