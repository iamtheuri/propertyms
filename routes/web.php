<?php

use App\Http\Controllers\UserController;
use Illuminate\Http\Request;
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

Route::get('/', function () {
    return view('home');
});

Route::get('/contact', function () {
    return view('contact');
});

Route::get('/login', [UserController::class, 'login'])->name('login');

// User Registration Form
Route::get('/register', [UserController::class, 'create']);

// Store New User
Route::post('/users', [UserController::class, 'store']);

// Logout
Route::post('/logout', [UserController::class, 'logout'])->middleware('auth');

// Login User
Route::post('/users/authenticate', [UserController::class, 'authenticate']);

// Tenant Home Page
Route::get('/tenant/home', function () {
    return view('tenant.home');
})->middleware('auth');

// Tenant Space Maintenance
Route::get('/tenant/maintenance', function () {
    return view('tenant.maintenance');
})->middleware('auth');

// Tenant Financials
Route::get('/tenant/financials', function () {
    return view('tenant.financials');
})->middleware('auth');
