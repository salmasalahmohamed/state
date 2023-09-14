<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\ClassController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\SubjectController;
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
    return view('welcome');
});

Route::middleware(['auth','IsAdmin'])->group(function (){
    Route::get('/index',[AdminController::class,'index2']);
    Route::get('/dash',[AdminController::class,'index']);
    Route::get('add/admin',[AdminController::class,'add']);
    Route::post('admin/create',[AdminController::class,'insert']);
    Route::get('editadmin{id}',[AdminController::class,'edit']);
    Route::post('updateadmin{id}',[AdminController::class,'update']);
    Route::get('deleteadmin{id}',[AdminController::class,'delete']);
    Route::get('class',[ClassController::class,'index']);
    Route::get('class/add',[ClassController::class,'add']);
    Route::post('class/create',[ClassController::class,'insert']);
    Route::get('subject',[SubjectController::class,'index']);
    Route::get('subject/add',[SubjectController::class,'add']);
    Route::post('subject/create',[SubjectController::class,'insert']);
    Route::get('/class/subject',[ClassController::class,'assign']);
    Route::get('/class/assignindex',[ClassController::class,'assignindex']);



});
Route::get('/parent',[AdminController::class,'index3'])->middleware('IsParent');

Route::get('/student',[AdminController::class,'index4'])->middleware('IsStudent');

Route::get('/teacher',[AdminController::class,'index5'])->middleware('IsTeacher');

Route::get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard')->middleware('auth');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
