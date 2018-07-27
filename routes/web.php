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

Route::group(['as'=>'news.', 'namespace'=>'News'],function () {
    Route::get('/', 'CategoryNewsController@index')->name('main');
    Route::get('/category/{id}', 'Categories@index')->name('cat');
    Route::resource('/{id}/article/{numb}/', 'ArticlePage')->names('art')->only(['index','store']);
    Route::get('/article/{numb}/{id}', 'ArticlePage@pluslike')->name('pluslike');
    Route::get('/article/{numb}/{id}/minuslike', 'ArticlePage@minuslike')->name('minuslike');
    Route::get('tag/{tag}','TagsSearchPage@index')->name('tagpage');
});
Route::group(['prefix'=>'admin', 'as'=>'admin.', 'namespace'=>'Admin', 'middleware'=>'auth'],function (){
    Route::get('/', 'AdminDash@index')->name('profile');
    Route::resource('users','UserController')
        ->names('admins')->only(['index','destroy','store','edit', 'update']);
});

Auth::routes();

Route::get('logout', '\App\Http\Controllers\Auth\LoginController@logout')->name('logout');

Route::get('/home', 'HomeController@index')->name('home');


