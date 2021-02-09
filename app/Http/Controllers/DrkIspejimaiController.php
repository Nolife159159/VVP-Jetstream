<?php

namespace App\Http\Controllers;

use App\Models\DrkIspejimai;
use Illuminate\Http\Request;

class DrkIspejimaiController extends Controller
{
    public function GetWarningsUserByName(Request $request)
    {
        $name = $request->user()->vardas;

        $Warnings = DrkIspejimai::where('vardas', $name)->get();

        return $Warnings;
    }

}
