<?php

use App\Http\Controllers\Frontend\AboutController;
use App\Http\Controllers\Frontend\ContactController;
use App\Http\Controllers\Frontend\HomeController;
use App\Http\Controllers\Frontend\PricingController;
use App\Http\Controllers\Frontend\ProjectController;
use App\Http\Controllers\Frontend\ServiceController;
use Illuminate\Support\Facades\Route;

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

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/contact', [ContactController::class, 'contact'])->name('home.contact');
Route::get('/project', [ProjectController::class, 'project'])->name('home.project');
Route::get('/pricing', [PricingController::class, 'pricing'])->name('home.pricing');
Route::get('/service', [ServiceController::class, 'service'])->name('home.service');
Route::get('/about', [AboutController::class, 'about'])->name('home.about');
Route::post('contact/us', [ContactController::class, 'store'])->name('contact.store');
