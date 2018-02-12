<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Room;
use App\Hotel;

class DisplayController extends Controller {
    public function index() {
        return view('home');
    }

    public function dataIndex() { 
        return view('upload');
    }

    public function storeData(Request $request) {
        // Validation of Request
        $this->validate($request, [
            'data' => 'required',
        ]);
        $fileExtension = $request->file('data')->getClientOriginalExtension();
        if($fileExtension == config("app.fileExtension")) {
            $file = $request->file('data');
            return $this->processUpload($file);
        } else {
            // return with Errors
            return redirect()->back();
        }
        // Extract data form file using simplexml_load_file
        // Save data to the database in Hotel and Room tables
        // Return to home page after successful upload and extract
    }

    private function processUpload($file) {
        // get path name
        $filePathName = simplexml_load_file($file->getPathName());
        foreach($filePathName->HOTELS as $keyHotels => $valueHotel){
    		foreach($valueHotel as $data => $rooms){
		    	$hotelData = new Hotel();
				$hotelData->hotel_name = $rooms->attributes()->HOTEL_NAME;
				$hotelData->hotel_location = $rooms->attributes()->LOCATION;
				$hotelData->hotel_rating = $rooms->attributes()->RATING;
				$hotelData->hotel_available = $rooms->attributes()->AVAILABLE;
				$hotelData->hotel_currency = $rooms->attributes()->CURRENCY;
				$hotelData->hotel_starting_price = $rooms->attributes()->STARTING_PRICE;
				$hotelData->hotel_isRecommended = $rooms->attributes()->ISRECOMMENDEDPRODUCT;
				$hotelData->save();
	    		foreach($rooms as $keyRoom => $valueRoom) {
	    			foreach($valueRoom as $data1 => $room) {
				    	$roomData = new Room();
						$roomData->room_name = $room->ROOM_NAME;
						$roomData->room_occupancy = $room->OCCUPANCY;
						$roomData->room_status = $room->ROOM_STATUS;
						$roomData->hotel_id = $hotelData->id;
						$roomData->save();
	    			}
	    		}
    		}
        }
        return redirect('/');
    }
}
