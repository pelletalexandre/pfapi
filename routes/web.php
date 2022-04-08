<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () 
{
    return view('welcome');





});


Route::get('/pf_admin_panel', function()
{
    return view ( "layouts.backoffice.index" );
});

//Route::resource ('/pf_admin_panel/villes', 'CityController');

Route::resource ('/pf_admin_panel/villes', 'App\Http\Controllers\CityController');
Route::resource ('/pf_admin_panel/pays', 'App\Http\Controllers\CountryController');
Route::resource ('/pf_admin_panel/aeroports', 'App\Http\Controllers\AeroportController');

Route::get ('/pf_admin_panel/aeroportssearchajax', array ('as' => 'ajax_admin_aeroport', 'uses' => 'App\Http\Controllers\AeroportController@ajaxSearch') );
Route::get ('/pf_admin_panel/villessearchajax', array ('as' => 'ajax_admin_ville', 'uses' => 'App\Http\Controllers\CountryController@ajaxSearch') );

//Route::get ('searchajax',array('as'=>'searchajax','uses'=>'AutoCompleteController@search'));

