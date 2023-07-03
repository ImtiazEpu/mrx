<?php

use App\Http\Controllers\ContactController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProjectController;
use App\Http\Controllers\ResumeController;
use Illuminate\Support\Facades\Route;

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

// Page Routes
Route::get( '/', [ HomeController::class, 'page' ] );
Route::get( '/contact', [ ContactController::class, 'page' ] );
Route::get( '/projects', [ ProjectController::class, 'page' ] );
Route::get( '/resume', [ ResumeController::class, 'page' ] );
