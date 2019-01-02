<?php

namespace App\Providers;

use App\Policies\PracticePolicy;
use App\Practice;
use App\Ride;
use App\Policies\RidePolicy;
use Illuminate\Contracts\Auth\Access\Gate;
use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;

class AuthServiceProvider extends ServiceProvider
{
    /**
     * The policy mappings for the application.
     *
     * @var array
     */
    protected $policies = [
        Ride::class     => RidePolicy::class,
        Practice::class => PracticePolicy::class,
    ];

    /**
     * Register any authentication / authorization services.
     *
     * @return void
     */
    public function boot(Gate $gate)
    {
        $this->registerPolicies();

        $gate->before(function ($user) {
            if ($user->id == 1) {
                return true;
            }
        });
    }
}
