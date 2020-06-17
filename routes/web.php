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
Route::get('/faq','PagesController@faq');
Route::get('/contact','PagesController@contact');


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

Route::resource('appointments', 'AppointmentsController');

Route::get('/dashboard', 'DashboardController@index');

// Aparte route voor de createAppointment function
Route::get('/availabilities/new-appointment/{id}', 'AppointmentsController@createAppointment');

//Aparte route voor de indexClient function
Route::get('/psycholoogs/availability/{id}', 'AvailabilitiesController@indexClient');

Route::get('/appointment/thanks', function () {
    return view('appointments.thanks');
});