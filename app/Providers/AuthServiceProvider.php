<?php

namespace App\Providers;


use App\User;
use Illuminate\Support\Facades\Gate;
use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;

class AuthServiceProvider extends ServiceProvider
{
    /**
     * The policy mappings for the application.
     *
     * @var array
     */
    protected $policies = [
        // 'App\Model' => 'App\Policies\ModelPolicy',
    ];

    /**
     * Register any authentication / authorization services.
     *
     * @return void
     */
    public function boot()
    {
        $this->registerPolicies();

        // 定義兩個 function 來比對登入驗證時是否一樣，True or False
        Gate::define('admin', function($user){
            return $user->role === User::ROLE_ADMIN;
        });

        Gate::define('user', function($user){
            return $user->role === User::ROLE_USER;
        });
        //
    }
}
