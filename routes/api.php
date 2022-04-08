<?php
// header('Access-Control-Allow-Origin: *');
// header('Access-Control-Allow-Methods:  POST, GET, OPTIONS, PUT, DELETE');
// header('Access-Control-Allow-Headers:  Content-Type, X-Auth-Token, Origin, Authorization');


use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers;
/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/


Route::get ("/cities", "App\Http\Controllers\API\CityController@searchByText")->middleware('api');
//Route::get ("/cities_v1/{lang}/{query}", "App\Http\Controllers\API\CityController@searchByText")->middleware('api');

Route::get ("/aeroports", "App\Http\Controllers\API\AeroportController@searchNearCity")->middleware('api');


// Retourne les aéroports les plus "fréquentés" par les utilisateurs de "Private Flying"
Route::get ("/best_aeroports", "App\Http\Controllers\API\AeroportController@searchMostWanted")->middleware('api');

//Route::get ("/aeroports_v1/{lang}/{query}", "App\Http\Controllers\API\AeroportController@searchNearCityV1")->middleware('api');



Route::middleware('auth:sanctum')->get('/user', function (Request $request) 
{
    return $request->user();
}); 
