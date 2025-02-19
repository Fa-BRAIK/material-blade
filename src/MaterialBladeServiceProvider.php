<?php

namespace Nuxtifyts\MaterialBlade;

use Illuminate\View\Compilers\BladeCompiler;
use Nuxtifyts\MaterialBlade\Components\ViewProvider;
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
            ->hasConfigFile()
            ->hasViews('material-blade')
            ->hasViewComponent('material-blade', ViewProvider::class);
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
         * @pushMaterialBladeStyles blade directive
         */
        Blade::bindDirective(
            'pushMaterialBladeStyles',
            fn() => "<?php \$__env->startPush(config('material-blade.view-provider.stacks.styles')); ?>"
        );

        /**
         * @endPushMaterialBladeStyles blade directive
         */
        Blade::bindDirective(
            'endPushMaterialBladeStyles',
            fn () => '<?php $__env->stopPush(); ?>'
        );

        /**
         * @pushMaterialBladeScripts blade directive
         */
        Blade::bindDirective(
            'pushMaterialBladeScripts',
            fn() => "<?php \$__env->startPush(config('material-blade.view-provider.stacks.scripts')); ?>"
        );

        /**
         * @endPushMaterialBladeScripts blade directive
         */
        Blade::bindDirective(
            'endPushMaterialBladeScripts',
            fn () => '<?php $__env->stopPush(); ?>'
        );

        return $this;
    }
}
