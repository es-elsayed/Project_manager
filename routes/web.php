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
    Route::get('/projects', [ProjectManagerController::class, 'index'])->name('projects.index');
    Route::get('/projects/create', [ProjectManagerController::class, 'create'])->name('projects.create');
    Route::post('/projects', [ProjectManagerController::class, 'store'])->name('projects.store');
});
Auth::routes();
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
