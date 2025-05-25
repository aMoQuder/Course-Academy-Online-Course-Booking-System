<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class CourseResource extends JsonResource
{


    public function toArray($request)
    {
        return ([

            'id' => $this->id,
            'name' => $this->name,
            'price' => $this->price,
            'imgHome' => $this->imgHome,
            'vidueCourse' => $this->vidueCourse,
            'Bigdescription' => $this->Bigdescription,
            'description' => $this->description,
            'benfit' => $this->benfit,
            'parent_id' => $this->parent_id,
            'number_hour' => $this->number_hour,
        ]);
    }
}
