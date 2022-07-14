<?php

namespace Rpungello\LaravelStringTemplate;

use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;
use Rpungello\LaravelStringTemplate\Commands\LaravelStringTemplateCommand;

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
    }
}
