<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SiteConfigController;
use App\Http\Controllers\WelcomeController;
use App\Http\Controllers\ActivityController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\GalleryController;
use App\Http\Controllers\ContactUsController;
use App\Http\Controllers\ContactUsPublicController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

/* Public Routes */
Route::get('/', [WelcomeController::class, 'index'])->name('welcome');
Route::post('/contact', [ContactUsPublicController::class, 'store'])->name('contact-us-public.store');
Route::get('/blog', [BlogController::class, 'index'])->name('blog.index');
Route::get('/blog/{slug}', [BlogController::class, 'show'])->name('blog.show');

/* Protected Routes */
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/home/site', [SiteConfigController::class, 'index'])->name('site.index');
Route::get('/home/site/edit', [SiteConfigController::class, 'show'])->name('site.edit');
Route::post('/home/site/update', [SiteConfigController::class, 'update'])->name('site.update');

Route::resource('/home/posts', PostController::class);
Route::resource('/home/activities', ActivityController::class);
Route::resource('/home/galleries', GalleryController::class);
Route::resource('/home/contact-us', ContactUsController::class);
Route::post('/home/reply-contact-us', [ContactUsController::class, 'reply'])->name('contact-us.reply');