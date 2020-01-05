<?php

namespace App\Providers;

use Gate;
use App\User;
use App\Clip;
use App\Policies;
use App\Services\PermissionService;
use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;

class AuthServiceProvider extends ServiceProvider
{
    /**
     * The policy mappings for the application.
     *
     * @var array
     */
    protected $policies = [
        //
    ];

    /**
     * Register any authentication / authorization services.
     *
     * @return void
     */
    public function boot()
    {
        $this->registerPolicies();

        Gate::define('access-deactivated-clips', function (?User $user) {
            return ($user) ? app(PermissionService::class)->check($user, 'access-deactivated-clips') : false;
        });            
    }
}
