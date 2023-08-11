<?php

namespace AgeekDev\MMName\Tests;

use AgeekDev\MMName\MMNameServiceProvider;
use Orchestra\Testbench\TestCase as Orchestra;

class TestCase extends Orchestra
{
    protected function setUp(): void
    {
        parent::setUp();
    }

    protected function getPackageProviders($app)
    {
        return [
            MMNameServiceProvider::class,
        ];
    }

    public function getEnvironmentSetUp($app)
    {
        config()->set('database.default', 'testing');

        /*
        $migration = include __DIR__.'/../database/migrations/create_myanmar-name-converter_table.php.stub';
        $migration->up();
        */
    }
}
