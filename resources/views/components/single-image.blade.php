<div class="hidden duration-700 ease-in-out"
     data-carousel-item
        @if(isset($first)) data-carousel-active @endif
>
    <img src="{{ $slot }}" class="rounded-xl absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="...">
</div>
