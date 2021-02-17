<?php

namespace App\Http\Livewire;

use Livewire\Component;

class HelloWord extends Component
{

    public $name = 'Jelly';
    public $loud = false;
    public $greeting = ['Hello'];

    

    public function render()
    {
        return view('livewire.hello-word');
    }
}
