<?php

namespace App\Livewire;

use App\Models\Image;
use Livewire\Attributes\On;
use Livewire\Component;

class Favourite extends Component
{

    public string $heading;
    public $images;
    public $user;

    #[On('loadfav')]
    public function loadFav(){
        $this->images = Image::where('is_fav', true)->where('user_id', $this->user->id)->get();
}


    #[On('toggle-favourite')]
    public function toggle_favourite( $id)
    {

        $image = Image::findOrFail($id);
        $isFavourite = !$image->is_fav;

        $image->update([
                'is_fav' => $isFavourite
        ]);

        $this->dispatch('loadfav');

    }


    public function mount()
    {
        $this->user = auth()->user();

        if (!$this->user) {
            return $this->redirect('login', navigate:true);
        }

        $this->heading = 'Favourite Images';
        $this->loadFav();
    }

    public function render()
    {
        return view('livewire.favourite');
    }
}
