<x-app>
    <div class="font-['Montserrat'] text-black">
        <div class="m-10 text-4xl">
            <h1 class="text-center text-4xl not-italic">Zou u graag deze sfeervolle bungalow bewonen voor een tijdje?</h1>
            <h1 class="text-center mt-16 text-2xl not-italic">Dan kunt u me bereiken via,</h1>
            <div class="flex space-y-6 sm:mx-62 items-center justify-center flex-row mt-4 not-italic"></div>
            <div class="" x-data="{ activeButton: null, buttons: [
            { text: '0031-6 53 33 11 74', link: 'tel:0031-6 53 33 11 74', image: '{{ asset('img/svg/phone.svg') }}', arrowImage: '{{ asset('img/svg/arrow-down.svg') }}' },
            { text: 'will@cuijpers.st', link: 'mailto:will@cuijpers.st', image: '{{ asset('img/svg/mail.svg') }}', arrowImage: '{{ asset('img/svg/arrow-down.svg') }}' },
            { text: 'Kopheuvel 9, Best', link: 'https://goo.gl/maps/jd1jcWH41q32UF1m9', image: '{{ asset('img/svg/pin.svg') }}', arrowImage: '{{ asset('img/svg/arrow-down.svg') }}' }
            ] }">
                <div class="flex justify-evenly w-full my-4">
                    <template x-for="(button, index) in buttons" :key="index">
                        <button @click="activeButton = (activeButton === index ? null : index)" class="hover:scale-110 sm:hover:scale-150 transition duration-[250ms] ease-in-out text-white font-bold py-2 px-4 rounded">
                            <img :src="button.image" class="w-10 h-10 object-cover rounded-full">
                            <img x-show="activeButton === index" :src="button.arrowImage" class="w-5 h-5 object-cover rounded-full mx-auto">
                        </button>
                    </template>
                </div>
                <div x-show="activeButton !== null" class="mt-2 flex items-center justify-center hover:scale-110 transition duration-[250ms] ease-in-out">
                    <a :href="buttons[activeButton].link">
                        <button class="text-black py-2 px-4 border-y shadow border-black">
                            <span x-text="buttons[activeButton].text"></span>
                        </button>
                    </a>
                </div>
            </div>
        </div>
    </div>
</x-app>
