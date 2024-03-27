<?php

use App\Http\Controllers\ContactController;
use App\Http\Controllers\MaintenanceController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\LandlordController;
use App\Http\Controllers\TenantController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Unauthorised Routes
|--------------------------------------------------------------------------
*/

Route::get('/', [UserController::class, 'home']);
Route::get('/contact', [ContactController::class, 'index']);
Route::post('/contact-form', [ContactController::class, 'store']);
Route::get('/login', [UserController::class, 'login'])->name('login');
Route::get('/register', [UserController::class, 'create']);
Route::post('/users', [UserController::class, 'store']);
Route::post('/logout', [UserController::class, 'logout'])->middleware('auth')->name('logout');
Route::post('/users/authenticate', [UserController::class, 'authenticate']);

/*
|--------------------------------------------------------------------------
| Authorised Tenant Routes
|--------------------------------------------------------------------------
*/

Route::get('/tenant/home', [TenantController::class, 'index'])->middleware('auth');
Route::get('/tenant/maintenance', [MaintenanceController::class, 'index'])->middleware('auth');
Route::get('/tenant/add-maintenance', [MaintenanceController::class, 'add'])->middleware('auth');
Route::post('/add-maintenance', [MaintenanceController::class, 'store'])->middleware('auth');
Route::get('/tenant/financials', [TenantController::class, 'financials'])->middleware('auth');

// Edit Maintenance
Route::post('/edit-maintenance', [MaintenanceController::class, 'edit'])->middleware('auth');

// Delete Maintenance
Route::post('/delete-maintenance', [MaintenanceController::class, 'delete'])->middleware('auth');

/*
|--------------------------------------------------------------------------
| Authorised Landlord Routes
|--------------------------------------------------------------------------
*/

Route::get('/landlord/home', [LandlordController::class, 'index'])->middleware('auth');
Route::get('/landlord/tenants', [LandlordController::class, 'tenants'])->middleware('auth');
Route::get('/landlord/properties', [LandlordController::class, 'properties'])->middleware('auth');
Route::get('/landlord/financials', [LandlordController::class, 'financials'])->middleware('auth');
