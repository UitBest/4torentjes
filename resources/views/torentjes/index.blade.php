<x-app-layout>
    <div class="">
        <div class="">
            <img src="{{ url('img/Torentjes.jpeg') }}">
            <div class="-top-14 text-center relative z-10">
                <h1 class="bg-gray-500 opacity-75 text-white text-4xl">As Quatro Torrenzinhas</h1>
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
    <x-kamer-titel src="television.svg" kamer="Woonkamer"/>
    <x-image-slider>
        <!-- Item 1 -->
        <x-first-image>img/woonkamer/IMG_1550.jpg</x-first-image>>
        <!-- Item 2 -->
        <x-image>img/woonkamer/IMG_1549.jpg</x-image>
        <!-- Item 3 -->
        <x-image>img/woonkamer/IMG_1551.jpg</x-image>
    </x-image-slider>

    <div x-data="{ descriptionSVG: '' }">
        <x-body-icons>
            <x-body-icon src="img/svg/woonkamer/sonos.svg" title="Sonos">Lekker knallen met de geweldige geluidsinstallatie die u zelf kunt bedienen via de Sonos app</x-body-icon>
            <x-body-icon src="img/svg/woonkamer/people.svg" title="6 Personen">Genoeg plek voor de hele familie (6 personen)</x-body-icon>
            <x-body-icon src="img/svg/woonkamer/netflix.svg" title="Netflix">Genoeg van Portugal gezien? Lekker binge watchen met Netflix dan!</x-body-icon>
            <x-body-icon src="img/svg/woonkamer/internet.svg" title="IPTV en meer">U kunt alle zenders bekijken. Zelfs Nederlandse!</x-body-icon>
            <x-body-icon src="img/svg/woonkamer/couch.svg" title="Elektrische bank">Een bank zo comfortabel dat je niet meer terug wilt</x-body-icon>
        </x-body-icons>
        <p @click="descriptionSVG = ''" x-text="descriptionSVG" class="mx-4 min-h-0 transition-all ease-in-out duration-[600ms] w-full bg-transparent text-center italic text-4xl mt-10"/>
    </div>

    <!-- Keuken -->
    <x-kamer-titel src="stove.svg" kamer="Keuken"/>
    <x-image-slider>
        <!-- Item 1 -->
        <x-first-image>img/keuken/IMG_1609.jpg</x-first-image>
        <!-- Item 2 -->
        <x-image>img/keuken/IMG_1610.jpg</x-image>
        <!-- Item 3 -->
        <x-image>img/keuken/IMG_1611.jpg</x-image>
    </x-image-slider>
    <div x-data="{ descriptionSVG: '' }">
        <x-body-icons>
            <x-body-icon src="img/svg/keuken/dishwasher.svg" title="Vaatwasser">Jaja, er is een vaatwasser aanwezig!</x-body-icon>
            <x-body-icon src="img/svg/keuken/oven.svg" title="Oven">Waarom uit eten gaan als je gewoon een oven kunt gebruiken?</x-body-icon>
            <x-body-icon src="img/svg/keuken/washing-machine.svg" title="Wasmachine">Voor de mensen die graag wat langer willen blijven</x-body-icon>
            <x-body-icon src="img/svg/keuken/frying-pan.svg" title="Fornuis">Naast een oven is er ook een fornuis met meerdere pannen aanwezig</x-body-icon>
            <x-body-icon src="img/svg/keuken/fridge.svg" title="Koelkast">Geen zorgen, de koelkast is aanwezig</x-body-icon>
            <x-body-icon src="img/svg/keuken/cutlery.svg" title="Bestek">Voor als papa zich misdraagd</x-body-icon>
        </x-body-icons>
        <p @click="descriptionSVG = ''" x-text="descriptionSVG" class="min-h-0 transition-all ease-in-out duration-[600ms] w-full bg-transparent text-center italic text-4xl mt-10"/>
    </div>
{{--    <x-body-icons>--}}
{{--        <img src="{{ url('img/svg/keuken/dishwasher.svg') }}" class="h-10 w-10" alt="">--}}
{{--        <img src="{{ url('img/svg/keuken/oven.svg') }}" class="h-10 w-10" alt="">--}}
{{--        <img src="{{ url('img/svg/keuken/washing-machine.svg') }}" class="h-10 w-10" alt="">--}}
{{--        <img src="{{ url('img/svg/keuken/frying-pan.svg') }}" class="h-10 w-10" alt="">--}}
{{--        <img src="{{ url('img/svg/keuken/fridge.svg') }}" class="h-10 w-10" alt="">--}}
{{--        <img src="{{ url('img/svg/keuken/cutlery.svg') }}" class="h-10 w-10" alt="">--}}
{{--    </x-body-icons>--}}


    <!-- Slaapkamers -->
    <x-kamer-titel src="bed.svg" kamer="Slaapkamers"/>
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
    <x-kamer-titel src="shower.svg" kamer="Badkamers"/>
</x-app-layout>
