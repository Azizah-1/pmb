<nav x-data="{ open: false }" class="bg-white border-b border-gray-100">
    <!-- Primary Navigation Menu -->
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex justify-between h-16">
            <!-- Left box: Logo and company name -->
            <div class="flex items-center space-x-4">
               <a href="{{ route('beranda') }}" class="flex items-center space-x-2" style="gap : 15px;">
                    {{-- <x-application-logo class="block h-9 w-auto fill-current text-gray-800" /> --}}
                    <img src="{{ asset('itpb.png') }}" alt="ITPB Logo" class="h-11 w-11" style="height: 55px; width: 60px;">
                    <span class="font-semibold text-xl text-gray-800">INSTITUT TEKNOLOGI PETROLEUM BALONGAN</span>
                </a>
            </div>

            <!-- Middle box: Navigation buttons -->
            <div class="hidden sm:flex sm:space-x-6 sm:items-center">
                <a href="{{ route('beranda') }}" class="text-gray-700 hover:text-gray-900 px-3 py-2 rounded-md text-base font-medium">Beranda</a>

                <x-dropdown align="left" width="48" contentClasses="py-1 bg-white">
                    <x-slot name="trigger">
                        <button class="inline-flex items-center text-gray-700 hover:text-gray-900 px-3 py-2 rounded-md text-base font-medium focus:outline-none">
                            Jurusan
                            <svg class="ml-1 h-4 w-4" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                            </svg>
                        </button>
                    </x-slot>

                    <x-slot name="content">
                        <x-dropdown-link href="{{ route('jurusan.rkk-s1') }}">RKK S1</x-dropdown-link>
                        <x-dropdown-link href="{{ route('jurusan.teknik-lingkungan-s1') }}">Teknik Lingkungan S1</x-dropdown-link>
                        <x-dropdown-link href="{{ route('jurusan.teknik-perminyakan-s1') }}">Teknik Perminyakan S1</x-dropdown-link>
                        <x-dropdown-link href="{{ route('jurusan.fire-safety-d3') }}">Fire Safety D3</x-dropdown-link>
                        <x-dropdown-link href="{{ route('jurusan.tekim-d3') }}">Tekim D3</x-dropdown-link>
                        <x-dropdown-link href="{{ route('jurusan.pe-d3') }}">PE D3</x-dropdown-link>
                    </x-slot>
                </x-dropdown>

                <a href="{{ route('kebijakan-beasiswa') }}" class="text-gray-700 hover:text-gray-900 px-3 py-2 rounded-md text-base font-medium">Kebijakan Beasiswa</a>
                <a href="{{ route('kontak') }}" class="text-gray-700 hover:text-gray-900 px-3 py-2 rounded-md text-base font-medium">Kontak</a>
            </div>

            <!-- Right box: Daftar button with login check -->
            <div class="hidden sm:flex sm:items-center">
                @if(Auth::check())
                    <a href="{{ route('daftar') }}" class="inline-flex items-center px-4 py-2 border border-transparent text-base font-medium rounded-md text-white bg-blue-600 hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500">
                        Daftar
                    </a>
                @else
                    <a href="{{ route('login') }}" class="inline-flex items-center px-4 py-2 border border-transparent text-sm font-medium rounded-md text-white bg-blue-600 hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500">
                        Daftar
                    </a>
                @endif
            </div>

            <!-- Hamburger -->
            <div class="-me-2 flex items-center sm:hidden">
                <button @click="open = ! open" class="inline-flex items-center justify-center p-2 rounded-md text-gray-400 hover:text-gray-500 hover:bg-gray-100 focus:outline-none focus:bg-gray-100 focus:text-gray-500 transition duration-150 ease-in-out">
                    <svg class="h-6 w-6" stroke="currentColor" fill="none" viewBox="0 0 24 24">
                        <path :class="{'hidden': open, 'inline-flex': ! open }" class="inline-flex" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                        <path :class="{'hidden': ! open, 'inline-flex': open }" class="hidden" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                    </svg>
                </button>
            </div>
        </div>
    </div>

    <!-- Responsive Navigation Menu -->
    <div :class="{'block': open, 'hidden': ! open}" class="hidden sm:hidden">
        <div class="pt-2 pb-3 space-y-1">
            <x-responsive-nav-link :href="route('dashboard')" :active="request()->routeIs('dashboard')">
                {{ __('Dashboard') }}
            </x-responsive-nav-link>
        </div>

        <!-- Responsive Settings Options -->
        <div class="pt-4 pb-1 border-t border-gray-200">
<div class="px-4">
    @if(Auth::check())
        <div class="font-medium text-base text-gray-800">{{ Auth::user()->name }}</div>
        <div class="font-medium text-sm text-gray-500">{{ Auth::user()->email }}</div>
    @endif
</div>

            <div class="mt-3 space-y-1">
                <x-responsive-nav-link :href="route('profile.edit')">
                    {{ __('Profile') }}
                </x-responsive-nav-link>

                <!-- Authentication -->
                <form method="POST" action="{{ route('logout') }}">
                    @csrf

                    <x-responsive-nav-link :href="route('logout')"
                            onclick="event.preventDefault();
                                        this.closest('form').submit();">
                        {{ __('Log Out') }}
                    </x-responsive-nav-link>
                </form>
            </div>
        </div>
    </div>
</nav>
