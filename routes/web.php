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

Route::get('/adminpanel',[AdminViewsController::class,'welcome'])->name('admin.welcome');
