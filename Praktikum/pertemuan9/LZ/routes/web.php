<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MyController;

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
// route untuk mengakses halaman index
//Route::get('/', [MyController::class, 'index']);

// route untuk mengakses halaman about 
//Route::get('/tentang', [MyController::class, 'about']);

// route untuk mengakses halaman mahasiswa 
//Route::get('/mahasiswa', [MyController::class, 'mahasiswa']);

Route::get('/', [StudentController::class, 'index']);
Route::get('/student/create', [StudentController::class, 'create']);
Route::post('/student/create', [StudentController::class, 'store']);
Route::get('/student/{$id}/edit', [StudentController::class, 'edit']);
Route::put('/student/{$id}/edit', [StudentController::class, 'update']);
Route::delete('/student/hapus/{$id}', [StudentController::class, 'destroy']);