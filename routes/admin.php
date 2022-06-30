<?php

// use App\Http\Controllers\DashboardController;

use App\Models\DataAnak;
use Illuminate\Support\Facades\Route;

Route::group(['prefix' => 'admin', 'as' => 'admin.'], function () {
    require base_path('vendor/laravel/fortify/routes/routes.php');
    Route::resource('/setting', 'SettingController');


    Route::group(['namespace' => 'Admin', 'middleware' => 'auth:admin'], function () 

	Route::group(['prefix' => 'admin', 'as' => 'admin.'], function () {
    // require base_path('vendor/laravel/fortify/routes/routes.php');

    Route::group(['namespace' => 'Admin', 'middleware' => ['role:admin|manager']], function () {
        Route::get('/', function () {
            return redirect(route('admin.dashboard'));
        });

        Route::view('/dashboard', 'pages.admin.dashboard', [
            'anak' => DataAnak::count() ])->name('dashboard');
            //menghitung jumlah data anak di dashboard


        Route::resource('/admin', 'AdminController');
        Route::resource('/user', 'UserController');


// route master data
        Route::group(['prefix' => '/master-data', 'as' => 'master-data.', 'namespace' => 'Master'], function () {
            Route::resource('agama', 'AgamaController');
            Route::resource('vitamin', 'VitaminController');
            Route::resource('pekerjaan', 'PekerjaanController');
            Route::resource('status-kawin', 'StatusKawinController');
            Route::resource('pendidikan', 'PendidikanController');
            Route::resource('jenisvaksin', 'JenisVaksinController');
            Route::resource('golda', 'GolonganDarahController');
            Route::resource('kader', 'KaderController');
        });


        // route data anak
        Route::group(['prefix' => '/anak-data', 'as' => 'anak-data.', 'namespace' => 'Anak'], function () {
                Route::resource('dataanak', 'DataAnakController');
                Route::resource('imunisasi', 'ImunisasiController');
                Route::get('/laporanimunisasi', 'ImunisasiController@laporan')->name('laporanimunisasi');
                Route::post('/laporanimunisasi','ImunisasiController@sortir');
                Route::get('/cetaklaporanimunisasi/{start}/{end}', 'ImunisasiController@cetak')->name('cetaklaporanimunisasi');
                Route::resource('jadwalimunisasi', 'JadwalImunisasiController');
                Route::resource('vitaminanak', 'VitaminAnakController');
        });

        // route data ibu
       Route::group(['prefix' => '/data-ibu', 'as' => 'data-ibu.', 'namespace' => 'Dataibu'], function () {
            Route::resource('dataibu', 'DataIbuController');
            Route::resource('ibuhamil', 'PeriksaIbuHamilController');
            Route::resource('ibunifas', 'PeriksaIbuNifasController');
        });
        Route::group(['prefix' => '/data-transaksi', 'as' => 'data-transaksi.', 'namespace' => 'Transaksi'], function () {
            Route::resource('rujukan', 'RujukanController');
            Route::get('/laporanrujukananak', 'RujukanController@laporan')->name('laporanrujukananak');
            Route::post('/laporanrujukananak','RujukanController@sortir');
            Route::get('/cetaklaporanrujukan/{start}/{end}', 'RujukanController@cetak')->name('cetaklaporanrujukan');
        });
    });



        });


        Route::view('/dashboard', 'pages.admin.dashboard')->name('dashboard');

        Route::resource('/users', 'UserController');
        Route::resource('/settings', 'SettingController');
    });
});
