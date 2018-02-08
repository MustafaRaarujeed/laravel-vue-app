<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Hotel extends Model
{
    protected $fillable = [
    	'hotel_name', 'hotel_location', 'hotel_rating', 'hotel_available',
    	'hotel_currency', 'hotel_starting_price', 'hotel_isRecommended' ];
    public function rooms() {
    	return $this->hasMany(Room::class);
    }
    public function scopeNameAsc($query) {
    	return $query->orderBy('hotel_name', 'ASC');
    }
    public function scopeNameDes($query) {
    	return $query->orderBy('hotel_name', 'DESC');
    }
	public function scopeAvailable($query) {
		return $query->orderBy('hotel_available', 'YES');
	}
	public function scopeRating($query) {
		return $query->orderBy('hotel_rating', 'DESC');
	}
}
