<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{

    public function up(): void
    {
        Schema::create('camaba', function (Blueprint $table) {
            // Foreign key ke users table (dari migration sebelumnya)
            $table->foreignId('id')
                  ->constrained('users')  // Reference ke users table
                  ->onDelete('cascade');  // Hapus camaba kalau user dihapus
            
            // Data pribadi camaba
            $table->integer('no_pendaftaran')->unique();
            $table->string('nama_lengkap', 100);
            $table->string('tempat_lahir', 100);
            $table->date('tanggal_lahir');
            $table->enum('jenis_kelamin', ['L', 'P']);
            $table->string('agama', 25);
            $table->text('alamat');
            $table->string('kelurahan', 50);
            $table->string('kecamatan', 50);
            $table->string('kabupaten_kota', 50);
            $table->string('provinsi', 50);
            $table->string('nomor_rumah', 100);
            $table->string('nomor_telp_hp', 30);
            
            // Primary key adalah user_id (sekaligus foreign key)
            // $table->primary('user_id');
            
            $table->timestamps();
            
            // Indexes untuk performa
            $table->index('no_pendaftaran');
            $table->index('nama_lengkap');
            $table->index('nomor_telp_hp');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('camaba', function (Blueprint $table) {
            $table->dropForeign(['id']);
        });
        Schema::dropIfExists('camaba');
    }
};