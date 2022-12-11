<?php

namespace App\Http\Resources\Orders;

use Illuminate\Http\Resources\Json\JsonResource;

class OrdersResource extends JsonResource
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
//            'user_id'=>$this->user_id,
//            'services_id'=>$this->services_id,
            'history' =>$this->history,
            'time' =>$this->time,
            'note' =>$this->note,
            'phone' =>$this->phone,

        ];
    }
}
