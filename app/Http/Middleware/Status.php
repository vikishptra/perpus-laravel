<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Session;

class Status
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next, $status)
    {
        if ($request->user()->status == $status) {
            return $next($request);
        }else if($request->user()->status == 'deactive'){
            Session::flash('error', 'Anda Harus Login Terlebih Dahulu');
            return redirect('login-user');
        }
    }
}
