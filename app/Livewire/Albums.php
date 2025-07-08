<?php

namespace App\Livewire;

use App\Models\Album;
use Livewire\Component;

class Albums extends Component
{

    public string $heading = 'Albums';

    public $albums;
    public $user;

    public function mount()
    {
        $this->user = auth()->user();
        $this->albums = $this->user->albums()->get();
    }
    public function render()
    {
        return view('livewire.album');
    }
}
