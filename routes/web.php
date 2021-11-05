<?php

use App\Http\Controllers\MaterialController;
use Illuminate\Support\Facades\Route;

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
    return view('welcome');
});

//Material ruta
Route::get('/materials' , [MaterialController::class , "show"]);

Route::get('/material/delete/{id}', [ProductController::class, 'delete'])->name('material.delete');

Route::get('/material/form/{id?}', [ProductController::class, 'form'])->name('material.form');

Route::post('/material/save', [ProductController::class, 'save'])->name('material.save');

