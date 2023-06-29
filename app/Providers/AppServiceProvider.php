<?php

namespace App\Providers;

use App\Models\User;
use Illuminate\Pagination\Paginator;
use Illuminate\Support\Facades\Gate;
use Illuminate\Support\Facades\Blade;
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
        Paginator::useBootstrap();
        Gate::define('admin', function (User $user) {
            return $user->role == 1;
        });
        Gate::define('user', function (User $user) {
            return $user->role == 2;
        });

        // untuk menampilkan format number
        Blade::directive('currency', function ($expression) {
            return "Rp. <?php echo number_format($expression,0,',','.'); ?>";
        });
    }
}
