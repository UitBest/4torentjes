<!DOCTYPE html>
{{--<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">--}}
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
    @vite(['resources/sass/app.scss', 'resources/js/app.js', 'resources/css/app.css'])
    <script src="https://cdn.tailwindcss.com"></script>
{{--    <script src="../../../node_modules/tw-elements/dist/js/index.min.js"></script>--}}

    <!-- Styles -->
{{--    @livewireStyles--}}

</head>
<body>
    <div id="app">
        <div class="sm:bg-[#f3eed8] bg-[#E9E1B9] min-h-screen italic font-['Times_New_Roman']">
            <x-navigation/>
            <main>
                <div class="sm:py-12">
                    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                        <div class="bg-[#E9E1B9] overflow-hidden sm:shadow-xl sm:rounded-lg">
                            {{ $slot }}
                        </div>
                    </div>
                </div>
            </main>
            </div>

        <script src="https://cdn.jsdelivr.net/npm/tw-elements/dist/js/index.min.js"></script>
{{--    @livewireScripts--}}
    </div>
</body>
</html>
