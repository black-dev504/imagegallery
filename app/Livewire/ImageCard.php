<?php

namespace App\Livewire;

use Livewire\Component;

class ImageCard extends Component
{

    public $image;
    public $user;

    public function toggleFavourite(){
        $this->dispatch('toggleFavourite', ['id' => $this->image->id]);
    }

    public function viewImage()
    {
        return redirect()->route('show', ['id' => $this->image->id]);


    }
    public function render()
    {
        return view('livewire.image-card');
    }
}
