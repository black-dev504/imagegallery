<?php

namespace App\Livewire;

use Livewire\Component;

class Gallery extends Component
{

    public string $heading = 'Image Gallery';

    public function render()
    {
        return view('livewire.gallery');
    }
}
