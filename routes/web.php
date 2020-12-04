<?php

use Illuminate\Support\Facades\Redirect;
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

// Route::get('/', function () {
//     return view('welcome');
// });

//ngetes

//UPDATE CHART
Route::get('coba', 'DashboardController@updatechart')->name('updatechart');

Route::get('/countdown', function () {
    return view('belumvoting');
});
//login
Route::get('/login', 'ProfileController@login')->name('login');
// Route::get('/register', 'ProfileController@register')->name('login');
// Route::post('/register', 'ProfileController@daftar');
Route::post('/', 'ProfileController@masuk');
Route::get('/logout', 'ProfileController@logout');
Route::get('/lupapassword', function () {
    return view('lupapassword');
});
Route::post('/lupapassword', 'ProfileController@kelupaan');
Route::get('/resetpass', 'ProfileController@resetpassemail');
Route::get('/forgotpassword', 'ProfileController@ubahpasslewatemail');
Route::post('/forgotpassword', 'ProfileController@storepasslewatemail');

Route::get('/', function () {
    return view('dashboard.panduan');
})->middleware('auth');
//dasboard
Route::group(['middleware' => ['auth', 'userbiasa']], function () {
    Route::get('/voting', 'DashboardController@voting');
    // Route::get('/datakandidat', function () {
    //     return view('dashboard.datakandidat');
    // });
    Route::post('/masuksuara', 'DashboardController@masuksuara');
});

//admin
Route::group(['middleware' => ['auth', 'cekrole']], function () {
    // Route::auth();
    Route::get('/dashboard/ubahpassword', function () {
        return view('dashboard.ubahpassword');
    });
    Route::post('/dashboard/gantipassword', 'DashboardController@gantipassword');
    Route::get('/verifikasipemilih', 'AdminController@verifpemilih');
    Route::get('/verifikasipemilih/{mahasiswa}', 'AdminController@ktmpemilih');
    Route::patch('/verifikasipemilih/{mahasiswa}', 'AdminController@ktmverif');
    Route::patch('/verifktm/{mahasiswa}', 'AdminController@ktmgajadiverif');
    Route::delete('/verifikasipemilih/{mahasiswa}', 'AdminController@hapuspemilih');
    Route::post('/waktumilih/{mahasiswa}', 'AdminController@ubahwaktu');
    // Route::get('/superadmin', 'AdminController@superadmin');
    Route::get('/mulai', 'AdminController@mulai');
    Route::post('/mulai', 'AdminController@mulaiupdate');
});

Route::group(['middleware' => ['auth', 'superadmin']], function () {
    Route::get('/datasuara', 'DashboardController@suara');
});
