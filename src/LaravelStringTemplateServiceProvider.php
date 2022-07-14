<?php

namespace Rpungello\LaravelStringTemplate;

use Rpungello\LaravelStringTemplate\Commands\LaravelStringTemplateCommand;
use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;

class LaravelStringTemplateServiceProvider extends PackageServiceProvider
{
    public function configurePackage(Package $package): void
    {
        /*
         * This class is a Package Service Provider
         *
         * More info: https://github.com/spatie/laravel-package-tools
         */
        $package
            ->name('laravel-string-template')
            ->hasConfigFile()
            ->hasViews()
            ->hasMigration('create_laravel-string-template_table')
            ->hasCommand(LaravelStringTemplateCommand::class);

        $this->app->singleton('laravel-string-template', function () {
            return new LaravelStringTemplate(new Engine());
        });
    }
}
