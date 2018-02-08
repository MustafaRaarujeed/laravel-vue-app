<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\Resource;

class HotelResource extends Resource
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
            'hotel_name' => $this->hotel_name,
            'rooms' => RoomResource::collection($this->rooms)
        ];
        // return parent::toArray($request);
    }
}
