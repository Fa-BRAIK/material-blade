<div
    {{ $attributes->class([ 'mb-btn-group' ]) }}
>
    {{ $slot }}
</div>

@pushMaterialBladeStyles()
<link rel="stylesheet" href="{{ asset('vendor/material-blade/button-group.min.css') }}" />
@endPushMaterialBladeStyles
