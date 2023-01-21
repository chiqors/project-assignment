<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProjectFrController;

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

Route::get('/', [ProjectFrController::class, 'index'])->name('projects');

Route::get('/add', [ProjectFrController::class, 'create'])->name('add.projects');
Route::get('/edit/{id}', [ProjectFrController::class, 'edit'])->name('edit.projects');
Route::post('/store', [ProjectFrController::class, 'store'])->name('store.projects');
Route::put('/update/{id}', [ProjectFrController::class, 'update'])->name('update.projects');
Route::delete('/delete/{id}', [ProjectFrController::class, 'destroy'])->name('delete.projects');
