<?php

namespace App\Http\Controllers;

use App\Models\User;

class UserTopControler extends Controller
{

    public function TopsByXP()
    {
        $TopsByXP = User::where('ID', '>', 0)->where('patirtis', '>', 0)->limit(15)->get();

        return $TopsByXP;
    }

    public function Top1ByXP()
    {
        $Top1ByXP= User::orderBy('patirtis', 'desc')->limit(1)->get();

        return $Top1ByXP;
    }

    public  function TopsByMoney()
    {
        $TopsByMoney = User::where('ID', '>', 0)->where('pinigai', '>', 0)->orderBy('patirtis', 'desc')->limit(15)->get();

        return $TopsByMoney;
    }

    public  function TopsByWork()
    {
        $TopsByWork = User::where('ID', '>', 0)->where('alga', '>', 0)->orderBy('alga', 'desc')->limit(15)->get();

        return $TopsByWork;
    }

    public  function TopsByWorkXP()
    {
        $TopsByWorkXP = User::where('ID', '>', 0)->where('VisasDarboXP', '>', 0)->orderBy('VisasDarboXP', 'desc')->limit(15)->get();

        return $TopsByWorkXP;
    }
}
