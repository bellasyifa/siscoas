<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ScheduleController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\SubjectController;
use App\Http\Controllers\CoasController;
use App\Http\Controllers\FormController;
use Illuminate\Support\Facades\Auth;

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

// Route::get('/', [HomeController::class, 'index']);
Route::get('/schedule', [ScheduleController::class, 'index'])->name('schedule.index');


Route::get('/student', [StudentController::class, 'index'])->name('student.index');

Route::post('/student/store', [StudentController::class, 'store'])->name('students.store');
Route::get('student/create',[StudentController::class,'create']);
Route::delete('/student/{id}', [StudentController::class, 'destroy'])->name('student.destroy');


Route::get('/subject', [SubjectController::class, 'index'])->name('subject.index');
Route::post('/subject/store', [SubjectController::class, 'store']);
Route::get('subject/create',[SubjectController::class,'create']);
Route::delete('/subject/{id}', [SubjectController::class, 'destroy'])->name('subject.destroy');




Route::get('/coas', [CoasController::class, 'index'])->name('coas.index');
Route::post('/coas/store', [CoasController::class, 'store']);
Route::get('coas/create',[CoasController::class,'create']);
Route::delete('/coas/{id}', [CoasController::class, 'destroy'])->name('coas.destroy');




Route::get('/form', [FormController::class, 'index'])->name('form.index');
Route::post('/submission/store', [FormController::class, 'store'])->name('submit.store');
Route::get('/download/{fileName}', [StudentController::class, 'downloadFile'])->name('download.file');



Auth::routes();

Route::get('/', 'HomeController@index')->name('home');

Route::group(['middleware' => ['auth']], function() {
    Route::resource('roles','RoleController');
    Route::resource('users','UserController');
    Route::resource('products','ProductController');
});