<x-app>
    <div class="">
        <div class="">
            <div class="top-[6rem] text-center relative z-10">
                <h1 class=" text-white text-2xl sm:text-4xl">As Quatro Torrenzinhas</h1>
            </div>

            <img src="{{ url('img/Torentjes.jpeg') }}" class="-mt-[3rem] w-full saturate-150">
        </div>
    </div>

    <x-body-text class="my-14">
        Geniet van de zon, de zee en de cultuur in een comfortabel en gezellige bungalow. Of je nu op zoek bent naar rust, avontuur of romantiek, er is voor ieder wat wils. Ontdek de mooiste plekjes van Portugal en voel je thuis in onze bungalow.
    </x-body-text>

    <x-image-slider>
        <x-single-image first="true">img/ZwembadMetWijn.jpg</x-single-image>
        <x-single-image>img/ZwembadMetWijn2.jpg</x-single-image>
        <x-single-image>img/ZwembadMetPlanten.jpg</x-single-image>
        <x-single-image>img/ZwembadMetParasol.jpg</x-single-image>
        <x-single-image>img/Bloemetjes.jpg</x-single-image>
        <x-single-image>img/Plant.jpg</x-single-image>
        <x-single-image>img/BoomMetCitroen.jpg</x-single-image>
        <x-single-image>img/Zwembad.jpg</x-single-image>
        <x-single-image>img/Zwembad2.jpg</x-single-image>

    </x-image-slider>
    <x-body-text class="mt-14 mb-7">
        In het handboek vindt je allerlei tips maar ook informatie over de bungalow. De hoofdstukken 3,4 en 5 zijn belangrijk voor u. Dit om alles veilig te houden en weer gereed te maken voor de volgende gasten.
    </x-body-text>
    <x-body-text class="my-7">
        We vertrouwen erop dat u zich helemaal thuis voelt in onze bungalow. Geniet van je verblijf en laat het weten als je iets nodig hebt.
    </x-body-text>
    <x-body-text class="my-7">
        Heb je tips voor de volgende gasten of voor ons. (Restaurant, strandjes, winkels enz.) laat het weten in het gastenboek. We nemen het graag in het handboek over.
    </x-body-text>


    <!-- Woonkamer -->
    <x-kamer-titel src="television.svg" kamer="Woonkamer"/>

    <x-image-slider>
        <x-single-image first="true">img/woonkamer/IMG_4162.jpg</x-single-image>
        <x-single-image>img/woonkamer/IMG_4164.jpg</x-single-image>
        <x-single-image>img/woonkamer/IMG_4168.jpg</x-single-image>
    </x-image-slider>

    <div x-data="{ show: true }" class="flex items-center justify-center mt-2 text-lg">
        <template  x-if="!show">
            <button @click="show = !show" class="text-blue-500 hover:text-blue-700">
                <img src="{{ asset('img/svg/information.svg') }}" class="w-5 h-5">
            </button>
        </template>

        <template x-if="show">
            <div class="ml-4 flex items-center justify-center text-green-800">
                <p>Klik op de icoontjes voor meer informatie.</p>
                <button @click="show = false" class="h-10 w-10"><img src="{{ asset('img/svg/cross.svg') }}"></button>
            </div>
        </template>
    </div>

    <div class="" x-data="{ activeButton: 0, buttons: [
            { text: 'Speel je favoriete muziek, podcasts of radiozenders af in de bungalow. De bungalow heeft een Sonos speaker in de woonkamer en het terras voor een geweldig geluid en een makkelijke bediening.', image: '{{ asset('img/svg/woonkamer/sonos.svg') }}', arrowImage: '{{ asset('img/svg/arrow-down.svg') }}' },
            { text: 'De woonkamer van de bungalow is ruim en gezellig. Er is plek voor 6 personen om te zitten en te relaxen. Je kunt op de bank hangen, een spelletje spelen of van het uitzicht genieten.', image: '{{ asset('img/svg/woonkamer/people.svg') }}', arrowImage: '{{ asset('img/svg/arrow-down.svg') }}' },
            { text: 'Er is Netflix op de TV. Voor als het regent of gewoon onderuit naar een filmpje kijken.', image: '{{ asset('img/svg/woonkamer/netflix.svg') }}', arrowImage: '{{ asset('img/svg/arrow-down.svg') }}' },
            { text: 'De bungalow heeft een IPTV box waarmee je alle zenders van de wereld kunt streamen. Van nieuws tot sport, van muziek tot cultuur, je kunt altijd iets interessants of vermakelijks vinden om te kijken. Met de IPTV box kun je de wereld in je woonkamer halen. 🌎', image: '{{ asset('img/svg/woonkamer/internet.svg') }}', arrowImage: '{{ asset('img/svg/arrow-down.svg') }}' },
            { text: 'Of je nu wilt lezen, slapen of tv kijken, de elektrisch verstelbare bank past zich aan jouw wensen aan.', image: '{{ asset('img/svg/woonkamer/couch.svg') }}', arrowImage: '{{ asset('img/svg/arrow-down.svg') }}' },
            ] }">
        <x-body-icon></x-body-icon>
    </div>

    <!-- Keuken -->
    <x-kamer-titel src="stove.svg" kamer="Keuken"/>
    <x-image-slider>
        <!-- Item 1 -->
        <x-single-image first="true">img/keuken/IMG_1609.jpg</x-single-image>
        <!-- Item 2 -->
        <x-single-image>img/keuken/IMG_1610.jpg</x-single-image>
        <!-- Item 3 -->
        <x-single-image>img/keuken/IMG_1611.jpg</x-single-image>
    </x-image-slider>
    <div class="" x-data="{ activeButton: 0, buttons: [
            { text: 'Je hoeft je geen zorgen te maken over de afwas want er is een vaatwasser in de keuken aanwezig.', image: '{{ asset('img/svg/keuken/dishwasher.svg') }}', arrowImage: '{{ asset('img/svg/arrow-down.svg') }}' },
            { text: 'Je kunt ook heerlijke gerechten bereiden in de oven, die verschillende standen heeft.', image: '{{ asset('img/svg/keuken/oven.svg') }}', arrowImage: '{{ asset('img/svg/arrow-down.svg') }}' },
            { text: 'Je kleding blijft schoon en fris dankzij de wasmachine, die zuinig en stil is. ', image: '{{ asset('img/svg/keuken/washing-machine.svg') }}', arrowImage: '{{ asset('img/svg/arrow-down.svg') }}' },
            { text: 'Als je liever zelf kookt, kun je gebruik maken van het fornuis. ', image: '{{ asset('img/svg/keuken/frying-pan.svg') }}', arrowImage: '{{ asset('img/svg/arrow-down.svg') }}' },
            { text: 'Je eten en drinken kun je bewaren in de koelkast. Met de koelkast kun je altijd iets lekkers in huis hebben. ', image: '{{ asset('img/svg/keuken/fridge.svg') }}', arrowImage: '{{ asset('img/svg/arrow-down.svg') }}' },
            { text: 'Voldoende bestek en messen om een heerlijke maaltijd te bereiden. ', image: '{{ asset('img/svg/keuken/cutlery.svg') }}', arrowImage: '{{ asset('img/svg/arrow-down.svg') }}' },
            ] }">
        <x-body-icon></x-body-icon>
    </div>

    <!-- Slaapkamers -->
    <x-kamer-titel src="bed.svg" kamer="Slaapkamers"/>
    <x-kamer-subtitel>Voorzijde</x-kamer-subtitel>
    <x-image-slider>
        <!-- Item 1 -->
        <x-single-image first="true">img/slaapkamers/voorzijde1.jpg</x-single-image>
        <!-- Item 2 -->
        <x-single-image>img/slaapkamers/voorzijde2.jpg</x-single-image>
    </x-image-slider>
    <div class="" x-data="{ activeButton: 0, buttons: [
            { text: 'Queen size bed. ', image: '{{ asset('img/svg/slaapkamers/bed.svg') }}', arrowImage: '{{ asset('img/svg/arrow-down.svg') }}' },
            { text: 'Voldoende kastruimte voor uw kleding. En uw koffer(s) er bovenop. ', image: '{{ asset('img/svg/slaapkamers/kast.svg') }}', arrowImage: '{{ asset('img/svg/arrow-down.svg') }}' },
            { text: 'De ramen in kiepstand zetten. De luiken dicht.', image: '{{ asset('img/svg/slaapkamers/raam.svg') }}', arrowImage: '{{ asset('img/svg/arrow-down.svg') }}' },
            ] }">
        <x-body-icon></x-body-icon>
    </div>

    <x-kamer-subtitel>Master</x-kamer-subtitel>
    <x-image-slider>
        <!-- Item 1 -->
        <x-single-image first="true">img/svg/cross.svg</x-single-image>
    </x-image-slider>
    <div class="" x-data="{ activeButton: 0, buttons: [
            { text: 'Queen size bed.', image: '{{ asset('img/svg/slaapkamers/bed.svg') }}', arrowImage: '{{ asset('img/svg/arrow-down.svg') }}' },
            { text: 'Voldoende kastruimte voor uw kleding. En uw koffer(s) er bovenop.', image: '{{ asset('img/svg/slaapkamers/kast.svg') }}', arrowImage: '{{ asset('img/svg/arrow-down.svg') }}' },
            { text: 'De ramen in kiepstand zetten. De luiken dicht.', image: '{{ asset('img/svg/slaapkamers/raam.svg') }}', arrowImage: '{{ asset('img/svg/arrow-down.svg') }}' },
            ] }">
        <x-body-icon></x-body-icon>
    </div>

    <x-kamer-subtitel>Achter</x-kamer-subtitel>

    <x-image-slider>
        <x-single-image first="true">img/slaapkamers/achterzijde1.jpeg</x-single-image>
        <x-single-image>img/slaapkamers/achterzijde2.jpeg</x-single-image>
    </x-image-slider>

    <div class="" x-data="{ activeButton: 0, buttons: [
            { text: 'Queen size bed. ', image: '{{ asset('img/svg/slaapkamers/bed.svg') }}', arrowImage: '{{ asset('img/svg/arrow-down.svg') }}' },
            { text: 'Voldoende kastruimte voor uw kleding. En uw koffer(s) er bovenop.', image: '{{ asset('img/svg/slaapkamers/kast.svg') }}', arrowImage: '{{ asset('img/svg/arrow-down.svg') }}' },
            { text: 'De ramen in kiepstand zetten. De luiken dicht.', image: '{{ asset('img/svg/slaapkamers/raam.svg') }}', arrowImage: '{{ asset('img/svg/arrow-down.svg') }}' },
            ] }">
        <x-body-icon></x-body-icon>
    </div>


    <!-- Badkamers -->
    <x-kamer-titel src="shower.svg" kamer="Badkamers"/>
    <x-kamer-subtitel>Master</x-kamer-subtitel>
    <x-image-slider>
        <!-- Item 1 -->
        <x-single-image first="true">img/svg/cross.svg</x-single-image>
    </x-image-slider>
    <x-kamer-subtitel>Achter</x-kamer-subtitel>
    <x-image-slider>
        <!-- Item 1 -->
        <x-single-image first="true">img/badkamers/IMG_1565.jpg</x-single-image>
        <!-- Item 2 -->
        <x-single-image>img/badkamers/IMG_1566.jpg</x-single-image>
    </x-image-slider>

    <!-- Achtertuin -->
    <x-kamer-titel src="pool.svg" kamer="Achtertuin"/>
    <x-image-slider>
        <x-single-image first="true">img/achtertuin/IMG_4180.jpg</x-single-image>
        <x-single-image>img/achtertuin/IMG_4160.jpg</x-single-image>
        <x-single-image>img/achtertuin/IMG_4171.jpg</x-single-image>
        <x-single-image>img/achtertuin/IMG_4174.jpg</x-single-image>
        <x-single-image>img/achtertuin/IMG_4176.jpg</x-single-image>
        <x-single-image>img/achtertuin/IMG_4177.jpg</x-single-image>
        <x-single-image>img/achtertuin/IMG_4178.jpg</x-single-image>
        <x-single-image>img/achtertuin/IMG_4181.jpg</x-single-image>
        <x-single-image>img/achtertuin/IMG_4182.jpg</x-single-image>
        <x-single-image>img/achtertuin/IMG_4183.jpg</x-single-image>
        <x-single-image>img/achtertuin/IMG_4184.jpg</x-single-image>
        <x-single-image>img/achtertuin/IMG_4196.jpg</x-single-image>
        <x-single-image>img/achtertuin/IMG_4199.jpg</x-single-image>
        <x-single-image>img/achtertuin/IMG_4202.jpg</x-single-image>
        <x-single-image>img/achtertuin/IMG_4204.jpg</x-single-image>
    </x-image-slider>
</x-app>
