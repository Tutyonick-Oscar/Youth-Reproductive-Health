<?php


use App\Http\Controllers\ContactController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\CauseContoller;
use App\Http\Controllers\TeamController;
use App\Http\Controllers\viewController;
use App\Http\Controllers\AboutUsController;
use App\Http\Controllers\MissionController;
use App\Http\Controllers\AdminViewsController;
use App\Http\Controllers\admin\DataStoreController;
use App\Http\Controllers\admin\OurVisionController;
use App\Http\Controllers\admin\AdminLoginController;

#Route::get('/createuser',[ViewController::class,'createuser']);

Route::get('/',[ViewController::class,'index'])->name('home');
Route::get('/about',[ViewController::class,'aboutUs'])->name('about');
Route::get('/causes',[ViewController::class,'causes'])->name('causes');
Route::get('/blogs',[ViewController::class,'blogs'])->name('blogs');
Route::get('/blog/{id}',[ViewController::class,'blogDetail'])->name('blog.detail');
Route::get('/contact',action: [ViewController::class,'contact'])->name('contact');
Route::post('/contact',[ContactController::class,'toContact'])->name('toContact');


/**
 * dashboard routes
 */

Route::prefix('adminpanel/login')->group(function () {
    Route::get('/',[AdminViewsController::class,'login'])->name('login');
    Route::post('/',[AdminLoginController::class,'login'])->name('logedIn');
});

Route::middleware('auth')->group(function (){
    Route::prefix('/adminpanel')->name('admin.')->group( function (){
        Route::get('/',[AdminViewsController::class,'welcome'])->name('welcome');
        
        /**
         * slides
         */
        Route::get('/slides',[AdminViewsController::class,'slider'])->name('slider');
        Route::get('/slides/add',[AdminViewsController::class,'addSlider'])->name('addSlider');
        Route::post('/slides/store',[DataStoreController::class,'storeSlide'])->name('storeSlide');
        Route::get('/slides/{id}',[DataStoreController::class,'updateSlide'])->name('updateSlide');
        Route::put('/slides/{id}',[DataStoreController::class,'updatedSlide'])->name('updatedSlide');
        Route::delete('/slides/delete/{id}',[DataStoreController::class,'deleteSlide'])->name('deleteSlide');
        
        /**
         * vision
         */

        Route::get('/vision',[AdminViewsController::class,'setVision'])->name('setVision');
        Route::post('/vision',[OurVisionController::class,'store'])->name('storeVision');
        Route::put('/vision',[OurVisionController::class,'update'])->name('updateVision');

        /**
         * Mission
         */
        Route::get('/mission',[AdminViewsController::class,'setmission'])->name('setMission');
        Route::post('/mission',[MissionController::class,'store'])->name('storeMission');
        Route::put('/mission',[MissionController::class,'update'])->name('updateMission');
        
        /**
         * About us
         */
        Route::get('/aboutus',[AboutUsController::class, 'show'])->name('about');
        Route::post('/aboutus',[AboutUsController::class, 'store'])->name('storeAbout');
        Route::put('/aboutus',[AboutUsController::class, 'update'])->name('updateAbout');
        /**
         * Causes
         */
        Route::get('/causes',[CauseContoller::class, 'show'])->name('causes');
        Route::get('/causes/add',[CauseContoller::class, 'add'])->name('addCauses');
        Route::post('/causes/add',[CauseContoller::class, 'store'])->name('storeCauses');
        Route::get('/cause/{id}',[CauseContoller::class, 'getCauses'])->name('getCauses');
        Route::put('/cause/{id}',[CauseContoller::class, 'update'])->name('updateCauses');
        Route::delete('/cause/{id}',[CauseContoller::class, 'delete'])->name('deleteCauses');
        /**
         * Team Members
         */
        Route::get('/team-members',[TeamController::class, 'show'])->name('members');
        Route::get('/team-members/add',[TeamController::class, 'add'])->name('addMember');
        Route::post('/team-members/add',[TeamController::class, 'store'])->name('storeMember');
        Route::get('team-member/{id}',[TeamController::class, 'getMember'])->name('getMember');
        Route::put('/team/-member{id}',[TeamController::class, 'update'])->name('updateMember');
        Route::delete('/team-member/{id}',[TeamController::class, 'delete'])->name('deleteMember');

        Route::get('/add',[AdminViewsController::class,'addContent'])->name('addContent');
        /**
         * Blogs
         */
        
        Route::post('/addblog',[BlogController::class,'store'])->name('createBlog');
        Route::get('/addblog',[AdminViewsController::class,'addBlog'])->name('addblog');
        Route::get('/blogsmanager',[AdminViewsController::class,'blogs'])->name('blogsManager');
        Route::put('/blog/{id}',[BlogController::class,'update'])->name('updateBlog');
        Route::delete('/blog/{id}',[BlogController::class,'delete'])->name('deleteBlog');
        Route::get('/blog/{id}',[BlogController::class,'getBlog'])->name('getBlog');

        /**
         * Contacts : 
         */
        Route::get('/infocontacts',[ContactController::class,'infocontacts'])->name('infocontacts');
        Route::delete('/infocontacts/{id}',[ContactController::class,'deleteContacts'])->name('deleteContacts');

        Route::get('/donations',[AdminViewsController::class,'donations'])->name('donations');
        Route::get('/blogComments',[AdminViewsController::class,'blogComments'])->name('blogComments');
        Route::post('/logout',[AdminLoginController::class,'logout'])->name('logout');

    });
});



