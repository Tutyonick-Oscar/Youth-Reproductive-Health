<?php


use App\Http\Controllers\admin\AdminLoginController;
use App\Http\Controllers\AdminViewsController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\viewController;

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
        Route::get('/slides',[AdminViewsController::class,'slider'])->name('slider');
        Route::get('/set/{page}',[AdminViewsController::class,'setContent'])->name('content');
        Route::get('/add',[AdminViewsController::class,'addContent'])->name('addContent');
        Route::get('/blogsmanager',[AdminViewsController::class,'blogs'])->name('blogsManager');
        Route::get('/addblog',[AdminViewsController::class,'addBlog'])->name('addblog');
        Route::get('/donations',[AdminViewsController::class,'donations'])->name('donations');
        Route::get('/infocontacts',[AdminViewsController::class,'infocontacts'])->name('infocontacts');
        Route::get('/blogComments',[AdminViewsController::class,'blogComments'])->name('blogComments');
        Route::post('/logout',[AdminLoginController::class,'logout'])->name('logout');

    });
});



