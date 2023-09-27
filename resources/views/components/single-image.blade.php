<div
    class="relative float-left -mr-[100%] hidden w-full transition-transform duration-[600ms] ease-in-out"
    data-te-carousel-item
    @if(isset($first)) data-te-carousel-active @endif
>
    <img
        src="{{ $slot }}"
        class="block w-full object-cover h-[300px] sm:h-[400px] md:h-[500px] lg:h-[600px] xl:h-[700px] 2xl:h-[800px]"
    />
</div>
