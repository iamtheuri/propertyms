<?php

use App\Http\Controllers\ContactController;
use App\Http\Controllers\MaintenanceController;
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

//Submit Contact Form
Route::post('/contact-form', [ContactController::class, 'store']);

Route::get('/login', [UserController::class, 'login'])->name('login');

// User Registration Form
Route::get('/register', [UserController::class, 'create']);

// Store New User
Route::post('/users', [UserController::class, 'store']);

// Logout
Route::post('/logout', [UserController::class, 'logout'])->middleware('auth')->name('logout');

// Login User
Route::post('/users/authenticate', [UserController::class, 'authenticate']);

// Tenant Home Page
Route::get('/tenant/home', function () {
    return view('tenant.home');
})->middleware('auth');

// Tenant Space Maintenance
Route::get('/tenant/maintenance', [MaintenanceController::class, 'index'])->middleware('auth');

// Add Tenant Maintenance
Route::get('/tenant/add-maintenance', function () {
    return view('tenant.add-maintenance');
})->middleware('auth');

// Store Maintenance
Route::post('/add-maintenance', [MaintenanceController::class, 'store'])->middleware('auth');

// Edit Maintenance
Route::get('/edit-maintenance', function () {
    return view('tenant.edit-maintenance');
})->middleware('auth');

// Delete Maintenance
Route::get('/delete-maintenance', [MaintenanceController::class, 'delete'])->middleware('auth');

// Tenant Financials
Route::get('/tenant/financials', function () {
    return view('tenant.financials');
})->middleware('auth');
