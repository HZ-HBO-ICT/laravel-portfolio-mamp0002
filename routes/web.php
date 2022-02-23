<?php

use App\Models\Article;
use App\Http\Controllers\{ArticleController, DashboardController, FAQController, ProfileController, GradeController};
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
Route::resource('/faq', FAQController::class);
Route::resource('/article', ArticleController::class);
Route::resource('/grade', GradeController::class);
