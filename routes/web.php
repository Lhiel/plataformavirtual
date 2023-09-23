<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Homecontroller;

use App\Http\Controllers\CourseController;
use App\Http\Livewire\CourseStatus;

/*
|--------------------------------------------------------------------------
| Web Routes ss
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', Homecontroller::class)->name('home');

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');


Route::get('cursos', [CourseController::class,'index'])->name('courses.index');

Route::get('cursos/{course}', [CourseController::class,'show'])->name('courses.show');

Route::post('courses/{course}/enrolled',  [CourseController::class, 'enrolled'])
->middleware('auth')->name('courses.enrolled');

Route::get('course-status/{course}', CourseStatus::class)->name('courses.status')->middleware('auth');



