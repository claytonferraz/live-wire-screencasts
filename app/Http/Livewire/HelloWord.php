<?php

namespace App\Http\Livewire;

use Livewire\Component;

class HelloWord extends Component
{

    public $name = 'Jelly';

    public function render()
    {
        return view('livewire.hello-word');
    }
}
