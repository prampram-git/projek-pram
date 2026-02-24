<?php
 
 use Illuminate\Support\Facades\Route;
 
 Route::get('/', function () {
     return view('homenl');
 })->name('home');
 
Route::get('/homel', function () {
    return view('homel');
})->name('homel');

 use App\Http\Controllers\AuthController;
 
 Route::get('/register', [AuthController::class, 'showRegister'])->name('register.form');
 Route::post('/register', [AuthController::class, 'register'])->name('register');
 
 Route::get('/login', [AuthController::class, 'showLogin'])->name('login');
 Route::post('/login', [AuthController::class, 'login']);
 
Route::get('/register-success', function () {
    return view('auth.registersuccess');
})->name('register.success');
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');
