<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;

class RedirectIfAuthenticated
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @param  string|null  $guard
     * @return mixed
     */
    public function handle($request, Closure $next, $guard = null)
    {
        if (Auth::guard($guard)->check()) {   //追加
            return redirect('/home');
        }
		 $redirectTo = "/home";

		        // 管理者なら管理画面用ホームのパスを設定する
		        if ($guard === "admin") {
					            $redirectTo = "/admin/home";
								        }

		        if (Auth::guard($guard)->check()) {
					            return redirect($redirectTo);
								        }
        return $next($request);
    }
}
