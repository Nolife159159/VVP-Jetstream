<?php

namespace App\Http\Middleware;

use App\Models\User;
use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class IsUserAdminMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param Request $request
     * @param Closure $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {
        $name = $request->user()->vardas;

        $isOwner = User::where('vardas', $name)->select('admin')->get();;

        Log::info($isOwner);

        return $next($request);
    }
}
