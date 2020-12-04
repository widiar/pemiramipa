<?php

namespace App\Http\Middleware;

use Illuminate\Support\Facades\Auth;

use Closure;

class UserBiasa
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
        $user = Auth::user();
        if ($user->role == 0)
            return $next($request);
        else if ($user->role == 1)
            return redirect('/mulai');
        else if ($user->role == 2)
            return redirect('/datasuara');
        else
            return redirect('/');
    }
}
