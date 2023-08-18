<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ScheduleController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\SubjectController;
use App\Http\Controllers\CoasController;
use App\Http\Controllers\FormController;
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

Route::get('/', [HomeController::class, 'index']);
Route::get('/schedule', [ScheduleController::class, 'index']);
Route::get('/student', [StudentController::class, 'index']);
Route::get('/subject', [SubjectController::class, 'index']);
Route::get('/coas', [CoasController::class, 'index']);
Route::get('/form', [FormController::class, 'index']);

