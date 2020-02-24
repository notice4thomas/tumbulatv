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

Route::get('/', function () {
    return view('welcome');
});

*/

Route::get('/', 'PagesController@index');
Route::get('/', 'PagesController@index');

// iceberg: people, projects, products
Route::get('/kb', 'PagesController@kb');
Route::get('/kabubu', 'PagesController@kabubu');
Route::get('/kakeeka', 'PagesController@kakeeka');

// tumbula touch: Alphabet
Route::get('/architecture', 'PagesController@architecture');
Route::get('/brochure', 'PagesController@brochure');
Route::get('/catalogue', 'PagesController@catalogue');
Route::get('/directory', 'PagesController@directory');
Route::get('/engagement', 'PagesController@engagement');

// tumbula reBOOT: 6 levels, Social innovation process
Route::get('/reboot/{id}', function ($id) {
    return 'This is innovation #'.$id;
});


// tumbula story
Route::get('/roots', 'PagesController@roots');
Route::get('/vision', 'PagesController@vision');
Route::get('/mission', 'PagesController@mission');
Route::get('/dream', 'PagesController@dream');

