<?php

namespace AgeekDev\MMName;

use AgeekDev\MMName\DataSourceDriver\DataSourceManager;
use Illuminate\Container\Container;
use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;

class MMNameServiceProvider extends PackageServiceProvider
{
    public function packageRegistered()
    {
        $this->app->singleton('name_data_source', function () {
            return new DataSourceManager(Container::getInstance());
        });
    }

    public function configurePackage(Package $package): void
    {
        $package
            ->name('myanmar-name-converter')
            ->hasConfigFile([
                'mm-name-converter',
                'mm-names-map',
                'en-names-map',
                'en-exceptional-names',
            ]);
    }
}
