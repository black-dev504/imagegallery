<div>
  <h1> {{$heading}}</h1>

    <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-4">
        @foreach($images as $image)
        <div class="bg-white/70 rounded-lg shadow-md overflow-hidden">
            <img src="{{ asset('storage/' . $image->path) }}" alt="{{ $image->name }}" class="w-full h-48 object-cover">
            <div class="p-4">
            <h2 class="text-lg font-semibold">{{ $image->name }}</h2>
            <p class="text-gray-600">{{ $image->description }}</p>
            </div>
        </div>
        @endforeach
</div>
