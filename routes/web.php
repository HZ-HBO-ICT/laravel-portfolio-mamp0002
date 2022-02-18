<?php

use App\Models\Article;
use App\Http\Controllers\{BLogController, DashboardController, FAQController, ProfileController};
use App\Http\Controllers\ArticlesController;
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

Route::get('/posts/{slug}', [\App\Http\Controllers\PostsController::class, 'show']);

Route::get('/', [\App\Http\Controllers\WelcomeController::class, 'show']);

Route::get('/profile', [ProfileController::class, 'show']);
Route::get('/dashboard', [DashboardController::class, 'show']);

Route::post('/faq', [FAQController::class, 'store']);
Route::get('/faq/create', [FAQController::class, 'create']);
Route::get('/faq', [FAQController::class, 'show']);
Route::get('/faq/{faq}/edit', [FAQController::class, 'edit']);
Route::put('/faq/{faq}', [FAQController::class, 'update']);
Route::delete('/faq/{faq}', [FAQController::class, 'destroy']);

Route::get('/blog', [BlogController::class, 'index']);
Route::post('/blog', [BlogController::class, 'store']);
Route::get('/blog/create', [BlogController::class, 'create']);
Route::get('/blog/{article}', [BlogController::class, 'show']);
Route::get('/blog/{article}/edit', [BlogController::class, 'edit']);
Route::put('/blog/{article}', [BlogController::class, 'update']);
Route::delete('/blog/{article}', [BlogController::class, 'destroy']);
