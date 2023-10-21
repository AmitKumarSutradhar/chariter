<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Front\WebsiteController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', [WebsiteController::class,'home'])->name('home');
Route::get('/category-blogs', [WebsiteController::class,'categoryBlogs'])->name('category-blogs');
Route::get('/blog-details', [WebsiteController::class,'blogDetails'])->name('blog-details');





Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});
