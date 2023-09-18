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

Route::get('/test1', function () {
  return ' welcome ' ;
});


//route parameters

Route::get('/test2/{id}', function ($id) {
    return $id  ;
});

Route::get('/test3/{id?}', function () {
    return 'welcome' ;
});


//route name

Route::get('/show-number/{id}', function ($id) {
    return $id  ;
}) ->name('a') ;

Route::get('/show-string/{id?}', function () {
    return 'welcome' ;
}) ->name('b') ;

Route::namespace('front')->group (function (){

    // All route only access controller or methodes in folder name Front
    Route::get('users','UsersController@showUserName');
});

Route::perfix('users') -> group(function (){
    Route::get('show','UsersController@showUserName');
    Route::delete('delete','UsersController@showUserName');
    Route::get('edit','UsersController@showUserName');
    Route::put('update','UsersController@showUserName');
});




Route::perfix('forPerson',function (){

    return 'with auth ' ;
}) -> middleware('auth') ;

Route::get('offers/show','UsersController@showUserName');
Route::delete('offers/delete','UsersController@showUserName');
Route::get('offers/edit','UsersController@showUserName');
Route::put('offers/update','UsersController@showUserName');


//yousef
