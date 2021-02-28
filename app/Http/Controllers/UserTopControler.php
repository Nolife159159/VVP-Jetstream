<?php

namespace App\Http\Controllers;

use App\Models\User;

class UserTopControler extends Controller
{

    public function TopsByXP()
    {
        return User::where('ID', '>', 0)->where('patirtis', '>', 0)->orderByDesc('patirtis')->limit(15)->get();
    }

    public  function TopsByMoney()
    {
        return User::where('ID', '>', 0)->where('pinigai', '>', 0)->orderByDesc('pinigai')->limit(15)->get();
    }

    public  function TopsByWork()
    {
        return User::where('ID', '>', 0)->where('alga', '>', 0)->orderByDesc('alga')->limit(15)->get();
    }

    public  function TopsByWorkXP()
    {
        return User::where('ID', '>', 0)->where('VisasDarboXP', '>', 0)->orderByDesc('VisasDarboXP')->limit(15)->get();
    }

    public  function TopOneByXP()
    {
        return User::where('ID', '>', 0)->where('patirtis', '>', 0)->orderByDesc('patirtis')->take(1)->get();
    }

    public  function TopTwoByXP()
    {
        return User::where('ID', '>', 0)->where('patirtis', '>', 0)->orderByDesc('patirtis')->skip(1)->take(1)->get();
    }

    public  function TopThreeByXP()
    {
        return User::where('ID', '>', 0)->where('patirtis', '>', 0)->orderByDesc('patirtis')->skip(2)->take(1)->get();
    }

    public  function TopOneByWork()
    {
        return User::where('ID', '>', 0)->where('alga', '>', 0)->orderByDesc('alga')->take(1)->get();
    }

    public  function TopTwoByWork()
    {
        return User::where('ID', '>', 0)->where('alga', '>', 0)->orderByDesc('alga')->skip(1)->take(1)->get();
    }

    public  function TopThreeByWork()
    {
        return User::where('ID', '>', 0)->where('alga', '>', 0)->orderByDesc('alga')->skip(2)->take(1)->get();
    }

    public  function TopOneByMoney()
    {
        return User::where('ID', '>', 0)->where('pinigai', '>', 0)->orderByDesc('pinigai')->take(1)->get();
    }

    public  function TopTwoByMoney()
    {
        return User::where('ID', '>', 0)->where('pinigai', '>', 0)->orderByDesc('pinigai')->skip(1)->take(1)->get();
    }

    public  function TopThreeByMoney()
    {
        return User::where('ID', '>', 0)->where('pinigai', '>', 0)->orderByDesc('pinigai')->skip(2)->take(1)->get();
    }

    public  function TopOneByWorkXp()
    {
        return User::where('ID', '>', 0)->where('VisasDarboXP', '>', 0)->orderByDesc('VisasDarboXP')->take(1)->get();
    }

    public  function TopTwoByWorkXp()
    {
        return User::where('ID', '>', 0)->where('VisasDarboXP', '>', 0)->orderByDesc('VisasDarboXP')->skip(1)->take(1)->get();
    }

    public  function TopThreeByWorkXp()
    {
        return User::where('ID', '>', 0)->where('VisasDarboXP', '>', 0)->orderByDesc('VisasDarboXP')->skip(2)->take(1)->get();
    }
}
