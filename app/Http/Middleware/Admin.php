<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class Admin
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        //If User is not logged in
        if (!Auth::check()){
            return redirect()->route('login');
        }

        $userRole = Auth::user()->role;

        //Admin
        if ($userRole == 1){
            return $next($request);
        }
        //Registrar
        elseif ($userRole == 2){
            return redirect()->route('registrar.dashboard');
        }
        //Department
        elseif ($userRole == 3){
            return redirect()->route('department.dashboard');
        }
        //Student
        elseif ($userRole == 4){
            return redirect()->route('dashboard');
        }

        
    }
}
