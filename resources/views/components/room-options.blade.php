<a href="{{ route('torentjes.index') }}#{{ $kamer }}" class="text-black">
    <div class="border border-3 border-gray-900 rounded-xl mx-5 sm:mx-20 flex items-center mb-8 hover:scale-110 transition ease-in-out duration-[600ms]">
        <img src="{{ url($src) }}" class="w-20 h-20 p-3">
        <h1 class="ml-4 sm:ml-10 text-[38px] sm:text-[48px]">{{ $kamer }}</h1>
    </div>
</a>
