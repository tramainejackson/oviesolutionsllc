<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SettingController;
use App\Http\Controllers\ReviewController;

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

Route::get('/', [SettingController::class, 'welcome'])->name('welcome');
Route::get('/terms', [SettingController::class, 'terms'])->name('terms');
Route::get('/about', [SettingController::class, 'about'])->name('about');
Route::get('/services', [SettingController::class, 'services'])->name('services');

//Contact
Route::get('/contact', [SettingController::class, 'contact'])->name('contact');
Route::post('/contact_post', [SettingController::class, 'contact_post'])->name('contact_post');

//Admin Dashboard
Route::get('/dashboard', [SettingController::class, 'dashboard'])->name('dashboard')->middleware(['auth']);
Route::post('/dashboard_update', [SettingController::class, 'dashboard_update'])->name('dashboard_update')->middleware(['auth']);

Route::get('/admin_messages', [SettingController::class, 'admin_messages'])->name('admin_messages')->middleware(['auth']);

//Admin Terms
Route::get('/admin_terms', [SettingController::class, 'admin_terms'])->name('admin_terms')->middleware(['auth']);
Route::post('/admin_terms', [SettingController::class, 'admin_terms_update'])->name('admin_terms_update')->middleware(['auth']);

//Admin Reviews
Route::get('/admin_reviews', [SettingController::class, 'admin_reviews'])->name('admin_reviews')->middleware(['auth']);
Route::post('/admin_reviews', [SettingController::class, 'admin_reviews_update'])->name('admin_reviews_update')->middleware(['auth']);

Route::resource('reviews', ReviewController::class);

require __DIR__.'/auth.php';
