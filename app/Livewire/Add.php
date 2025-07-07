<?php

namespace App\Livewire;

use App\Models\Image;
use App\Models\User;
use Livewire\Attributes\Validate;
use Livewire\Component;
use Livewire\WithFileUploads;

class Add extends Component
{
    use WithFileUploads;

    #[Validate([
        'name' => 'required|string',
        'image' => 'required|image|max:2048', // Max 2MB
        'description' => 'nullable|string|max:100'

    ])]
    public $name;
    public $image;
    public $description;
    public $user;


    public function mount(): void
    {
        $this->name = '';
        $this->image = '';
        $this->description = '';
    }

    public function sendEvent()
    {
        $this->dispatch('image-updated');
    }

    public function save()
    {
        //validate the input
        $this->validate();

        //check if user is authenticated

        $this->user = auth()->user();

        if (! $this->user) {
            session()->flash('error', 'You must be logged in to upload an image.');
            return $this->redirect('login', navigate:true);
        }



            $path = $this->image->store('photos','public');

            Image::create([
                'name' => $this->name,
                'img_path' => $path,
                'description' => $this->description,
                'user_id' => $this->user->id,

            ]);




        $this->reset();
        $this->sendEvent();



        session()->flash('message', 'Image uploaded successfully!');


        return $this->redirect('gallery', navigate:true);

    }


    public function render()
    {
        return view('livewire.add');
    }
}
