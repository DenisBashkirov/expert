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

Route::get('/', ['uses'=>'Frontend\FrontendOutputController@home', 'as'=>'home']);
Route::get('/services/{category}', ['uses'=>'Frontend\FrontendOutputController@services', 'as'=>'services']);
Route::get('/contacts', ['uses'=>'Frontend\FrontendOutputController@contacts', 'as'=>'contacts']);
Route::get('/{service}', ['uses'=>'Frontend\FrontendOutputController@service', 'as'=>'service']);

if(env('APP_ENV') == 'production') {
    Route::post('/thanks', ['uses'=>'Frontend\FrontendOutputController@thanks', 'as'=>'thanks']);
} else {
    Route::any('/thanks', ['uses'=>'Frontend\FrontendOutputController@thanks', 'as'=>'thanks']);
}
