<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;



Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

// ----------------------------------------------------------------- User Content --------------------------------------------------------------------------------

Route::get('/', "UserPanelController@index");
Route::get('/donate', "UserPanelController@donate")->name('donate');

Route::get('/services', "UserPanelController@services")->name('services');
Route::get('/current-projects', "UserPanelController@currentProject")->name('projects');
Route::get('/project-archives', "UserPanelController@projectArchives")->name('archives');

Route::get('/about-arannayk', "UserPanelController@aboutUs")->name('aboutUs');
Route::get('/our-team', "UserPanelController@ourTeam")->name('team');
Route::get('/board-members', "UserPanelController@boardMembers")->name('boardMembers');
Route::get('/achievements', "UserPanelController@achievements")->name('achievements');
Route::get('/our-partners', "UserPanelController@partnersDonors")->name('partners');
Route::get('/timeline', "UserPanelController@timeline")->name('timeline');


Route::get('/get-involved/career', "UserPanelController@career")->name('career');
Route::get('/get-involved/internship', "UserPanelController@internship")->name('internship');
Route::get('/get-involved/consultancy', "UserPanelController@consultancy")->name('consultancy');
Route::get('/get-involved/procurement', "UserPanelController@procurement")->name('procurement');

Route::get('/media-center/press-release', "UserPanelController@pressRelease")->name('press');
Route::get('/media-center/activity-updates', "UserPanelController@activityUpdates")->name('activities');
Route::get('/media-center/video-stories', "UserPanelController@videoStories")->name('videos');
Route::get('/media-center/media-coverage', "UserPanelController@mediaCoverage")->name('media');
Route::get('/media-center/photos', "UserPanelController@photos")->name('photos');
Route::get('/media-center/blogs', "UserPanelController@blogs")->name('blogs');

Route::get('/publication', "UserPanelController@publication")->name('publication');
Route::get('/tools-data', "UserPanelController@tools")->name('tools');

Route::get('/forest', "UserPanelController@forest")->name('forest');
Route::get('/biodiversity', "UserPanelController@biodiversity")->name('biodiversity');
Route::get('/climate', "UserPanelController@climate")->name('climate');
Route::get('/sustainability', "UserPanelController@sustainability")->name('sustainability');
Route::get('/gender', "UserPanelController@gender")->name('gender');

Route::get('/contact-us', "UserPanelController@contactUs")->name('contactUs');

Route::get('/map', "UserPanelController@map")->name('map');
Route::get('/projects', "UserPanelController@viewProjects")->name('viewProjects');


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

    // -------------------------------- tools --------------------------------

    Route::resource('admin/tool',"ToolController");

// -------------------------------- tools --------------------------------

    // -------------------------------- Donate --------------------------------

    Route::resource('admin/donate',"DonateController");

// -------------------------------- Donate --------------------------------

    // -------------------------------- Ecosystem --------------------------------

    Route::resource('admin/ecosystem','EcosystemController');

// -------------------------------- Ecosystem --------------------------------

    // -------------------------------- Mission --------------------------------

    Route::resource('admin/mission',"MissionController");

// -------------------------------- Mission --------------------------------

    // -------------------------------- Timeline --------------------------------

    Route::resource('admin/timeline',"TimelineController");

// -------------------------------- Timeline --------------------------------


// --------------------------------- Log out ---------------------------------

    Route::get('logout', "AdminController@logout")->name('logout');

// --------------------------------- Log out ---------------------------------
});


// -------------------------------------------------------------- Admin Panel Content ----------------------------------------------------------------------------

