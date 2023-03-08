<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ResumeController;
use App\Http\Controllers\ResumeAboutController;
use App\Http\Controllers\ResumeServicesController;
use App\Http\Controllers\ResumeContactController;
use App\Http\Controllers\ResumeFeedbackController;

use App\Http\Controllers\AdminResumeController;
use App\Http\Controllers\AdminResume404Controller;
use App\Http\Controllers\AdminResumeCardController;
use App\Http\Controllers\AdminResumeCarouselController;
use App\Http\Controllers\AdminResumeFormController;
use App\Http\Controllers\AdminResumeModalController;
use App\Http\Controllers\AdminResumeTableController;
use App\Http\Controllers\AdminResumeChartController;
use App\Http\Controllers\AdminResumeGridController;
use App\Http\Controllers\AdminResumeMailController;
use App\Http\Controllers\AdminResumeWidgetController;
use App\Http\Controllers\AdminResumeLoginController;
use App\Http\Controllers\AdminResumeRegisterController;
use App\Http\Controllers\AdminResumeForgotController;

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

// Route::get('/', function () {
//     return view('welcome');
// });

// Route::get("/", function() {
//     return view('index');
// });

// Route::get("/About-US", function(){
//     return view('about');
// });

// Route::get("/Our-Team", function(){
//     return view('team');
// });

// Route::get("/Our-Vision",function(){
//     return view('vision');
// });

// Route::get("/Contact-US",function(){
//     return view('contact');
// });
// Route::get("/Login-Here",function(){
//     return view('login');
// });

// Route::get("/Register-Here",function(){
//     return view('register');
// });

// Route::get("/Manage-Profile",function(){
//     return view('profile');
// });



// HERE WE HAVE MADE THE ROUTING FOR USER TEMPLATE INTEGRATION//

 // resume routing code for controller
 Route::get("/",[ResumeController::class,"index"]);

// resume routing code for About-us page
 Route::get("/About-Us",[ResumeAboutController::class,"index"]);

// resume routing code for Our-Services page
 Route::get("/Our-Services",[ResumeServicesController::class,"index"]);

// resume routing code for Contact-us Page
 Route::get("/Contact-Us",[ResumeContactController::class,"index"]);

 // resume routing code for feedback Page
 Route::get("/Feedback",[ResumeFeedbackController::class,"index"]);
 Route::post("/Feedback",[ResumeFeedbackController::class,"store"]);


// // HERE WE WILL MAKE ADMIN TEMPLATE INTEGRATION

// //admin resume code for controller
// Route::get("/",[AdminResumeController::class,"index"]);

// //admin resume code for 404 error
// Route::get("/404-Error",[AdminResume404Controller::class,"index"]);

// //admin resume code for card page
// Route::get("/Card-Page",[AdminResumeCardController::class,"index"]);

// //admin resume code for carousel page
// Route::get("/Carousel-Page",[AdminResumeCarouselController::class,"index"]);

// //admin resume code for form page
// Route::get("/Form-Page",[AdminResumeFormController::class,"index"]);

// //admin resume code for modal page
// Route::get("/Modal-Page",[AdminResumeModalController::class,"index"]);

// //admin resume code for table page
// Route::get("/Table-Page",[AdminResumeTableController::class,"index"]);

// //admin resume code for chart page
// Route::get("/Chart-Page",[AdminResumeChartController::class,"index"]);

// //admin resume code for grid page
// Route::get("/Grid-Page",[AdminResumeGridController::class,"index"]);

// //admin resume code for mail page
// Route::get("/Mail-Page",[AdminResumeMailController::class,"index"]);

// //admin resume code for widget page
// Route::get("/Widget-Page",[AdminResumeWidgetController::class,"index"]);

// //admin resume code for login page
// Route::get("/Login-Page",[AdminResumeLoginController::class,"index"]);

// //admin resume code for register page
// Route::get("/Register-Page",[AdminResumeRegisterController::class,"index"]);

// //admin resume code for forgot-password page
// Route::get("/Forgot-Password-Page",[AdminResumeForgotController::class,"index"]);






