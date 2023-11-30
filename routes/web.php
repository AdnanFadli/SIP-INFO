<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ConcentrationController;
use App\Http\Controllers\CoursesController;
use App\Http\Controllers\LecturersController;
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

Route::get('/', function () {
    return view('auth.login');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

//Route
Route::resource('concentration', ConcentrationController::class);
Route::resource('courses', CoursesController::class);
Route::resource('lecturers', LecturersController::class);

//on/off
Route::get('/User/On',[LecturersController::class,'on'])->name('user-on');
Route::get('/User/Off',[LecturersController::class,'off'])->name('user-off');


//updateStatus
Route::put('/userUpdateStatus/{id}',[LecturersController::class,'updateStatus'])->name('user-updateStatus');

//updatePassword
Route::put('/user/updatePassword/{id}',[LecturersController::class, 'updatePassword'])->name("user-updatePassword");

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
