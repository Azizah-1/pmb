<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::table('camaba', function (Blueprint $table) {
            if (!Schema::hasColumn('camaba', 'program')) {
                $table->string('program', 100)->nullable()->after('no_pendaftaran');
            }
        });
    }

    public function down(): void
    {
        Schema::table('camaba', function (Blueprint $table) {
            if (Schema::hasColumn('camaba', 'program')) {
                $table->dropColumn('program');
            }
        });
    }
};
