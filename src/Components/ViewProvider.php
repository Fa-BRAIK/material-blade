<?php

namespace Nuxtifyts\MaterialBlade\Components;

use Illuminate\Contracts\View\View;
use Illuminate\View\Component;
use Closure;

class ViewProvider extends Component
{
    public function render(): View|Closure|string
    {
        return view('material-blade::components.view-provider');
    }
}
