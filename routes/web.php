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

Route::get('/', function () {
    return view('welcome');
});


Route::get('/{dims}', ['as' => 'api', 'uses' => 'App\Http\Controllers\ApiController@getIndex'])
    ->where('dims', '([0-9]+)x([0-9]+)(\?[a-z0-9&=])*');

Route::get('/i/{dims}', ['as' => 'icon', 'uses' => 'App\Http\Controllers\ApiController@getIcon'])
    ->where('dims', '([0-9]+)(\?[a-z0-9&=])*');
