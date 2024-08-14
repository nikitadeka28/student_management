<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\AttendanceController;
use App\Http\Controllers\LoggedinController;
use App\Http\Controllers\HelpController;
use App\Http\Controllers\ReportController;
use App\Http\Controllers\RegisterController;

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

Route::get('/test-session', function () {
    session(['test' => 'Session is working']);
    return session('test');
});

Route::get('/', function () {
    return view('pages.home');
});

Route::get('/login', [LoginController::class, 'index'])->name('login');

Route::get('/register', function () {
    return view('pages.register');
})->name('register');  // Added route name

Route::post('/login', [UserController::class, 'login'])->name('login.post');
Route::post('/register', [UserController::class, 'register'])->name('register.post');  // Updated route name

Route::get('/home', [ProductController::class, 'index'])->name('home');

Route::post('/logout', [ProductController::class, 'logout'])->name('logout');

// Route::middleware(['auth'])->group(function () {
Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
Route::get('/attendance', [AttendanceController::class, 'index'])->name('attendance');
Route::get('/help', [HelpController::class, 'index'])->name('help');
Route::get('/loggedin', [LoggedinController::class, 'index'])->name('loggedin');
Route::get('/report', [ReportController::class, 'index'])->name('report');
// });


