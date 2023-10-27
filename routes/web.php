<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentsController;

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
    return view('layout.home');
});

Route::get('/home', function () {
    return view('layout.home');
});

Route::get('/students', [StudentsController::class, 'index'])->name('students.index');
Route::get('students/add', [StudentsController::class, 'add'])->name('students.add');
Route::post('/students/save', [StudentsController::class, 'store'])->name('students.store');
Route::get('students/edit/{nis}', [StudentsController::class, 'edit']);
Route::put('/students/update/{nis}', [StudentsController::class, 'update']);
