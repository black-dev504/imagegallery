<?php

namespace App\Livewire;

use Livewire\Component;
use Livewire\Livewire;

class ImageCard extends Component
{

    public $image;
    public $user;

    public function toggle_favourite($id){


       $this->dispatch('toggle-favourite', $id);
//       $this->dispatch('image-updated');

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
