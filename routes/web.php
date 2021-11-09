<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;

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
    return redirect(app()->getLocale());
});

Route::post('/langchange', function () {
    return redirect(app()->getLocale());
});

Route::post('/language-changed', function(Request $request){
    App::setLocale($request->Input('lang'));
    return redirect()->back();
});

Route::group(['prefix' => '{locale}', 'where' => ['locale' => '(en|ge)'], 'middleware' => 'setlocale'], function() {
    Route::get('/', 'App\Http\Controllers\IndexController@index')->name('index');
});

