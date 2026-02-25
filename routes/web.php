<?php
 
 use Illuminate\Support\Facades\Route;
 
 Route::get('/', function () {
     return view('homenl');
 })->name('home');
 
Route::get('/homel', function () {
    return view('homel');
})->name('homel');

Route::get('/laporanproduka', function () {
    return view('laporanproduka');
})->name('laporanproduka');

Route::get('/laporanprodukp', function () {
    return view('laporanprodukp');
})->name('laporanprodukp');

 use App\Http\Controllers\AuthController;
 
 Route::get('/register', [AuthController::class, 'showRegister'])->name('register.form');
 Route::post('/register', [AuthController::class, 'register'])->name('register');
 
 Route::get('/registera', [AuthController::class, 'showRegisterPetugas'])->name('registera.form');
 Route::post('/registera', [AuthController::class, 'registerPetugas'])->name('registera');

 Route::get('/login', [AuthController::class, 'showLogin'])->name('login');
 Route::post('/login', [AuthController::class, 'login']);
 
Route::get('/register-success', function () {
    return view('auth.registersuccess');
})->name('register.success');

Route::get('/register-successa', function () {
    return view('auth.registersuccessa');
})->name('registera.success');

Route::post('/logout', [AuthController::class, 'logout'])->name('logout');