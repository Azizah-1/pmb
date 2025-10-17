<x-app-layout>
    <div class="bg-white">
        <!-- Hero -->
        <header class="bg-brand-cream border-b border-brand-jeruk-100">
            <div class="max-w-6xl mx-auto py-12 px-4 sm:px-6 lg:px-8">
                <div class="grid grid-cols-1 md:grid-cols-2 gap-8 items-center">
                    <div>
                        <h1 class="text-3xl font-extrabold text-brand-jeruk dark:text-brand-jeruk">Kebijakan Beasiswa</h1>
                        <p class="mt-3 text-lg text-gray-700 max-w-2xl">Informasi lengkap terkait kebijakan beasiswa: syarat, proses seleksi, hak dan kewajiban penerima, serta mekanisme pengajuan.</p>
                    </div>
                    <div class="flex justify-center md:justify-end">
                        <img src="https://images.unsplash.com/photo-1517520287167-4bbf64a00d66?auto=format&fit=crop&w=400&q=80" alt="Beasiswa" class="rounded-xl shadow-lg border-4 border-brand-jeruk-100 w-80 h-52 object-cover" />
                    </div>
                </div>
            </div>
        </header>

        <main class="max-w-6xl mx-auto p-6 sm:p-8">
            <!-- Summary cards -->
            <section aria-labelledby="kebijakan-overview" class="grid gap-6 sm:grid-cols-2 lg:grid-cols-4 mb-8">
                <div class="bg-brand-jeruk-100 p-4 rounded-lg shadow-sm">
                    <h3 class="text-xl font-semibold text-brand-jeruk">Syarat</h3>
                    <p class="mt-2 text-sm text-gray-700">Ketentuan akademik dan administratif minimal yang harus dipenuhi pelamar.</p>
                </div>
                <div class="bg-brand-cream p-4 rounded-lg shadow-sm">
                    <h3 class="text-xl font-semibold text-brand-jeruk">Proses Seleksi</h3>
                    <p class="mt-2 text-sm text-gray-700">Tahapan seleksi, penilaian, dan jadwal pengumuman bagi pendaftar.</p>
                </div>
                <div class="bg-white p-4 rounded-lg shadow-sm border">
                    <h3 class="text-xl font-semibold text-brand-jeruk">Hak Penerima</h3>
                    <p class="mt-2 text-sm text-gray-700">Fasilitas, tunjangan, dan dukungan akademik yang diberikan kepada penerima beasiswa.</p>
                </div>
                <div class="bg-white p-4 rounded-lg shadow-sm border">
                    <h3 class="text-xl font-semibold text-brand-jeruk">Kewajiban</h3>
                    <p class="mt-2 text-sm text-gray-700">Kewajiban pelaporan, kinerja akademik, dan ketentuan pengembalian bila melanggar perjanjian.</p>
                </div>
            </section>

            <!-- Detailed sections -->
            <section id="kebijakan-overview" class="space-y-8">
                <article class="bg-white rounded-lg shadow-md p-6 border">
                    <h2 class="text-2xl font-bold text-brand-jeruk">1. Syarat Pendaftaran</h2>
                    <ul class="mt-3 list-disc list-inside text-gray-700">
                        <li>Warga negara Indonesia atau memenuhi persyaratan khusus lembaga.</li>
                        <li>Terdaftar sebagai calon mahasiswa/peserta sesuai jalur penerimaan.</li>
                        <li>Memenuhi batas minimal prestasi akademik / dokumen pendukung.</li>
                    </ul>
                </article>

                <article class="bg-white rounded-lg shadow-md p-6 border">
                    <h2 class="text-2xl font-bold text-brand-jeruk">2. Proses Seleksi</h2>
                    <p class="mt-2 text-gray-700">Seleksi dilakukan berdasarkan dokumen, wawancara, dan/atau tes yang ditetapkan panitia. Keputusan panitia bersifat final.</p>
                    <ol class="mt-3 list-decimal list-inside text-gray-700">
                        <li>Seleksi administrasi</li>
                        <li>Wawancara / asesmen (jika diperlukan)</li>
                        <li>Pengumuman penerima</li>
                    </ol>
                </article>

                <article class="bg-white rounded-lg shadow-md p-6 border">
                    <h2 class="text-2xl font-bold text-brand-jeruk">3. Hak dan Kewajiban Penerima</h2>
                    <div class="grid gap-4 sm:grid-cols-2">
                        <div>
                            <h3 class="font-semibold text-gray-800">Hak</h3>
                            <ul class="mt-2 list-disc list-inside text-gray-700">
                                <li>Tunjangan sesuai program</li>
                                <li>Dukungan pembimbingan akademik</li>
                            </ul>
                        </div>
                        <div>
                            <h3 class="font-semibold text-gray-800">Kewajiban</h3>
                            <ul class="mt-2 list-disc list-inside text-gray-700">
                                <li>Melaporkan perkembangan akademik secara berkala</li>
                                <li>Mentaati peraturan beasiswa</li>
                            </ul>
                        </div>
                    </div>
                </article>

                <article class="bg-brand-jeruk-100 rounded-lg p-6">
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-8 items-center">
                        <div>
                            <h2 class="text-2xl font-bold text-brand-jeruk">4. Cara Mengajukan</h2>
                            <p class="mt-2 text-gray-800">Isi formulir pendaftaran dan unggah semua dokumen yang diminta melalui sistem pendaftaran online. Pastikan mengikuti tenggat waktu yang ditentukan.</p>
                            <a href="/daftar" class="inline-block mt-4 px-5 py-2 bg-brand-jeruk text-white rounded-md font-semibold shadow">Ajukan Sekarang</a>
                        </div>
                        <div class="flex justify-center md:justify-end">
                            <img src="https://images.unsplash.com/photo-1464983953574-0892a716854b?auto=format&fit=crop&w=400&q=80" alt="Formulir Beasiswa" class="rounded-xl shadow-lg border-4 border-brand-jeruk w-80 h-52 object-cover" />
                        </div>
                    </div>
                </article>
            </section>
        </main>
    </div>
</x-app-layout>
