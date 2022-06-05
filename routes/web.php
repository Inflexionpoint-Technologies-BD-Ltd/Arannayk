<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;



Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

// ----------------------------------------------------------------- User Content --------------------------------------------------------------------------------

Route::get('/', "UserPanelController@index");
Route::get('/publication', "UserPanelController@publication");
Route::get('/services', "UserPanelController@services");
Route::get('/current-projects', "UserPanelController@currentproject");




// ----------------------------------------------------------------- User Content --------------------------------------------------------------------------------

// -------------------------------------------------------------- Admin Panel Content ----------------------------------------------------------------------------


Route::middleware('auth')->group(function () {


// -------------------------------- Dashboard --------------------------------


    Route::get('admin/dashboard', "AdminController@index")->name('admin.dashboard');

// -------------------------------- Dashboard --------------------------------


// --------------------------------- Log out ---------------------------------

    Route::get('logout', "AdminController@logout")->name('logout');

// --------------------------------- Log out ---------------------------------
});


// -------------------------------------------------------------- Admin Panel Content ----------------------------------------------------------------------------

