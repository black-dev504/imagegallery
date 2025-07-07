
@error($name)
@if(auth()->guest())
    <div class="bg-red-100 border-l-4 border-red-400 text-red-700 px-4 py-3 mb-1 rounded" role="alert">
        <p class="italic font-normal text-sm">{{ $message }}</p>
    </div>
@else
    <p class="italic font-normal text-sm text-red-500">{{ $message }}</p>
@endif
@enderror


