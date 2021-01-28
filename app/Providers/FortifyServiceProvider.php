<?php

namespace App\Providers;


use App\Models\User;
use Illuminate\Cache\RateLimiting\Limit;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\RateLimiter;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\ServiceProvider;
use Illuminate\Validation\ValidationException;
use Laravel\Fortify\Fortify;

class FortifyServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    protected function throwFailedAuthenticationException($request)
    {
        $this->limiter->increment($request);

        throw ValidationException::withMessages([
            Fortify::username() => "test",
        ]);
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        Fortify::authenticateUsing(function (Request $request) {
            $user = User::where('vardas', $request->username)->select('id', 'vardas', 'slaptazodis')->first();
            if ($user === null) {
                throw ValidationException::withMessages([
                    Fortify::username() => "* Toks vartotojas neegzistuoja.",
                ]);
            }
            elseif ($request->password != $user->slaptazodis) {
                throw ValidationException::withMessages([
                    Fortify::username() => "* Blogai įvestas slaptažodis.",
                ]);
            }
            else {
                return $user;
            }
        });
        RateLimiter::for('login', function (Request $request) {
            return Limit::perMinute(5)->by($request->username.$request->ip());
        });
    }
}
