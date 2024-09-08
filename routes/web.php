<?php


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

Route::get('/adminpanel/login',[AdminViewsController::class,'login'])->name('admin.login');
Route::get('/adminpanel',[AdminViewsController::class,'welcome'])->name('admin.welcome');
Route::get('/adminpanel/slides',[AdminViewsController::class,'slider'])->name('admin.slider');
Route::get('/adminpanel/vision',[AdminViewsController::class,'vision'])->name('admin.vision');
Route::get('/adminpanel/add',[AdminViewsController::class,'addContent'])->name('admin.addContent');
Route::get('/adminpanel/blogsmanager',[AdminViewsController::class,'blogs'])->name('admin.blogsManager');
Route::get('/adminpanel/addblog',[AdminViewsController::class,'addBlog'])->name('admin.addblog');
Route::get('/adminpanel/donations',[AdminViewsController::class,'donations'])->name('admin.donations');
Route::get('/adminpanel/infocontacts',[AdminViewsController::class,'infocontacts'])->name('admin.infocontacts');
Route::get('/adminpanel/blogComments',[AdminViewsController::class,'blogComments'])->name('admin.blogComments');


