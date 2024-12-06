<?php


use App\Http\Controllers\CommentController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\EventController;
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
#Route::get('/mail',[ViewController::class,'mail']);

Route::get('/',[ViewController::class,'index'])->name('home');
Route::get('/getslides',[ViewController::class,'getSlides']);

Route::get('/about',[ViewController::class,'aboutUs'])->name('about');
Route::get('/causes',[ViewController::class,'causes'])->name('causes');
Route::get('/causes/{id}',[CauseContoller::class,'detail'])->name('cause.detail');
Route::get('/blogs',action: [ViewController::class,'blogs'])->name('blogs');
Route::get('/blogs/{type}',action: [BlogController::class,'typeOfBlog'])->name('typeOfBlog');
Route::get('/events/{status}',action: [EventController::class,'events'])->name('events');
Route::get('/event/{id}/details',[EventController::class,'eventDetail'])->name('event.detail');


Route::get('/blog/{id}/details',[BlogController::class,'blogDetail'])->name('blog.detail');
Route::post('/blog/{id}/details',[CommentController::class,'comment'])->name('blog.comment');

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
        Route::get('/blog/{id}',[BlogController::class,'getBlog'])->name('getBlog');
        Route::put('/blog/{id}/update',[BlogController::class,'update'])->name('updateBlog');
        Route::delete('blog/{id}/delete',[BlogController::class,'delete'])->name('deleteBlog');


        /**
         * Events
         */
        Route::get('/events/{status}',[EventController::class,'getEvents'])->name('getEvents');
        Route::get('/addevent',[EventController::class,'addEvent'])->name('addEvent');
        Route::post('/addevent',[EventController::class,'store'])->name('createEvent');
        Route::get('/event/{id}',[EventController::class,'getEvent'])->name('getEvent');
        Route::put('/event/{id}',[EventController::class,'update'])->name('updateEvent');
        Route::delete('/event/{id}',[EventController::class,'delete'])->name('deleteEvent');



        /**
         * Contacts : 
         */
        Route::get('/infocontacts',[ContactController::class,'infocontacts'])->name('infocontacts');
        Route::delete('/infocontacts/{id}',[ContactController::class,'deleteContacts'])->name('deleteContacts');

        /**
         * Blogs Comments
         */
        Route::get('/blogcomments',[AdminViewsController::class,'blogComments'])->name('blogComments');
        Route::delete('/blogcomment/{id}',[CommentController::class,'deleteComment'])->name('deleteComment');



        Route::get('/donations',[AdminViewsController::class,'donations'])->name('donations');
        Route::post('/logout',[AdminLoginController::class,'logout'])->name('logout');

    });
});



