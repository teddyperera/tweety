<?php

// DB::listen(function ($query) {
//     var_dump($query->sql, $query->bindings);
// });

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

Route::get('/', function () {
    return view('welcome');
});

Route::middleware('auth')->group(function () {
    Route::get('tweets', [App\Http\Controllers\TweetController::class, 'index'])->name('home');
    Route::post('tweets', [App\Http\Controllers\TweetController::class, 'store']);
    Route::post('/tweets/{tweet}/like', [App\Http\Controllers\TweetLikesController::class, 'like']);
    Route::delete('/tweets/{tweet}/like', [App\Http\Controllers\TweetLikesController::class, 'dislike']);


    Route::post('/profiles/{user:username}/follow', [App\Http\Controllers\FollowsController::class, 'store']);
    Route::get('/profile/{user:username}/edit', [App\Http\Controllers\ProfilesController::class, 'edit'])->middleware('can:edit,user');
    Route::patch('/profile/{user:username}/edit', [App\Http\Controllers\ProfilesController::class, 'update'])->middleware('can:edit,user');
    Route::get('/explore', [App\Http\Controllers\ExploreController::class, 'index']);
});

Route::get('/profile/{user:username}', [App\Http\Controllers\ProfilesController::class, 'show'])->name('profile')->middleware('auth');

Auth::routes();
