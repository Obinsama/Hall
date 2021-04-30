<?php

namespace Hall\Http\Middleware;


use Closure;
use Illuminate\Support\Facades\Auth;

class AuthenticateGuest
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
//        Auth::loginUsingId(1); // Guest
        Auth::login(factory(User::class)->make([
            'id' => (int) str_replace('.', '', microtime(true))
        ]));
        return $next($request);
    }
}
