<x-display>
    <x-slot:heading>
        {{$heading}}
    </x-slot:heading>

    @forelse($images as $image)
        <livewire:image-card :image="$image" :key="$image->id" />
    @empty
        <p class="text-center text-gray-500">No image found.</p>
    @endforelse
</x-display>


