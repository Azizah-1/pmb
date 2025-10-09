<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::disableForeignKeyConstraints();

        Schema::create('data_sekolah_camaba', function (Blueprint $table) {
            // Foreign key ke users table
            $table->foreignId('id')
                  ->constrained('users')
                  ->onDelete('cascade')
                  ->primary();

            // Data sekolah
            $table->string('nama_sekolah', 100);
            $table->string('jurusan', 50);
            $table->string('no_ijazah', 50)->unique();
            $table->text('alamat_sekolah');
            $table->string('nomor_telepon', 30);

            $table->timestamps();

            // Indexes
            $table->index('nama_sekolah');
            $table->index('jurusan');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('data_sekolah_camaba', function (Blueprint $table) {
            $table->dropForeign(['id']);
        });
        Schema::dropIfExists('data_sekolah_camaba');
    }
};
