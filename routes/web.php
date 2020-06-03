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

Route::get('/','PagesController@index');
Route::get('/over','PagesController@over');
Route::get('/psychologen','PagesController@psychologen');

/*
Route::get('/', function () {
    return view('welcome');
});
*/
Route::get('/over', function () {
    return view('pages.over');
});

/* PSYCHOLOGEN PAGINA
Route::get('/psychologen/{id}', function ($id) {
    return view('pages.psychologen');
});
*/

Route::resource('psycholoogs', 'PsycholoogsController');

Route::resource('availabilities', 'AvailabilitiesController');
Auth::routes();

Route::get('/dashboard', 'DashboardController@index');
