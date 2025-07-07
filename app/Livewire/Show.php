<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Image;

class Show extends Component
{

    public $image;

    public function mount($id)
    {
       $image = Image::findOrFail($id);

        $this->image = $image;
    }

    public function render()
    {
        return view('livewire.show');
    }
}
