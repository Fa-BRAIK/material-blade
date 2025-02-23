<?php

namespace Nuxtifyts\MaterialBlade;

use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;
use Illuminate\Support\Facades\Blade;
use Override;

class MaterialBladeServiceProvider extends PackageServiceProvider
{
    public function configurePackage(Package $package): void
    {
        $package
            ->name('material-blade')
            ->hasAssets()
            ->hasConfigFile()
            ->hasViews()
            ->hasViewComponents(
                'material-blade',
                Components\ViewProvider::class,
                Components\Core\Button::class,
            );
    }

    #[Override]
    public function boot(): static
    {
        return parent::boot()
            ->bootBladeDirectives();
    }

    protected function bootBladeDirectives(): static
    {
        /**
         * @pushMaterialBladeStyles directive
         */
        Blade::bindDirective(
            'pushMaterialBladeStyles',
            fn() => '<?php $__env->startPush(config("material-blade.view-provider.stacks.styles")); ?>'
        );

        /**
         * @endPushMaterialBladeStyles directive
         */
        Blade::bindDirective(
            'endPushMaterialBladeStyles',
            fn () => '<?php $__env->stopPush(); ?>'
        );

        /**
         * @pushMaterialBladeScripts directive
         */
        Blade::bindDirective(
            'pushMaterialBladeScripts',
            fn() => '<?php $__env->startPush(config("material-blade.view-provider.stacks.scripts")); ?>'
        );

        /**
         * @endPushMaterialBladeScripts directive
         */
        Blade::bindDirective(
            'endPushMaterialBladeScripts',
            fn () => '<?php $__env->stopPush(); ?>'
        );

        return $this;
    }
}
