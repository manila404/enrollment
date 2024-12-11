<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\Response;

class Student
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
            return redirect()->route('admin.dashboard');
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
            return $next($request);
        }
    }
}
