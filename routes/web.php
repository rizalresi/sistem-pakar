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

Route::get('/', 'PagesController@home');

Route::resource('tbdiagnosa', 'TbdiagnosasController');
Route::resource('tbgejala', 'TbgejalasController');
Route::resource('tbkategori', 'TbkategorisController');
Route::resource('tbkerusakan', 'TbkerusakansController');
Route::resource('tbsolusi', 'TbsolusisController');
Route::resource('tbvideo', 'TbvideosController');
Route::resource('pelanggan', 'PelanggansController');