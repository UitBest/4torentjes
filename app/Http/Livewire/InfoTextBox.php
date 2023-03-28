<?php

namespace App\Http\Livewire;

use JetBrains\PhpStorm\NoReturn;
use Livewire\Component;

class InfoTextBox extends Component
{
    public $text;

//    protected $listeners = ['changeText' => 'changeText'];

    #[NoReturn] public function changeText($text)
    {
        dd($text);
        $this->text = $text;
    }

    public function render()
    {
        return view('livewire.info-text-box');
    }
}
