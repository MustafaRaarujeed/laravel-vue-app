<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\Resource;

class RoomResource extends Resource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request) {
        return [
            'id' => $this->id,
            'room_name' => $this->room_name,
        ];
        // return parent::toArray($request);
    }
}
