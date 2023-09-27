<?php

namespace App\View\Components;

use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class image extends Component
{
    public function __construct(
        public string $first,
    ){}

    public function render(): View
    {
        return view('components.image');
    }
}
