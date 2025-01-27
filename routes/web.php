<?php

use App\Http\Controllers\ContactController;
use App\Http\Controllers\MaintenanceController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\TenantController;
use App\Http\Controllers\PropertyController;
use App\Http\Controllers\UnitController;
use App\Http\Controllers\InvoiceController;
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

Route::get('/tenant/home', [UserController::class, 'tenant_home'])->middleware('auth');

Route::get('/tenant/maintenance', [MaintenanceController::class, 'index'])->middleware('auth');
Route::get('/tenant/add-maintenance', [MaintenanceController::class, 'add'])->middleware('auth');
Route::post('/add-maintenance', [MaintenanceController::class, 'store'])->middleware('auth');
Route::get('/tenant/maintenance/{maintenance}/edit', [MaintenanceController::class, 'edit'])->middleware('auth');
Route::put('/tenant/maintenance/{maintenance}', [MaintenanceController::class, 'update'])->middleware('auth');
Route::delete('/tenant/maintenance/{maintenance}', [MaintenanceController::class, 'destroy'])->middleware('auth');

/*
|--------------------------------------------------------------------------
| Authorised Landlord Routes
|--------------------------------------------------------------------------
*/

Route::get('/landlord/home', [UserController::class, 'landlord_home'])->middleware('auth');
Route::get('/landlord/properties', [PropertyController::class, 'index'])->middleware('auth');
Route::get('/landlord/units', [UnitController::class, 'index'])->middleware('auth');
Route::get('/landlord/tenants', [TenantController::class, 'index'])->middleware('auth');
Route::get('/landlord/invoices', [InvoiceController::class, 'index'])->middleware('auth');
Route::get('/landlord/maintenances', [MaintenanceController::class, 'index'])->middleware('auth');
Route::get('/landlord/maintenance/{maintenance}/edit', [MaintenanceController::class, 'delete'])->middleware('auth');
Route::delete('/tenant/maintenance/{maintenance}', [MaintenanceController::class, 'destroy'])->middleware('auth');

Route::get('/landlord/add-property', [PropertyController::class, 'add'])->middleware('auth');
Route::post('/property-form', [PropertyController::class, 'store'])->middleware('auth');
Route::get('/landlord/properties/{property}/edit', [PropertyController::class, 'edit'])->middleware('auth');
Route::put('/landlord/properties/{property}', [PropertyController::class, 'update'])->middleware('auth');
Route::delete('/landlord/properties/{property}', [PropertyController::class, 'destroy'])->middleware('auth');

Route::get('/landlord/add-unit', [UnitController::class, 'add'])->middleware('auth');
Route::post('/unit-form', [UnitController::class, 'store'])->middleware('auth');
Route::get('/landlord/units/{unit}/edit', [UnitController::class, 'edit'])->middleware('auth');
Route::put('/landlord/units/{unit}', [UnitController::class, 'update'])->middleware('auth');
Route::delete('/landlord/units/{unit}', [UnitController::class, 'destroy'])->middleware('auth');

Route::get('/landlord/add-tenant', [TenantController::class, 'add'])->middleware('auth');
Route::post('/tenant-form', [TenantController::class, 'store'])->middleware('auth');
Route::get('/landlord/tenants/{tenant}/edit', [TenantController::class, 'edit'])->middleware('auth');
Route::put('/landlord/tenants/{tenant}', [TenantController::class, 'update'])->middleware('auth');
Route::delete('/landlord/tenants/{tenant}', [TenantController::class, 'destroy'])->middleware('auth');

Route::get('/landlord/add-invoice', [InvoiceController::class, 'add'])->middleware('auth');
Route::post('/invoice-form', [InvoiceController::class, 'store'])->middleware('auth');
Route::get('/landlord/invoices/{invoice}/edit', [InvoiceController::class, 'edit'])->middleware('auth');
Route::put('/landlord/invoices/{invoice}', [InvoiceController::class, 'update'])->middleware('auth');
Route::delete('/landlord/invoices/{invoice}', [InvoiceController::class, 'destroy'])->middleware('auth');

Route::post('/send-reminder', [InvoiceController::class, 'reminders'])->middleware('auth');
