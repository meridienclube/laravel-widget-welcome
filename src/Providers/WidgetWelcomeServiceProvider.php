<?php
namespace ConfrariaWeb\WidgetWelcome\Providers;

use ConfrariaWeb\WidgetWelcome\Services\WidgetWelcomeService;
use Illuminate\Support\ServiceProvider;

class WidgetWelcomeServiceProvider extends ServiceProvider
{

    public function boot()
    {
        $this->loadViewsFrom(__DIR__ . '/../Views', 'widgetWelcome');
    }

    public function register()
    {
        $this->app->bind('WidgetWelcomeService', function () {
            return new WidgetWelcomeService();
        });
    }

}
