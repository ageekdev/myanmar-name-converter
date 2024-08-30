<?php

namespace AgeekDev\MMName;

use AgeekDev\MMName\DataSourceDriver\DataSourceDriverInterface;
use AgeekDev\MMName\DataSourceDriver\DataSourceManager;
use AgeekDev\MMName\Facades\DataSource;
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

        $this->app->bind(DataSourceDriverInterface::class, function () {
            return DataSource::driver(
                config('mm-name-converter.data_source_driver')
            )->make();
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
