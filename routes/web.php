<?php

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

Auth::routes();

Route::get('logout', '\App\Http\Controllers\Auth\LoginController@logout');

Route::get('/', 'HomeController@index');
Route::get('/home', 'HomeController@home')->name('home');
Route::get('/profil', 'HomeController@profil')->name('profil');
Route::get('/kontak', 'HomeController@kontak')->name('kontak');

Route::get('/user/profile', 'UserController@index')->name('users.profile');

Route::post('kelas/getdata/{id}', 'KelasController@getdata');
Route::resources([
    'kelas' => 'KelasController',
    'peserta' => 'PesertaController'
]);
