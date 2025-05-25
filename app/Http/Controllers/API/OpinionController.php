<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\User;
use Illuminate\Http\JsonResponse;
use App\Http\Resources\OpinionResource;

class OpinionController extends Controller {
    // show all User function

    public function index(): JsonResponse {
        $opinion = OpinionResource::collection( User::where( 'opinion', '!=', 'noOpinion' )->get() );
        return  response()->json( [
            'success'=>true,
            'massage'=>'all opinion retrived',
            'date'=>$opinion

        ], 201 );
    }

    // show one User function

    public function show ( $id ): JsonResponse {
        $User = User::Find( $id );
        if ( !$User ) {

            return  response()->json( [
                'success'=>false,
                'massage'=>'this user is not has opinion ',
                'date'=>null,

            ], 404 );
        }
        return  response()->json( [
            'success'=>true,
            'massage'=>'this opinion of user',
            'date'=>new OpinionResource( $User ),

        ], 201 );
    }

    //  this  function is used to add and delete and update opinion of user

    public function ChanageOpinion( Request $request, $id ) {
        $user = User::findOrFail( $id );
        if ( !$user ) {

            return  response()->json( [
                'success'=>false,
                'massage'=>'this opinion  is not found ',
                'date'=>null,

            ], 404 );
        }
        if ( request()->isMethod( 'post' ) || request()->isMethod( 'put' ) ) {

            $request->validate( [
                'opinion' => 'required|string|max:255',
            ] );
            $opinion = $request->input( 'opinion' );

        } else {
            $opinion = 'noOpinion';
        }
        $user->opinion = $opinion;
        $user->save();
        return  response()->json( [
            'success'=>true,
            'massage'=>'the operation is done for this opinion',
            'date'=>new OpinionResource( $user ),

        ], 201 );
    }

}
