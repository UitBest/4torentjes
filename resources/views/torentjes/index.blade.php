<x-app>
    <div class="">
        <div class="">
            <img src="{{ url('img/Torentjes.jpeg') }}" class="w-full saturate-150">
            <div class="-top-[38rem] text-center relative z-10">
                <h1 class=" text-white text-4xl">As Quatro Torrenzinhas</h1>
            </div>
        </div>
    </div>
    <x-body-text class="mb-14">
        Geniet van de zon, de zee en de cultuur in een comfortabel en gezellig huisje. Of je nu op zoek bent naar rust, avontuur of romantiek, er is voor ieder wat wils. Ontdek de mooiste plekjes van Portugal en voel je thuis in het huisje.
    </x-body-text>
    <x-image-slider>
        <x-first-image>img/ZwembadMetWijn.jpg</x-first-image>
        <x-image>img/ZwembadMetWijn2.jpg</x-image>
        <x-image>img/ZwembadMetPlanten.jpg</x-image>
    </x-image-slider>
    <x-body-text class="mt-14 mb-7">
        In het handboekje vind je tips en informatie over het huis en de omgeving. Lees alsjeblieft hoofdstukken 3, 4 en 5 om het huis netjes en veilig te houden en klaar te maken voor onze terugkomst.
    </x-body-text>
    <x-body-text class="my-7">
        We hopen dat je je helemaal thuis voelt in ons huisje in Portugal! We vertrouwen erop dat je er net zo zuinig op bent als wij. Geniet van je verblijf en laat het ons weten als je iets nodig hebt!
    </x-body-text>
    <x-body-text class="my-7">
        Portugal heeft zoveel te bieden! We zijn benieuwd wat jij allemaal hebt ontdekt. Heb je tips voor ons over bezienswaardigheden, restaurants, winkels enz.? Laat het ons weten! Zo kunnen we ons huisje en onze service nog beter maken!
    </x-body-text>


    <!-- Woonkamer -->
    <x-kamer-titel src="television.svg" kamer="Woonkamer"/>
    <x-image-slider>
        <!-- Item 1 -->
        <x-first-image>img/woonkamer/IMG_4162.jpg</x-first-image>>
        <!-- Item 2 -->
        <x-image>img/woonkamer/IMG_4164.jpg</x-image>
        <!-- Item 3 -->
        <x-image>img/woonkamer/IMG_4168.jpg</x-image>
    </x-image-slider>
    <div x-data="{ show: true }" class="flex items-center justify-center mt-2 text-lg">
        <template  x-if="!show">
            <button @click="show = !show" class="text-blue-500 hover:text-blue-700">
                <img src="{{ asset('img/svg/information.svg') }}" class="w-5 h-5">
            </button>
        </template>

        <template x-if="show">
            <div class="ml-4 flex items-center justify-center">
                <p>Klik op de icoontjes voor meer informatie.</p>
                <button @click="show = false" class="h-10 w-10"><img src="{{ asset('img/svg/cross.svg') }}"></button>
            </div>
        </template>
    </div>
    <div class="" x-data="{ activeButton: null, buttons: [
            { text: 'Speel je favoriete muziek, podcasts of radiozenders af in het huisje. Het huisje heeft een Sonos speaker in de woonkamer voor een geweldig geluid en een makkelijke bediening.', image: '{{ asset('img/svg/woonkamer/sonos.svg') }}', arrowImage: '{{ asset('img/svg/arrow-down.svg') }}' },
            { text: 'De woonkamer van het huisje is ruim en gezellig. Er is plek voor 6 personen om te zitten en te relaxen. Je kunt op de bank hangen, een spelletje spelen of van het uitzicht genieten.', image: '{{ asset('img/svg/woonkamer/people.svg') }}', arrowImage: '{{ asset('img/svg/arrow-down.svg') }}' },
            { text: 'Het huisje heeft een Netflix-abonnement, zodat je altijd iets leuks kunt vinden om te kijken.', image: '{{ asset('img/svg/woonkamer/netflix.svg') }}', arrowImage: '{{ asset('img/svg/arrow-down.svg') }}' },
            { text: 'Het huisje heeft een IPTV box waarmee je alle zenders van de wereld kunt streamen. Van nieuws tot sport, van muziek tot cultuur, je kunt altijd iets interessants of vermakelijks vinden om te kijken. Met de IPTV box kun je de wereld in je woonkamer halen. 🌎', image: '{{ asset('img/svg/woonkamer/internet.svg') }}', arrowImage: '{{ asset('img/svg/arrow-down.svg') }}' },
            { text: 'Of je nu wilt lezen, slapen of tv kijken, de elektrische bank past zich aan jouw wensen aan.', image: '{{ asset('img/svg/woonkamer/couch.svg') }}', arrowImage: '{{ asset('img/svg/arrow-down.svg') }}' },
            ] }">
        <x-body-icon></x-body-icon>
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
    <div class="" x-data="{ activeButton: null, buttons: [
            { text: 'Je hoeft je geen zorgen te maken over de afwas, want het huisje heeft een vaatwasser.', image: '{{ asset('img/svg/keuken/dishwasher.svg') }}', arrowImage: '{{ asset('img/svg/arrow-down.svg') }}' },
            { text: 'Je kunt ook heerlijke gerechten bereiden in de oven, die verschillende standen heeft.', image: '{{ asset('img/svg/keuken/oven.svg') }}', arrowImage: '{{ asset('img/svg/arrow-down.svg') }}' },
            { text: 'Je kleding blijft schoon en fris dankzij de wasmachine, die zuinig en stil is. ', image: '{{ asset('img/svg/keuken/washing-machine.svg') }}', arrowImage: '{{ asset('img/svg/arrow-down.svg') }}' },
            { text: 'Als je liever zelf kookt, kun je gebruik maken van het fornuis. ', image: '{{ asset('img/svg/keuken/frying-pan.svg') }}', arrowImage: '{{ asset('img/svg/arrow-down.svg') }}' },
            { text: 'Je eten en drinken kun je bewaren in de koelkast. Met de koelkast kun je altijd iets lekkers in huis hebben. ', image: '{{ asset('img/svg/keuken/fridge.svg') }}', arrowImage: '{{ asset('img/svg/arrow-down.svg') }}' },
            { text: 'Ten slotte kun je genieten van je maaltijden met het bestek.', image: '{{ asset('img/svg/keuken/cutlery.svg') }}', arrowImage: '{{ asset('img/svg/arrow-down.svg') }}' },
            ] }">
        <x-body-icon></x-body-icon>
    </div>

    <!-- Slaapkamers -->
    <x-kamer-titel src="bed.svg" kamer="Slaapkamers"/>
    <x-kamer-subtitel>Voorzijde</x-kamer-subtitel>
    <x-image-slider>
        <!-- Item 1 -->
        <x-first-image>img/slaapkamers/voorzijde1.jpg</x-first-image>
        <!-- Item 2 -->
        <x-image>img/slaapkamers/voorzijde2.jpg</x-image>
    </x-image-slider>
    <div class="" x-data="{ activeButton: null, buttons: [
            { text: 'Een heel queen size bed met vlekken bah bah', image: '{{ asset('img/svg/slaapkamers/bed.svg') }}', arrowImage: '{{ asset('img/svg/arrow-down.svg') }}' },
            { text: 'Genoeg plek om licha... kleding in te stoppen!', image: '{{ asset('img/svg/slaapkamers/kast.svg') }}', arrowImage: '{{ asset('img/svg/arrow-down.svg') }}' },
            { text: 'Zon mooie uitkijk dat je bekant een zenuwinzinking krijgt', image: '{{ asset('img/svg/slaapkamers/raam.svg') }}', arrowImage: '{{ asset('img/svg/arrow-down.svg') }}' },
            ] }">
        <x-body-icon></x-body-icon>
    </div>

    <x-kamer-subtitel>Master</x-kamer-subtitel>
    <x-image-slider>
        <!-- Item 1 -->
        <x-first-image>img/svg/no-picture.svg</x-first-image>
    </x-image-slider>
    <div class="" x-data="{ activeButton: null, buttons: [
            { text: 'Een heel queen size bed met vlekken bah bah', image: '{{ asset('img/svg/slaapkamers/bed.svg') }}', arrowImage: '{{ asset('img/svg/arrow-down.svg') }}' },
            { text: 'Genoeg plek om licha... kleding in te stoppen!', image: '{{ asset('img/svg/slaapkamers/kast.svg') }}', arrowImage: '{{ asset('img/svg/arrow-down.svg') }}' },
            { text: 'Zon mooie uitkijk dat je bekant een zenuwinzinking krijgt', image: '{{ asset('img/svg/slaapkamers/raam.svg') }}', arrowImage: '{{ asset('img/svg/arrow-down.svg') }}' },
            ] }">
        <x-body-icon></x-body-icon>
    </div>

    <x-kamer-subtitel>Achter</x-kamer-subtitel>
    <x-image-slider>
        <!-- Item 1 -->
        <x-first-image>img/svg/no-picture.svg</x-first-image>
    </x-image-slider>
    <div class="" x-data="{ activeButton: null, buttons: [
            { text: 'Een heel queen size bed met vlekken bah bah', image: '{{ asset('img/svg/slaapkamers/bed.svg') }}', arrowImage: '{{ asset('img/svg/arrow-down.svg') }}' },
            { text: 'Genoeg plek om licha... kleding in te stoppen!', image: '{{ asset('img/svg/slaapkamers/kast.svg') }}', arrowImage: '{{ asset('img/svg/arrow-down.svg') }}' },
            { text: 'Zon mooie uitkijk dat je bekant een zenuwinzinking krijgt', image: '{{ asset('img/svg/slaapkamers/raam.svg') }}', arrowImage: '{{ asset('img/svg/arrow-down.svg') }}' },
            ] }">
        <x-body-icon></x-body-icon>
    </div>


    <!-- Badkamers -->
    <x-kamer-titel src="shower.svg" kamer="Badkamers"/>
    <x-kamer-subtitel>Master</x-kamer-subtitel>
    <x-image-slider>
        <!-- Item 1 -->
        <x-first-image>img/svg/no-picture.svg</x-first-image>
    </x-image-slider>
    <div class="" x-data="{ activeButton: null, buttons: [
            { text: 'Lekker douchen', image: '{{ asset('img/svg/badkamers/shower.svg') }}', arrowImage: '{{ asset('img/svg/arrow-down.svg') }}' },
            { text: 'Niet gemaakt voor hydrofluoric acid', image: '{{ asset('img/svg/badkamers/bath.svg') }}', arrowImage: '{{ asset('img/svg/arrow-down.svg') }}' },
            { text: 'Wel gemaakt om je handen te wassen', image: '{{ asset('img/svg/badkamers/sink.svg') }}', arrowImage: '{{ asset('img/svg/arrow-down.svg') }}' },
            ] }">
        <x-body-icon></x-body-icon>
    </div>

    <x-kamer-subtitel>Achter</x-kamer-subtitel>
    <x-image-slider>
        <!-- Item 1 -->
        <x-first-image>img/badkamers/IMG_1565.jpg</x-first-image>
        <!-- Item 2 -->
        <x-image>img/badkamers/IMG_1566.jpg</x-image>
    </x-image-slider>
    <div class="" x-data="{ activeButton: null, buttons: [
            { text: 'Lekker douchen', image: '{{ asset('img/svg/badkamers/shower.svg') }}', arrowImage: '{{ asset('img/svg/arrow-down.svg') }}' },
            { text: 'Niet gemaakt voor hydrofluoric acid', image: '{{ asset('img/svg/badkamers/bath.svg') }}', arrowImage: '{{ asset('img/svg/arrow-down.svg') }}' },
            { text: 'Wel gemaakt om je handen te wassen', image: '{{ asset('img/svg/badkamers/sink.svg') }}', arrowImage: '{{ asset('img/svg/arrow-down.svg') }}' },
            ] }">
        <x-body-icon></x-body-icon>
    </div>

    <!-- Achtertuin -->
    <x-kamer-titel src="pool.svg" kamer="Achtertuin"/>
    <x-image-slider>
        <!-- Item 1 -->
        <x-first-image>img/achtertuin/WLTM0247.jpg</x-first-image>
        <!-- Item 2 -->
        <x-image>img/achtertuin/IMG_1594.jpg</x-image>
        <!-- Item 3 -->
        <x-image>img/achtertuin/IMG_1592.jpg</x-image>
    </x-image-slider>
    <div class="" x-data="{ activeButton: null, buttons: [
            { text: 'Lekker douchen', image: '{{ asset('img/svg/badkamers/shower.svg') }}', arrowImage: '{{ asset('img/svg/arrow-down.svg') }}' },
            { text: 'Niet gemaakt voor hydrofluoric acid', image: '{{ asset('img/svg/badkamers/bath.svg') }}', arrowImage: '{{ asset('img/svg/arrow-down.svg') }}' },
            { text: 'Wel gemaakt om je handen te wassen', image: '{{ asset('img/svg/badkamers/sink.svg') }}', arrowImage: '{{ asset('img/svg/arrow-down.svg') }}' },
            ] }">
        <x-body-icon></x-body-icon>
    </div>
</x-app>
