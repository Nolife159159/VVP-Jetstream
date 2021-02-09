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

Route::middleware(['auth:sanctum', 'verified'])->get('/topai', function () {
    return Inertia::render('Topai');
})->name('Topai');

Route::middleware(['auth:sanctum', 'verified'])->get('/paieska', function () {
    return Inertia::render('Search');
})->name('Paieska');

Route::middleware(['auth:sanctum', 'verified'])->get('/admin-nustatymai', function () {
    return Inertia::render('Admin/ACP');
})->name('Admin');

Route::middleware(['auth:sanctum', 'verified'])->get('/admin-info', function () {
    return Inertia::render('Admin/ACP-Setings');
})->name('Informacija');

Route::middleware(['auth:sanctum', 'verified'])->get('/admin-logai', function () {
    return Inertia::render('Admin/ACP-Logai');
})->name('Logai');

Route::middleware(['auth:sanctum', 'verified'])->get('/admin-banai', function () {
    return Inertia::render('Admin/ACP-Bans');
})->name('Banai');

Route::middleware(['auth:sanctum', 'verified'])->get('/admin-rcon-banai', function () {
    return Inertia::render('Admin/ACP-RconBans');
})->name('RconBanai');

Route::middleware(['auth:sanctum', 'verified'])->get('/admin-configs', function () {
    return Inertia::render('Admin/ACP-Configs');
})->name('Configs');

Route::get('/BanInfo', 'BanUsersControler@GetBannedUserByName');
Route::get('/VipWarningInfo', 'VipIspejimaiController@GetWarningsUserByName');
Route::get('/AdminWarningInfo', 'AdminIspejimaiController@GetWarningsUserByName');
Route::get('/DrkWarningInfo', 'DrkIspejimaiController@GetWarningsUserByName');
Route::get('/TopsByXP', 'UserTopControler@TopsByXP');
Route::get('/Top1ByXP', 'UserTopControler@Top1ByXP');

Route::get('/TopsByMoney', 'UserTopControler@TopsByMoney');
Route::get('/TopsByWork', 'UserTopControler@TopsByWork');
Route::get('/TopsByWorkXP', 'UserTopControler@TopsByWorkXP');

Route::post('/ChangePassword', 'UpdateUserInfoController@ChangePassword');
Route::post('/ChangeEmail', 'UpdateUserInfoController@ChangeEmail');
Route::post('/ChangePin', 'UpdateUserInfoController@ChangeBankPin');
Route::post('/SetPin', 'UpdateUserInfoController@SetBankPin');
Route::post('/ChangeKlausimas', 'UpdateUserInfoController@ChangeKlausimas');
Route::post('/SetKlausimas', 'UpdateUserInfoController@SetKlausimas');
Route::post('/ChangeAtsakymas', 'UpdateUserInfoController@ChangeAtsakymas');
Route::post('/SetAtsakymas', 'UpdateUserInfoController@SetAtsakymas');
Route::post('/RemoveKlausimas', 'UpdateUserInfoController@RemoveKlausimas');
Route::post('/RemoveAtsakymas', 'UpdateUserInfoController@RemoveAtsakymas');
Route::post('/RemovePin', 'UpdateUserInfoController@RemovePin');

Route::get('/AutoComplete', 'SearchController@AutoComplete');
