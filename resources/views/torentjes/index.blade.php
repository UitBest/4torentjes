<x-app-layout>
    <div class="">
        <div class="">
            <img src="{{ url('img/Torentjes.jpeg') }}">
            <div class="-top-14 text-center relative z-10">
                <a href="#woonkamer"><h1 class="bg-gray-500 opacity-75 text-white text-4xl">As Quatro Torrenzinhas</h1></a>
            </div>
        </div>
    </div>
    <x-body-text class="mb-14">
        Deze site geeft u allerlei informatie over het gebruik van de bungalow en biedt u nuttige tips voor een aangenaam verblijf in de zuidelijke provincie Algarve. Indien u deze info doorleest dan worden veel vragen beantwoord.
    </x-body-text>
    <x-image-slider>
        <x-first-image>img/IMG_1599.jpg</x-first-image>
        <x-image>img/Torentjes.jpeg</x-image>
        <x-image>img/voorzijde2.jpeg</x-image>
    </x-image-slider>
    <x-body-text class="mt-14 mb-7">
        Wij verzoeken u in ieder geval hoofdstukken 3, 4 en 5 door te nemen, zodat het huis veilig en schoon wordt achtergelaten en gereed is voor als wij zelf terugkomen.
    </x-body-text>
    <x-body-text class="my-7">
        Informatie alsmede opmerkingen over het huis kunt u doorgeven aan Will Cuijpers (0031-6 53 33 11 74 / will@cuijpers.st).
    </x-body-text>
    <x-body-text class="my-7">
        Wij wensen u een aangenaam verblijf en vertrouwen er op dat u de bungalow en de aanwezige spullen op een even nette wijze gebruikt als bij u thuis.
    </x-body-text>
    <x-body-text class="my-7">
        Hebt u tips over bezienswaardigheden, restaurants, winkels enz. dan horen wij dat graag van u.
    </x-body-text>


    <!-- Woonkamer -->
    <x-kamer-titel src="television.svg" kamer="woonkamer">
        Woonkamer
    </x-kamer-titel>
    <x-image-slider>
        <!-- Item 1 -->
        <x-first-image>img/woonkamer/IMG_1550.jpg</x-first-image>>
        <!-- Item 2 -->
        <x-image>img/woonkamer/IMG_1549.jpg</x-image>
        <!-- Item 3 -->
        <x-image>img/woonkamer/IMG_1551.jpg</x-image>
    </x-image-slider>
    <x-body-icons>
        <img src="{{ url('img/svg/woonkamer/sonos.svg') }}" class="h-10 w-10" alt="">
        <div class="flex flex-col">
            <img src="{{ url('img/svg/woonkamer/people.svg') }}" class="h-10 w-10" alt="">
            <p class="text-center">6</p>
        </div>
        <img src="{{ url('img/svg/woonkamer/netflix.svg') }}" class="h-10 w-10" alt="">
        <img src="{{ url('img/svg/woonkamer/internet.svg') }}" class="h-10 w-10" alt="">
        <div class="flex items-center h-10">
            <img src="{{ url('img/svg/woonkamer/lightning.svg') }}" class="h-3 w-3" alt="">
            <img src="{{ url('img/svg/woonkamer/couch.svg') }}" class="h-10 w-10 -mt-1" alt="">
            <img src="{{ url('img/svg/woonkamer/lightning.svg') }}" class="h-3 w-3" alt="">
        </div>
    </x-body-icons>


    <!-- Keuken -->
    <x-kamer-titel src="stove.svg" kamer="keuken">
        Keuken
    </x-kamer-titel>
    <x-image-slider>
        <!-- Item 1 -->
        <x-first-image>img/keuken/IMG_1609.jpg</x-first-image>
        <!-- Item 2 -->
        <x-image>img/keuken/IMG_1610.jpg</x-image>
        <!-- Item 3 -->
        <x-image>img/keuken/IMG_1611.jpg</x-image>
    </x-image-slider>
    <x-body-icons>
        <img src="{{ url('img/svg/keuken/dishwasher.svg') }}" class="h-10 w-10" alt="">
        <img src="{{ url('img/svg/keuken/oven.svg') }}" class="h-10 w-10" alt="">
        <img src="{{ url('img/svg/keuken/washing-machine.svg') }}" class="h-10 w-10" alt="">
        <img src="{{ url('img/svg/keuken/frying-pan.svg') }}" class="h-10 w-10" alt="">
        <img src="{{ url('img/svg/keuken/fridge.svg') }}" class="h-10 w-10" alt="">
        <img src="{{ url('img/svg/keuken/cutlery.svg') }}" class="h-10 w-10" alt="">
    </x-body-icons>


    <!-- Slaapkamers -->
    <x-kamer-titel src="bed.svg" kamer="slaapkamers">
        Slaapkamers
    </x-kamer-titel>
    <h1 class="text-2xl ml-2 font-bold my-2">Voorzijde</h1>
    <x-image-slider>
        <!-- Item 1 -->
        <x-first-image>img/slaapkamers/voorzijde1.jpg</x-first-image>
        <!-- Item 2 -->
        <x-image>img/slaapkamers/voorzijde2.jpg</x-image>
    </x-image-slider>
    <x-body-icons>
        <img src="{{ url('img/svg/keuken/dishwasher.svg') }}" class="h-10 w-10" alt="">
        <img src="{{ url('img/svg/keuken/oven.svg') }}" class="h-10 w-10" alt="">
        <img src="{{ url('img/svg/keuken/washing-machine.svg') }}" class="h-10 w-10" alt="">
        <img src="{{ url('img/svg/keuken/frying-pan.svg') }}" class="h-10 w-10" alt="">
        <img src="{{ url('img/svg/keuken/fridge.svg') }}" class="h-10 w-10" alt="">
        <img src="{{ url('img/svg/keuken/cutlery.svg') }}" class="h-10 w-10" alt="">
    </x-body-icons>

    <h1 class="text-2xl ml-2 font-bold mt-12 mb-2">Master</h1>
    <x-image-slider>
        <!-- Item 1 -->
        <x-first-image>img/slaapkamers/voorzijde1.jpg</x-first-image>
        <!-- Item 2 -->
        <x-image>img/slaapkamers/voorzijde2.jpg</x-image>
    </x-image-slider>
    <x-body-icons>
        <img src="{{ url('img/svg/keuken/dishwasher.svg') }}" class="h-10 w-10" alt="">
        <img src="{{ url('img/svg/keuken/oven.svg') }}" class="h-10 w-10" alt="">
        <img src="{{ url('img/svg/keuken/washing-machine.svg') }}" class="h-10 w-10" alt="">
        <img src="{{ url('img/svg/keuken/frying-pan.svg') }}" class="h-10 w-10" alt="">
        <img src="{{ url('img/svg/keuken/fridge.svg') }}" class="h-10 w-10" alt="">
        <img src="{{ url('img/svg/keuken/cutlery.svg') }}" class="h-10 w-10" alt="">
    </x-body-icons>

    <h1 class="text-2xl ml-2 font-bold mt-12 mb-2">Achter</h1>
    <x-image-slider>
        <!-- Item 1 -->
        <x-first-image>img/slaapkamers/voorzijde1.jpg</x-first-image>
        <!-- Item 2 -->
        <x-image>img/slaapkamers/voorzijde2.jpg</x-image>
    </x-image-slider>
    <x-body-icons>
        <img src="{{ url('img/svg/keuken/dishwasher.svg') }}" class="h-10 w-10" alt="">
        <img src="{{ url('img/svg/keuken/oven.svg') }}" class="h-10 w-10" alt="">
        <img src="{{ url('img/svg/keuken/washing-machine.svg') }}" class="h-10 w-10" alt="">
        <img src="{{ url('img/svg/keuken/frying-pan.svg') }}" class="h-10 w-10" alt="">
        <img src="{{ url('img/svg/keuken/fridge.svg') }}" class="h-10 w-10" alt="">
        <img src="{{ url('img/svg/keuken/cutlery.svg') }}" class="h-10 w-10" alt="">
    </x-body-icons>


    <!-- Badkamers -->
    <x-kamer-titel src="shower.svg" kamer="badkamers">
        Badkamers
    </x-kamer-titel>
</x-app-layout>
