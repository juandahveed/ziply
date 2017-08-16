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
Route::get('/check-in', function() {
    return view('pages.check-in');
});

Route::get('/check-in/{child}', function($child) {
    return view('pages.check-in', compact('child'));
});

//============= STAFF ============
Route::get('/staff', function() {
    return view('pages.staff');
});

//============= CHILDREN ============
Route::get('/children', 'ChildrenController@getChildren');

Route::get('/children/create-edit/{child_id?}', function($child_id = null) {
    if ($child_id) {
        return view('pages.children.create-edit', compact('child_id'));
    } else {
        return view('pages.children.create-edit');
    }
});

Route::post('/children/create-edit', 'ChildrenController@createChild');
    // if ID ChildrenController->updateChild()
    // ! if ID ChildrenController->createChild()
 

//============= SERVICES ============
Route::get('/services', 'ServicesController@getServices');

//============= ROOMS ============
Route::get('/rooms', 'RoomsController@getRooms');
