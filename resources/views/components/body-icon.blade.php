<div class="flex justify-evenly w-full my-4">
    <template x-for="(button, index) in buttons" :key="index">
        <button @click="activeButton = (activeButton === index ? null : index)" class="hover:scale-110 sm:hover:scale-150 transition duration-[250ms] ease-in-out text-white font-bold py-2 px-4 rounded">
            <img :src="button.image" class="w-10 h-10 object-cover">
            <img x-show="activeButton === index" :src="button.arrowImage" class="w-5 h-5 object-cover rounded-full mx-auto">
        </button>
    </template>
</div>
<div x-show="activeButton !== null" class="mt-2 flex items-center justify-center transition duration-[250ms] ease-in-out">
    <span x-text="buttons[activeButton].text" class="text-3xl text-center mx-10 sm:mx-20"></span>
</div>
