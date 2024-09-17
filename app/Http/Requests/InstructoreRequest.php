<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class InstructoreRequest extends FormRequest
{

    public function authorize()
    {
        return true;
    }


    public function rules()
    {
        return [
            'id' => 'required|unique:instructors|max:11',
            "name"=>"required|min:5",
            "your_job"=>"required|min:5",
            "img"=>"required|mimes:jpeg,png,gif"
        ];
    }
}
