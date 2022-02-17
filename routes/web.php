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

Route::get('/faq', [FAQController::class, 'show']);

Route::get('/blog', [BlogController::class, 'index']);
Route::get('/blog/{article}', [BlogController::class, 'show']);
