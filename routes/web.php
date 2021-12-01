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

Route::post('/language-changed', function (Request $request) {
    App::setLocale($request->Input('lang'));
    return redirect()->back();
});

Route::group(['prefix' => '{locale}', 'where' => ['locale' => '(en|ge)'], 'middleware' => 'setlocale'], function () {
    Route::get('/', 'App\Http\Controllers\IndexController@index')->name('index');
    Route::get('/news', 'App\Http\Controllers\NewsController@index')->name('news');
    Route::get('/about', 'App\Http\Controllers\AboutController@index')->name('about');
    Route::get('/contact', 'App\Http\Controllers\ContactController@index')->name('contact');
    Route::get('/gallery', 'App\Http\Controllers\GalleryController@index')->name('gallery');
    Route::get('/club/{id}', 'App\Http\Controllers\ClubController@index')->name('club');
});

Route::group(['prefix' => 'admin'], function () {
    Route::get('/login', 'App\Http\Controllers\Admin\AuthController@getLogin')->name('getLogin');
    Route::post('/login', 'App\Http\Controllers\Admin\AuthController@postLogin')->name('postLogin');
    Route::get('/', 'App\Http\Controllers\Admin\DashboardController@index')->name('adminDashboard')->middleware('auth');
    Route::get('/logout', 'App\Http\Controllers\Admin\AuthController@getLogout')->name('getLogout')->middleware('auth');
});
