<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rules\Password;

class UserRequest extends FormRequest {
    /**
    * Determine if the user is authorized to make this request.
    *
    * @return bool
    */

    public function authorize() {
        return true;
    }

    public function rules() {
        return [
            'name' => 'required|min:5|max:255',
            'email' => 'required|min:5|max:255',
            'status' => 'required',
            'role' => 'required ',
            'password' => [
                'required',
                'confirmed',
                Password::min( 8 )
                ->mixedCase()
                ->letters()
                ->numbers()
                ->symbols()
                ->uncompromised(),
            ],

        ];
    }

}
