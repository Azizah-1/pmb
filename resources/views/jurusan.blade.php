<x-app-layout>
    @include('components.jurusan-animations')
    <!-- Hero Section -->
    <header class="bg-brand-cream border-b border-brand-jeruk-100">
        <div class="max-w-7xl mx-auto py-12 px-6 sm:px-8">
            <h1 class="text-4xl font-extrabold text-brand-jeruk mb-4 animate-fade-up">Program Studi</h1>
            <p class="text-lg text-gray-700 max-w-3xl animate-fade-up delay-200">Temukan program studi yang sesuai dengan passion dan cita-cita Anda. ITP Indramayu menawarkan berbagai program studi berkualitas dengan fasilitas modern dan pengajar berpengalaman.</p>
        </div>
    </header>

    <div class="max-w-7xl mx-auto px-6 sm:px-8 py-12">
        <!-- Quick Navigation -->
        <div class="mb-12">
            <h2 class="text-2xl font-bold text-gray-800 mb-6 animate-fade-up">Pilih Program Studi</h2>
            <div class="flex flex-wrap gap-4 animate-fade-up delay-100">
                <button onclick="scrollToSection('s1')" class="px-6 py-3 bg-brand-jeruk text-white rounded-lg hover:bg-brand-jeruk-700 transition-colors">Program S1</button>
                <button onclick="scrollToSection('d3')" class="px-6 py-3 bg-brand-cream text-brand-jeruk rounded-lg hover:bg-brand-cream-700 transition-colors">Program D3</button>
            </div>
        </div>

        <div class="space-y-16">
            <!-- Program S1 -->
            <section id="s1" class="scroll-mt-16">
                <h2 class="text-3xl font-bold text-gray-800 mb-8">Program Sarjana (S1)</h2>
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                    <!-- RKK S1 -->
                    <div class="bg-white rounded-xl shadow-md overflow-hidden hover:shadow-lg transition-all duration-300 transform hover:scale-105 program-card animate-fade-up">
                        <div class="relative h-48 bg-brand-cream">
                            <div class="absolute inset-0 bg-gradient-to-r from-brand-jeruk to-brand-jeruk-700 opacity-90 transition-opacity group-hover:opacity-75"></div>
                            <img src="https://images.unsplash.com/photo-1581093448792-1b9e6c1c0e2f?auto=format&fit=crop&w=800&q=80" alt="RKK" class="w-full h-full object-cover">
                            <div class="absolute bottom-4 left-4 text-white">
                                <h3 class="text-xl font-bold">Rekayasa Keselamatan & Kesehatan Kerja (RKK)</h3>
                                <p class="text-sm opacity-90">Program Sarjana (S1)</p>
                            </div>
                        </div>
                        <div class="p-6">
                            <p class="text-gray-600 mb-4">Program studi yang fokus pada keselamatan dan kesehatan kerja di industri modern.</p>
                            <div class="space-y-3">
                                <div class="flex items-center text-sm text-gray-500">
                                    <svg class="w-5 h-5 mr-2 text-brand-jeruk" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 13.255A23.931 23.931 0 0112 15c-3.183 0-6.22-.62-9-1.745M16 6V4a2 2 0 00-2-2h-4a2 2 0 00-2 2v2m4 6h.01M5 20h14a2 2 0 002-2V8a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path>
                                    </svg>
                                    Masa Studi: 4 Tahun
                                </div>
                                <div class="flex items-center text-sm text-gray-500">
                                    <svg class="w-5 h-5 mr-2 text-brand-jeruk" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4"></path>
                                    </svg>
                                    Akreditasi: B
                                </div>
                            </div>
                            <div class="mt-6">
                                <a href="{{ route('jurusan.rkk-s1') }}" class="inline-flex items-center px-4 py-2 bg-brand-jeruk text-white rounded-lg hover:bg-brand-jeruk-700 transition-colors">
                                    Pelajari Lebih Lanjut
                                    <svg class="w-4 h-4 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                                    </svg>
                                </a>
                            </div>
                        </div>
                    </div>

                    <!-- Teknik Lingkungan S1 -->
                    <div class="bg-white rounded-xl shadow-md overflow-hidden hover:shadow-lg transition-shadow group">
                        <div class="relative h-48 bg-brand-jeruk-100">
                            <div class="absolute inset-0 bg-gradient-to-r from-brand-jeruk to-brand-jeruk-700 opacity-90"></div>
                            <img src="https://images.unsplash.com/photo-1503676260728-1c00da094a0b?auto=format&fit=crop&w=800&q=80" alt="Teknik Lingkungan" class="w-full h-full object-cover">
                            <div class="absolute bottom-4 left-4 text-white">
                                <h3 class="text-xl font-bold">Teknik Lingkungan</h3>
                                <p class="text-sm opacity-90">Program Sarjana (S1)</p>
                            </div>
                        </div>
                        <div class="p-6">
                            <p class="text-gray-600 mb-4">Program studi yang fokus pada pengelolaan lingkungan dan pembangunan berkelanjutan.</p>
                            <div class="space-y-3">
                                <div class="flex items-center text-sm text-gray-500">
                                    <svg class="w-5 h-5 mr-2 text-brand-jeruk" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 13.255A23.931 23.931 0 0112 15c-3.183 0-6.22-.62-9-1.745M16 6V4a2 2 0 00-2-2h-4a2 2 0 00-2 2v2m4 6h.01M5 20h14a2 2 0 002-2V8a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path>
                                    </svg>
                                    Masa Studi: 4 Tahun
                                </div>
                                <div class="flex items-center text-sm text-gray-500">
                                    <svg class="w-5 h-5 mr-2 text-brand-jeruk" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4"></path>
                                    </svg>
                                    Akreditasi: B
                                </div>
                            </div>
                            <div class="mt-6">
                                <a href="{{ route('jurusan.teknik-lingkungan-s1') }}" class="inline-flex items-center px-4 py-2 bg-brand-jeruk text-white rounded-lg hover:bg-brand-jeruk-700 transition-colors">
                                    Pelajari Lebih Lanjut
                                    <svg class="w-4 h-4 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                                    </svg>
                                </a>
                            </div>
                        </div>
                    </div>

                    <!-- Teknik Perminyakan S1 -->
                    <div class="bg-white rounded-xl shadow-md overflow-hidden hover:shadow-lg transition-shadow group">
                        <div class="relative h-48 bg-brand-jeruk-100">
                            <div class="absolute inset-0 bg-gradient-to-r from-brand-jeruk to-brand-jeruk-700 opacity-90"></div>
                            <img src="https://images.unsplash.com/photo-1582728991642-d5e99a72ecb9?auto=format&fit=crop&w=800&q=80" alt="Teknik Perminyakan" class="w-full h-full object-cover">
                            <div class="absolute bottom-4 left-4 text-white">
                                <h3 class="text-xl font-bold">Teknik Perminyakan</h3>
                                <p class="text-sm opacity-90">Program Sarjana (S1)</p>
                            </div>
                        </div>
                        <div class="p-6">
                            <p class="text-gray-600 mb-4">Program studi yang fokus pada eksplorasi dan produksi minyak dan gas bumi.</p>
                            <div class="space-y-3">
                                <div class="flex items-center text-sm text-gray-500">
                                    <svg class="w-5 h-5 mr-2 text-brand-jeruk" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 13.255A23.931 23.931 0 0112 15c-3.183 0-6.22-.62-9-1.745M16 6V4a2 2 0 00-2-2h-4a2 2 0 00-2 2v2m4 6h.01M5 20h14a2 2 0 002-2V8a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path>
                                    </svg>
                                    Masa Studi: 4 Tahun
                                </div>
                                <div class="flex items-center text-sm text-gray-500">
                                    <svg class="w-5 h-5 mr-2 text-brand-jeruk" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4"></path>
                                    </svg>
                                    Akreditasi: B
                                </div>
                            </div>
                            <div class="mt-6">
                                <a href="{{ route('jurusan.teknik-perminyakan-s1') }}" class="inline-flex items-center px-4 py-2 bg-brand-jeruk text-white rounded-lg hover:bg-brand-jeruk-700 transition-colors">
                                    Pelajari Lebih Lanjut
                                    <svg class="w-4 h-4 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                                    </svg>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <!-- Program D3 -->
            <section id="d3" class="scroll-mt-16">
                <h2 class="text-3xl font-bold text-gray-800 mb-8">Program Diploma (D3)</h2>
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">

            <x-slot name="content">
                <x-dropdown-link href="{{ route('jurusan.rkk-s1') }}">RKK S1</x-dropdown-link>
                <x-dropdown-link href="{{ route('jurusan.teknik-lingkungan-s1') }}">Teknik Lingkungan S1</x-dropdown-link>
                <x-dropdown-link href="{{ route('jurusan.teknik-perminyakan-s1') }}">Teknik Perminyakan S1</x-dropdown-link>
                <x-dropdown-link href="{{ route('jurusan.fire-safety-d3') }}">Fire Safety D3</x-dropdown-link>
                <x-dropdown-link href="{{ route('jurusan.tekim-d3') }}">Tekim D3</x-dropdown-link>
                <x-dropdown-link href="{{ route('jurusan.pe-d3') }}">PE D3</x-dropdown-link>
            </x-slot>
        </x-dropdown>

                <!-- Program D3 -->
                <section id="d3" class="scroll-mt-16">
                    <h2 class="text-3xl font-bold text-gray-800 mb-8">Program Diploma (D3)</h2>
                    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                        <!-- Fire Safety D3 -->
                        <div class="bg-white rounded-xl shadow-md overflow-hidden hover:shadow-lg transition-shadow group">
                            <div class="relative h-48 bg-brand-cream">
                                <div class="absolute inset-0 bg-gradient-to-r from-brand-jeruk to-brand-jeruk-700 opacity-90"></div>
                                <img src="https://images.unsplash.com/photo-1582201942988-13e4e35a83d8?auto=format&fit=crop&w=800&q=80" alt="Fire Safety" class="w-full h-full object-cover">
                                <div class="absolute bottom-4 left-4 text-white">
                                    <h3 class="text-xl font-bold">Fire Safety</h3>
                                    <p class="text-sm opacity-90">Program Diploma (D3)</p>
                                </div>
                            </div>
                            <div class="p-6">
                                <p class="text-gray-600 mb-4">Program studi yang fokus pada keselamatan kebakaran dan manajemen keadaan darurat.</p>
                                <div class="space-y-3">
                                    <div class="flex items-center text-sm text-gray-500">
                                        <svg class="w-5 h-5 mr-2 text-brand-jeruk" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 13.255A23.931 23.931 0 0112 15c-3.183 0-6.22-.62-9-1.745M16 6V4a2 2 0 00-2-2h-4a2 2 0 00-2 2v2m4 6h.01M5 20h14a2 2 0 002-2V8a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path>
                                        </svg>
                                        Masa Studi: 3 Tahun
                                    </div>
                                    <div class="flex items-center text-sm text-gray-500">
                                        <svg class="w-5 h-5 mr-2 text-brand-jeruk" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4"></path>
                                        </svg>
                                        Akreditasi: B
                                    </div>
                                </div>
                                <div class="mt-6">
                                    <a href="{{ route('jurusan.fire-safety-d3') }}" class="inline-flex items-center px-4 py-2 bg-brand-jeruk text-white rounded-lg hover:bg-brand-jeruk-700 transition-colors">
                                        Pelajari Lebih Lanjut
                                        <svg class="w-4 h-4 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                                        </svg>
                                    </a>
                                </div>
                            </div>
                        </div>

                        <!-- Tekim D3 -->
                        <div class="bg-white rounded-xl shadow-md overflow-hidden hover:shadow-lg transition-shadow group">
                            <div class="relative h-48 bg-brand-cream">
                                <div class="absolute inset-0 bg-gradient-to-r from-brand-jeruk to-brand-jeruk-700 opacity-90"></div>
                                <img src="https://images.unsplash.com/photo-1532187863486-abf9dbad1b69?auto=format&fit=crop&w=800&q=80" alt="Teknik Kimia" class="w-full h-full object-cover">
                                <div class="absolute bottom-4 left-4 text-white">
                                    <h3 class="text-xl font-bold">Teknik Kimia</h3>
                                    <p class="text-sm opacity-90">Program Diploma (D3)</p>
                                </div>
                            </div>
                            <div class="p-6">
                                <p class="text-gray-600 mb-4">Program studi yang fokus pada proses kimia dan pengolahan bahan industri.</p>
                                <div class="space-y-3">
                                    <div class="flex items-center text-sm text-gray-500">
                                        <svg class="w-5 h-5 mr-2 text-brand-jeruk" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 13.255A23.931 23.931 0 0112 15c-3.183 0-6.22-.62-9-1.745M16 6V4a2 2 0 00-2-2h-4a2 2 0 00-2 2v2m4 6h.01M5 20h14a2 2 0 002-2V8a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path>
                                        </svg>
                                        Masa Studi: 3 Tahun
                                    </div>
                                    <div class="flex items-center text-sm text-gray-500">
                                        <svg class="w-5 h-5 mr-2 text-brand-jeruk" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4"></path>
                                        </svg>
                                        Akreditasi: B
                                    </div>
                                </div>
                                <div class="mt-6">
                                    <a href="{{ route('jurusan.tekim-d3') }}" class="inline-flex items-center px-4 py-2 bg-brand-jeruk text-white rounded-lg hover:bg-brand-jeruk-700 transition-colors">
                                        Pelajari Lebih Lanjut
                                        <svg class="w-4 h-4 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                                        </svg>
                                    </a>
                                </div>
                            </div>
                        </div>

                        <!-- PE D3 -->
                        <div class="bg-white rounded-xl shadow-md overflow-hidden hover:shadow-lg transition-shadow group">
                            <div class="relative h-48 bg-brand-cream">
                                <div class="absolute inset-0 bg-gradient-to-r from-brand-jeruk to-brand-jeruk-700 opacity-90"></div>
                                <img src="https://images.unsplash.com/photo-1581092921461-39b21c886d1f?auto=format&fit=crop&w=800&q=80" alt="PE" class="w-full h-full object-cover">
                                <div class="absolute bottom-4 left-4 text-white">
                                    <h3 class="text-xl font-bold">Petroleum Engineering</h3>
                                    <p class="text-sm opacity-90">Program Diploma (D3)</p>
                                </div>
                            </div>
                            <div class="p-6">
                                <p class="text-gray-600 mb-4">Program studi yang fokus pada teknologi perminyakan dan gas bumi.</p>
                                <div class="space-y-3">
                                    <div class="flex items-center text-sm text-gray-500">
                                        <svg class="w-5 h-5 mr-2 text-brand-jeruk" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 13.255A23.931 23.931 0 0112 15c-3.183 0-6.22-.62-9-1.745M16 6V4a2 2 0 00-2-2h-4a2 2 0 00-2 2v2m4 6h.01M5 20h14a2 2 0 002-2V8a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path>
                                        </svg>
                                        Masa Studi: 3 Tahun
                                    </div>
                                    <div class="flex items-center text-sm text-gray-500">
                                        <svg class="w-5 h-5 mr-2 text-brand-jeruk" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4"></path>
                                        </svg>
                                        Akreditasi: B
                                    </div>
                                </div>
                                <div class="mt-6">
                                    <a href="{{ route('jurusan.pe-d3') }}" class="inline-flex items-center px-4 py-2 bg-brand-jeruk text-white rounded-lg hover:bg-brand-jeruk-700 transition-colors">
                                        Pelajari Lebih Lanjut
                                        <svg class="w-4 h-4 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                                        </svg>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>

                <!-- Footer CTA -->
                <section class="mt-20 text-center bg-brand-cream rounded-2xl p-12">
                    <h2 class="text-3xl font-bold text-brand-jeruk mb-6">Siap Memulai Pendidikan Anda?</h2>
                    <p class="text-gray-700 mb-8 max-w-2xl mx-auto">Mulai langkah pertama Anda menuju karir yang sukses. Daftar sekarang dan jadilah bagian dari komunitas akademik kami.</p>
                    <a href="{{ route('daftar') }}" class="inline-flex items-center px-8 py-3 bg-brand-jeruk text-white rounded-lg hover:bg-brand-jeruk-700 transition-colors text-lg font-semibold">
                        Daftar Sekarang
                        <svg class="w-5 h-5 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7l5 5m0 0l-5 5m5-5H6"></path>
                        </svg>
                    </a>
                </section>
            </div>

            <script>
                function scrollToSection(id) {
                    const element = document.getElementById(id);
                    const offset = 80; // Adjust this value based on your header height
                    const bodyRect = document.body.getBoundingClientRect().top;
                    const elementRect = element.getBoundingClientRect().top;
                    const elementPosition = elementRect - bodyRect;
                    const offsetPosition = elementPosition - offset;

                    window.scrollTo({
                        top: offsetPosition,
                        behavior: 'smooth'
                    });
                }
            </script>
        </div>
    </x-app-layout>
