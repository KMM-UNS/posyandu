<?php

use App\Http\Controllers\Admin\Transaksi\RujukanLansiaController;
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

Route::get('/token', function () {
    return csrf_token();
});

Route::group(['middleware' => 'auth:web', 'as' => 'user.'], function () {
    Route::view('/', 'home')->name('home');

    Route::group(['namespace' => 'User'], function () {
        
        Route::group(['prefix' => '/userlansia', 'as' => 'userlansia.', 'namespace' => 'UserLansia'], function () {
            Route::resource('biodatalansia', 'BiodataLansiaController');
            
        });
    });

  
});
// //export pdf
// Route::get('/exportpdf',[RujukanLansiaController::class, 'exportpdf'])->name('exportpdf');
    
    


require __DIR__ . '/demo.php';
