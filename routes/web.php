<?php

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
Route::get('/home', function () {
    return view('home');
});

Auth::routes();


Route::prefix('user')->group(function(){
Route::get('dashboard', 'UserController@create_pass');
Route::post('dashboard', 'UserController@save_pass');
});

Route::middleware(['auth'])->group(function(){

});

Route::get('logout', 'UserController@logout')->name('logout');

//karyawan

Route::get('user/index','UserController@index');
Route::get('user/create','UserController@create');
Route::post('user/create','UserController@save');
Route::get('user/edit/{id}','UserController@edit');
Route::post('user/edit','UserController@update');
Route::get('user/delete/{id}','UserController@deleteuser')->name('deleteuser');

//nasabah


Route::get('nasabah/index','NasabahController@index');
Route::get('nasabah/create','NasabahController@create');
Route::post('nasabah/create','NasabahController@save');
Route::get('nasabah/edit/{id}','NasabahController@edit');
Route::post('nasabah/edit','NasabahController@update');
Route::get('nasabah/delete/{id}','NasabahController@deletenasabah')->name('deletenasabah');
Route::get('nasabah/excel', 'NasabahController@exportExcel');
Route::get('nasabah/downloadpdf_all', 'NasabahController@downloadpdf_allnasabah')->name('downloadpdf_allnasabah');


Route::get('superadmin/home','HomeController@superadmin');
Route::get('superadmin/create','HomeController@create');
Route::post('superadmin/create','HomeController@save');
Route::get('superadmin/edit/{id}','HomeController@edit');
Route::post('superadmin/edit','HomeController@update');
Route::get('superadmin/delete/{id}','HomeController@deleteuser')->name('deleteuser');
