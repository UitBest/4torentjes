    <div @click="descriptionSVG = '{{ $slot }}'" class="hover:scale-110 transition ease-in-out duration-[200ms] hover:cursor-pointer">
    <img src="{{ url($src) }}" title="{{ $title }}" class="h-10 w-10" alt="">
    <img src="{{ url('img/svg/arrow-down.svg') }}" title="{{ $title }}" class="h-5 w-5 mx-auto" alt="">
</div>
