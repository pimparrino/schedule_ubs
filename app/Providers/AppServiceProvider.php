<?php

namespace App\Providers;

use App\Models\User;
use Illuminate\Support\Facades\Gate;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        Gate::define('isDoctor', function (User $user) {
            return $user->role == "doctor";
        });

        Gate::define('isPatient', function (User $user) {
            return $user->role == "patient";
        });

        Gate::define('isAttendant', function (User $user) {
            return $user->role == "attendant";
        });
    }
}
