<div
    class="relative float-left -mr-[100%] hidden w-full transition-transform duration-[600ms] ease-in-out"
    data-te-carousel-item>
    <img
        src="{{ $slot }}"
        class="block w-full object-cover @if($slot == 'img/svg/no-picture.svg') w-96 h-96 mx-auto @else h-[300px] sm:h-[700px] @endif"
        alt="Wild Landscape" />
</div>
