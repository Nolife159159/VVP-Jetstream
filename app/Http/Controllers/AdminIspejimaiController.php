<?php

namespace App\Http\Controllers;

use App\Models\Adminispejimai;
use Illuminate\Http\Request;

class AdminIspejimaiController extends Controller
{
    public function GetWarningsUserByName(Request $request)
    {
        $name = $request->name;

        $Warnings = AdminIspejimai::where('vardas', $name)->get();

        return $Warnings;
    }

}
