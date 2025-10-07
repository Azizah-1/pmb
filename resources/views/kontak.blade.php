<x-app-layout>
    <div class="max-w-7xl mx-auto px-6 sm:px-8 lg:px-10 py-12">
        <!-- Hero -->
        <section class="rounded-lg overflow-hidden shadow-md bg-gradient-to-r from-orange-100 via-white to-amber-50 p-8 mb-10 animate-up">
            <div class="md:flex md:items-center md:gap-8">
                <div class="md:flex-1">
                    <h1 class="text-4xl font-extrabold text-orange-700 mb-4">Kontak & Lokasi</h1>
                    <p class="text-orange-800/80 mb-6">Hubungi kami untuk informasi penerimaan, pendaftaran, maupun pertanyaan seputar kampus utama ITPB Indramayu.</p>
                    <a href="#info-kontak" class="inline-block bg-orange-600 text-white font-semibold py-3 px-6 rounded-lg shadow hover:bg-orange-700 transition">Lihat Kontak</a>
                </div>
                <div class="md:w-1/3 mt-6 md:mt-0">
                    <img src="https://images.unsplash.com/photo-1503676260728-1c00da094a0b?auto=format&fit=crop&w=800&q=60" alt="Kampus ITPB Indramayu" class="rounded-lg shadow-lg w-full object-cover">
                </div>
            </div>
        </section>

        <!-- Contact cards -->
        <section id="info-kontak" class="grid grid-cols-1 md:grid-cols-3 gap-8 mb-12">
            <article class="bg-cream rounded-lg shadow p-6 animate-up tilt-on-hover" style="background: #fff8f2;">
                <h3 class="text-xl font-semibold text-orange-700 mb-2">Instagram</h3>
                <p class="text-gray-700 mb-4">Ikuti akun resmi kami untuk update kegiatan, pengumuman, dan informasi pendaftaran.</p>
                <p class="font-medium text-gray-800 mb-4">@itpb_indramayu</p>
                <a href="https://instagram.com/itpb_indramayu" target="_blank" class="text-orange-600 font-semibold hover:underline">Kunjungi Instagram &rarr;</a>
            </article>

            <article class="bg-white rounded-lg shadow p-6 animate-up tilt-on-hover">
                <h3 class="text-xl font-semibold text-orange-700 mb-2">Website</h3>
                <p class="text-gray-700 mb-4">Semua informasi resmi dan pendaftaran ada di situs kami.</p>
                <p class="font-medium text-gray-800 mb-4">https://itpb-indramayu.ac.id</p>
                <a href="https://itpb-indramayu.ac.id" target="_blank" class="text-orange-600 font-semibold hover:underline">Kunjungi Situs &rarr;</a>
            </article>

            <article class="bg-white rounded-lg shadow p-6 animate-up tilt-on-hover">
                <h3 class="text-xl font-semibold text-orange-700 mb-2">Email & Telepon</h3>
                <p class="text-gray-700 mb-4">Untuk pertanyaan umum dan administrasi.</p>
                <p class="font-medium text-gray-800">email: info@itpb-indramayu.ac.id</p>
                <p class="font-medium text-gray-800 mb-4">tel: (0234) 123-456</p>
                <a href="mailto:info@itpb-indramayu.ac.id" class="text-orange-600 font-semibold hover:underline">Kirim Email &rarr;</a>
            </article>
        </section>

        <!-- Address + Map -->
        <section class="grid grid-cols-1 md:grid-cols-2 gap-10 mb-12 animate-up">
            <div>
                <h3 class="text-2xl font-bold text-orange-700 mb-4">Kampus Utama ITPB Indramayu</h3>
                <p class="text-gray-700 mb-4">Jl. Raya Indramayu No.123, Kec. Indramayu, Kabupaten Indramayu, Jawa Barat, Indonesia</p>
                <p class="text-gray-700 mb-4">Jam operasional: Senin - Jumat, 08:00 - 16:00</p>
                <a href="https://maps.google.com?q=ITPB+Indramayu" target="_blank" class="inline-block bg-orange-600 text-white font-semibold py-2 px-4 rounded-lg shadow hover:bg-orange-700">Buka Google Maps</a>
            </div>

            <div>
                <div class="w-full rounded-lg overflow-hidden shadow">
                    <!-- Simple embed placeholder for the campus location -->
                    <iframe class="w-full h-64 border-0" loading="lazy" allowfullscreen src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d31710.123456789!2d108.3123456!3d-6.3456789!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e7b123456789abc%3A0xabcdef1234567890!2sITPB%20Indramayu!5e0!3m2!1sen!2sid!4v1600000000000!5m2!1sen!2sid"></iframe>
                </div>
            </div>
        </section>

        <!-- CTA -->
        <section class="bg-orange-50 rounded-lg p-8 text-center animate-up">
            <h3 class="text-2xl font-bold text-orange-700 mb-3">Perlu Bantuan Langsung?</h3>
            <p class="text-gray-700 mb-6">Tim kami siap membantu proses pendaftaran dan menjawab pertanyaan Anda.</p>
            <a href="mailto:info@itpb-indramayu.ac.id" class="inline-block bg-white border border-orange-600 text-orange-700 font-semibold py-3 px-6 rounded-lg shadow hover:bg-orange-50">Hubungi via Email</a>
        </section>

        @include('components.animations')
    </div>
</x-app-layout>
<x-app-layout>
    <div class="p-6">
        <h1 class="text-2xl font-bold mb-4">Kontak</h1>
        <p>Halaman kontak untuk informasi lebih lanjut.</p>
    </div>
</x-app-layout>
