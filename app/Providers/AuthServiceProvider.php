<?php

namespace App\Providers;

use Illuminate\Contracts\Auth\Access\Gate as GateContract;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Gate;
use App\History;
use App\User;
use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;

class AuthServiceProvider extends ServiceProvider
{
    /**
     * The policy mappings for the application.
     *
     * @var array
     */
    protected $policies = [
        'App\History'=>'App\Policies\HistoryPolicy'
    ];

    /**
     * Register any authentication / authorization services.
     *
     * @return void
     */
    public function boot(GateContract $gate, User $user, History $history)
    {
        $this->registerPolicies();
         $gate->after(function(){
           return 1;
        });
        $gate->define('updat', 'App\Services\TestCheck@execute');
       
    }
}
