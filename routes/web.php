<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\AdminLogin; 
use App\Http\Controllers\Admin\DashboardController; 
use App\Http\Controllers\Admin\ServicesController; 
use App\Http\Controllers\Admin\TeamsController; 
use App\Http\Controllers\Admin\TestimonialController; 
use App\Http\Controllers\Admin\NewsController; 
use App\Http\Controllers\Admin\BlogCategoryController;
use App\Http\Controllers\Admin\BlogController;
use App\Http\Controllers\Admin\ContactUsController;
use App\Http\Controllers\Admin\JobController;
use App\Http\Controllers\Admin\NewsLetterController;


// **************frontend******************* 
use App\Http\Controllers\Frontend\HomeController; 
use App\Http\Controllers\Frontend\UserLoginController; 

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


Route::get('admin',[AdminLogin::class,'admin_login']);
Route::get('SignUp',[AdminLogin::class,'SignUp']);
Route::post('admin_login',[AdminLogin::class,'Adminlogin']);
Route::post('saveSignUp',[AdminLogin::class,'saveSignUp']);
Route::get('verification/{id}',[AdminLogin::class,'verification']);
Route::post('verify',[AdminLogin::class,'verify']);
Route::get('logout',[AdminLogin::class,'logout']);
Route::get('/attendace_check',[AdminLogin::class , 'attendace_check']);
Route::post('/mark_attendance',[AdminLogin::class , 'mark_attendance']);
    Route::get('basic_email',[DashboardController::class,'basic_email']);

Route::middleware("VendorAuth")->group(function(){
    Route::get('dashboard',[DashboardController::class,'index']);
    Route::get('profile',[DashboardController::class,'profile'])->name('profile');

    Route::group(['prefix' => 'blog-category'], function() {
        Route::get('/', [BlogCategoryController::class,'index'])->name('blog-category.index');
        Route::post('/save', [BlogCategoryController::class,'save'])->name('blog-category.save');
        Route::get('/show', [BlogCategoryController::class,'show'])->name('blog-category.show');
        Route::get('/status', [BlogCategoryController::class,'status'])->name('blog-category.status');
        Route::get('/delete', [BlogCategoryController::class,'delete'])->name('blog-category.delete');
        Route::get('/edit', [BlogCategoryController::class,'edit'])->name('blog-category.edit');
    });

    Route::group(['prefix' => 'blog-management'], function() {
        Route::get('/', [BlogController::class,'index'])->name('blog-management.index');
        Route::post('/save', [BlogController::class,'save'])->name('blog-management.save');
        Route::get('/show', [BlogController::class,'show'])->name('blog-management.show');
        Route::get('/status', [BlogController::class,'status'])->name('blog-management.status');
        Route::get('/delete', [BlogController::class,'delete'])->name('blog-management.delete');
        Route::get('/edit', [BlogController::class,'edit'])->name('blog-management.edit');
    });

    Route::group(['prefix' => 'add-Service'], function() {
        Route::get('/', [ServicesController::class,'index'])->name('add-Service.index');
        Route::post('/save', [ServicesController::class,'save'])->name('add-Service.save');
        Route::get('/show', [ServicesController::class,'show'])->name('add-Service.show');
        Route::get('/status', [ServicesController::class,'status'])->name('add-Service.status');
        Route::get('/delete', [ServicesController::class,'delete'])->name('add-Service.delete');
        Route::get('/edit', [ServicesController::class,'edit'])->name('add-Service.edit');
    });

    Route::group(['prefix' => 'add-teams'], function() {
        Route::get('/', [TeamsController::class,'index'])->name('add-teams.index');
        Route::post('/save', [TeamsController::class,'save'])->name('add-teams.save');
        Route::get('/show', [TeamsController::class,'show'])->name('add-teams.show');
        Route::get('/status', [TeamsController::class,'status'])->name('add-teams.status');
        Route::get('/delete', [TeamsController::class,'delete'])->name('add-teams.delete');
        Route::get('/edit', [TeamsController::class,'edit'])->name('add-teams.edit');
    });

    Route::group(['prefix' => 'add-testimonial'], function() {
        Route::get('/', [TestimonialController::class,'index'])->name('add-testimonial.index');
        Route::post('/save', [TestimonialController::class,'save'])->name('add-testimonial.save');
        Route::get('/show', [TestimonialController::class,'show'])->name('add-testimonial.show');
        Route::get('/status', [TestimonialController::class,'status'])->name('add-testimonial.status');
        Route::get('/delete', [TestimonialController::class,'delete'])->name('add-testimonial.delete');
        Route::get('/edit', [TestimonialController::class,'edit'])->name('add-testimonial.edit');
    });

    Route::group(['prefix' => 'add-news'], function() {
        Route::get('/', [NewsController::class,'index'])->name('add-news.index');
        Route::post('/save', [NewsController::class,'save'])->name('add-news.save');
        Route::get('/show', [NewsController::class,'show'])->name('add-news.show');
        Route::get('/status', [NewsController::class,'status'])->name('add-news.status');
        Route::get('/delete', [NewsController::class,'delete'])->name('add-news.delete');
        Route::get('/edit', [NewsController::class,'edit'])->name('add-news.edit');
    });

    Route::group(['prefix' => 'contactUS'], function() {
        Route::get('/', [ContactUsController::class,'index'])->name('contactUS.index');
        Route::get('/show', [ContactUsController::class,'show'])->name('contactUS.show');
        Route::get('/status', [ContactUsController::class,'status'])->name('contactUS.status');
    });

    Route::group(['prefix' => 'newsLetter'], function() {
        Route::get('/', [NewsLetterController::class,'index'])->name('newsLetter.index');
        Route::get('/show', [NewsLetterController::class,'show'])->name('newsLetter.show');
        Route::get('/status', [NewsLetterController::class,'status'])->name('newsLetter.status');
    });

    Route::group(['prefix' => 'appliedJobs'], function() {
        Route::get('/', [JobController::class,'index'])->name('appliedJobs.index');
        Route::get('/show', [JobController::class,'show'])->name('appliedJobs.show');
        Route::get('/status', [JobController::class,'status'])->name('appliedJobs.status');
    });


    // ********************admin middle ware starts******************
Route::middleware("AdminLogin")->group(function(){
 
    });
// ****************admin middle ware ends*********************




});
// ****************vendor middle ware ends*********************


// ******************************frontend*************************************
    Route::get('/',[HomeController::class,'index']);
    Route::get('/about-us',[HomeController::class,'aboutus']);
    Route::get('/contact-us',[HomeController::class,'contactus']);
    Route::get('/sectors',[HomeController::class,'sectors']);
    Route::get('/TeamDetail/{id}',[HomeController::class,'TeamDetail']);
    Route::get('/apply-for-job',[HomeController::class,'applyForJob']);
    Route::get('/blog',[HomeController::class,'blog']);
    Route::get('/blog-single',[HomeController::class,'blogSingle'])->name('blog-single');
    Route::get('/services/{id}',[HomeController::class , 'services']);
    Route::post('/saveNewsletter',[HomeController::class , 'saveNewsletter']);
    Route::post('/savecontactform',[HomeController::class , 'savecontactform']);
    Route::post('/saveapplyForJob',[HomeController::class , 'saveapplyForJob']);



Route::middleware("UserAuth")->group(function(){


});
// ****************UserAuth middle ware ends*********************

// Route::get('admin',[AdminLogin::class,'index']);
