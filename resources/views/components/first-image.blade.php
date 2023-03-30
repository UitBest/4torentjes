<div
    class="relative float-left -mr-[100%] w-full transition-transform duration-[600ms] ease-in-out"
    data-te-carousel-item
    data-te-carousel-active>
    <img
        src="{{ $slot }}"
        class="block w-full object-cover @if($slot == 'img/svg/no-picture.svg') w-96 h-96 mx-auto @else h-[700px] @endif"
        alt="Wild Landscape" />
</div>
