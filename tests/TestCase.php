<?php

namespace Nuxtifyts\MaterialBlade\Tests;

use Illuminate\Support\ServiceProvider;
use Nuxtifyts\MaterialBlade\MaterialBladeServiceProvider;
use Orchestra\Testbench\TestCase as Orchestra;

abstract class TestCase extends Orchestra
{
    /**
     * @return list<ServiceProvider::class>
     */
    protected function getPackageProviders($app): array
    {
        return [
            MaterialBladeServiceProvider::class,
        ];
    }
}
