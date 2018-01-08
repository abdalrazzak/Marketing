<?php

namespace App\Providers;

use App\Category;
use App\Customer;
use App\Dashboard;
use App\Message;
use App\Policies\CategoryPolicy;
use App\Policies\CustomerPolicy;
use App\Policies\DashboardPolicy;
use App\Policies\MessagePolicy;
use App\Policies\ProductPolicy;
use App\Policies\RolePolicy;
use App\Policies\UserPolicy;
use App\Product;
use App\Role;
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
        Product::class => ProductPolicy::class,
        Dashboard::class => DashboardPolicy::class,
        Category::class => CategoryPolicy::class,
        Customer::class => CustomerPolicy::class,
        Message::class => MessagePolicy::class,
        User::class => UserPolicy::class,
        Role::class => RolePolicy::class
    ];

    /**
     * Register any authentication / authorization services.
     *
     * @return void
     */
    public function boot()
    {
        $this->registerPolicies();
    }
}
