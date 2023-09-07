<?php

use App\Http\Controllers\SiteController;
use Illuminate\Support\Facades\Route;


Route::view('/', 'app');

// get pages

//Route::get('/about', )->name('about');
//Route::get('/about', )->name('about');
//Route::get('/about', )->name('about');

Route::get('/about-data', [SiteController::class, 'getAboutData'])->name('about');
Route::get('/achieve-data', [SiteController::class, 'getAchievementData'])->name('achieve');
Route::get('/administration-data',  [SiteController::class, 'getAdministrationData'])->name('administration');
Route::get('/counter-data',  [SiteController::class, 'getCounterData'])->name('counter');
Route::get('/feature-data',  [SiteController::class, 'getFeatureData'])->name('feature');
Route::get('/hero-data',  [SiteController::class, 'getHeroData'])->name('hero');
Route::get('/notice-data',  [SiteController::class, 'getNoticeData'])->name('notice');
Route::get('/photo-gallery-data',  [SiteController::class, 'getPhotoGalleryData'])->name('photo.gallery');
Route::get('/contact-data',  [SiteController::class, 'getContactData'])->name('contact');
Route::get('/news-event-data',  [SiteController::class, 'getNewsEventData'])->name('contact');








