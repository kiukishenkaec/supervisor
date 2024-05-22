<?php

namespace Kiukishenkaec\Supervisor;

use Kiukishenkaec\Supervisor\Commands\SupervisorCommand;
use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;

class SupervisorServiceProvider extends PackageServiceProvider
{
    public function configurePackage(Package $package): void
    {
        /*
         * This class is a Package Service Provider
         *
         * More info: https://github.com/spatie/laravel-package-tools
         */
        $package
            ->name('supervisor')
            ->hasConfigFile()
            ->hasViews()
            ->hasMigration('create_supervisor_table')
            ->hasCommand(SupervisorCommand::class);
    }
}
