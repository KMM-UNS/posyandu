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
//<<<<<<< HEAD
          Route::resource('golda', 'GolonganDarahController');
          Route::resource('datakader', 'KaderController');
          Route::resource('jaminankesehatan','JaminanKesehatanController');
//=======
            Route::resource('golda', 'GolonganDarahController');
            Route::resource('kader', 'KaderController');
            Route::resource('status', 'StatusController');
            Route::resource('daftar_penyakit', 'DaftarPenyakitController');
            Route::resource('detailimunisasi', 'DetailStatusImunisasi');
            Route::resource('tenaga_kesehatan', 'TenagaKesehatanController');
//>>>>>>> 2c5fdcdb0465bb80ea204f1c599c47ec8a4c99c3
        });


        // route data anak
        Route::group(['prefix' => '/anak-data', 'as' => 'anak-data.', 'namespace' => 'Anak'], function () {
            Route::resource('dataanak', 'DataAnakController');
            Route::resource('imunisasi', 'ImunisasiController');
        });


//=======
        Route::group(['prefix' => '/data-ibu', 'as' => 'data-ibu.', 'namespace' => 'Dataibu'], function () {
            Route::resource('dataibu', 'DataIbuController');
            Route::resource('ibuhamil', 'PeriksaIbuHamilController');
            Route::resource('ibunifas', 'PeriksaIbuNifasController');
            Route::resource('ibuhamilperiksa', 'IbuHamilPeriksaController');
            Route::resource('ibunifasperiksa', 'IbuNifasPeriksaController');
//>>>>>>> 2c5fdcdb0465bb80ea204f1c599c47ec8a4c99c3
        });

        Route::group(['prefix' => '/data-lansia', 'as' => 'data-lansia.', 'namespace' => 'Lansia'], function () {
            //datalansia
            Route::resource('datalansia', 'DataLansiaController');

            //data kematian
            Route::resource('datakematianlansia', 'DataKematianLansiaController');
            //cetak kematian pertgl
            Route::get('/laporankematian', 'DataKematianLansiaController@laporankematian')->name('laporankematian');
            Route::post('/laporankematian', 'DataKematianLansiaController@sortir');
            Route::get('/cetaklaporankematian/{start}/{end}', 'DataKematianLansiaController@cetakLaporanKematian');
    
            
            //pantauan kms
            Route::resource('pantauankms', 'PantauanKMSController');
            //cetak kms per tgl
            Route::get('/laporankmslansia', 'PantauanKMSController@laporanKMS')->name('laporankmslansia');
            Route::post('/laporankmslansia', 'PantauanKMSController@sortir');
            Route::get('/cetaklaporankms/{start}/{end}', 'PantauanKMSController@cetakLaporanKMS');
             //cetak per nama
            Route::get('/laporandatakmslansia', 'PantauanKMSController@laporanDataKMS')->name('laporandatakmslansia');
            Route::post('/laporandatakmslansia', 'PantauanKMSController@sortirriwayat');
            Route::get('/cetaklaporandatakms/{id}', 'PantauanKMSController@cetakLaporandataKMS');



            //keluhan tindakan
            Route::resource('keluhantindakan', 'KeluhanTindakanController');
            //cetak keluhan pertgl
            Route::get('/laporankeluhantindakan', 'KeluhanTindakanController@laporanKeluhanTindakan')->name('laporankeluhantindakan');
            Route::post('/laporankeluhantindakan', 'KeluhanTindakanController@sortir');
            Route::get('/cetaklaporankeluhantindakan/{start}/{end}', 'KeluhanTindakanController@cetakLaporanKeluhanTindakan');
            Route::resource('', 'KeluhanTindakanController');
             //cetak per nama   
             Route::get('/riwayatkeluhantindakan', 'KeluhanTindakanController@riwayatKeluhanTindakan')->name('riwayatkeluhantindakan');
             Route::post('/riwayatkeluhantindakan', 'KeluhanTindakanController@sortirriwayat');
            Route::get('/cetakriwayatkeluhantindakan/{id}', 'KeluhanTindakanController@cetakriwayatKeluhanTindakan');



        });

        Route::group(['prefix' => '/data-transaksi', 'as' => 'data-transaksi.', 'namespace' => 'Transaksi'], function () {
            Route::resource('rujukan', 'RujukanController');
            //Rujukan Lansia
            Route::resource('rujukanlansia', 'RujukanLansiaController');
            //Status
            Route::get('/update/status/{id}', 'RujukanLansiaController@status')->name('rujukanlansia.status');
            //riwayat pertanggal
            Route::get('/laporanrujukanlansia', 'RujukanLansiaController@laporanRujukanLansia')->name('laporanrujukanlansia');
            Route::post('/laporanrujukanlansia', 'RujukanLansiaController@sortir');
            Route::get('/cetaklaporanrujukanlansia/{start}/{end}', 'RujukanLansiaController@cetakLaporanRujukanLansia');
            //riwayat pernama
            Route::get('/riwayatrujukan', 'RujukanLansiaController@riwayatRujukanLansia')->name('riwayatrujukan');
            Route::post('/riwayatrujukan', 'RujukanLansiaController@sortirriwayat');
            Route::get('/cetakriwayatrujukan/{id}', 'RujukanLansiaController@cetakriwayatRujukanLansia');


        });

        // Route::group(['prefix' => '/data-kegiatan', 'as' => 'data-kegiatan.', 'namespace' => 'Kegiatan'], function () {
        //     Route::resource('datakegiatan', 'KegiatanController');
        // });

    
    });
});
