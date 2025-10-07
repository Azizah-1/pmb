<x-app-layout>
    <div class="max-w-7xl mx-auto px-6 sm:px-8 lg:px-10">
        <!-- Hero Section -->
        <section class="relative bg-white shadow-md rounded-lg overflow-hidden mt-8 animate-up">
            <img src="https://images.unsplash.com/photo-1531058020387-3be344556be6?auto=format&fit=crop&w=1200&q=80" alt="Hero Image" class="w-full h-80 object-cover">
            <div class="absolute inset-0 bg-black bg-opacity-60 flex flex-col justify-center items-center text-center p-10">
                <h1 class="text-white text-5xl font-extrabold mb-4 leading-tight max-w-4xl">Teknik Kimia D3</h1>
                <p class="text-white text-xl mb-8 max-w-3xl">Program vokasi yang fokus pada aplikasi proses kimia, pengolahan, dan industri manufaktur.</p>
                <a href="#" class="btn-brand shadow-lg transition duration-300">Pelajari Lebih Lanjut</a>
            </div>
        </section>

        <!-- Features Section -->
        <section class="mt-16 grid grid-cols-1 md:grid-cols-3 gap-12">
            <div class="bg-cream p-8 rounded-lg shadow hover:shadow-lg transition-shadow duration-300 text-center animate-up tilt-on-hover">
                <img src="https://images.unsplash.com/photo-1531058020387-3be344556be6?auto=format&fit=crop&w=72&q=80" alt="Reaksi" class="mx-auto mb-6 rounded-full">
                <h3 class="text-2xl font-semibold mb-3">Kinetika & Reaksi</h3>
                <p class="text-gray-700 leading-relaxed">Pemahaman laju reaksi dan desain reaktor untuk proses industri.</p>
            </div>
            <div class="bg-cream p-8 rounded-lg shadow hover:shadow-lg transition-shadow duration-300 text-center animate-up tilt-on-hover">
                <img src="https://images.unsplash.com/photo-1542367597-6a1f1b4d5f7e?auto=format&fit=crop&w=72&q=80" alt="Operasi Unit" class="mx-auto mb-6 rounded-full">
                <h3 class="text-2xl font-semibold mb-3">Operasi Unit</h3>
                <p class="text-gray-700 leading-relaxed">Distilasi, penukar panas, dan operasi unit penting lainnya.</p>
            </div>
            <div class="bg-cream p-8 rounded-lg shadow hover:shadow-lg transition-shadow duration-300 text-center animate-up tilt-on-hover">
                <img src="https://images.unsplash.com/photo-1518770660439-4636190af475?auto=format&fit=crop&w=72&q=80" alt="Kontrol Proses" class="mx-auto mb-6 rounded-full">
                <h3 class="text-2xl font-semibold mb-3">Kontrol Proses</h3>
                <p class="text-gray-700 leading-relaxed">Sistem kontrol untuk operasi proses yang stabil dan aman.</p>
            </div>
        </section>

        <!-- Call to Action Banner -->
        <section class="bg-brand-dark text-white text-center py-20 rounded-lg mt-20 shadow-lg">
            <h2 class="text-4xl font-bold mb-6 max-w-3xl mx-auto">Bergabunglah dengan Program Studi Teknik Kimia D3.</h2>
            <a href="#" class="btn-brand shadow-md hover:opacity-95 transition duration-300">Daftar Sekarang</a>
        </section>

        <!-- Testimonial Section -->
        <section class="mt-20 max-w-4xl mx-auto px-4">
            <blockquote class="border-l-8 border-brand pl-8 italic text-gray-800 text-lg leading-relaxed">
                "Program vokasi yang kuat di praktik laboratorium dan operasi proses industri." 
                <footer class="mt-6 font-semibold text-right">- Alumni Teknik Kimia D3</footer>
            </blockquote>
        </section>

        <!-- Clients Section -->
        <section class="mt-20 grid grid-cols-3 gap-16 items-center max-w-5xl mx-auto px-4">
            <img src="https://via.placeholder.com/180x60?text=Perusahaan+A" alt="Perusahaan A" class="mx-auto">
            <img src="https://via.placeholder.com/180x60?text=Perusahaan+B" alt="Perusahaan B" class="mx-auto">
            <img src="https://via.placeholder.com/180x60?text=Perusahaan+C" alt="Perusahaan C" class="mx-auto">
        </section>

        <!-- News and Whitepapers -->
        <section class="mt-20 grid grid-cols-1 md:grid-cols-2 gap-20 max-w-6xl mx-auto px-4">
            <div>
                <h3 class="text-2xl font-semibold mb-6">Materi Kuliah</h3>
                <ul class="list-disc list-inside text-gray-700 space-y-4">
                    <li><a href="#" class="text-brand hover:underline">Kinetika & Rekayasa Reaksi</a></li>
                    <li><a href="#" class="text-brand hover:underline">Operasi Unit (Distilasi, Penukar Panas)</a></li>
                    <li><a href="#" class="text-brand hover:underline">Pengolahan Bahan & Material</a></li>
                    <li><a href="#" class="text-brand hover:underline">Kontrol Proses</a></li>
                    <li><a href="#" class="text-brand hover:underline">Keselamatan Proses & HSE</a></li>
                    <li><a href="#" class="text-brand hover:underline">Laboratorium Analitik</a></li>
                </ul>
            </div>
            <div>
                <h3 class="text-2xl font-semibold mb-6">Berita Terkini</h3>
                <ul class="list-disc list-inside text-gray-700 space-y-4">
                    <li><a href="#" class="text-brand hover:underline">Inovasi dalam Pengelolaan Lingkungan</a></li>
                    <li><a href="#" class="text-brand hover:underline">Seminar Lingkungan 2023</a></li>
                </ul>
            </div>
        </section>

        <!-- Team Section -->
        <section class="mt-20 text-center max-w-5xl mx-auto px-4">
            <h3 class="text-3xl font-bold mb-12">Dosen dan Staf</h3>
            <div class="flex flex-wrap justify-center gap-16">
                <div class="w-40">
                    <img src="https://images.unsplash.com/photo-1508214751196-bcfd4ca60f91?auto=format&fit=crop&w=160&q=80" alt="Dosen 1" class="rounded-full mx-auto mb-6 shadow-lg">
                    <p class="font-semibold text-xl">Dr. Dosen 1</p>
                    <p class="text-gray-600 text-base">Kepala Program Studi</p>
                </div>
                <div class="w-40">
                    <img src="https://images.unsplash.com/photo-1527980965255-d3b416303d12?auto=format&fit=crop&w=160&q=80" alt="Dosen 2" class="rounded-full mx-auto mb-6 shadow-lg">
                    <p class="font-semibold text-xl">Prof. Dosen 2</p>
                    <p class="text-gray-600 text-base">Ahli Lingkungan</p>
                </div>
                <div class="w-40">
                    <img src="https://images.unsplash.com/photo-1508214751196-bcfd4ca60f91?auto=format&fit=crop&w=160&q=80" alt="Dosen 3" class="rounded-full mx-auto mb-6 shadow-lg">
                    <p class="font-semibold text-xl">Dr. Dosen 3</p>
                    <p class="text-gray-600 text-base">Peneliti</p>
                </div>
            </div>
        </section>

        <!-- Final Call to Action -->
        <section class="bg-gray-900 text-white text-center py-20 rounded-lg mt-20 shadow-xl">
            <h2 class="text-4xl font-bold mb-6">Mulai Karir Anda di Industri Proses & Manufaktur.</h2>
            <a href="#" class="bg-brand hover:bg-brand-dark text-white font-semibold py-4 px-12 rounded-lg shadow-lg transition duration-300">Hubungi Kami</a>
        </section>
        @include('components.animations')
    </div>
</x-app-layout>
