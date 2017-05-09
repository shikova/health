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

//Route::get('/', function () {
//    return view('welcome');
//});

Auth::routes();

Route::get('/', 'PagesController@index')->name('home');


Route::get('/blog', 'BlogController@index')->name('blog');
Route::get('/blog/{id}','BlogController@show')->name('article');
Route::get('/contact', 'PagesController@Contact')->name('contact-us');
Route::get('/packages', 'PagesController@Packages')->name('packages');
Route::get('/profile', 'PagesController@Profile')->name('profile');

Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});
/*API*/

Route::get('/api/blog', 'BlogController@all')->name('blog');


Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});
