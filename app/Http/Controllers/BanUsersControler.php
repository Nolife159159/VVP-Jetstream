<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\BanUsers;
use Inertia\Inertia;

class BanUsersControler extends Controller
{

    public function GetBannedUserByName(Request $request)
    {
        $name = $request->user()->vardas;

        $BanedUser = BanUsers::where('Vardas', $name)->first();

        return Inertia::render('OtherPlayerInfo', ['banedUser' => $BanedUser]);

    }

}
