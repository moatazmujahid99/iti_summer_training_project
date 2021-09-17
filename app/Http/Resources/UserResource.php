<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class UserResource extends JsonResource
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
            'id' => $this->id,
            'FirstName' => $this->first_name,
            'LastName' => $this->last_name,
            'email' => $this->email,
            'Gender' => $this->gender,
            'Country' => $this->country,
            'City' => $this->city,
            'description' => $this->description,
            'birthdate' => $this->birthdate
        ];
    }
}
