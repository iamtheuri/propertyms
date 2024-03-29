<?php

use App\Http\Controllers\ContactController;
use App\Http\Controllers\MaintenanceController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\LandlordController;
use App\Http\Controllers\TenantController;
use App\Http\Controllers\PropertyController;
use App\Models\Property;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Route methods
|--------------------------------------------------------------------------
|
|index - show all
|show - show one
|create - show form to create new
|store - store new / post
|edit - show edit form
|update - update / put form
|destroy - delete
|
*/

/*
|--------------------------------------------------------------------------
| Unauthorised Routes
|--------------------------------------------------------------------------
*/

Route::get('/', [UserController::class, 'home']);
Route::get('/contact', [ContactController::class, 'index']);
Route::post('/contact-form', [ContactController::class, 'store']);
Route::get('/login', [UserController::class, 'login'])->name('login');
Route::get('/register', [UserController::class, 'create'])->name('register');
Route::post('/users', [UserController::class, 'store']);
Route::post('/logout', [UserController::class, 'logout'])->middleware('auth')->name('logout');
Route::post('/users/authenticate', [UserController::class, 'authenticate']);

/*
|--------------------------------------------------------------------------
| Authorised Tenant Routes
|--------------------------------------------------------------------------
*/

Route::get('/tenant/home', [TenantController::class, 'index'])->middleware('auth');
Route::get('/tenant/financials', [TenantController::class, 'financials'])->middleware('auth');
Route::get('/tenant/maintenance', [MaintenanceController::class, 'index'])->middleware('auth');
Route::get('/tenant/add-maintenance', [MaintenanceController::class, 'add'])->middleware('auth');
Route::post('/add-maintenance', [MaintenanceController::class, 'store'])->middleware('auth');

// Edit Maintenance
Route::get('/tenant/maintenance/{maintenance}/edit', [MaintenanceController::class, 'edit'])->middleware('auth');
Route::put('/tenant/maintenance/{maintenance}', [MaintenanceController::class, 'update'])->middleware('auth');
Route::delete('/tenant/maintenance/{maintenance}', [MaintenanceController::class, 'destroy'])->middleware('auth');

/*
|--------------------------------------------------------------------------
| Authorised Landlord Routes
|--------------------------------------------------------------------------
*/

Route::get('/landlord/home', [LandlordController::class, 'index'])->middleware('auth');
Route::get('/landlord/tenants', [LandlordController::class, 'tenants'])->middleware('auth');
Route::get('/landlord/properties', [PropertyController::class, 'index'])->middleware('auth');
Route::get('/landlord/financials', [LandlordController::class, 'financials'])->middleware('auth');

Route::get('/landlord/add-property', [PropertyController::class, 'add'])->middleware('auth');
Route::post('/property-form', [PropertyController::class, 'store'])->middleware('auth');
