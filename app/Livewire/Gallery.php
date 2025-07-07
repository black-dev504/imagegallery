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

    public function mount()
    {
        $this->user = auth()->user();

        if (! $this->user) {
            session()->flash('error', 'You must be logged in.');
            return $this->redirect('login', navigate: true);
        }

        $this->refreshGallery();
    }

    public function render()
    {
        return view('livewire.gallery', [
            'images' => $this->images,
        ]);
    }
}
