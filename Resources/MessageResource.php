<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\Resource;
//use Illuminate\Http\Resources\Json\JsonResource;

//class MessageResource extends JsonResource
class MessageResource extends Resource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        return parent::toArray($request);
    }
}
