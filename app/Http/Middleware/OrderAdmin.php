<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class OrderAdmin
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next)
    {
        if ( auth()->check() && (auth()->user()->isSuperAdmin() || auth()->user()->isAdmin()) ) {

            return $next($request);

        } else {

            if ( auth()->check() ) {
                Log::warning(auth()->user()->name . '(' . auth()->user()->id . ') attempt to enter unauthorize url (trying to amend pending application).');
            }

            return 404;
        }
    }
}
