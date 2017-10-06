<?php

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

use App\Model\Setting;

Auth::routes();
Route::group(['middleware' => 'auth'], function () {
    Route::get('/', 'ProjectController@index')->name('home');
    Route::get('/project/{project}', 'ProjectController@detail')->name('project.detail');
    Route::get('/numarataj/{parcel}', 'ParcelController@detail')->name('parcel.detail');
    Route::get('/map', 'MapController@index')->name('map');
    Route::post('/search', 'SearchController@index')->name('search');
    Route::get('/block/{apartment}', 'BlockController@detail')->name('block.detail');
    Route::get('/floor/{apartment}', 'FloorController@detail');
    Route::get('/apartment/{apartment}', 'ApartmentController@detail')->name('apartment.detail');
});

Route::get('logs', '\Rap2hpoutre\LaravelLogViewer\LogViewerController@index');
