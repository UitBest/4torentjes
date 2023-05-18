<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>4Torentjes</title>

        <!-- Icon -->
        <link rel="icon" href="{{ url('img/favicon.svg') }}">

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

        <!-- scripts -->
{{--        @vite(['resources/sass/app.scss', 'resources/js/app.cjs', 'resources/css/app.css'])--}}
        <script src="https://cdn.tailwindcss.com"></script>
        <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>

        <!-- Styles -->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/tw-elements/dist/css/tw-elements.min.css?version=1.0.0" />
        @livewireStyles

    </head>
    <body>
        <div id="app"><!--sm:bg-[#f3eed8] -->
            <div class="min-h-screen italic font-['Times_New_Roman'] scroll-smooth" style="background: linear-gradient(180deg, rgba(4,20,84,1) 0%, rgba(255,243,183,1) 13%, rgba(255,243,183,1) 100%);">
                <x-navigation/>
                <main>
                    <div class="sm:py-12">
                        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8"><!--bg-[#E9E1B9]-->
                            <div class="bg-[#fff3b7] overflow-hidden sm:shadow-2xl sm:rounded-lg">
                                {{ $slot }}
                            </div>
                        </div>
                    </div>
                </main>
            </div>
            <script src="https://cdn.jsdelivr.net/npm/tw-elements/dist/js/tw-elements.umd.min.js"></script>
        @livewireScripts
        </div>
    </body>
</html>
