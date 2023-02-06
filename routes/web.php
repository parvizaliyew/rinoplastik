<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FrontController;
use App\Http\Controllers\Admin\SeoController;
use App\Http\Controllers\Auth\AuthController;
use App\Http\Controllers\Admin\BlogController;
use App\Http\Controllers\Admin\AboutController;
use App\Http\Controllers\Admin\GaleryController;
use App\Http\Controllers\Admin\SliderController;
use App\Http\Controllers\Admin\ServiceController;
use App\Http\Controllers\Admin\SettingController;
use App\Http\Controllers\Admin\QuestionController;
use App\Http\Controllers\Admin\CertifcatController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\AboutDoctorController;

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

Route::name('admin.')->prefix('/admin')->group(function () {

    Route::group(['middleware' => 'isLogin'],function()
    {
    
        Route::get('/login',[AuthController::class,'index'])->name('login');
        Route::post('/login-post',[AuthController::class,'signin_post'])->name('login_post');
    
    });
    
    Route::group(['middleware' => 'notLogin'],function()
    {
    
        Route::get('/index',[DashboardController::class,'index'])->name('index');
        Route::get('/logout',[AuthController::class,'logout'])->name('logout');
        Route::get('/profil-update',[AuthController ::class,'profil_update'])->name('profil_update');
        Route::post('/profil-update',[AuthController ::class,'profilupdate_post'])->name('profilupdate_post');

    
        //**** SLIDER ****/
        Route::resource('/slider', SliderController::class);
        Route::get('/slider/delete/{id}',[SliderController::class,'delete'])->name('slider.delete');
        
        //**** Setting ****/
        Route::get('/setting-index', [SettingController::class,'index'])->name('setting.index');
        Route::post('/setting-update/{id}', [SettingController::class,'update'])->name('setting.update');
        
        //****SEO ****/
        Route::resource('/seo', SeoController::class);
        Route::get('/seo/delete/{id}',[SeoController::class,'delete'])->name('seo.delete');

        //****Services ****/
        Route::resource('/service', ServiceController::class);
        Route::get('/service/delete/{id}',[ServiceController::class,'delete'])->name('service.delete');
        
        //**** About ****/
        Route::get('/about', [AboutController::class,'index'])->name('about.index');
        Route::post('/about/{id}', [AboutController::class,'update'])->name('about.update');

        //**** About ****/
        Route::get('/doctor-about', [AboutDoctorController::class,'index'])->name('doctor_about.index');
        Route::post('/doctor-about/{id}', [AboutDoctorController::class,'update'])->name('doctor_about.update');

        //****Certifcats ****/
        Route::resource('/certifcat', CertifcatController::class);
        Route::get('/certifcats/delete/{id}',[CertifcatController::class,'delete'])->name('certifcat.delete');

        //****Gallery ****/
        Route::resource('/galery', GaleryController::class);
        Route::get('/galery/delete/{id}',[GaleryController::class,'delete'])->name('galery.delete');

        //****Blog ****/
        Route::resource('/blog', BlogController::class);
        Route::get('/blog/delete/{id}',[BlogController::class,'delete'])->name('blog.delete');


        //****Question ****/
        Route::resource('/question', QuestionController::class);
        Route::get('/question/delete/{id}',[QuestionController::class,'delete'])->name('question.delete');
    });
    
    
    
    });
    Route::get('/', [FrontController::class ,'index'])->name('index');
    Route::get('/haqqimizda', [FrontController::class ,'about'])->name('about');
    Route::get('/yenilikler-xeberler', [FrontController::class ,'blog'])->name('blog');
    Route::get('/yenilikler-xeberler/{slug}', [FrontController::class ,'blog_single'])->name('blog_single');
    Route::get('/qaleriya', [FrontController::class ,'qal'])->name('qal');
    Route::get('/elaqe', [FrontController::class ,'contact'])->name('contact');
    Route::post('elaqe_post',[FrontController::class,'contact_post'])->name('contact_post');