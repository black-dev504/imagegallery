<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport"
              content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>

        <title>Pixel Positions</title>
    </head>
    <body>
    <div class="">
        <nav class="flex justify-between items-center py-8 border-b border-black/10">
            <div>
                <a href="/">
                    {{--                <img src="{{ Vite::asset('resources/images/logo.svg') }}" alt="logo">--}}
                </a>
            </div>

            <div class="flex items-center space-x-4">

            <div class="relative">
                <input
                    type="text"
                    placeholder="Search..."
                    class="bg-transparent border border-gray-300 focus:border-blue-500 text-sm rounded-full px-4 py-2 pr-10 focus:outline-none placeholder:text-gray-400"
                />
                <svg
                    class="w-4 h-4 text-gray-400 absolute right-3 top-1/2 -translate-y-1/2 pointer-events-none"
                    fill="none"
                    stroke="currentColor"
                    stroke-width="2"
                    viewBox="0 0 24 24"
                    xmlns="http://www.w3.org/2000/svg">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M21 21l-4.35-4.35m0 0A7.5 7.5 0 1012 19.5a7.5 7.5 0 004.65-2.85z"/>
                </svg>
            </div>

          @auth
                    <form method="POST" action="/logout">
                        @csrf
                        <button class="bg-red-300 text-white px-4 py-2 rounded-full hover:bg-red-600 transition">
                            Log Out
                        </button>
                    </form>
          @endauth

            @guest
                <a href="/login" class="bg-blue-500 text-white px-4 py-2 rounded-full hover:bg-blue-600 transition">
                    Log In
                </a>

                <a href="/signup" class="bg-green-500 text-white px-4 py-2 rounded-full hover:bg-green-600 transition">
                    Sign Up
                </a>
            @endguest

            </div>
        </nav>
        <section class="flex ">

            @auth
            <aside class="fixed  left-0 w-20 h-full border-r border-black/10 pt-12 flex flex-col items-center py-6 space-y-8">
                <nav class="flex flex-col w-full justify-center items-center space-y-6">

                    <!-- Grid Icon -->
                    <x-side_icon :active="request()->is('gallery')" name='all' href="/gallery">
                        <path d="M3 3h7v7H3V3zm0 11h7v7H3v-7zm11-11h7v7h-7V3zm0
                     11h7v7h-7v-7z"/>
                    </x-side_icon>

                    <!-- Love Icon -->
                    <x-side_icon :active="request()->is('favourites')" name="favourite" href="/favourites">
                        <path d="M12.1 8.64l-.1.1-.11-.11C10.14 6.89 7.18 6.9
                        5.4 8.7a4.5 4.5 0 00.1 6.4L12 21l6.5-5.9a4.5
                        4.5 0 00.1-6.4c-1.78-1.8-4.74-1.8-6.5 0z"/>
                    </x-side_icon>

                    <x-side_icon :active="request()->is('add')" href="/add">

                        <path d="M12 5a1 1 0 011 1v5h5a1 1 0 110 2h-5v5a1 1 0 11-2
                        0v-5H6a1 1 0 110-2h5V6a1 1 0 011-1z"/>
                    </x-side_icon>

                    <x-side_icon  :active="request()->is('album')" name="album" href="/albums">
                        <path d="M3 3h18v18H3V3zm2 2v14h14V5H5zm4 4h6v2H9V9zm0 4h6v2H9v-2z"/>
                    </x-side_icon>


                </nav>
            </aside>
            @endauth

            <main class="mt-10 ml-35 flex flex-1">
                {{ $slot }}
            </main>
        </section>



    </div>
    </body>
</html>
