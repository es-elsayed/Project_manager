<?php

use App\Http\Controllers\Front\CardController;
use App\Http\Controllers\Front\ProjectController;
use App\Http\Controllers\Front\SharedProjectController;
use App\Http\Controllers\Front\TaskController;
use Illuminate\Support\Facades\Auth;
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
    return redirect()->route('home');
});
Route::get('/logout', function () {
    Auth::logout();
    return redirect()->route('home');
});
Route::group(['middleware' => 'auth'], function () {
    Route::group(['prefix' => 'projects'], function () {
        Route::get('/', [ProjectController::class, 'index'])->name('projects.index');
        Route::get('/create', [ProjectController::class, 'create'])->name('projects.create');
        Route::post('/', [ProjectController::class, 'store'])->name('projects.store');
        Route::delete('/{id}', [ProjectController::class, 'destroy'])->name('projects.destroy');
        // Route::get('/{id}', [ProjectController::class, 'edit'])->name('projects.edit');
        // Route::put('/{id}', [ProjectController::class, 'update'])->name('projects.update');
    });
    Route::group(['prefix' => 'projects/{pid}/tasks'], function () {
        Route::get('/', [TaskController::class, 'index'])->name('projects.tasks.index');
        Route::post('/', [TaskController::class, 'store'])->name('projects.tasks.store');
    });
    Route::group(['prefix' => 'projects/{pid}/Shared'], function () {
        Route::post('/', [SharedProjectController::class, 'store'])->name('projects.shared.store');
    });
    Route::group(['prefix' => 'projects/{pid}/tasks/{tid}/card'], function () {
        Route::post('/', [CardController::class, 'store'])->name('projects.tasks.card.store');
    });
});
Auth::routes();
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
