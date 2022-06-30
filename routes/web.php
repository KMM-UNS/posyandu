<?php

use App\Http\Controllers\user\GrafikController;

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
    return redirect('/admin');
})->middleware('auth');

Route::get('/token', function () {
    return csrf_token();
});

Route::group(['middleware' => 'auth:web', 'as' => 'user.'], function () {
    Route::view('/', 'home')->name('home');

    Route::group(['namespace' => 'User'], function () {
        Route::resource('jadwal', 'JadwalController');
        Route::resource('biodata', 'BiodataController');
        Route::get('rujuk/{id}', 'RujukController@cetak')->name('rujuk.cetak');
        Route::resource('rujuk', 'RujukController');
        Route::get('grafik/{id}', 'GrafikController@cetak')->name('grafik.cetak');
        Route::resource('grafik', 'GrafikController');
    });




});


Route::get('/edit-profile', 'ProfileController@edit')->name('edit-profile');

Route::group(['middleware' => 'auth:web', 'as' => 'user.'], function () {
});

require __DIR__ . '/demo.php';
