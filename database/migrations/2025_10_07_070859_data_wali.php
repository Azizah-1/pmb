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
        Schema::create('data_wali', function (Blueprint $table) {
            // Foreign key ke users table
            $table->foreignId('id')
                  ->constrained('users')
                  ->onDelete('cascade')
                  ->primary();

            // Data ibu
            $table->string('nama_wali', 100);
            $table->string('pekerjaan', 50);
            $table->string('agama', 25);
            $table->text('alamat');
            $table->string('kecamatan', 50);
            $table->string('desa', 50);
            $table->string('nomor_rumah', 100);
            $table->string('no_telp', 30);

            $table->timestamps();

            // Indexes
            $table->index('nama_wali');
            $table->index('pekerjaan');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('data_wali', function (Blueprint $table) {
            $table->dropForeign(['id']);
        });
        Schema::dropIfExists('data_wali');
    }
};
