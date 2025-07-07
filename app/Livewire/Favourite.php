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


    #[On('toggleFavourite')]
    public function toggleFavourite( $id): void
    {
        dd('hello');
        $image = Image::findOrFail($id);



        $isFavourite = !$image->is_fav;

        if ($image) {

            $image->update([
                'is_fav' => $isFavourite
            ]);

            $this->dispatch('image-updated');


        }
    }
    public function mount()
    {
        $this->user = auth()->user();

        if (! $this->user) {
            session()->flash('error', 'You must be logged.');
            return $this->redirect('login', navigate:true);
        }

        $this->heading = 'Favourite Images';
        $this->images = Image::where('is_fav', true)->where('user_id', $this->user->id)->get();
    }
    public function render()
    {
        return view('livewire.favourite');
    }
}
