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
        dd($file);
    }
}
