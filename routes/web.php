<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\SiteController;
use Illuminate\Support\Facades\Route;



//Route::get('/', function () {
//    return view('welcome');
//});
//
//Route::get('/dashboard', function () {
//    return view('dashboard');
//})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});


Route::view('/', 'app');
Route::view('/dash', 'dashboard.dash');

// get dashboard pages
Route::view('/notice', 'dashboard.layout.notice');
Route::view('/academic-info', 'dashboard.layout.academic-info');
Route::view('/college-intro', 'dashboard.layout.college-intro');
Route::view('/message', 'dashboard.layout.message');
Route::view('/news-event', 'dashboard.layout.news-event');
Route::view('/achievement', 'dashboard.layout.achievement');
Route::view('/photo-gallery', 'dashboard.layout.photo-gallery');
Route::view('/contact', 'dashboard.layout.contact');

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

require __DIR__.'/auth.php';
