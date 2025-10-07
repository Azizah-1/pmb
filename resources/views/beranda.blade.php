<x-app-layout>
    <div class="px-8 py-10 bg-gray-50 min-h-screen" style="background-color: navajowhite">
        {{-- <h1 class="text-4xl font-extrabold mb-8 text-gray-900">Beranda</h1>
        <div class="flex flex-col md:flex-row justify-between items-center gap-10">
            <div class="bg-gradient-to-r from-orange-500 to-orange-400 text-white p-10 rounded-xl shadow-lg flex flex-col gap-6 md:w-1/2">
                <p class="text-2xl font-extrabold leading-tight">Jadilah Bagian dari Masa Depan Energi!</p> --}}
                <h1 class="text-lg font-bold mb-4" style="margin: 10px 0px 0px 60px;">Beranda</h1>
                <div class="p-6" style="display: flex; flex-direction: row; justify-content: space-between; align-items: center; gap: 10px; padding: 20px 60px 10px 60px;">
                <div class="teks" style="background: #ecbe75; padding: 20px; color: black; width: 50%; height: 400px; margin-top: 20px; gap: 20px;">
                <p class="text-xl font-semibold mt-6">Jadilah Bagian dari Masa Depan Energi!</p>
                <p class="text-lg leading-relaxed">Institut Teknologi Peroleum Balongan membuka kesempatan bagi calon pemimpin dan inovator di sektor energi.</p>
                <p class="text-xl font-semibold mt-6">Penerimaan Mahasiswa Baru</p>
                <p class="text-lg leading-relaxed">Gelombang I: 25 Agustus - 25 September 2025</p>
                <p class="text-lg leading-relaxed">Daftar sekarang dan wujudkan karirmu di dunia teknologi dan bisnis perminyakan!</p>
                <a href="{{ route('daftar') }}" style="background-color: white; color: black; padding: 10px 20px; border-radius: 10px; font-weight: bold; display: inline-block; margin-top: 20px; text-align: center;">
                    Daftar Sekarang
                </a>
            </div>
            {{-- <img src="{{ asset('news.jpg') }}" alt="pict" class="w-full md:w-1/2 h-auto rounded-xl shadow-xl" /> --}}
            
          <img src="{{ asset('news1.jpg') }}" alt="pict" style="width: 800px; height: 500px; margin-top: 20px; margin-left: 0px;">
        </div>
    </div>
</x-app-layout>
