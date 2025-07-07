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
    <div class="container">
        <nav class="flex justify-between items-center py-8 border-b border-black/10">
            <div>
                <a href="/">
                    {{--                <img src="{{ Vite::asset('resources/images/logo.svg') }}" alt="logo">--}}
                </a>
            </div>

            <div class="space-x-6 font-bold">
                <a href="#">Jobs</a>
                <a href="#">Careers</a>
                <a href="#">Salaries</a>
                <a href="#">Companies</a>
            </div>

            <div>
                <a href="">Post a Job</a>
            </div>
        </nav>
        <section class="flex ">

            <aside class="fixed  left-0 w-20 h-full border-r border-black/10 pt-12 flex flex-col items-center py-6 space-y-8">
                <nav class="flex flex-col w-full justify-center items-center space-y-6">

                    <!-- Grid Icon -->
                    <x-side_icon name='all' href="/gallery">
                        <path d="M3 3h7v7H3V3zm0 11h7v7H3v-7zm11-11h7v7h-7V3zm0
                     11h7v7h-7v-7z"/>
                    </x-side_icon>

                    <!-- Love Icon -->
                    <x-side_icon name="favourite" href="/favourites">
                        <path d="M12.1 8.64l-.1.1-.11-.11C10.14 6.89 7.18 6.9
                        5.4 8.7a4.5 4.5 0 00.1 6.4L12 21l6.5-5.9a4.5
                        4.5 0 00.1-6.4c-1.78-1.8-4.74-1.8-6.5 0z"/>
                    </x-side_icon>

                    <x-side_icon name="add" href="/add">

                        <path d="M12 5a1 1 0 011 1v5h5a1 1 0 110 2h-5v5a1 1 0 11-2
                        0v-5H6a1 1 0 110-2h5V6a1 1 0 011-1z"/>
                    </x-side_icon>

                    <x-side_icon name="album" href="/albums">
                        <path d="M3 3h18v18H3V3zm2 2v14h14V5H5zm4 4h6v2H9V9zm0 4h6v2H9v-2z"/>
                    </x-side_icon>




                </nav>
            </aside>

            <main class="mt-10 ml-35 flex flex-1 max-w-[986px]">
                {{ $slot }}
            </main>
        </section>



    </div>
    </body>
</html>
