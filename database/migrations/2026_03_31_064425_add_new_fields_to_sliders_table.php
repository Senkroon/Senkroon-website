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
        Schema::table('sliders', function (Blueprint $table) {
            $table->json('features')->nullable()->after('description');
            $table->string('secondary_button_text')->nullable()->after('button_link');
            $table->string('secondary_button_link')->nullable()->after('secondary_button_text');
            $table->string('bottom_text')->nullable()->after('secondary_button_link');
            $table->string('front_image')->nullable()->after('background_image');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('sliders', function (Blueprint $table) {
            $table->dropColumn([
                'features',
                'secondary_button_text',
                'secondary_button_link',
                'bottom_text',
                'front_image'
            ]);
        });
    }
};
