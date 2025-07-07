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
         if (!$image) {
              session()->flash('error', 'Image not found.');
              return redirect()->route('gallery');
         }
        $this->image = $image;
    }

    public function render()
    {
        return view('livewire.show');
    }
}
