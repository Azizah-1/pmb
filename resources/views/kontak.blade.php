
<x-app-layout>
    <div class="min-h-screen px-6 md:px-8 py-10" style="background-color: #f8f7f5;">
        <div class="max-w-6xl mx-auto space-y-16">

            <!-- Hero: light-orange text card + candid student photo -->
            <section class="relative">
                <div class="flex flex-col md:flex-row items-center gap-8">
                    <div class="md:w-1/2 z-20" style="background-color: rgb(255, 176, 92); border-radius:10px;">
                        <div class="rounded-2xl p-8 shadow-md" style="min-height:260px;">
                            <h2 class="text-2xl font-bold mb-3">Hubungi Kami</h2>
                            <p class="text-base mb-4">Institut Teknologi dan Pendidikan Bina Bangsa Indramayu siap membantu Anda dengan informasi terkini tentang penerimaan mahasiswa baru dan program studi kami.</p>
                            <p class="font-semibold">Informasi Kontak Lengkap</p>
                            <p class="mb-3">Temukan semua cara untuk terhubung dengan kami di bawah ini.</p>
                        </div>
                    </div>

                    <div class="md:w-1/2">
                        <!-- decorative orange box behind the photo -->
                        <div class="relative" style="width: 545px; height:365px; margin-left: 20px;">
                            <!-- orange background 'shadow' (offset) -->
                            <div class="absolute bg-[#F79436] rounded-lg z-0" style="inset:0; transform: translate(16px,-16px); border-radius:12px;"></div>

                            <!-- candid student photo on top -->
                            <div class="relative z-10 rounded-2xl overflow-hidden shadow-lg" style="width:100%; height:100%;">
                                <img src="{{ asset('images/student-candid.jpg') }}" alt="Mahasiswa Candid" class="object-cover w-full h-full" style="display:block;" />
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <!-- Contact Info Grid -->
            <section class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
                <div class="bg-white rounded-2xl shadow-lg p-6 border border-orange-100">
                    <div class="flex items-center gap-4 mb-4">
                        <span class="inline-flex items-center justify-center w-12 h-12 rounded-full bg-orange-100">
                            <svg class="h-6 w-6 text-orange-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"/>
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"/>
                            </svg>
                        </span>
                        <h3 class="text-lg font-semibold text-orange-500">Alamat</h3>
                    </div>
                    <p class="text-gray-600 text-sm">Institut Teknologi dan Pendidikan Bina Bangsa Indramayu<br>Jl. Raya Lohbener Lama No. 08<br>Indramayu, Jawa Barat 45252</p>
                </div>

                <div class="bg-white rounded-2xl shadow-lg p-6 border border-orange-100">
                    <div class="flex items-center gap-4 mb-4">
                        <span class="inline-flex items-center justify-center w-12 h-12 rounded-full bg-orange-100">
                            <svg class="h-6 w-6 text-orange-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"/>
                            </svg>
                        </span>
                        <h3 class="text-lg font-semibold text-orange-500">Telepon</h3>
                    </div>
                    <p class="text-gray-600 text-sm"><a href="tel:+621234567890" class="hover:text-orange-500 transition duration-300">+62 123 4567 890</a></p>
                </div>

                <div class="bg-white rounded-2xl shadow-lg p-6 border border-orange-100">
                    <div class="flex items-center gap-4 mb-4">
                        <span class="inline-flex items-center justify-center w-12 h-12 rounded-full bg-orange-100">
                            <svg class="h-6 w-6 text-orange-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/>
                            </svg>
                        </span>
                        <h3 class="text-lg font-semibold text-orange-500">Email</h3>
                    </div>
                    <p class="text-gray-600 text-sm"><a href="mailto:info@itpbindramayu.ac.id" class="hover:text-orange-500 transition duration-300">info@itpbindramayu.ac.id</a></p>
                </div>

                <div class="bg-white rounded-2xl shadow-lg p-6 border border-orange-100">
                    <div class="flex items-center gap-4 mb-4">
                        <span class="inline-flex items-center justify-center w-12 h-12 rounded-full bg-orange-100">
                            <svg class="h-6 w-6 text-orange-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 12a9 9 0 01-9 9m9-9a9 9 0 00-9-9m9 9H3m9 9a9 9 0 01-9-9m9 9c1.657 0 3-4.03 3-9s-1.343-9-3-9m0 18c-1.657 0-3-4.03-3-9s1.343-9 3-9m-9 9a9 9 0 019-9"/>
                            </svg>
                        </span>
                        <h3 class="text-lg font-semibold text-orange-500">Website</h3>
                    </div>
                    <p class="text-gray-600 text-sm"><a href="https://www.itpbindramayu.ac.id" target="_blank" class="hover:text-orange-500 transition duration-300">www.itpbindramayu.ac.id</a></p>
                </div>

                <div class="bg-white rounded-2xl shadow-lg p-6 border border-orange-100">
                    <div class="flex items-center gap-4 mb-4">
                        <span class="inline-flex items-center justify-center w-12 h-12 rounded-full bg-orange-100">
                            <svg class="h-6 w-6 text-orange-400" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M12 2.163c3.204 0 3.584.012 4.85.07 3.252.148 4.771 1.691 4.919 4.919.058 1.265.069 1.645.069 4.849 0 3.205-.012 3.584-.069 4.849-.149 3.225-1.664 4.771-4.919 4.919-1.266.058-1.644.07-4.85.07-3.204 0-3.584-.012-4.849-.07-3.26-.149-4.771-1.699-4.919-4.92-.058-1.265-.07-1.644-.07-4.849 0-3.204.013-3.583.07-4.849.149-3.227 1.664-4.771 4.919-4.919 1.266-.057 1.645-.069 4.849-.069zm0-2.163c-3.259 0-3.667.014-4.947.072-4.358.2-6.78 2.618-6.98 6.98-.059 1.281-.073 1.689-.073 4.948 0 3.259.014 3.668.072 4.948.2 4.358 2.618 6.78 6.98 6.98 1.281.058 1.689.072 4.948.072 3.259 0 3.668-.014 4.948-.072 4.354-.2 6.782-2.618 6.979-6.98.059-1.28.073-1.689.073-4.948 0-3.259-.014-3.667-.072-4.947-.196-4.354-2.617-6.78-6.979-6.98-1.281-.059-1.69-.073-4.949-.073zm0 5.838c-3.403 0-6.162 2.759-6.162 6.162s2.759 6.163 6.162 6.163 6.162-2.759 6.162-6.163c0-3.403-2.759-6.162-6.162-6.162zm0 10.162c-2.209 0-4-1.79-4-4 0-2.209 1.791-4 4-4s4 1.791 4 4c0 2.21-1.791 4-4 4zm6.406-11.845c-.796 0-1.441.645-1.441 1.44s.645 1.44 1.441 1.44c.795 0 1.439-.645 1.439-1.44s-.644-1.44-1.439-1.44z"/>
                            </svg>
                        </span>
                        <h3 class="text-lg font-semibold text-orange-500">Instagram</h3>
                    </div>
                    <p class="text-gray-600 text-sm"><a href="https://www.instagram.com/itpbindramayu" target="_blank" class="hover:text-orange-500 transition duration-300">@itpbindramayu</a></p>
                </div>

                <div class="bg-white rounded-2xl shadow-lg p-6 border border-orange-100">
                    <div class="flex items-center gap-4 mb-4">
                        <span class="inline-flex items-center justify-center w-12 h-12 rounded-full bg-orange-100">
                            <svg class="h-6 w-6 text-orange-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"/>
                            </svg>
                        </span>
                        <h3 class="text-lg font-semibold text-orange-500">Jam Operasional</h3>
                    </div>
                    <p class="text-gray-600 text-sm">Senin - Jumat: 08.00 - 16.00<br>Sabtu: 08.00 - 12.00<br>Minggu: Tutup</p>
                </div>
            </section>

            <!-- Mirrored section: campus photo + map text -->
            <section class="relative">
                <div class="flex flex-col md:flex-row items-center gap-8">
                    <div class="md:w-1/2 order-2 md:order-1">
                        <div class="relative" style="width: 545px; height:365px; margin-left: 20px;">
                            <div class="absolute bg-[#F79436] rounded-lg z-0" style="inset:0; transform: translate(-16px,16px); border-radius:12px;"></div>
                            <div class="relative z-10 rounded-2xl overflow-hidden shadow-lg" style="width:100%; height:100%;">
                                <img src="{{ asset('images/campus.jpg') }}" alt="Kampus ITPB" class="object-cover w-full h-full" style="display:block;" />
                            </div>
                        </div>
                    </div>

                    <div class="md:w-1/2 order-1 md:order-2 z-20 -mt-12 md:-mt-0">
                        <div class="bg-[#F9C8A8] rounded-2xl p-6 shadow-md w-full" style="max-width:420px; background-color: rgb(255, 176, 92); border-radius:10px;">
                            <h3 class="text-xl font-bold mb-2">Temukan Lokasi Kami</h3>
                            <p class="text-sm mb-3">Kunjungi kampus kami untuk informasi lebih lanjut tentang penerimaan mahasiswa baru dan program studi yang tersedia.</p>
                        </div>
                    </div>
                </div>
            </section>

            <!-- Google Maps -->
            <section class="bg-white rounded-2xl shadow-lg p-8 border border-orange-100">
                <h2 class="text-2xl font-bold text-orange-500 mb-6">Peta Lokasi</h2>
                <div class="rounded-lg overflow-hidden border border-orange-100">
                    <iframe
                        class="w-full h-[400px]"
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3965.7479530428865!2d108.32332631475715!3d-6.297488995443047!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e6eb981999aa0b3%3A0xe435d5c4c1b03f96!2sITP%20Bina%20Bangsa%20Indramayu!5e0!3m2!1sen!2sid!4v1697457789012!5m2!1sen!2sid"
                        style="border:0;"
                        allowfullscreen=""
                        loading="lazy"
                        referrerpolicy="no-referrer-when-downgrade">
                    </iframe>
                </div>
            </section>

        </div>
    </div>
</x-app-layout>
