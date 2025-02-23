<?php

namespace Nuxtifyts\MaterialBlade\Components\Core;

use Illuminate\View\View;
use Illuminate\View\Component;

class Button extends Component
{
    public bool $disabled;

    public function __construct(
        /** @var 'filled' | 'outline' | 'text' */
        public string $variant = 'filled',

        /** @var 'xs' | 'sm' | 'base' | 'lg' | 'xl' */
        public string $size = 'base',

        /** @var 'dark' | 'red' | 'green' | 'orange' | 'white' */
        public string $color = 'dark',

        /** @var 'rounded' | 'rounded-lg' | 'rounded-full' */
        public string $shape = 'rounded',

        /** @var 'none' | 'sm' | 'md' | 'lg' | 'xl' */
        public string $shadow = 'none',

        public bool $blurred = false,
        public bool $innerShadow = false,

        ?bool $disabled = null
    ) {
        $this->disabled = $disabled ?? $this->blurred;
    }

    public function render(): ?View
    {
        // @phpstan-ignore-next-line
        return view('material-blade::components.core.button');
    }
}
