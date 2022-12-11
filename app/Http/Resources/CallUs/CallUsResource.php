<?php

namespace App\Http\Resources\CallUs;

use Illuminate\Http\Resources\Json\JsonResource;

class CallUsResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($request)
    {
        return [
            'title' =>$this->title,
            'phone'=>$this->phone,
            'email'=>$this->email
        ];
    }
}
