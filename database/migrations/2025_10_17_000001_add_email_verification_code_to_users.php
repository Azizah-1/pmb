<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::table('users', function (Blueprint $table) {
            if (!Schema::hasColumn('users', 'email_verification_code')) {
                $table->string('email_verification_code', 100)->nullable()->after('remember_token');
            }
            if (!Schema::hasColumn('users', 'email_verification_expires_at')) {
                $table->timestamp('email_verification_expires_at')->nullable()->after('email_verification_code');
            }
        });
    }

    public function down(): void
    {
        Schema::table('users', function (Blueprint $table) {
            if (Schema::hasColumn('users', 'email_verification_expires_at')) {
                $table->dropColumn('email_verification_expires_at');
            }
            if (Schema::hasColumn('users', 'email_verification_code')) {
                $table->dropColumn('email_verification_code');
            }
        });
    }
};
