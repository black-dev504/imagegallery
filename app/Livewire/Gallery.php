<?php

namespace App\Livewire;

use App\Models\Image;
use Livewire\Attributes\On;
use Livewire\Component;

class Gallery extends Component
{
    public string $heading = 'Image Gallery';
    public $images;
    public $user;

    #[On('image-updated')]
    public function refreshGallery(): void
    {

        $this->images = $this->user->images()->orderBy('created_at', 'desc')->get();
    }

    #[On('toggle-favourite')]
    public function toggle_favourite( $id)
    {

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
            return $this->redirect('login', navigate: true);
        }

        $this->refreshGallery();
    }

    public function render()
    {
        return view('livewire.gallery',

        );
    }
}
