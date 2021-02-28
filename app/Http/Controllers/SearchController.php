<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Inertia\Inertia;

class SearchController extends Controller
{
    public function AutoComplete(Request $request)
    {
        $users = User::where('vardas', 'LIKE', $request->search_name.'%')
            ->where('vardas', '!=', $request->user()->vardas)
            ->select('vardas')->get();


        return response()->json($users);
    }

    public function SearchByUsername(Request $request)
    {
        $searchedUserInfo = User::where('vardas', $request->name)->first();

        if($searchedUserInfo) {
            return Inertia::render('Profile', [
                'SearchUserInfo' => $searchedUserInfo,
            ]);
        } else {
            return redirect('/paieska')->with('msg', '* Žaidėjas su tokiu nicku nerastas!');
        }

    }

}
