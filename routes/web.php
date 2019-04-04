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

Auth::routes();

/*  Admin Route  */
Route::get('/dashboard', 'HomeController@index')->name('dashboard');

/* Halls Route  */
Route::get('/allhall', 'HallsController@index')->name('hall.all');
Route::get('/addhall', 'HallsController@create')->name('hall.add');
Route::post('/storehall', 'HallsController@store')->name('hall.store');
Route::get('/edit/{hall_id}', 'HallsController@edit')->name('hall.edit');
Route::post('/update/{hall_id}', 'HallsController@update')->name('hall.update');
Route::get('/delete/{hall_id}', 'HallsController@destroy')->name('hall.delete');


/* Movie Route  */
Route::get('/movie/all', 'MoviesController@index')->name('movie.all');
Route::get('/movie/add', 'MoviesController@create')->name('movie.add');
Route::post('/movie/store', 'MoviesController@store')->name('movie.store');
Route::get('/movie/edit/{movie_id}', 'MoviesController@edit')->name('movie.edit');
Route::post('/movie/update/{hall_id}', 'MoviesController@update')->name('movie.update');
Route::get('/movie/delete/{movie_id}', 'MoviesController@destroy')->name('movie.delete');








/*  User Interface or Customer Route  */

Route::get('/', 'UiController@show_halls')->name('welcome');
// to show all movies in this hall
Route::get('/movies_by_hall/{hall_id}', 'UiController@show_movie_by_hall');
// to show movie details 
Route::get('/view_movie/{movie_id}', 'UiController@movie_details_by_id');
//booking seat route:
Route::get('/view_movie/{movie_id}/booking', 'UiController@booking');
Route::post('/booking/store', 'UiController@store')->name('booking.store');
Route::get('/booking/store', 'UiController@store');