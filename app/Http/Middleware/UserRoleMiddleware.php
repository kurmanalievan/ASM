<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class UserRoleMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        if (auth()->check()) {
            $user = auth()->user();
    
            if ($user->role === 'tutor') {
                // Set the view namespace for tutors
                view()->addNamespace('user', base_path('resources/views/tutor'));
            } elseif ($user->role === 'student') {
                // Set the view namespace for students
                view()->addNamespace('user', base_path('resources/views/student'));
            }
        }
    
        return $next($request);
    }
}
