<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class SearchController extends Controller
{
    public function AutoComplete(Request $request)
    {
        $users = User::where('vardas', 'LIKE', $request->search_name.'%')
            ->where('vardas', '!=', $request->user()->vardas)
            ->select('vardas')->get();

        return response()->json($users);
    }

}
