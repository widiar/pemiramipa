<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;

class SuperAdmin
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
        if ($user->role == 2)
            return $next($request);
        else if ($user->role == 0)
            return redirect('/voting');
        else if ($user->role == 1)
            return redirect('/mulai');
        else
            return redirect('/');
    }
}
