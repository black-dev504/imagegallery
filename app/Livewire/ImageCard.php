<?php

namespace App\Livewire;

use Livewire\Attributes\On;
use Livewire\Component;
use Livewire\Livewire;

class ImageCard extends Component
{

    public $image;
    public $user;

    public function toggle_favourite($id){
       $this->dispatch('toggle-favourite', $id);
    }

    #[On('refresh-image')]
    function refreshImage()
    {
        $this->dispatch('$refresh');

    }

    public function viewImage()
    {
        return redirect()->route('show', ['id' => $this->image->id]);
    }

    public function deleteImage(){
        $this->dispatch('delete-image', $this->image->id);
    }
    public function render()
    {
        return view('livewire.image-card');
    }
}
