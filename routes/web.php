<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthorController; //Importacion de controlador

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

Route::get('/authors',[AuthorController::class, 'index'])->name('authors.index'); 
Route::post('/authors',[AuthorController::class, 'store'])->name('authors.store'); 