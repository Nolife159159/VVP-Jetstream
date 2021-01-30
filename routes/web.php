<?php

use App\Http\Controllers\BanUsersControler;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return Inertia::render('Auth/Login');
});

Route::middleware(['auth:sanctum', 'verified'])->get('/profile', function () {
    return Inertia::render('Profile');
})->name('Profile');


Route::middleware(['auth:sanctum', 'verified'])->get('/nustatymai', function () {
    return Inertia::render('Nustatymai');
})->name('Nustatymai');

