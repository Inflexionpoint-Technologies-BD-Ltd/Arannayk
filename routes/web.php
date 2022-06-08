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
Route::get('/achievements', "UserPanelController@achievements");
Route::get('/our-partners', "UserPanelController@partnersDonors");





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

    // -------------------------------- Achievement --------------------------------

    Route::resource('admin/achievement',"AchievementController");

// -------------------------------- Achievement --------------------------------

    // -------------------------------- Partner --------------------------------

    Route::resource('admin/partner',"PartnerController");

// -------------------------------- Partner --------------------------------

    // -------------------------------- Career --------------------------------

    Route::resource('admin/career',"CareerController");

// -------------------------------- Career --------------------------------

    // -------------------------------- Consultancy --------------------------------

    Route::resource('admin/consultancy',"ConsultancyController");

// -------------------------------- Consultancy --------------------------------

    // -------------------------------- Procurement --------------------------------

    Route::resource('admin/procurement',"ProcurementController");

// -------------------------------- Procurement --------------------------------

    // -------------------------------- Press --------------------------------

    Route::resource('admin/press',"PressController");

// -------------------------------- Press --------------------------------

    // -------------------------------- Blog --------------------------------

    Route::resource('admin/blog',"BlogController");

// -------------------------------- Blog --------------------------------

    // -------------------------------- Media --------------------------------

    Route::resource('admin/media',"MediaController");

// -------------------------------- Media --------------------------------

    // -------------------------------- Activity --------------------------------

    Route::resource('admin/activity','ActivityController');

// -------------------------------- Activity --------------------------------

    // -------------------------------- Photo --------------------------------

    Route::resource('admin/photo',"PhotoController");

// -------------------------------- Photo --------------------------------

    // -------------------------------- Video --------------------------------

    Route::resource('admin/video',"VideoController");

// -------------------------------- Video --------------------------------

// --------------------------------- Log out ---------------------------------

    Route::get('logout', "AdminController@logout")->name('logout');

// --------------------------------- Log out ---------------------------------
});


// -------------------------------------------------------------- Admin Panel Content ----------------------------------------------------------------------------

