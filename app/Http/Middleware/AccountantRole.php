<?php

namespace App\Http\Middleware;
use Closure;
use Illuminate\Auth\Middleware\AccountantRole as Middleware;
use Illuminate\Support\Facades\Auth;

class AccountantRole
{

    public function handle($request,  Closure $next) {
        if (!Auth::check()) // This isnt necessary, it should be part of your 'auth' middleware
            return redirect('/login');

        if (Auth::check()) {

            if (Auth::user()->role == '5') {
                return $next($request);
            } else {
                return redirect('/')->with('message', 'عذرا أنت لا تملك صلاحيات الوصول إلي هذه الصفحة');
            }

        } else {
            return redirect('/login')->with('message', 'يرجى تسجيل الدخول');
        }
        return $next($request);
    }
}
