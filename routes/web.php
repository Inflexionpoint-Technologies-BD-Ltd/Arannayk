<?php

use App\Photo;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SslCommerzPaymentController;



Auth::routes(['register' => false]);

// SSLCOMMERZ Start


Route::get('/example1', [SslCommerzPaymentController::class, 'exampleEasyCheckout']);
Route::get('/payment-form', [SslCommerzPaymentController::class, 'exampleHostedCheckout'])->name('donation-form');;

Route::post('/pay', [SslCommerzPaymentController::class, 'index']);
Route::post('/pay-via-ajax', [SslCommerzPaymentController::class, 'payViaAjax']);

Route::post('/success', [SslCommerzPaymentController::class, 'success']);
Route::post('/fail', [SslCommerzPaymentController::class, 'fail']);
Route::post('/cancel', [SslCommerzPaymentController::class, 'cancel']);

Route::post('/ipn', [SslCommerzPaymentController::class, 'ipn']);
//SSLCOMMERZ END

Route::get('/home', 'HomeController@index')->name('home');

// ----------------------------------------------------------------- User Content --------------------------------------------------------------------------------

// ===================== HOMEPAGE=================================================================

Route::get('/', "UserPanelController@index");

// ============================================================ HOMEPAGE =========================

// ========================== WHO WE ARE =================================================

// -------------------------- ABOUT ARANNAYK  -------------------------------------

Route::get('/about-arannayk', "UserPanelController@aboutUs")->name('aboutUs');

// ------------------------------------------------ ABOUT ARANNAYK  ----------------

// -------------------------- OUR TEAM   -------------------------------------

Route::get('/our-team', "UserPanelController@ourTeam")->name('team');

// ---------------------------------------------------  OUR TEAM  -------------

// -------------------------- BOARD MEMBERS  -------------------------------------

Route::get('/board-members', "UserPanelController@boardMembers")->name('boardMembers');

// ------------------------------------------------------- BOARD MEMBERS  ----------

// -------------------------- ACHIEVEMENTS  -----------------------------------------

Route::get('/achievements', "UserPanelController@achievements")->name('achievements');

// -------------------------------------------------- ACHIEVEMENTS  ------------------------------

// -------------------------- PARTNERS & DONORS -------------------------------------

Route::get('/our-partners', "UserPanelController@partnersDonors")->name('partners');

// -------------------------------------------------- PARTNERS & DONORS  --------------

// -------------------------- TIMELINE -------------------------------------

Route::get('/timeline', "UserPanelController@timeline")->name('timeline');

// ---------------------------------------------------- TIMELINE -------------


// ==================================================== WHO WE ARE =========================


//==================================== WHAT WE DO -======================================

// -------------------------- OUR SERVICES -------------------------------------

Route::get('/services', "UserPanelController@services")->name('services');

// ----------------------------------------------------- OUR SERVICES -----------

// -------------------------- CURRENT PROJECTS -------------------------------------

Route::get('/current-projects/{search?}', "UserPanelController@currentProject")->name('projects');

// ----------------------------------------------------- CURRENT PROJECTS ------------

// -------------------------- PROJECT ARCHIVES -------------------------------------

Route::get('/project-archives/{search?}', "UserPanelController@projectArchives")->name('archives');

// ------------------------------------------------ PROJECT ARCHIVES --------------------


// =============================================================== WHAT WE DO =====================



// ================================= WHERE WE WORK =========================================

Route::get('/map', "UserPanelController@map")->name('map');

// ========================================================== WHERE WE WORK -================


// ============================ GET INVOLVED ====================================================

// -------------------------- CAREER -------------------------------------

Route::get('/get-involved/career', "UserPanelController@career")->name('career');

// ---------------------------------------------------- CAREER --------------

// -------------------------- INTERNSHIP -------------------------------------

Route::get('/get-involved/internship', "UserPanelController@internship")->name('internship');

// ------------------------------------------------- INTERNSHIP --------------

// -------------------------- CONSULTANCY -------------------------------------

Route::get('/get-involved/consultancy', "UserPanelController@consultancy")->name('consultancy');

// ----------------------------------------------------- CONSULTANCY ----------

// -------------------------- PROCUREMENT -------------------------------------

Route::get('/get-involved/procurement', "UserPanelController@procurement")->name('procurement');

// ----------------------------------------------------- PROCUREMENT -----------

// ============================================================ GET INVOLVED =====================


//================================ MEDIA CENTER =================================================

// -------------------------- PRESS RELEASE--------------------------------

Route::get('/media-center/press-release', "UserPanelController@pressRelease")->name('press');
Route::get('/media-center/single-press-release/{id}', "UserPanelController@singlepressRelease")->name('single-press');

// ------------------------------------------------- PRESS RELEASE---------

// -------------------------- ACTIVITY UPDATES--------------------------------

Route::get('/media-center/activity-updates', "UserPanelController@activityUpdates")->name('activities');

// ---------------------------------------------------- ACTIVITY UPDATES-------

// -------------------------- VIDEO STORIES ------------------------------------

Route::get('/media-center/video-stories', "UserPanelController@videoStories")->name('videos');

// -------------------------------------------------- VIDEO STORIES -------------

// -------------------------- MEDIA COVERAGE --------------------------------------------

