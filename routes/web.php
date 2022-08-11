<?php

use App\Http\Controllers\Admin\Transaksi\RujukanLansiaController;
use App\Http\Controllers\ForumLansiaController;
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
// Route::get('', function () {
//     return csrf_token();
// });
Route::get('/token', function () {
    return csrf_token();
});
Route::get('posyandu', 'HomeController@index');

Route::get('/', function () {
    return redirect('/admin');
})->middleware('auth');

Route::get('/', function () {
    return redirect('posyandu');
});
Route::resource('/dashboard', 'DashboardController');



Route::get('/edit-profile', 'ProfileController@edit')->name('edit-profile');

Route::group(['middleware' => 'auth:web', 'prefix' => 'user', 'as' => 'user.'], function () {
    Route::get('/', [ForumLansiaController::class, 'index'])->name('dashboard');
    Route::post('/tambahkomentar', [ForumLansiaController::class, 'store']);

    Route::group(['namespace' => 'User'], function () {

        Route::group(['prefix' => '/userlansia', 'as' => 'userlansia.', 'namespace' => 'UserLansia'], function () {
            Route::resource('biodatalansia', 'BiodataLansiaController');
            Route::resource('kmslansia', 'KMSLansiaController');
            Route::resource('riwayatrujukan', 'RiwayatRujukanController');
            Route::get('/cetakriwayatrujukan/{id}', 'RiwayatRujukanController@show')->name('cetak');
            // Route::resource('riwayatrujukan', 'RujukanLansiaController');
        });
    });
});
// //export pdf
// Route::get('/exportpdf',[RujukanLansiaController::class, 'exportpdf'])->name('exportpdf');




// Route::get('/', function () {
//     return redirect('/admin');
// })->middleware('auth');

// Route::get('/token', function () {
//     return csrf_token();
// });

// Route::get('/edit-profile', 'ProfileController@edit')->name('edit-profile');

// Route::group(['middleware' => 'auth:web', 'as' => 'user.'], function () {
// });

require __DIR__ . '/demo.php';
