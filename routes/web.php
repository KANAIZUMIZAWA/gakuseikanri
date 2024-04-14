<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\School_gradesController;
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
Route::get('/', function () {
    if (Auth::check()) {
        return redirect()->route('home');
   } else {
        return redirect()->route('login');
    }
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/students/index',[StudentController::class,'index'])->name('students.index');
Route::get('/students/create',[StudentController::class,'create'])->name('students.create');
Route::post('/students/create',[StudentController::class,'store'])->name('students.store');
Route::get('/students/show',[StudentController::class,'show'])->name('students.show');
Route::post('/students/show',[StudentController::class,'destroy'])->name('students.destroy');
Route::get('/students/edit',[StudentController::class,'edit'])->name('students.edit');
Route::post('/students/edit',[StudentController::class,'update'])->name('students.update');
Route::get('/school_grades/create',[School_gradesController::class,'create'])->name('school_grades.create');
Route::post('/school_grades/create',[School_gradesController::class,'store'])->name('school_grades.store');
Route::get('/school_grades/edit',[School_gradesController::class,'edit'])->name('school_grades.edit');
Route::post('/school_grades/edit',[School_gradesController::class,'update'])->name('school_grades.update');
Route::post('/school_grades/edit',[School_gradesController::class,'destroy'])->name('school_grades.destroy');