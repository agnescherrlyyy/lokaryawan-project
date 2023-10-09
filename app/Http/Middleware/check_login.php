<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class check_login
{
    public function handle(Request $request, Closure $next): Response
    {
        if ($request->session()->get('already_login') === true) {
            return $next($request);
        }
        return redirect('/')->with('danger', 'Please Login First');
    }
}
