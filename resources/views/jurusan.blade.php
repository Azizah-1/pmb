<x-app-layout>
    <div class="p-6">
        <h1 class="text-2xl font-bold mb-4">Jurusan</h1>

        <x-dropdown align="left" width="48">
            <x-slot name="trigger">
                <button class="inline-flex items-center px-4 py-2 bg-gray-800 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-gray-700 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 transition ease-in-out duration-150">
                    Pilih Materi
                    <svg class="ml-2 -mr-0.5 h-4 w-4" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
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

        <p class="mt-4">Informasi tentang jurusan tersedia di sini.</p>
    </div>
</x-app-layout>
