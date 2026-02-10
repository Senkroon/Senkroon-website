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
        Schema::table('messages', function (Blueprint $table) {
            $table->boolean('kvkk_approved')->default(false)->after('is_read');
            $table->dateTime('kvkk_approved_at')->nullable()->after('kvkk_approved');
            $table->string('ip_address')->nullable()->after('kvkk_approved_at');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('messages', function (Blueprint $table) {
            $table->dropColumn(['kvkk_approved', 'kvkk_approved_at', 'ip_address']);
        });
    }
};
