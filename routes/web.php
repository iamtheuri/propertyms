<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Models\Apartment;

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

Route::get('/home', function () {
    return view('home');
});

Route::get('/contact', function () {
    return view('contact');
});

Route::get('/login', function () {
    return view('login');
});

Route::get('/register', function () {
    return view('register');
});

//All Apartments
Route::get('/', function () {
    return view('apartments', [
        'heading' => 'Latest Apartments',
        'apartments' => Apartment::all()
    ]);
});

//Single Apartment
Route::get('/apartments/{id}', function ($id) {
    return view('apartment', [
        'apartment' => Apartment::find($id)
    ]);
});
