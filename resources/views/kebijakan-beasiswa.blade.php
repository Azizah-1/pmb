<x-app-layout>
    <div class="max-w-7xl mx-auto px-6 sm:px-8 lg:px-10 py-12">
        <!-- Hero -->
        <section class="rounded-lg overflow-hidden shadow-md bg-gradient-to-r from-orange-100 via-white to-amber-50 p-8 mb-10 animate-up">
            <div class="md:flex md:items-center md:gap-8">
                <div class="md:flex-1">
                    <h1 class="text-4xl font-extrabold text-orange-700 mb-4">Kebijakan & Informasi Beasiswa</h1>
                    <p class="text-orange-800/80 mb-6">Kami menyediakan beragam beasiswa untuk mendukung calon mahasiswa berprestasi dan kurang mampu. Di sini kamu bisa melihat syarat, cakupan, dan tata cara pengajuan.</p>
                    <a href="#daftar-beasiswa" class="inline-block bg-orange-600 text-white font-semibold py-3 px-6 rounded-lg shadow hover:bg-orange-700 transition">Lihat Beasiswa</a>
                </div>
                <div class="md:w-1/3 mt-6 md:mt-0">
                    <img src="https://images.unsplash.com/photo-1523240795612-9a054b0db644?auto=format&fit=crop&w=800&q=60" alt="Beasiswa" class="rounded-lg shadow-lg w-full object-cover">
                </div>
            </div>
        </section>

        <!-- Scholarship cards -->
        <section id="daftar-beasiswa" class="grid grid-cols-1 md:grid-cols-3 gap-8 mb-12">
            <article class="bg-white rounded-lg shadow p-6 animate-up tilt-on-hover">
                <img src="https://images.unsplash.com/photo-1522202176988-66273c2fd55f?auto=format&fit=crop&w=600&q=60" alt="Beasiswa Prestasi" class="w-16 h-16 rounded-full mb-4">
                <h3 class="text-xl font-semibold text-orange-700 mb-2">Beasiswa Prestasi</h3>
                <p class="text-gray-700 mb-4">Untuk mahasiswa berprestasi akademik dan non-akademik. Cakupan: uang kuliah sebagian dan tunjangan buku.</p>
                <ul class="text-sm text-gray-600 mb-4 list-disc list-inside">
                    <li>IPK minimal 3.25</li>
                    <li>Surat rekomendasi</li>
                </ul>
                <a href="#" class="text-orange-600 font-semibold hover:underline">Cara Mengajukan &rarr;</a>
            </article>

            <article class="bg-cream rounded-lg shadow p-6 animate-up tilt-on-hover" style="background: #fff8f2;">
                <img src="https://images.unsplash.com/photo-1520975919887-0a3d7c3fbf0e?auto=format&fit=crop&w=600&q=60" alt="Beasiswa Karyawan" class="w-16 h-16 rounded-full mb-4">
                <h3 class="text-xl font-semibold text-orange-700 mb-2">Beasiswa Keluarga</h3>
                <p class="text-gray-700 mb-4">Dukungan biaya untuk mahasiswa dengan kondisi finansial terbatas. Cakupan: bantuan biaya hidup & subsidi UKT.</p>
                <ul class="text-sm text-gray-600 mb-4 list-disc list-inside">
                    <li>Bukti penghasilan keluarga</li>
                    <li>Surat pernyataan tidak mampu</li>
                </ul>
                <a href="#" class="text-orange-600 font-semibold hover:underline">Ajukan Sekarang &rarr;</a>
            </article>

            <article class="bg-white rounded-lg shadow p-6 animate-up tilt-on-hover">
                <img src="https://images.unsplash.com/photo-1496307042754-b4aa456c4a2d?auto=format&fit=crop&w=600&q=60" alt="Beasiswa Penelitian" class="w-16 h-16 rounded-full mb-4">
                <h3 class="text-xl font-semibold text-orange-700 mb-2">Beasiswa Penelitian</h3>
                <p class="text-gray-700 mb-4">Pendanaan untuk proyek penelitian mahasiswa S1 dan D3. Cakupan: dana penelitian & presentasi konferensi.</p>
                <ul class="text-sm text-gray-600 mb-4 list-disc list-inside">
                    <li>Proposal penelitian</li>
                    <li>Surat persetujuan dosen pembimbing</li>
                </ul>
                <a href="#" class="text-orange-600 font-semibold hover:underline">Pelajari Lebih Lanjut &rarr;</a>
            </article>
        </section>

        <!-- Policy / FAQ -->
        <section class="grid grid-cols-1 md:grid-cols-2 gap-10 mb-12">
            <div class="animate-up">
                <h3 class="text-2xl font-bold text-orange-700 mb-4">Kebijakan Umum</h3>
                <p class="text-gray-700 mb-4">Semua beasiswa dikelola oleh unit kemahasiswaan dan memiliki persyaratan khusus. Keputusan pemberian beasiswa bersifat final sesuai kebijakan universitas.</p>
                <ul class="list-disc list-inside text-gray-700 space-y-2">
                    <li>Beasiswa dapat dicabut jika terbukti melanggar kode etik akademik.</li>
                    <li>Pengumuman hasil seleksi melalui website resmi dan email.</li>
                </ul>
            </div>

            <div class="animate-up">
                <h3 class="text-2xl font-bold text-orange-700 mb-4">Pertanyaan Umum (FAQ)</h3>
                <div class="space-y-3">
                    <details class="p-4 bg-white rounded-lg shadow">
                        <summary class="font-semibold">Bagaimana cara mengajukan?</summary>
                        <p class="mt-2 text-gray-700">Isi formulir online, unggah dokumen, dan lengkapi persyaratan sesuai jenis beasiswa.</p>
                    </details>
                    <details class="p-4 bg-white rounded-lg shadow">
                        <summary class="font-semibold">Kapan pengumuman?</summary>
                        <p class="mt-2 text-gray-700">Pengumuman biasanya 4 minggu setelah batas penerimaan dokumen.</p>
                    </details>
                </div>
            </div>
        </section>

        <!-- Contact / CTA -->
        <section class="bg-orange-50 rounded-lg p-8 text-center animate-up">
            <h3 class="text-2xl font-bold text-orange-700 mb-3">Butuh Bantuan untuk Pengajuan?</h3>
            <p class="text-gray-700 mb-6">Hubungi tim kemahasiswaan untuk panduan pengisian formulir dan persyaratan dokumen.</p>
            <a href="/kontak" class="inline-block bg-white border border-orange-600 text-orange-700 font-semibold py-3 px-6 rounded-lg shadow hover:bg-orange-50">Hubungi Kami</a>
        </section>

        @include('components.animations')
    </div>
</x-app-layout>
