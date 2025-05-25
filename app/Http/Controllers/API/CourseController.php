<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use Illuminate\Http\JsonResponse;
use Illuminate\Support\Facades\File;

use App\Http\Requests\CoursreRequest;
use App\Model\course;
use App\Model\instructor;
use App\Http\Resources\CourseResource;

class CourseController extends Controller {

    // show all course function

    public function index(): JsonResponse {
        $Course = CourseResource::collection( course::orderBy('created_at', 'desc')->paginate(9));
        return  response()->json( [
            'success'=>true,
            'massage'=>'all courses retrived',
            'date'=>$Course

        ], 201 );
    }

    // show one course function

    public function show( $id ): JsonResponse {
        $Course = course::Find( $id ) ;

        if ( !$Course ) {
            return response()->json( [
                'success'=>false,
                'massage'=>' course is not found',
                'date'=>$Course
            ], 404 );
        }
        return response()->json( [
            'success'=>true,
            'massage'=>' course is showed',
            'date'=>$Course

        ], 201 );
    }

    // create course function

    public function Store( CoursreRequest $request ): JsonResponse {
        if ( $request->hasFile( 'imgHome' ) ) {
            $image = $request->imgHome;
            $imageName = rand( 1, 1000 ) . time() . '.' . $image->extension();
            $image->move( public_path( 'Course/img/' ), $imageName );
        }

        if ( $request->hasFile( 'vidueCourse' ) ) {
            $video = $request->vidueCourse;
            $vidueCourse = rand( 1, 1000 ) . time() . '.' . $video->extension();
            $video->move( public_path( 'Course/vidue/' ), $vidueCourse );
        }
        $Course = course::create( [
            'name' => $request->name,
            'price' => $request->price,
            'imgHome' => $imageName,
            'vidueCourse' => $vidueCourse,
            'Bigdescription' => $request->Bigdescription,
            'description' => $request->description,
            'benfit' => $request->benfit,
            'parent_id' => $request->parent_id,
            'number_hour' => $request->number_hour,
        ] );
        return  response()->json( [
            'success'=>true,
            'massage'=>' course is created ',
            'date'=>$Course

        ], 201 );
    }

    // updete course function

    public function update( CoursreRequest $request, $id ): JsonResponse {
        $Course = course::Find( $id );

        if ( !$Course ) {
            return response()->json( [
                'success'=>false,
                'massage'=>' course is not found',
                'date'=>$Course
            ], 404 );
        }
        if ( $request->hasFile( 'imgHome' ) ) {
            if ( File::exists( public_path( 'Course/img/' . $courses->imgHome ) ) ) {
                File::delete( public_path( 'Course/img/' . $courses->imgHome ) );
            }
            ;
            $image = $request->imgHome;
            $imageName = rand( 1, 1000 ) . time().'.'.$image->extension();
            $image->move( public_path( 'Course/img/' ), $imageName1 );
        }
        if ( $request->hasFile( 'vidueCourse' ) ) {
            if ( File::exists( public_path( 'Course/vidue/' . $courses->vidueCourse ) ) ) {
                File::delete( public_path( 'Course/vidue/' . $courses->vidueCourse ) );
            }
            ;
            $vidue = $request->vidueCourse;
            $vidueName = rand( 1, 1000 ) . time() . '.' . $vidue->extension();
            $vidue->move( public_path( 'Course/vidue/' ), $vidueName );
        }

        $Course->update( [
            'name' => $request->name,
            'price' => $request->price,
            'imgHome' => $imageName,
            'vidueCourse' => $vidueCourse,
            'Bigdescription' => $request->Bigdescription,
            'description' => $request->description,
            'benfit' => $request->benfit,
            'parent_id' => $request->parent_id,
            'number_hour' => $request->number_hour,
        ] );
        return  response()->json( [
            'success'=>true,
            'massage'=>' course is update ',
            'date'=>$Course

        ], 201 );
    }

    // delete course function

    public function delete(Request $request, $id ): JsonResponse {
        $Course = course::Find( $id );

        if ( !$Course ) {
            return response()->json( [
                'success'=>false,
                'massage'=>' course is not found',
                'date'=>$Course
            ], 404 );
        }
        // delete image by using library file exist
        if ( !empty ( $courses->imgHome ) && File::exists( public_path( 'Course/img/' . $courses->imgHome ) ) ) {
            File::delete( public_path( 'Course/img/' . $courses->imgHome ) );
        }
        ;

        // delete vidue by using library file exist

        if ( !empty ( $courses->imgHome ) &&  File::exists( public_path( 'Course/vidue/' . $courses->vidueCourse ) ) ) {
            File::delete( public_path( 'Course/vidue/' . $courses->vidueCourse ) );
        }
        ;

        $Course->delete();
        return  response()->json( [
            'success'=>true,
            'massage'=>' course is deleted ',
            'date'=>null

        ], 201 );
    }
}

