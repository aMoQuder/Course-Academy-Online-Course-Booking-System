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
            "name"=>"required|min:5",
            "name"=>"required|min:5",
            "phone"=>"required",
            "your_job"=>"required|min:5|max:255",
            "facebook"=>"required|min:5|max:255",
            "instagram"=>"required|min:5|max:255",
            "linked_in"=>"required|min:5|max:255",
            "img"=>"required|mimes:jpeg,png,gif"
        ];
    }
}
