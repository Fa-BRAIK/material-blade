@stack(config('material-blade.view-provider.stacks.styles'))

<div {{ $attributes }}>
    {{ $slot }}
</div>

@stack(config('material-blade.view-provider.stacks.scripts'))
