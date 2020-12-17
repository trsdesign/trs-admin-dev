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

        if (file_exists(config_path('trs-admin.php'))) {
            $this->configureComponents(config('trs-admin.css_preset'));
        }

        Blade::component('trs::bootstrap.components.form', 'trs-form');
    }

    /**
     * Configure the Jetstream Blade components.
     *
     * @return void
     */
    protected function configureComponents($cssPreset)
    {
        $this->callAfterResolving(BladeCompiler::class, function () use ($cssPreset) {
            $this->registerComponent($cssPreset, 'form');
            $this->registerComponent($cssPreset, 'table');
        });
    }

    /**
     * Register the given component.
     *
     * @param  string  $cssPreset
     * @param  string  $component
     * @return void
     */
    public function registerComponent(string $cssPreset, string $component)
    {
        Blade::component('trs::'.$cssPreset.'.components.'.$component, 'trs-'.$component);
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
            __DIR__.'/../resources/views' => resource_path('views/vendor/trs-admin'),
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