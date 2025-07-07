<?php

namespace App\Livewire;

use App\Models\Album;
use Livewire\Component;

class Albums extends Component
{

    public string $heading = 'Albums';

    public $albums;

    public function mount()
    {
        $this->albums = Album::all();
    }
    public function render()
    {
        return view('livewire.album');
    }
}
