## XML Data Upload with Laravel and VueJs

A simple web application where a specific format of xml data is being uploaded and
the extracted data is being displayed using VueJs.

## XML Data Extractor
* Check ``` app\Http\Controllers\DisplayController.php ``` and modify ``` processUpload() ``` method to suit your xml data structure
* Check ``` app\Http\Resources\HotelResource.php ``` and ``` app\Http\Resources\RoomResource.php ``` and modify the returned array of objects based on the xml structure, the calling controller of ``` HotelResource.php ``` can be found in ``` app\Http\Controllers\Api\DisplayApiController.php ```
* Check ``` resources\assets\js\components\DisplayData.vue ``` and modify the table tag to display the appropiate xml data based on the changes of the above point