<div>
    <h1 class="font-bold text-xl mb-6">
        UPLOAD IMAGE
    </h1>

    <form wire:submit="save" class="w-lg mx-auto">
        <div class="mb-6">
            <label for="name" class="block text-sm font-medium text-gray-700">Image Name</label>
            <input type="text" id="name" wire:model="name" class="mt-1 block w-full h-10 p-2 border-gray-300 rounded-md shadow-sm focus:border-blue-500 focus:ring-blue-500 sm:text-sm">
            <x-error name="name"/>
        </div>

        <div class="mb-6">
            <label for="description" class="block text-sm font-medium text-gray-700">Description</label>
            <textarea name="description" id="description" wire:model="description" class="mt-1 block p-2 h-15 w-full border-gray-300 rounded-md shadow-sm focus:border-blue-500 focus:ring-blue-500 sm:text-sm"></textarea>
            <x-error name="description"/>
        </div>

        <div class="mb-6">
            <label for="image" class="block text-sm font-medium text-gray-700">Select Image</label>
            <input type="file" name="image" id="image" wire:model="image"  class="mt-1  block"  />
            <x-error name="image"/>
        </div>

{{--        <div class="mb-6">--}}
{{--            <label for="album" class="block text-sm font-medium text-gray-700">Select Album</label>--}}
{{--            <select id="album" wire:model="album_id" class="mt-1 block w-full h-10 border-gray-300 rounded-md shadow-sm focus:border-blue-500 focus:ring-blue-500 sm:text-sm">--}}
{{--                <option value="">Select an album</option>--}}
{{--                @foreach($albums as $album)--}}
{{--                    <option value="{{ $album->id }}">{{ $album->name }}</option>--}}
{{--                @endforeach--}}
{{--            </select>--}}
{{--            <x-error name="album_id"/>--}}
{{--        </div>--}}

        <div class="mb-6">
            <button type="submit" class="px-4 py-2 bg-blue-500 text-white rounded-md hover:bg-blue-600 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-offset-2">
                Upload Image
            </button>
        </div>



        <div class="">
            @if ($image)

                    <img src="{{ $image->temporaryUrl() }}" alt="Image Preview" class="max-w-lg h-48 object-cover rounded-md mb-4">


            @endif
        </div>

    </form>
</div>
