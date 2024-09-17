<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CoursreRequest extends FormRequest
{

    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
                "id"=> "required|unique:courses|max:11",
                "name" => "required|min:5",
                "description" => "required|min:5|max:2000",
                "number_hour"=>"required",
                "imgHome" => "required|mimes:jpeg,gif,png",
                "Bigdescription"=>"required|min:5|max:2000",
                "vidueCourse" =>"required",
                "benfit"=>"required|min:5|max:2000",
        ];
    }
}
