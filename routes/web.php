<?php

use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\ContactController;
use App\Http\Controllers\Admin\CourseController;
use App\Http\Controllers\Admin\InstructorController;
use App\Http\Controllers\Admin\ServiceController;
use App\Http\Controllers\Admin\StudentController;
use App\Http\Controllers\Admin\TestimonialController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\PublicController;
use App\Http\Controllers\Student\ActionController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('index',[PublicController::class,'index'])->name('index');
Route::get('about',[PublicController::class,'about'])->name('about');
Route::get('contact',[PublicController::class,'contact'])->name('contact');
Route::get('courses',[PublicController::class,'courses'])->name('courses');
Route::get('addStudentToCourse/{course}',[PublicController::class,'addStudentToCourse'])->name('addStudentToCourse');
Route::get('team',[PublicController::class,'team'])->name('team');
Route::get('testimonial',[PublicController::class,'testimonial'])->name('testimonial');
Route::post('contact_post',[PublicController::class,'contact_post'])->name('contact_post');
Route::get('like_course/{course}',[PublicController::class,'like_course'])->name('like_course');



Route::prefix('admin')
// ->middleware('verified')
->group(function(){
    Route::resource('category',CategoryController::class)->except(['show']);
    Route::resource('course',CourseController::class);// has problem
    Route::resource('contact',ContactController::class)->only(['index','show','destroy']);
    Route::resource('instructor',InstructorController::class)->except(['destroy']);
    Route::resource('service',ServiceController::class);
    Route::resource('testimonial',TestimonialController::class);
    Route::resource('user',UserController::class)->except(['show']);
    Route::resource('student',StudentController::class);
});





Auth::routes(['verify'=>true]);

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->middleware('verified')->name('home');
