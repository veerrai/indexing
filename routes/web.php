<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\AuthController;

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

Route::get('/register', [AuthController::class, 'register'])->name('register');

Route::get('/login', [AuthController::class, 'login'])->name('login');

Route::get('/addlink', [AuthController::class, 'addlink'])->name('addlink');

Route::post('postregister', [AuthController::class, 'postregister'])->name('register.post');
