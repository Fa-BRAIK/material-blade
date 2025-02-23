<button
    {{ $attributes->class([ 
        'mb-btn', 
        $variant, 
        $color,
        $size, 
        $shape,
        'shadow-sm' => $shadow === 'sm',
        'shadow-md' => $shadow === 'md',
        'shadow-lg' => $shadow === 'lg',
        'shadow-xl' => $shadow === 'xl',
        'shadow-inner' => $innerShadow,
        'blur-xs' => $blurred
    ]) }}

    @disabled($disabled)

    {{ $attributes }}
>
    {{ $prependIcon ?? '' }}

    <span class="mb-btn-label">
        {{ $slot }}
    </span>

    {{ $appendIcon ?? '' }}
</button>

@pushMaterialBladeStyles()
<link rel="stylesheet" href="{{ asset('vendor/material-blade/button.min.css') }}" />
@endPushMaterialBladeStyles
