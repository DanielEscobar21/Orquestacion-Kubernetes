<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class SubjectResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        return [
            'id'=> $this->id,
            'semester' => $this->semester,
            'name' => $this->name,
            'credits' =>$this->credits,
            'code' => $this-> code
        ];
    }

    public function with($request)
    {
        return [
            'success' => true,
        ];
    }
}
