<?php

namespace Nuxtifyts\MaterialBlade\Components\Core;

use Illuminate\View\View;
use Illuminate\View\Component;

class ButtonGroup extends Component
{
    public function render(): View
    {
        // @phpstan-ignore-next-line
        return view('material-blade::components.core.button-group');
    }
}
