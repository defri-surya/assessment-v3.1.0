<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

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
Route::get('/pendaftaran', function () {
	return view('auth.regisSiswa');
});

Route::post('regisStore', 'otherController@regisStore')->name('regis.store');

Auth::routes([
	'reset' => false,
	'verify' => false,
	'register' => false,
]);

// Route::get('/home', 'HomeController@index')->name('home');


Route::group(['middleware' => ['auth', 'CekRole:superadmin']], function () {

	Route::namespace('Superadmin')->group(function () {
		Route::resource('sekolah', 'sekolahController');
		Route::resource('user', 'userController');
		Route::resource('gurubk', 'gurubkController');
		Route::resource('afiliator', 'afiliatorController');
		Route::resource('presentase', 'presentaseController');
		Route::resource('reportfee', 'reportfeeController');
		Route::get('kategori', 'kategoriController@index')->name('kategori.index');
		Route::post('kategori', 'kategoriController@store')->name('kategori.store');
		Route::resource('soaldisc', 'soalDiscController');
		Route::resource('setsoal', 'setSoalController');
		Route::resource('kepribadian', 'dbKepribadianController');
		Route::resource('allreportdisc', 'allReportController');
		Route::resource('allreportholland', 'hasilakhirHollandController');
		Route::resource('rumusmost', 'rumusMostController');
		Route::resource('rumuslest', 'rumusLestController');
		Route::resource('rumusdif', 'rumusDifController');

		// Assessment Holland
		Route::resource('soalholland', 'soalHollandController');
		Route::resource('deskholland', 'deskHollandController');
	});
});

Route::group(['middleware' => ['auth', 'CekRole:gurubk']], function () {
	Route::namespace('GuruBK')->group(function () {
		Route::get('/profil', 'profilController@index')->name('profil.index');
		Route::get('/profil/edit/{id}', 'profilController@edit')->name('profil.edit');
		Route::put('/profil/update/{id}', 'profilController@update')->name('profil.update');
		Route::resource('siswa', 'siswaController');
		Route::resource('hasilsemua', 'hasilController');
		Route::resource('hasilall', 'hasilhollandController');
		Route::resource('fees', 'feesController');

		// import google sheet
		Route::get('refresh', 'siswaController@refresh')->name('refresh');
	});
});

Route::group(['middleware' => ['auth', 'CekRole:afiliator']], function () {
	Route::namespace('Afiliator')->group(function () {
		Route::get('/profils', 'profilsController@index')->name('profils.index');
		Route::get('/profils/edit/{id}', 'profilsController@edit')->name('profils.edit');
		Route::put('/profils/update/{id}', 'profilsController@update')->name('profils.update');
		Route::resource('siswas', 'siswasController');
		Route::resource('hasilsemuas', 'allReportController');
		Route::resource('hasilalls', 'hasilhollandController');
		Route::resource('feess', 'feessController');
		Route::resource('riwayats', 'riwayatsController');
		Route::resource('gurubkaf', 'gurubkafController');
	});
});

Route::group(['middleware' => ['auth', 'CekRole:siswa']], function () {
	Route::namespace('Siswa')->group(function () {
		Route::get('/profilsiswa', 'profilSiswaController@index')->name('profilsiswa.index');
		Route::get('/profilsiswa/edit/{id}', 'profilSiswaController@edit')->name('profilsiswa.edit');
		Route::put('/profilsiswa/update/{id}', 'profilSiswaController@update')->name('profilsiswa.update');
		Route::get('/ujian', 'ujianController@index')->name('ujian.index');
		Route::get('/ujian/{param}/petunjuk', 'ujianController@petunjukujian')->name('ujian');
		Route::get('/ujian/disc', 'ujianController@ujianDisc')->name('ujian.disc');
		Route::post('/ujian/store', 'ujianController@storedisc')->name('disc.store');
		Route::get('/hasil/disc', 'ujianController@hasildisc')->name('hasil.disc');

		// HOLLAND
		Route::get('/exam/{param}/petunjuk', 'ujianController@petunjukujianholland')->name('exam');
		Route::get('/exam/holland', 'ujianController@ujianHolland')->name('ujian.holland');
		Route::post('/exam/store', 'ujianController@storeHolland')->name('holland.store');
		Route::get('/hasil/holland', 'ujianController@hasilHolland')->name('hasil.holland');
	});
});


Route::group(['middleware' => ['auth', 'CekRole:superadmin,gurubk,siswa,afiliator']], function () {
	Route::get('/home', 'HomeController@index')->name('home');
});
