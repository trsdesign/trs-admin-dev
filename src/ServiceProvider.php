<?php

namespace TrsDesign\Admin;

use Illuminate\Support\Facades\Blade;
use Illuminate\Support\ServiceProvider as BaseServiceProvider;
use Illuminate\View\Compilers\BladeCompiler;

class ServiceProvider extends BaseServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        $this->mergeConfigFrom(__DIR__.'/../config/trs-admin.php', 'trs-admin');
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {

        $this->loadViewsFrom(__DIR__.'/../resources/views', 'trs');

        $this->configurePublishing();
        $this->configureCommands();

        $this->configureTailwindComponents(config('trs-admin.stack'));

        Blade::component('trs::bootstrap.components.form', 'trs-form');
    }

    /**
     * Configure the Jetstream Blade components.
     *
     * @return void
     */
    protected function configureTailwindComponents()
    {
        // Tailwind
        $this->callAfterResolving(BladeCompiler::class, function () {
            $this->registerTailwindComponent('advert');
            $this->registerTailwindComponent('button');
            $this->registerTailwindComponent('card-title');
            $this->registerTailwindComponent('card');
            $this->registerTailwindComponent('feature');
            $this->registerTailwindComponent('footer-nav-group');
            $this->registerTailwindComponent('footer-nav-group-heading');
            $this->registerTailwindComponent('footer-nav-group-list');
            $this->registerTailwindComponent('footer-nav-group-list-item');
            $this->registerTailwindComponent('form');
            $this->registerTailwindComponent('hero');
            $this->registerTailwindComponent('input');
            $this->registerTailwindComponent('label');
            $this->registerTailwindComponent('section');
            $this->registerTailwindComponent('subscribe-form');
            $this->registerTailwindComponent('table');
        });
    }

    /**
     * Register the given component.
     *
     * @param  string  $component
     * @return void
     */
    public function registerTailwindComponent(string $component)
    {
        Blade::component('trs::tailwind.components.'.$component, 'trs-'.$component);
    }

    /**
     * Configure publishing for the package.
     *
     * @return void
     */
    protected function configurePublishing()
    {
        if (! $this->app->runningInConsole()) {
            return;
        }

        $this->publishes([
            __DIR__.'/../config/trs-admin.php' => config_path('trs-admin.php'),
        ], 'trs-admin-config');

        $this->publishes([
            __DIR__.'/../resources/views/'.config('trs-admin.stack') => resource_path('views/vendor/trs-admin'),
        ], 'trs-admin-views');
    }

    /**
     * Configure the commands offered by the application.
     *
     * @return void
     */
    protected function configureCommands()
    {
        if (! $this->app->runningInConsole()) {
            return;
        }

        $this->commands([
            Console\InstallCommand::class,
            Console\MakeViewCommand::class,
        ]);
    }

}