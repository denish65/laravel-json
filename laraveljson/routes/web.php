<?php

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

// Route::get('/', function () {
//     return view('welcome');
// });



use App\Http\Controllers\Form1Controller;
use App\Http\Controllers\Form2Controller;

Route::get('/', [Form1Controller::class, 'index'])->name('form1.submit');
Route::post('/', [Form1Controller::class, 'submit'])->name('form1.submit');


Route::get('/show', [Form1Controller::class, 'show']);
Route::get('/edit/{id}/', [Form1Controller::class, 'edit']);
Route::post('/update/{id}/', [Form1Controller::class, 'update']);
Route::get('/delete/{id}/', [Form1Controller::class, 'delete']);


