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
    @vite('resources/js/app.js')

    <!-- Styles -->
    @vite('resources/css/app.css')
    @livewireStyles
</head>
<body class="bg-[#f3eed8] min-h-screen italic" style="font-family: 'Bodoni MT';">
    @livewire("navigation-menu")
    <main>
        <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-[#E9E1B9] overflow-hidden shadow-xl sm:rounded-lg">
                    {{ $slot }}
                </div>
            </div>
        </div>
    </main>
    @livewireStyles
</body>
</html>
