<x-app>
    <div class="">
        <div class="">
            <img src="{{ url('img/Torentjes.jpeg') }}" class="w-full">
            <div class="-top-16 text-center relative z-10">
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
    <div class="" x-data="{ activeButton: null, buttons: [
            { text: 'Familie ruzie? Knal de bass de erdoorheen!', image: '{{ asset('img/svg/woonkamer/sonos.svg') }}', arrowImage: '{{ asset('img/svg/arrow-down.svg') }}' },
            { text: 'Genoeg plek voor de hele familie (6 personen), tenzij je Mexicaans bent', image: '{{ asset('img/svg/woonkamer/people.svg') }}', arrowImage: '{{ asset('img/svg/arrow-down.svg') }}' },
            { text: 'Genoeg van Portugal gezien? Lekker binge watchen met Netflix dan!', image: '{{ asset('img/svg/woonkamer/netflix.svg') }}', arrowImage: '{{ asset('img/svg/arrow-down.svg') }}' },
            { text: 'U kunt alle zenders bekijken. Zelfs porno!', image: '{{ asset('img/svg/woonkamer/internet.svg') }}', arrowImage: '{{ asset('img/svg/arrow-down.svg') }}' },
            { text: 'Een bank zo comfortabel dat je niet meer terug wilt', image: '{{ asset('img/svg/woonkamer/couch.svg') }}', arrowImage: '{{ asset('img/svg/arrow-down.svg') }}' },
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
            { text: 'Jaja, er is een vaatwasser aanwezig!', image: '{{ asset('img/svg/keuken/dishwasher.svg') }}', arrowImage: '{{ asset('img/svg/arrow-down.svg') }}' },
            { text: 'Waarom uit eten gaan als je gewoon een oven kunt gebruiken? Gooi die lasange er maar in', image: '{{ asset('img/svg/keuken/oven.svg') }}', arrowImage: '{{ asset('img/svg/arrow-down.svg') }}' },
            { text: 'Om de bloedvlekken uit je kleren te wassen', image: '{{ asset('img/svg/keuken/washing-machine.svg') }}', arrowImage: '{{ asset('img/svg/arrow-down.svg') }}' },
            { text: 'Naast een oven is er ook een fornuis met meerdere pannen aanwezig', image: '{{ asset('img/svg/keuken/frying-pan.svg') }}', arrowImage: '{{ asset('img/svg/arrow-down.svg') }}' },
            { text: 'Genoeg plek in de koelkast voor 3 kratten bier', image: '{{ asset('img/svg/keuken/fridge.svg') }}', arrowImage: '{{ asset('img/svg/arrow-down.svg') }}' },
            { text: 'Voor als papa zich misdraagd', image: '{{ asset('img/svg/keuken/cutlery.svg') }}', arrowImage: '{{ asset('img/svg/arrow-down.svg') }}' },
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
