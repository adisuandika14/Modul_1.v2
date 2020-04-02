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
// */
Route::get('/', function () {
    return view('welcome');
});

//admin
 Route::prefix('admin')->group(function(){
    Route::get('/login','adminController@loginadmin');
    Route::get('/register','adminController@registeradmin');
    Route::post('/login','adminController@loginsubmit');
    Route::post('/register','adminController@registersubmit');
    Route::get('/logout','adminController@logoutadmin');
    Route::get('/dashboard','adminController@dashboard')->middleware('loginadmin');
    Route::get('/viewproduct','viewproductController@viewproduct');

});

//user
Route::prefix('user')->group(function(){
    Route::get('/login','userController@userlogin');
    Route::get('/register','userController@userregister');
    Route::post('/register','userController@registersubmit',['verify' => true]);
    Route::post('/login','userController@loginsubmit');
    Route::get('/logout','userController@logout');
    Route::get('/verify/{id}','userController@verifyemailuser');
    Route::get('/dashboard','userController@dashboard')->middleware('userlogin');
    Route::get('/product','userController@productuser');
    Route::get('/verify', 'userController@verifymail');
 });

Route::prefix('validasi')->group(function(){
    Route::get('/proses', 'validasiController@input');
    Route::post('/proses', 'validasiController@proses');
});

//route CRUD

    Route::get('/product','userproductController@index');
    Route::get('/product/tambah','userproductController@tambah');
    // Route::post('/product/tambah','userproductController@tambah');
    Route::post('/product/store','userproductController@store');

    Route::get('/product_image','productimageController@index');

    Route::get('/product/hapus/{id}','userproductController@destroy');