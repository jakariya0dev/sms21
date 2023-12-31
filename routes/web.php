<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\AcademicInfoController;
use App\Http\Controllers\AchievementController;
use App\Http\Controllers\AdministrationController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\CounterController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\NoticeController;
use App\Http\Controllers\PhotoGalleryController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\SiteController;
use Illuminate\Support\Facades\Route;


Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});


Route::view('/', 'app')->name('home');
Route::get('/all-notice', [NoticeController::class, 'allNoticePage'])->name('notice.all');
Route::view('/teacher-list', 'pages.teacher-list')->name('teacher.list');
Route::view('/class-routine', 'pages.class-routine')->name('class.routine');
Route::view('/all-syllabus', 'pages.syllabus')->name('syllabus.all');

// get dashboard pages
Route::middleware('auth')->group(function (){
    Route::view('/admin-dashboard', 'dashboard.banner')->name('admin-dashboard');
    Route::view('/banner', 'dashboard.banner')->name('banner');
    Route::view('/notice', 'dashboard.notice')->name('notice');
    Route::view('/academic-info', 'dashboard.academic-info')->name('academic-info');
    Route::view('/about', 'dashboard.about')->name('about');
    Route::view('/administration', 'dashboard.administration')->name('administration');
    Route::view('/news-event', 'dashboard.news-event');
    Route::view('/achievement', 'dashboard.achievement')->name('achievement');
    Route::view('/photo-gallery', 'dashboard.photo-gallery')->name('photo-gallery');
    Route::view('/contact', 'dashboard.contact')->name('contact');
    Route::view('/counter', 'dashboard.counter')->name('counter');
    Route::view('/academic', 'dashboard.academic')->name('academic');
});

// get data
Route::get('/about-data', [SiteController::class, 'getAboutData']);
Route::get('/achieve-data', [SiteController::class, 'getAchievementData']);
Route::get('/administration-data',  [SiteController::class, 'getAdministrationData']);
Route::get('/counter-data',  [SiteController::class, 'getCounterData']);
Route::get('/academic-data',  [SiteController::class, 'getAcademicData']);
Route::get('/banner-data',  [SiteController::class, 'getBannerData']);
Route::get('/notice-data',  [SiteController::class, 'getNoticeData']);
Route::get('/photo-gallery-data',  [SiteController::class, 'getPhotoGalleryData']);
Route::get('/contact-data',  [SiteController::class, 'getContactData']);
Route::get('/news-event-data',  [SiteController::class, 'getNewsEventData']);


Route::put('/banner-update',  [DashboardController::class, 'updateBannerSection']);
Route::put('/about-update',  [AboutController::class, 'updateAboutData']);
Route::put('/academic-info-update',  [AcademicInfoController::class, 'updateAcademicInfo']);
Route::put('/administration-update/{id}',  [AdministrationController::class, 'updateAdministrationInfo']);
Route::put('/achievement-update/{id}',  [AchievementController::class, 'updateAchievementData']);
Route::put('/contact-update',  [ContactController::class, 'updateContactData']);
Route::put('/counter-update',  [CounterController::class, 'updateCounterData']);
Route::put('/photo-gallery-update/{id}',  [PhotoGalleryController::class, 'updatePhotoGalleryData']);


Route::post('/add-notice',  [NoticeController::class, 'addNotice']);
Route::get('/delete-notice/{id}',  [NoticeController::class, 'deleteNotice']);
Route::get('/download-notice/{id}',  [NoticeController::class, 'downloadNotice']);

Route::post('teachers-update', [SiteController::class, 'updateTeachers'])->name('teachers.update');
Route::post('routine-update', [SiteController::class, 'updateRoutine'])->name('routine.update');
Route::post('syllabus-update', [SiteController::class, 'updateSyllabus'])->name('syllabus.update');






require __DIR__.'/auth.php';
