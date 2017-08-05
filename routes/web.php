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

//============== LOGIN PAGE ================
Route::get('/', 'UsersController@login');

//============== CHECK FOR SUCCESSFUL LOGIN AND REDIRECT ================
Route::post('/login', 'UsersController@authenticate');

//============== LOGOUT PAGE ================
Route::get('/logout', 'UsersController@logout');

//============= DASHBOARD ============
//Route::get('/dashboard', function(){
//    return view('dashboard.dashboard');
//});

Route::get('/dashboard', 'UsersController@getUser');

//============= CHECK INS ============
Route::get('/check-in', function(){
    return view('pages.check-in');
});

Route::get('/check-in/{child}', function($child){
   return view('pages.check-in', compact('child')); 
});

//============= STAFF ============
Route::get('/staff', function(){
    return view('pages.staff');
});

//============= CHILDREN ============
Route::get('/children', 'ChildrenController@getChildren');

//============= SERVICES ============
Route::get('/services', 'ServicesController@getServices');

//============= ROOMS ============
Route::get('/rooms', 'RoomsController@getRooms');