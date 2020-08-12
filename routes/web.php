<?php

use Illuminate\Support\Facades\Route;

Route::get('/','MovieController@index')->name('movies.index');
Route::get('/movie/{movie_id}','MovieController@show')->name('movies.show');
//Route::get('/movie/{movie_id}','MovieController@show')->name('movies.show')->where('id','[0-9]+');
