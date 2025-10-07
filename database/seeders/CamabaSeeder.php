<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Camaba;
use App\Models\DataSekolahCamaba;
use App\Models\DataAyah;
use App\Models\DataIbu;
use Illuminate\Support\Facades\Hash;

class CamabaSeeder extends Seeder
{
    public function run(): void
    {
        // Data 1
        $user1 = User::firstOrCreate([
            'email' => 'ahmad.rizki@email.com',
        ], [
            'name' => 'Ahmad Rizki',
            'password' => Hash::make('password123'),
            'email_verified_at' => now(),
        ]);

        Camaba::firstOrCreate([
            'id' => $user1->id,
        ], [
            'no_pendaftaran' => 1001,
            'nama_lengkap' => 'Ahmad Rizki',
            'tempat_lahir' => 'Jakarta',
            'tanggal_lahir' => '2000-05-15',
            'jenis_kelamin' => 'L',
            'agama' => 'Islam',
            'alamat' => 'Jl. Merdeka No. 123',
            'kelurahan' => 'Menteng',
            'kecamatan' => 'Menteng',
            'kabupaten_kota' => 'Jakarta Pusat',
            'provinsi' => 'DKI Jakarta',
            'nomor_rumah' => '123',
            'nomor_telp_hp' => '081234567890',
        ]);

        DataSekolahCamaba::firstOrCreate([
            'id' => $user1->id,
        ], [
            'nama_sekolah' => 'SMA Negeri 1 Jakarta',
            'jurusan' => 'IPA',
            'no_ijazah' => 'DN-123456789',
            'alamat_sekolah' => 'Jl. Sudirman No. 1, Jakarta Pusat',
            'nomor_telepon' => '021-1234567',
        ]);

        DataAyah::firstOrCreate([
            'id' => $user1->id,
        ], [
            'nama_ayah' => 'Budi Santoso',
            'pekerjaan' => 'Pegawai Negeri',
            'agama' => 'Islam',
            'alamat' => 'Jl. Merdeka No. 123',
            'kecamatan' => 'Menteng',
            'desa' => 'Menteng',
            'nomor_rumah' => '123',
            'no_telp' => '081234567891',
        ]);

        DataIbu::firstOrCreate([
            'id' => $user1->id,
        ], [
            'nama_ibu' => 'Siti Aminah',
            'pekerjaan' => 'Ibu Rumah Tangga',
            'agama' => 'Islam',
            'alamat' => 'Jl. Merdeka No. 123',
            'kecamatan' => 'Menteng',
            'desa' => 'Menteng',
            'nomor_rumah' => '123',
            'no_telp' => '081234567892',
        ]);

        // Data 2
        $user2 = User::firstOrCreate([
            'email' => 'siti.nurhaliza@email.com',
        ], [
            'name' => 'Siti Nurhaliza',
            'password' => Hash::make('password123'),
            'email_verified_at' => now(),
        ]);

        Camaba::firstOrCreate([
            'id' => $user2->id,
        ], [
            'no_pendaftaran' => 1002,
            'nama_lengkap' => 'Siti Nurhaliza',
            'tempat_lahir' => 'Bandung',
            'tanggal_lahir' => '2001-08-20',
            'jenis_kelamin' => 'P',
            'agama' => 'Islam',
            'alamat' => 'Jl. Asia Afrika No. 456',
            'kelurahan' => 'Braga',
            'kecamatan' => 'Sumur Bandung',
            'kabupaten_kota' => 'Bandung',
            'provinsi' => 'Jawa Barat',
            'nomor_rumah' => '456',
            'nomor_telp_hp' => '081298765432',
        ]);

        DataSekolahCamaba::firstOrCreate([
            'id' => $user2->id,
        ], [
            'nama_sekolah' => 'SMA Negeri 2 Bandung',
            'jurusan' => 'IPS',
            'no_ijazah' => 'DN-987654321',
            'alamat_sekolah' => 'Jl. Asia Afrika No. 2, Bandung',
            'nomor_telepon' => '022-7654321',
        ]);

        DataAyah::firstOrCreate([
            'id' => $user2->id,
        ], [
            'nama_ayah' => 'Joko Widodo',
            'pekerjaan' => 'Wiraswasta',
            'agama' => 'Islam',
            'alamat' => 'Jl. Asia Afrika No. 456',
            'kecamatan' => 'Sumur Bandung',
            'desa' => 'Braga',
            'nomor_rumah' => '456',
            'no_telp' => '081298765433',
        ]);

        DataIbu::firstOrCreate([
            'id' => $user2->id,
        ], [
            'nama_ibu' => 'Ani Susanti',
            'pekerjaan' => 'Guru',
            'agama' => 'Islam',
            'alamat' => 'Jl. Asia Afrika No. 456',
            'kecamatan' => 'Sumur Bandung',
            'desa' => 'Braga',
            'nomor_rumah' => '456',
            'no_telp' => '081298765434',
        ]);
    }
}