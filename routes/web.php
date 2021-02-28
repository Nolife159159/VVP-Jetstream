<?php

use App\Models\User;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;
use Illuminate\Http\Request;

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

Route::middleware(['auth:sanctum', 'verified'])->get('/admin/admin-logai', function (Request $request) {
    $user = $request->user();
    if ($user->can('CheckIfUserIsOwner', User::class)) {
        return Inertia::render('Admin/ACP-Logai');
    } else return Inertia::render('errors/UserNotAnOwner');
})->name('Logai');

Route::middleware(['auth:sanctum', 'verified'])->get('/admin/admin-nustatymai', function (Request $request) {
    $user = $request->user();
    if ($user->can('CheckIfUserIsOwner', User::class)) {
        return Inertia::render('Admin/ACP');
    } else return Inertia::render('errors/UserNotAnOwner');
})->name('Admin');

Route::middleware(['auth:sanctum', 'verified'])->get('/admin/admin-info', function (Request $request) {
    $user = $request->user();
    if ($user->can('CheckIfUserIsOwner', User::class)) {
        return Inertia::render('Admin/ACP-Setings');
    } else return Inertia::render('errors/UserNotAnOwner');
})->name('Informacija');

Route::middleware(['auth:sanctum', 'verified'])->get('/admin/admin-banai', function (Request $request) {
    $user = $request->user();
    if ($user->can('CheckIfUserIsOwner', User::class)) {
        return Inertia::render('Admin/ACP-Bans');
    } else return Inertia::render('errors/UserNotAnOwner');
})->name('Banai');

Route::middleware(['auth:sanctum', 'verified'])->get('/admin/admin-rcon-banai', function (Request $request) {
    $user = $request->user();
    if ($user->can('CheckIfUserIsOwner', User::class)) {
        return Inertia::render('Admin/ACP-RconBans');
    } else return Inertia::render('errors/UserNotAnOwner');
})->name('RconBanai');

Route::middleware(['auth:sanctum', 'verified'])->get('/admin/admin-configs', function (Request $request) {
    $user = $request->user();
    if ($user->can('CheckIfUserIsOwner', User::class)) {
        return Inertia::render('Admin/ACP-Configs');
    } else return Inertia::render('errors/UserNotAnOwner');
})->name('Configs');

Route::get('/BanInfo', 'AdminBanUnbanController@GetBannedUserByName');

Route::get('/VipWarningInfo', 'VipIspejimaiController@GetWarningsUserByName');
Route::get('/AdminWarningInfo', 'AdminIspejimaiController@GetWarningsUserByName');
Route::get('/DrkWarningInfo', 'DrkIspejimaiController@GetWarningsUserByName');

Route::get('/TopsByXP', 'UserTopControler@TopsByXP');
Route::get('/TopsByMoney', 'UserTopControler@TopsByMoney');
Route::get('/TopsByWork', 'UserTopControler@TopsByWork');
Route::get('/TopsByWorkXP', 'UserTopControler@TopsByWorkXP');

Route::get('/TopOneByXP', 'UserTopControler@TopOneByXP');
Route::get('/TopTwoByXP', 'UserTopControler@TopTwoByXP');
Route::get('/TopThreeByXP', 'UserTopControler@TopThreeByXP');

Route::get('/TopOneByWork', 'UserTopControler@TopOneByWork');
Route::get('/TopTwoByWork', 'UserTopControler@TopTwoByWork');
Route::get('/TopThreeByWork', 'UserTopControler@TopThreeByWork');

Route::get('/TopOneByMoney', 'UserTopControler@TopOneByMoney');
Route::get('/TopTwoByMoney', 'UserTopControler@TopTwoByMoney');
Route::get('/TopThreeByMoney', 'UserTopControler@TopThreeByMoney');

Route::get('/TopOneByWorkXp', 'UserTopControler@TopOneByWorkXp');
Route::get('/TopTwoByWorkXp', 'UserTopControler@TopTwoByWorkXp');
Route::get('/TopThreeByWorkXp', 'UserTopControler@TopThreeByWorkXp');

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

Route::get('/profile/{name}', 'SearchController@SearchByUsername');

Route::get('/Ban/{username}', 'AdminBanUnbanController@CheckIfUserExists');
Route::put('/ConfirmBan/{username}', 'AdminBanUnbanController@ConfirmBan');
