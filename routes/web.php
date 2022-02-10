<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\{DashboardController, ProfileController, BLogController, FAQController};

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

//Route::get('/posts/{slug}', function ($slug) {
//
//});

Route::get('/posts/{slug}', [\App\Http\Controllers\PostsController::class, 'show']);

Route::get('/', [\App\Http\Controllers\WelcomeController::class, 'show']);

Route::get('/profile', [ProfileController::class, 'show']);
Route::get('/dashboard', [DashboardController::class, 'show']);
Route::get('/blog', [BlogController::class, 'show']);
Route::get('/faq', [FAQController::class, 'show']);
Route::get('/blog/{blog}', function($blog) {
    $blogs = [
        'experience',
        'feedback',
        'website',
        'profession',
        'studychoice',
        'swot'
    ];

    if(array_search($blog, $blogs) === null) {
        abort(404, 'Sorry, that blog was not found.');
    }
    return view($blog);
});
