<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class InstructoreResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        return([
            'id' => $this->id,
            'name' => $this->name,
            'price' => $this->price,
            'img' => $this->img,
            'your_job' => $this->your_job,
            'facebook' => $this->facebook,
            'instagram' => $this->instagram,
            'linked_in' => $this->linked_in,

        ]);
    }
}