Route::get('/media-center/media-coverage', "UserPanelController@mediaCoverage")->name('media');

// --------------------------------------------------------------- MEDIA COVERAGE --------

// -------------------------- PHOTOS -------------------------------------

Route::get('/media-center/photos', "UserPanelController@photos")->name('photos');
// -------------------------------------------------- PHOTOS -------------

// -------------------------- BLOGS -------------------------------------

Route::get('/media-center/blogs', "UserPanelController@blogs")->name('blogs');

// ---------------------------------------------- BLOGS ------------------


// =================================================================== MEDIA CENTER ===============


// ========================================== KNOWLEDGE =============================================

// -------------------------- PUBLICATIONS --------------------------------

Route::get('/publication', "UserPanelController@publication")->name('publication');

// ------------------------------------------------ PUBLICATIONS -----------

// -------------------------- TOOLS & DATA --------------------------------

Route::get('/tools-data', "UserPanelController@tools")->name('tools');

// ------------------------------------------------- TOOLS & DATA ----------


// ================================================================== KNOWLEDGE =====================


// ===================== ECOSYSTEM ===============================================================

// --------------------------FOREST--------------------------------

Route::get('/forest', "UserPanelController@forest")->name('forest');

// ------------------------------------------------FOREST----------

// -------------------------- BIO - DIVERSITY --------------------------

Route::get('/biodiversity', "UserPanelController@biodiversity")->name('biodiversity');

// ------------------------------------------BIO - DIVERSITY------------

// -------------------------- CLIMATE --------------------------

Route::get('/climate', "UserPanelController@climate")->name('climate');

// --------------------------------------------- CLIMATE ---------

// -------------------------- SUSTAINABILITY --------------------------

Route::get('/sustainability', "UserPanelController@sustainability")->name('sustainability');

// --------------------------------------------- SUSTAINABILITY ---------

// -------------------------- GENDER --------------------------

Route::get('/gender', "UserPanelController@gender")->name('gender');

// ------------------------------------------ GENDER -----------

// =================================================================== ECOSYSTEM -====================================



// ---------------------------- VIEW PROJECTS BY TAG -------------------------------------------

Route::get('/projects/{project}', "UserPanelController@viewProjects")->name('viewProjects');

// ------------------------------------------------------- VIEW PROJECTS BY TAG ------------------


// ---------------------------- VIEW SINGLE PROJECT ARCHIVE BY ID ---------------------------------------------------

Route::get('/view-project/{id}', "UserPanelController@singleproject")->name('viewProject');

// -------------------------------------------------------- VIEW SINGLE PROJECT ARCHIVE BY ID --------------------------


// ---------------------------- VIEW SINGLE CURRENTPROJECT BY ID --------------------------------------------------

Route::get('view-current-project/{id}',"UserPanelController@single_current_project")->name('viewCurrentProject');
Route::get('view-archived-project/{id}',"UserPanelController@single_archived_projects")->name('viewArchivedProject');

// -------------------------------------------------------------- VIEW SINGLE CURRENTPROJECT BY ID ---------------------


// ---------------------------- VIEW SINGLE BLOG BY ID -------------------------------------------

Route::get('view-blogs/{id}',"UserPanelController@single_blogs")->name('viewBlog');

Route::get('view-press/{id}',"UserPanelController@singlepress")->name('viewPress');

Route::get('view-achievements/{id}',"UserPanelController@singleAchievement")->name('viewAchievement');

// -------------------------------------------------- VIEW SINGLE BLOG BY ID -----------------------------


// ---------------------------- CONTACT US -------------------------------------------

Route::get('/contact-us', "UserPanelController@contactUs")->name('contactUs');

// ---------------------------------------------- CONTACT US ---------------------------


// ---------------------------- DONATE -------------------------------------------

Route::get('/donate', "UserPanelController@donate")->name('donate');
// ----------------------------------------------------- DONATE -------------------


// ---------------------------- SEARCH -------------------------------------------

Route::get('/search', "UserPanelController@search")->name('search');

Route::post('/search',"UserPanelController@searchForm")->name('search.post');

// -------------------------------------------- SEARCH ----------------------------


//-------------------------------------------Terms & Conditions-------------------

Route::get('terms','UserPanelController@terms')->name('terms');

//-------------------------------------------Terms & Conditions-------------------



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

    // -------------------------------- Map --------------------------------

    Route::resource('admin/map',"MapController");

// -------------------------------- Map --------------------------------

    // -------------------------------- SVG --------------------------------

    Route::resource('admin/svg',"SvgController");

// -------------------------------- SVG --------------------------------

    // -------------------------------- Image --------------------------------

    Route::resource('admin/image',"ImageController");

// -------------------------------- Image --------------------------------

    // -------------------------------- top --------------------------------

    Route::resource('admin/top',"TopController");

// -------------------------------- top --------------------------------

    // -------------------------------- title --------------------------------

    Route::resource('admin/title',"TitleController");

// -------------------------------- title --------------------------------


// --------------------------------- Log out ---------------------------------

    Route::get('logout', "AdminController@logout")->name('logout');

// --------------------------------- Log out ---------------------------------
});


// -------------------------------------------------------------- Admin Panel Content ----------------------------------------------------------------------------

