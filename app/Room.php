<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Room extends Model
{
    protected $fillable = [
    		'room_name', 'room_occupancy', 'room_status', 'hotel_id'
    ];
    public function hotel() {
    	return $this->belongsTo(Hotel::class);
    }
}
