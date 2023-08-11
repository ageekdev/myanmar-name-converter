<?php

namespace AgeekDev\MMName;

use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;

class MMNameServiceProvider extends PackageServiceProvider
{
    public function configurePackage(Package $package): void
    {
        $package
            ->name('myanmar-name-converter')
            ->hasConfigFile('names-map');
    }
}
