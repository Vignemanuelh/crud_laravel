<?php

use App\Http\Controllers\StudentController;
use App\Models\Student;
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

// Route::resource('students', StudentController::class);


Route::get('/index', [StudentController::class, 'index'])->name('sindex');

Route::get('/create', [StudentController::class, 'create'])->name('screate');

Route::post('/store', [StudentController::class, 'store'])->name('store');

Route::get('/update/{id}', [StudentController::class, 'update'])->name('supdate');

Route::post('/store-update/{id}', [StudentController::class, 'store_update'])->name('stupdate');

Route::get('/delete/{id}', [StudentController::class, 'delete'])->name('sdelete');




Route::get('/', function () {
    return view('welcome');
});
