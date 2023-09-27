<?php

namespace App\View\Components;

use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class singleImage extends Component
{
    public function __construct(
        public string $first,
    ){}

    public function render(): View
    {
        return view('components.single-image');
    }
}
