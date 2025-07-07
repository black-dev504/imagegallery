@props([
    'active' => false,
])

<div class="hover:border-r-4 group py-4 w-full hover:border-blue-500 {{ $active ? 'border-r-4 border-blue-500' : '' }}">
    <a wire:navigate {{ $attributes }}>
        <svg
            class="w-8 h-8 mx-auto group-hover:text-blue-500 transition {{ $active ? 'text-blue-500' : 'text-[#cbd5e1]' }}"
            fill="currentColor"
            viewBox="0 0 24 24"
            xmlns="http://www.w3.org/2000/svg"
        >
            {{ $slot }}
        </svg>
    </a>
</div>
