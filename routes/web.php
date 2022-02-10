<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FacultyController;
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
Route::get('/faculty', [FacultyController::class, 'create'])->name('faculty');
Route::post('/faculty', [FacultyController::class, 'store'])->name('createFaculty');
ROute::get('/module', [ModuleController::class, 'create'])->name('module');
Route::post('/module', [ModuleController::class, 'store'])->name('createModule');
Route::get('/', [LecturerController::class, 'index'])->name('index');
Route::post('/', [LecturerController::class, 'create'])->name('create');


