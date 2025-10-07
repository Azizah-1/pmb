<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Camaba;
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
    }
}