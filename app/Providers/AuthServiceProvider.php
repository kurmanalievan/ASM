<?php

namespace App\Providers;

use Illuminate\Support\Facades\Gate;

// use Illuminate\Auth\Access\Gate;
use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;

class AuthServiceProvider extends ServiceProvider
{
    /**
     * The model to policy mappings for the application.
     *
     * @var array<class-string, class-string>
     */
    protected $policies = [
        //
    ];

    /**
     * Register any authentication / authorization services.
     */
    public function boot(): void
    {
        Gate::define('isAdmin', function($user){
            return $user->role == 'admin';
        });

        Gate::define('isStudent', function($user){
            return $user->role == 'student';
        });

        Gate::define('isTeacher', function($user){
            return $user->role == 'teacher';
        });
        //
    }
}
