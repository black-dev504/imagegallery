<div class="w-60 bg-white rounded-xl relative overflow-hidden shadow-sm transition duration-300 hover:scale-105">

    <div class="h-48 w-full">
        <img
            src="{{ asset('storage/' . $image->img_path) }}"
            alt="{{ $image->name }}"
            class="w-full h-full object-cover overflow-hidden"
        >
    </div>


    <div class="p-3 text-center ">
        <h2 class="text-base font-semibold text-gray-800">{{ $image->name }}</h2>
        <p class="text-sm text-gray-600">{{ $image->description }}</p>
        <button wire:click="viewImage" class="text-blue-400 italic text-sm hover:underline">  View image</button>
    </div>


    <div class="absolute flex flex-col top-0 right-0 ">
        <button
            wire:click="toggle_favourite({{ $image->id }})"
            class="rounded-full p-2 transition duration-300 hover:scale-90"
        >
            <svg
                class="w-6 h-6 transition {{ $image->is_fav ? 'text-red-500' : 'text-gray-300' }} hover:text-red-500"
                fill="currentColor"
                stroke="black"
                stroke-width="2"
                viewBox="0 0 24 24"
                xmlns="http://www.w3.org/2000/svg"
            >
                <path d="M12.1 8.64l-.1.1-.11-.11C10.14 6.89 7.18 6.9 5.4 8.7a4.5
                4.5 0 00.1 6.4L12 21l6.5-5.9a4.5 4.5 0 00.1-6.4c-1.78-1.8-4.74-1.8-6.5 0z"/>
            </svg>

        </button>

        <button
            wire:click="deleteImage"
            wire:confirm="Delete this image permanently?"
            class="text-red-500 p-[2px] transition duration-300 hover:scale-90 hover:text-white hover:bg-red-400 rounded-full bg-white/80"
            title="Delete"
        >

            <svg
                xmlns="http://www.w3.org/2000/svg"
                class="h-4 w-4 "
                fill="none"
                viewBox="0 0 24 24"
                stroke="currentColor"
                stroke-width="3"
            >
                <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
            </svg>
        </button>

    </div>
</div>
