<?php

namespace AgeekDev\MMName;

use AgeekDev\MMName\Commands\MMNameCommand;
use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;

class MMNameServiceProvider extends PackageServiceProvider
{
    public function configurePackage(Package $package): void
    {
        /*
         * This class is a Package Service Provider
         *
         * More info: https://github.com/spatie/laravel-package-tools
         */
        $package
            ->name('myanmar-name-converter')
            ->hasConfigFile()
            ->hasViews()
            ->hasMigration('create_myanmar-name-converter_table')
            ->hasCommand(MMNameCommand::class);
    }
}
