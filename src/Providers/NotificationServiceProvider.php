<?php

namespace ConfrariaWeb\Notification\Providers;

use Illuminate\Support\Facades\Blade;
use Illuminate\Support\ServiceProvider;

class NotificationServiceProvider extends ServiceProvider
{

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        $this->loadRoutesFrom(__DIR__ . '/../Routes/web.php');
        $this->loadViewsFrom(__DIR__ . '/../Views', 'notification');

        Blade::component('notification::components.notifications', 'notifications');
    }

    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {

    }

}
