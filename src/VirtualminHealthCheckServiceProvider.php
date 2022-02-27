<?php

namespace Dpsoft\VirtualminHealthCheck;

use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;
use Dpsoft\VirtualminHealthCheck\Commands\VirtualminHealthCheckCommand;

class VirtualminHealthCheckServiceProvider extends PackageServiceProvider
{
    public function configurePackage(Package $package): void
    {
        /*
         * This class is a Package Service Provider
         *
         * More info: https://github.com/spatie/laravel-package-tools
         */
        $package
            ->name('virtualmin-health-check')
            ->hasConfigFile()
            ->hasViews()
            ->hasMigration('create_virtualmin-health-check_table')
            ->hasCommand(VirtualminHealthCheckCommand::class);
    }
}
