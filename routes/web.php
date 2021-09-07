<?php

use App\Http\Controllers\ProjectManagerController;
use App\Http\Controllers\TaskController;
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
        Route::get('/', [ProjectManagerController::class, 'index'])->name('projects.index');
        Route::get('/create', [ProjectManagerController::class, 'create'])->name('projects.create');
        Route::post('/', [ProjectManagerController::class, 'store'])->name('projects.store');
        Route::delete('/{id}', [ProjectManagerController::class, 'destroy'])->name('projects.destroy');
        // Route::get('/{id}', [ProjectManagerController::class, 'edit'])->name('projects.edit');
        // Route::put('/{id}', [ProjectManagerController::class, 'update'])->name('projects.update');
    });
    Route::group(['prefix' => 'projects/{pid}'], function () {
        Route::group(['prefix' => 'tasks'], function () {
            Route::get('/', [TaskController::class, 'index'])->name('projects.tasks.index');
        });
    });
});
Auth::routes();
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
