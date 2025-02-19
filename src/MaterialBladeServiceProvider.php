<?php

namespace Nuxtifyts\MaterialBlade;

use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;

class MaterialBladeServiceProvider extends PackageServiceProvider
{
    public function configurePackage(Package $package): void
    {
        $package
            ->name('material-blade')
            ->hasConfigFile()
            ->hasViews();
    }
}
