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

    protected function getPackageProviders($app): array
    {
        return [
            MMNameServiceProvider::class,
        ];
    }
}
