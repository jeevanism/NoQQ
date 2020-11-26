<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\VideoController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\StripeController;
 


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
Auth::routes();

Route::get('/', function (){
  return view('home');  
});


 
Route::get('/contact', function () {
    return view('contact');
});



//Route::get('/profile',[ProfileController::Class,'authenticateUsers']);
Route::get('/profile',[ProfileController::Class,'authenticateUsers'])->name('profile');

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
 

/**
 * Required actions for Videos
 * GET /videos - show list of videos
 * GET /videos/add - show a form to submit new video
 * POST /videos - should submit the form to DB
 * GET /videos/{ID} - show a single video with ID (sluggify for SEO)
 * GET (PUT) /video/{ID}/edit - EDIT a single video with ID
 * DELETE /video/id/delete - delete a particular video 
 */

 Route::get('/addvideo', [VideoController::Class,'create']);
 Route::post('/addvideo',[VideoController::Class,'store']); 
 
 Route::get('videos',[VideoController::Class,'index'])->name('videos'); 

  // route to show single video
 Route::get('videos/{video}',[VideoController::Class,'show'])->name('watch');
 Route::get('cats',[CategoryController::Class,'index'])->name('cats');

 Route::get('videos/delete/{video}',[VideoController::Class,'destroy']);


 /**
  * Routes for Stripe Payement Actions
  */
 Route::get('/stripe-payment',[StripeController::Class,'index'])->name('stripe-payment');;
 Route::post('/stripe-payment-process',[StripeController::Class,'process'])->name('stripe-payment-process'); 

 Route::get('/stripe-success',[StripeController::Class,'stripeSuccess'])->name('stripe-success');
 

  