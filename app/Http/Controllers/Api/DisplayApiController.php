<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Resources\HotelResource;
use App\Hotel;

class DisplayApiController extends Controller {
    public function apiData() {
        $hotels = Hotel::with('rooms')->get();
        return HotelResource::collection($hotels);
    }
}
