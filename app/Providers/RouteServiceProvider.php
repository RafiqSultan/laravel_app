<?php

namespace App\Providers;

use Illuminate\Cache\RateLimiting\Limit;
use Illuminate\Foundation\Support\Providers\RouteServiceProvider as ServiceProvider;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\RateLimiter;
use Illuminate\Support\Facades\Route;

class RouteServiceProvider extends ServiceProvider
{
    /**
     * The path to the "home" route for your application.
     *
<<<<<<< HEAD
     * Typically, users are redirected here after authentication.
=======
     * This is used by Laravel authentication to redirect users after login.
>>>>>>> 5afc08f5cb6782e2c20ba6ce8a1e9cba9dbd2f7e
     *
     * @var string
     */
    public const HOME = '/home';

    /**
<<<<<<< HEAD
     * Define your route model bindings, pattern filters, and other route configuration.
=======
     * Define your route model bindings, pattern filters, etc.
>>>>>>> 5afc08f5cb6782e2c20ba6ce8a1e9cba9dbd2f7e
     *
     * @return void
     */
    public function boot()
    {
        $this->configureRateLimiting();

        $this->routes(function () {
<<<<<<< HEAD
            Route::middleware('api')
                ->prefix('api')
=======
            Route::prefix('api')
                ->middleware('api')
>>>>>>> 5afc08f5cb6782e2c20ba6ce8a1e9cba9dbd2f7e
                ->group(base_path('routes/api.php'));

            Route::middleware('web')
                ->group(base_path('routes/web.php'));
        });
    }

    /**
     * Configure the rate limiters for the application.
     *
     * @return void
     */
    protected function configureRateLimiting()
    {
        RateLimiter::for('api', function (Request $request) {
            return Limit::perMinute(60)->by($request->user()?->id ?: $request->ip());
        });
    }
}
