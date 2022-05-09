<?php

use Illuminate\Support\Facades\Route;

Route::group(['prefix' => 'admin', 'as' => 'admin.'], function () {
    require base_path('vendor/laravel/fortify/routes/routes.php');
    Route::resource('/setting', 'SettingController');


    Route::group(['namespace' => 'Admin', 'middleware' => 'auth:admin'], function () {
        Route::get('/', function () {
            return redirect(route('admin.dashboard'));
        });

        Route::view('/dashboard', 'pages.admin.dashboard')->name('dashboard');


        Route::resource('/admin', 'AdminController');
        Route::resource('/user', 'UserController');
        Route::resource('/dataibu', 'DataIbuController');


        // route master data
        Route::group(['prefix' => '/master-data', 'as' => 'master-data.', 'namespace' => 'Master'], function () {
            Route::resource('agama', 'AgamaController');
            Route::resource('vitamin', 'VitaminController');
            // Route::get('file-upload', [ SliderController::class, 'Slider' ])->name('file.upload');
            // Route::post('file-upload', [ SliderController::class, 'Slider' ])->name('file.upload.post');
            Route::resource('pekerjaan', 'PekerjaanController');
            Route::resource('status-kawin', 'StatusKawinController');
            Route::resource('pendidikan', 'PendidikanController');
            Route::resource('jenisvaksin', 'JenisVaksinController');
            Route::resource('golda', 'GolonganDarahController');
            Route::resource('kader', 'KaderController');
            Route::resource('status', 'StatusController');
            Route::resource('daftar_penyakit', 'DaftarPenyakitController');
            Route::resource('detailimunisasi', 'DetailStatusImunisasi');
            Route::resource('tenaga_kesehatan', 'TenagaKesehatanController');
        });


        // route data anak
        Route::group(['prefix' => '/anak-data', 'as' => 'anak-data.', 'namespace' => 'Anak'], function () {
            Route::resource('dataanak', 'DataAnakController');
            Route::resource('imunisasi', 'ImunisasiController');
        });

        Route::group(['prefix' => '/data-ibu', 'as' => 'data-ibu.', 'namespace' => 'Dataibu'], function () {
            Route::resource('dataibu', 'DataIbuController');
            Route::resource('ibuhamil', 'PeriksaIbuHamilController');
            Route::resource('ibunifas', 'PeriksaIbuNifasController');
            Route::resource('ibuhamilperiksa', 'IbuHamilPeriksaController');
            Route::resource('ibunifasperiksa', 'IbuNifasPeriksaController');
        });


        Route::group(['prefix' => '/data-transaksi', 'as' => 'data-transaksi.', 'namespace' => 'Transaksi'], function () {
            Route::resource('rujukan', 'RujukanController');
        });
    });
});
