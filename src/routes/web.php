<?php

use Illuminate\Support\Facades\Auth;
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
Auth::routes([
    'reset'=>false,
    'confirm'=>false,
    'verify'=>false,
]);
Route::get('/', 'CompaniesController@getCompanies');
Route::post('/company', 'CompaniesController@addCompany');
Route::get('/company/{id}', 'CommentsController@getCompany');
Route::post('/company/{id}', 'CommentsController@addComment');
Route::get('/home', 'HomeController@index')->name('home');
