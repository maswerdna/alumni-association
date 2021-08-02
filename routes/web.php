<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BlogPostController;

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

Route::get('/', function () {
    return view('welcome');
})->middleware(['guest'])->name('welcome');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');


Route::get('/blog', [BlogPostController::class, 'index'])->name('blog');
#
Route::get('/blog/create/post', [BlogPostController::class, 'create']);
Route::post('/blog/create/post', [BlogPostController::class, 'store']);
#
Route::get('/blog/{blogPost}/edit', [BlogPostController::class, 'edit']);
Route::put('/blog/{blogPost}/edit', [BlogPostController::class, 'update']);
#
#
Route::delete('/blog/{blogPost}', [BlogPostController::class, 'destroy']);
Route::get('/blog/{blogPost}', [BlogPostController::class, 'show']);

require __DIR__.'/auth.php';
