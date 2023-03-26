<nav x-data="{ open: false }" class="border-b border-gray-400">
    <!-- Primary Navigation Menu -->
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex justify-between h-16">
            <div class="flex">
                <!-- Navigation Links -->
                <div class="sm:space-x-8 sm:-my-px sm:ml-10 flex">
                    <x-nav-link href="{{ route('torentjes.index') }}" :active="request()->routeIs('torentjes.index')">
                        {{ __('Home') }}
                    </x-nav-link>
                    <x-nav-link href="{{ route('torentjes.kamers') }}" :active="request()->routeIs('torentjes.kamers')">
                        {{ __('Kamers') }}
                    </x-nav-link>
                    <x-nav-link href="{{ route('torentjes.voorzieningen') }}" :active="request()->routeIs('torentjes.voorzieningen')">
                        {{ __('Voorzieningen') }}
                    </x-nav-link>
                    <x-nav-link href="{{ route('torentjes.contact') }}" :active="request()->routeIs('torentjes.contact')">
                        {{ __('Contact') }}
                    </x-nav-link>
                </div>
            </div>

            <!-- Hamburger -->
            <div class="-mr-2 flex items-center sm:hidden">
                <button @click="console.log('Button clicked!'); open = ! open" class="inline-flex items-center justify-center p-2 rounded-md text-gray-400 transition">
                    <svg class="h-6 w-6" stroke="currentColor" fill="none" viewBox="0 0 24 24">
                        <path :class="{'hidden': open, 'inline-flex': ! open }" class="inline-flex" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                        <path :class="{'hidden': ! open, 'inline-flex': open }" class="hidden" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                    </svg>
                </button>
            </div>
        </div>
    </div>

    <!-- Responsive Navigation Menu -->
    <div :class="{'w-screen':open, 'fixed':open, 'hidden': ! open}" class="hidden sm:hidden bg-[#E9E1B9] z-50">
        <div class="pt-2 pb-3 space-y-1 h-screen">
            <x-responsive-nav-link href="{{ route('torentjes.index') }}" :active="request()->routeIs('torentjes.index')">
                {{ __('Home') }}
            </x-responsive-nav-link>
            <x-responsive-nav-link href="{{ route('torentjes.kamers') }}" :active="request()->routeIs('torentjes.kamers')">
                {{ __('Kamers') }}
            </x-responsive-nav-link>
            <x-responsive-nav-link href="{{ route('torentjes.voorzieningen') }}" :active="request()->routeIs('torentjes.voorzieningen')">
                {{ __('Voorzieningen') }}
            </x-responsive-nav-link>
            <x-responsive-nav-link href="{{ route('torentjes.contact') }}" :active="request()->routeIs('torentjes.contact')">
                {{ __('Contact') }}
            </x-responsive-nav-link>
        </div>
    </div>
</nav>
