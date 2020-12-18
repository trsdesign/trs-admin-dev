<?php

namespace TrsDesign\Admin\Console;

use Illuminate\Console\Command;
use Illuminate\Filesystem\Filesystem;
use InvalidArgumentException;
use TrsDesign\Admin\ReplacesFileContents;

class InstallCommand extends Command
{
    use ReplacesFileContents;

    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'trs-admin:install { stack : The css stack type (bootstrap, tailwind) }';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Install the components required for Trs Admin';

    /**
     * Execute the console command.
     *
     * @return void
     */
    public function handle()
    {
        // Publish...
        $this->callSilent('vendor:publish', ['--tag' => 'trs-admin-config', '--force' => true]);

        if (! in_array($this->argument('stack'), ['bootstrap', 'tailwind'])) {
            throw new InvalidArgumentException('Invalid stack.');
        }

        $this->{$this->argument('stack')}();

        $this->line('');
        $this->info('TRS Admin resources installed successfully.');
        $this->comment('Please execute "npm install && npm run dev" to build your assets.');
    }

    /**
     * Install the "bootstrap" preset.
     *
     * @return void
     */
    protected function bootstrap()
    {
        $this->updateNodePackages(function ($packages) {
            return [
                'bootstrap' => '^4.5.0',
                'jquery' => '^3.5',
                'popper.js' => '^1.16',
                'sass' => '^1.30.0',
                'sass-loader' => '^10.0.0',
            ] + $packages;
        });

        // Webpack...
        copy(__DIR__.'/../../stubs/resources/bootstrap/webpack.mix.js', base_path('webpack.mix.js'));

        // Sass...
        (new Filesystem)->ensureDirectoryExists(resource_path('sass'));

        copy(__DIR__.'/../../stubs/resources/bootstrap/sass/_variables.scss', resource_path('sass/_variables.scss'));
        copy(__DIR__.'/../../stubs/resources/bootstrap/sass/app.scss', resource_path('sass/app.scss'));

        // Bootstrapping...
        copy(__DIR__.'/../../stubs/resources/bootstrap/js/bootstrap.js', resource_path('js/bootstrap.js'));

        // Files
        (new Filesystem)->ensureDirectoryExists(resource_path('views/partials'));
        (new Filesystem)->ensureDirectoryExists(resource_path('views/layouts'));
        
        (new Filesystem)->copyDirectory(__DIR__.'/../../stubs/resources/boostrap/views/partials', resource_path('views/partials'));
        (new Filesystem)->copyDirectory(__DIR__.'/../../stubs/resources/boostrap/views/layouts', resource_path('views/layouts'));
    }

    /**
     * Install the "tailwind" preset.
     *
     * @return void
     */
    protected function tailwind()
    {
        $this->updateNodePackages(function ($packages) {
            return [
                'alpinejs' => '^2.7.3',
                '@tailwindcss/ui' => '^0.7.2',
                '@tailwindcss/forms' => '^0.2.1',
                '@tailwindcss/typography' => '^0.3.1',
                'postcss-import' => '^12.0.1',
                'tailwindcss' => 'npm:@tailwindcss/postcss7-compat@^2.0.1',
            ] + $packages;
        });

        // Update Configuration...
        $this->replaceInFile('bootstrap', 'tailwind', config_path('trs-admin.php'));

        // Webpack...
        copy(__DIR__.'/../../stubs/resources/tailwind/webpack.mix.js', base_path('webpack.mix.js'));

        // Tailwind config...
        copy(__DIR__.'/../../stubs/resources/tailwind/tailwind.config.js', base_path('tailwind.config.js'));

        // Files
        (new Filesystem)->ensureDirectoryExists(resource_path('views/partials'));
        (new Filesystem)->ensureDirectoryExists(resource_path('views/layouts'));
        
        (new Filesystem)->copyDirectory(__DIR__.'/../../stubs/resources/tailwind/views/partials', resource_path('views/partials'));
        (new Filesystem)->copyDirectory(__DIR__.'/../../stubs/resources/tailwind/views/layouts', resource_path('views/layouts'));
    }

    /**
     * Update the "package.json" file.
     *
     * @param  callable  $callback
     * @param  bool  $dev
     * @return void
     */
    protected static function updateNodePackages(callable $callback, $dev = true)
    {
        if (! file_exists(base_path('package.json'))) {
            return;
        }

        $configurationKey = $dev ? 'devDependencies' : 'dependencies';

        $packages = json_decode(file_get_contents(base_path('package.json')), true);

        $packages[$configurationKey] = $callback(
            array_key_exists($configurationKey, $packages) ? $packages[$configurationKey] : [],
            $configurationKey
        );

        ksort($packages[$configurationKey]);

        file_put_contents(
            base_path('package.json'),
            json_encode($packages, JSON_UNESCAPED_SLASHES | JSON_PRETTY_PRINT).PHP_EOL
        );
    }
}