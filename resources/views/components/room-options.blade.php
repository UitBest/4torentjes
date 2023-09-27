<a href="{{ route('torentjes.index') }}#{{ $kamer }}" class="text-black">
    <div class="rounded-xl mx-5 sm:mx-20 flex items-center mb-8 hover:scale-105 transition ease-in-out duration-[400ms] not-italic">
        <img src="{{ url($src) }}" class="w-20 h-20 p-3">
        <h1 class="ml-4 sm:ml-10 text-[38px] sm:text-[48px]">{{ $kamer }}</h1>
    </div>
</a>
