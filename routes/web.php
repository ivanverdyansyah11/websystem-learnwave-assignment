<?php

use App\Http\Controllers\AgendaController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\HomepageController;
use App\Http\Controllers\ModuleController;
use App\Http\Controllers\SubModuleController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;
use SebastianBergmann\CodeCoverage\Report\Html\Dashboard;

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

Route::fallback(function() {
    return redirect('/');
});

Route::redirect('/', '/homepage');

Route::middleware(['guest'])->group(function() {
    Route::controller(UserController::class)->group(function() {
        Route::get('/login', 'login')->name('login');
        Route::post('/login', 'authentication')->name('login.authentication');
    });
    Route::resource('/homepage', HomepageController::class);
});

Route::middleware(['guest'])->group(function() {
    Route::resource('/dashboard', DashboardController::class);
    Route::resource('/agenda', AgendaController::class);
    Route::resource('/module', ModuleController::class);
    Route::resource('/sub-module', SubModuleController::class);
});
