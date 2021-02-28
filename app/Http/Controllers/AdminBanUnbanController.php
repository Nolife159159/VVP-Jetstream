<?php

namespace App\Http\Controllers;

use App\Models\BanUsers;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class AdminBanUnbanController extends Controller
{

    public function GetBannedUserByName(Request $request)
    {
        $name = $request->name;

        $BanedUser = BanUsers::where('Vardas', $name)->first();

        return $BanedUser;
    }

    public function CheckIfUserExists(Request $request)
    {
        $name = $request->username;

        $BanUser = User::where('vardas', $name)->firstOrFail();

        return $BanUser;
    }

    public function ConfirmBan(Request $request)
    {
        $name = $request->username;
        $reason = $request->InputInfo['reason'];
        $time = $request->InputInfo['time'];
        $selected = $request->InputInfo['selected'];


        $UserThatGetsBanned = BanUsers::where('Vardas', $name)->first();

        if($UserThatGetsBanned) {
            return response(404);
        } else {
         if($selected === '1') {
             $inputs = ['Vardas' => 'test'];
             BanUsers::create($inputs);
         }
        }
    }
}
