<x-app-layout>
    <div class="min-h-screen px-6 md:px-8 py-10 bg-gray-50">
        <div class="max-w-3xl mx-auto bg-white rounded-2xl shadow-md p-8">
            <h1 class="text-2xl font-bold mb-4">Pendaftaran Calon Mahasiswa</h1>

            @if (session('status'))
                <div class="mb-4 text-sm text-green-700 bg-green-100 p-3 rounded">
                    {{ session('status') }}
                </div>
            @endif

            @if ($errors->any())
                <div class="mb-4 p-3 bg-red-50 text-red-700 rounded">
                    <ul class="list-disc pl-5">
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            <form method="POST" action="{{ route('register') }}" class="space-y-6">
                @csrf

                <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                    <div>
                        <label class="block text-sm font-medium text-gray-700">Nama Lengkap</label>
                        <input type="text" name="name" value="{{ old('name') }}" required class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:ring-blue-500 focus:border-blue-500" />
                    </div>

                    <div>
                        <label class="block text-sm font-medium text-gray-700">Email</label>
                        <input type="email" name="email" value="{{ old('email') }}" required class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:ring-blue-500 focus:border-blue-500" />
                    </div>
                </div>

                <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                    <div>
                        <label class="block text-sm font-medium text-gray-700">Nomor Telepon</label>
                        <input type="tel" name="phone" value="{{ old('phone') }}" placeholder="0812xxxx" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:ring-blue-500 focus:border-blue-500" />
                    </div>

                    <div>
                        <label class="block text-sm font-medium text-gray-700">Tanggal Lahir</label>
                        <input type="date" name="birth_date" value="{{ old('birth_date') }}" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:ring-blue-500 focus:border-blue-500" />
                    </div>
                </div>

                <div>
                    <label class="block text-sm font-medium text-gray-700">Asal Sekolah / Institusi</label>
                    <input type="text" name="school" value="{{ old('school') }}" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:ring-blue-500 focus:border-blue-500" />
                </div>

                <div>
                    <label class="block text-sm font-medium text-gray-700">Program Studi Pilihan</label>
                    <select name="program" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:ring-blue-500 focus:border-blue-500">
                        <option value="">-- Pilih Program --</option>
                        <option value="rkk-s1" {{ old('program')=='rkk-s1' ? 'selected' : '' }}>RKK S1</option>
                        <option value="teknik-lingkungan-s1" {{ old('program')=='teknik-lingkungan-s1' ? 'selected' : '' }}>Teknik Lingkungan S1</option>
                        <option value="teknik-perminyakan-s1" {{ old('program')=='teknik-perminyakan-s1' ? 'selected' : '' }}>Teknik Perminyakan S1</option>
                        <option value="fire-safety-d3" {{ old('program')=='fire-safety-d3' ? 'selected' : '' }}>Fire Safety D3</option>
                        <option value="tekim-d3" {{ old('program')=='tekim-d3' ? 'selected' : '' }}>Tekim D3</option>
                        <option value="pe-d3" {{ old('program')=='pe-d3' ? 'selected' : '' }}>PE D3</option>
                    </select>
                </div>

                <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                    <div>
                        <label class="block text-sm font-medium text-gray-700">Kata Sandi</label>
                        <input type="password" name="password" required class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:ring-blue-500 focus:border-blue-500" />
                    </div>

                    <div>
                        <label class="block text-sm font-medium text-gray-700">Konfirmasi Kata Sandi</label>
                        <input type="password" name="password_confirmation" required class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:ring-blue-500 focus:border-blue-500" />
                    </div>
                </div>

                <div class="flex items-start">
                    <div class="flex items-center h-5">
                        <input id="agree" name="agree" type="checkbox" class="focus:ring-blue-500 h-4 w-4 text-blue-600 border-gray-300 rounded" />
                    </div>
                    <div class="ml-3 text-sm">
                        <label for="agree" class="font-medium text-gray-700">Saya menyetujui syarat dan ketentuan</label>
                    </div>
                </div>

                <div class="pt-4">
                    <button type="submit" class="w-full inline-flex justify-center py-2 px-4 border border-transparent shadow-sm text-sm font-medium rounded-md text-white bg-blue-600 hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500">Daftar Sekarang</button>
                </div>
            </form>
        </div>
    </div>
</x-app-layout>
