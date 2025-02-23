<?php

namespace Nuxtifyts\MaterialBlade\Components;

use Illuminate\View\View;
use Illuminate\View\Component;

class ViewProvider extends Component
{
    public string $lang;

    public function __construct(
        public string $title,
        string $lang = ''
    ) {
        $this->lang = $lang ?: str_replace('_', '-', app()->getLocale());
    }

    public function render(): View
    {
        // @phpstan-ignore-next-line
        return view('material-blade::components.view-provider');
    }
}
