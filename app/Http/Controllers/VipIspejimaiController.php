<?php

namespace App\Http\Controllers;

use App\Models\VipIspejimai;
use Illuminate\Http\Request;

class VipIspejimaiController extends Controller
{
    public function GetWarningsUserByName(Request $request)
    {
        $name = $request->name;

        $Warnings = VipIspejimai::where('vardas', $name)->get();

        return $Warnings;
    }

}
