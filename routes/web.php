<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;



Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

// ----------------------------------------------------------------- User Content --------------------------------------------------------------------------------

Route::get('/', "UserPanelController@index");
Route::get('/publication', "UserPanelController@publication");
Route::get('/services', "UserPanelController@services");
Route::get('/current-projects', "UserPanelController@currentProject");
Route::get('/project-archives', "UserPanelController@projectArchives");
Route::get('/about-arannayk', "UserPanelController@aboutUs");
Route::get('/our-team', "UserPanelController@ourTeam");
Route::get('/board-members', "UserPanelController@boardMembers");





// ----------------------------------------------------------------- User Content --------------------------------------------------------------------------------

// -------------------------------------------------------------- Admin Panel Content ----------------------------------------------------------------------------


Route::middleware('auth')->group(function () {


// -------------------------------- Dashboard --------------------------------


    Route::get('admin/dashboard', "AdminController@index")->name('admin.dashboard');

// -------------------------------- Dashboard --------------------------------

// -------------------------------- Service --------------------------------

    Route::resource('admin/service',"ServiceController");

// -------------------------------- Service --------------------------------


    // -------------------------------- Project --------------------------------

    Route::resource('admin/project',"ProjectController");

// -------------------------------- Project --------------------------------

    // -------------------------------- Publication --------------------------------

    Route::resource('admin/publication',"PublicationController");

// -------------------------------- Publication --------------------------------

    // -------------------------------- Slider --------------------------------

    Route::resource('admin/slider',"SliderController");

// -------------------------------- Slider --------------------------------

    // -------------------------------- Team --------------------------------

    Route::resource('admin/team',"TeamController");

// -------------------------------- Team --------------------------------

    // -------------------------------- Board --------------------------------

    Route::resource('admin/board',"BoardController");

// -------------------------------- Board --------------------------------

    // -------------------------------- About --------------------------------

    Route::resource('admin/about',"AboutController");

// -------------------------------- About --------------------------------

    // -------------------------------- Project Archive --------------------------------

    Route::resource('admin/archive',"ArchiveController");

// -------------------------------- Project Archive --------------------------------


// --------------------------------- Log out ---------------------------------

    Route::get('logout', "AdminController@logout")->name('logout');

// --------------------------------- Log out ---------------------------------
});


// -------------------------------------------------------------- Admin Panel Content ----------------------------------------------------------------------------

