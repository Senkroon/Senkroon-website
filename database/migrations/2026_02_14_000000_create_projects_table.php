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
        Schema::create('projects', function (Blueprint $table) {
            $table->id();
            
            // Temel Bilgiler
            $table->string('title');
            $table->string('slug')->unique();
            $table->string('client_name')->nullable();
            $table->string('sector')->nullable();
            
            // Açıklamalar
            $table->text('short_description')->nullable();
            $table->longText('content')->nullable();
            
            // Tarihler
            $table->date('project_date')->nullable();
            $table->date('completion_date')->nullable();
            
            // Proje Detayları
            $table->string('status')->default('planlama'); // tamamlandı, devam ediyor, planlama, beklemede, iptal
            $table->string('location')->nullable();
            $table->integer('team_size')->nullable();
            $table->string('budget_range')->nullable();
            
            // Teknik Detaylar (JSON)
            $table->json('technologies_used')->nullable();
            $table->json('features')->nullable();
            
            // Proje Hikayesi
            $table->text('challenges')->nullable(); // Karşılaşılan zorluklar
            $table->text('solutions')->nullable(); // Sunulan çözümler
            $table->text('results')->nullable(); // Elde edilen sonuçlar
            
            // Müşteri Görüşü
            $table->text('testimonial')->nullable();
            $table->string('testimonial_author')->nullable();
            $table->string('testimonial_position')->nullable();
            
            // Görseller
            $table->string('cover_image')->nullable();
            $table->json('gallery_images')->nullable();
            $table->string('video_url')->nullable();
            
            // Durum ve Sıralama
            $table->boolean('is_featured')->default(false);
            $table->boolean('is_active')->default(true);
            $table->integer('order')->default(0);
            
            // SEO
            $table->string('meta_title')->nullable();
            $table->text('meta_description')->nullable();
            
            $table->timestamps();
            
            // İndeksler
            $table->index('slug');
            $table->index('sector');
            $table->index('status');
            $table->index('is_featured');
            $table->index('is_active');
            $table->index('order');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('projects');
    }
};
