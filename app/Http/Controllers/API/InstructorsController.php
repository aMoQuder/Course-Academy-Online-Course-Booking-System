<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use Illuminate\Http\JsonResponse;
use Illuminate\Support\Facades\File;

use App\Http\Requests\InstructoreRequest;
use App\Model\instructor;
use App\Http\Resources\InstructoreResource;

class InstructorsController extends Controller {

    // show all instructor function

    public function index(): JsonResponse {
        $instructore = InstructoreResource::collection( instructor::orderBy( 'created_at', 'desc' )->paginate( 9 ) );
        return  response()->json( [
            'success'=>true,
            'massage'=>'all Instructore retrived',
            'date'=>$instructore

        ], 201 );
    }

    // show one instructore function

    public function show( $id ): JsonResponse {
        $instructore = instructor::Find( $id ) ;

        if ( !$instructore ) {
            return response()->json( [
                'success'=>false,
                'massage'=>' instructore is not found',
                'date'=>$instructore
            ], 404 );
        }
        return response()->json( [
            'success'=>true,
            'massage'=>' instructore is showed',
            'date'=>$instructore

        ], 201 );
    }

    // create instructore function

    public function Store(InstructoreRequest  $request ): JsonResponse {
        if ( $request->hasFile( 'img' ) ) {
            $image = $request->img;
            $imageName = rand( 1, 1000 ) . time() . '.' . $image->extension();
            $image->move( public_path( 'instructore/img/' ), $imageName );
        }

        $instructore = instructor::create( [
            'name' => $request->name,
            'phone' => $request->phone,
            'img' => $imageName,
            'your_job' => $request->your_job,
            'facebook' => $request->facebook,
            'instagram' => $request->instagram,
            'linked_in' => $request->linked_in,
        ] );
        return  response()->json( [
            'success'=>true,
            'massage'=>' instructore is created ',
            'date'=>$instructore

        ], 201 );
    }

    // updete instructore function

    public function update( InstructoreRequest  $request , $id ): JsonResponse {
        $instructore = instructor::Find( $id );

        if ( !$instructore ) {
            return response()->json( [
                'success'=>false,
                'massage'=>' instructore is not found',
                'date'=>$instructore
            ], 404 );
        }
        if ( $request->hasFile( 'img' ) ) {
            if ( File::exists( public_path( 'instructore/img/' . $instructores->img ) ) ) {
                File::delete( public_path( 'instructore/img/' . $instructores->img ) );
            }
            ;
            $image = $request->img;
            $imageName = rand( 1, 1000 ) . time().'.'.$image->extension();
            $image->move( public_path( 'instructore/img/' ), $imageName1 );
        }


        $instructore->update( [
            'name' => $request->name,
            'phone' => $request->phone,
            'img' => $imageName,
            'your_job' => $request->your_job,
            'facebook' => $request->facebook,
            'instagram' => $request->instagram,
            'linked_in' => $request->linked_in,
        ] );
        return  response()->json( [
            'success'=>true,
            'massage'=>' instructore is update ',
            'date'=>$instructore

        ], 201 );
    }

    // delete instructore function

    public function delete( Request $request, $id ): JsonResponse {
        $instructore = instructor::Find( $id );

        if ( !$instructore ) {
            return response()->json( [
                'success'=>false,
                'massage'=>' instructore is not found',
                'date'=>$instructore
            ], 404 );
        }
        // delete image by using library file exist
        if ( !empty ( $instructore->img ) && File::exists( public_path( 'instructore/img/' . $instructore->img ) ) ) {
            File::delete( public_path( 'instructore/img/' . $instructore->img ) );
        }
        ;

        $instructore->delete();
        return  response()->json( [
            'success'=>true,
            'massage'=>' instructore is deleted ',
            'date'=>null

        ], 201 );
    }
}
