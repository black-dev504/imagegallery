<div class="flex flex-col md:flex-row h-screen">
    <div class=" items-center justify-center   bg-gray-100 border-3 max-w-5/10 max-h-6/10 border-black">


    <img
        src="{{ asset('storage/' . $image->img_path) }}"
        alt="{{ $image->name }}"
        class="w-full h-full object-cover"
    >
        </div>

    <div class="flex flex-col ml-10">
        <h1 class="font-bold text-xl">Name: {{$image->name}}</h1>
        <p>Description: {{$image->description}}</p>

    </div>
</div>
