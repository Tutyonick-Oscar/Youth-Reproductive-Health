<?php


use Illuminate\Support\Facades\Route;
use App\Http\Controllers\viewController;
use App\Http\Controllers\MissionController;
use App\Http\Controllers\AdminViewsController;
use App\Http\Controllers\admin\DataStoreController;
use App\Http\Controllers\admin\OurVisionController;
use App\Http\Controllers\admin\AdminLoginController;

Route::get('/',[ViewController::class,'index'])->name('home');
Route::get('/about',[ViewController::class,'aboutUs'])->name('about');
Route::get('/causes',[ViewController::class,'causes'])->name('causes');
Route::get('/blogs',[ViewController::class,'blogs'])->name('blogs');
Route::get('/blog/{id}',[ViewController::class,'blogDetail'])->name('blog.detail');
Route::get('/contact',[ViewController::class,'contact'])->name('contact');

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
        Route::get('/mission',[AdminViewsController::class,'setmission'])->name('setmission');
        Route::post('/mission',[MissionController::class,'store'])->name('storeMission');
        Route::put('/mission',[MissionController::class,'update'])->name('updateMission');

        Route::get('/add',[AdminViewsController::class,'addContent'])->name('addContent');
        Route::get('/blogsmanager',[AdminViewsController::class,'blogs'])->name('blogsManager');
        Route::get('/addblog',[AdminViewsController::class,'addBlog'])->name('addblog');
        Route::get('/donations',[AdminViewsController::class,'donations'])->name('donations');
        Route::get('/infocontacts',[AdminViewsController::class,'infocontacts'])->name('infocontacts');
        Route::get('/blogComments',[AdminViewsController::class,'blogComments'])->name('blogComments');
        Route::post('/logout',[AdminLoginController::class,'logout'])->name('logout');

    });
});



