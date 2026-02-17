<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class Project extends Model
{

    protected $fillable = [
        'title',
        'slug',
        'client_name',
        'sector',
        'short_description',
        'content',
        'project_date',
        'completion_date',
        'status',
        'location',
        'team_size',
        'budget_range',
        'technologies_used',
        'features',
        'challenges',
        'solutions',
        'results',
        'testimonial',
        'testimonial_author',
        'testimonial_position',
        'cover_image',
        'gallery_images',
        'video_url',
        'is_featured',
        'is_active',
        'meta_title',
        'meta_description',
        'order',
    ];

    protected $casts = [
        'gallery_images' => 'array',
        'technologies_used' => 'array',
        'features' => 'array',
        'project_date' => 'date',
        'completion_date' => 'date',
        'is_featured' => 'boolean',
        'is_active' => 'boolean',
    ];

    /**
     * Slug otomatik üretim
     */
    protected static function boot()
    {
        parent::boot();

        static::creating(function ($project) {
            if (empty($project->slug)) {
                $project->slug = Str::slug($project->title);
            }
        });

        static::updating(function ($project) {
            // Title değiştiyse slug'u güncelle
            if ($project->isDirty('title')) {
                $project->slug = Str::slug($project->title);
            }
        });
    }

    /**
     * Cover image URL accessor
     */
    public function getCoverImageUrlAttribute()
    {
        return $this->cover_image
            ? Storage::url($this->cover_image)
            : null;
    }

    /**
     * Gallery images URLs accessor
     */
    public function getGalleryImagesUrlsAttribute()
    {
        if (!$this->gallery_images || !is_array($this->gallery_images)) {
            return [];
        }

        return array_map(function ($image) {
            return Storage::url($image);
        }, $this->gallery_images);
    }

    /**
     * Route Model Binding için slug kullan
     */
    public function getRouteKeyName()
    {
        return 'slug';
    }

    /**
     * Scope: Sadece aktif projeleri getir
     */
    public function scopeActive($query)
    {
        return $query->where('is_active', true);
    }

    /**
     * Scope: Öne çıkan projeleri getir
     */
    public function scopeFeatured($query)
    {
        return $query->where('is_featured', true);
    }

    /**
     * Scope: Sıraya göre getir
     */
    public function scopeOrdered($query)
    {
        return $query->orderBy('order', 'asc')->orderBy('created_at', 'desc');
    }

    /**
     * Scope: Belirli bir sektöre ait projeleri getir
     */
    public function scopeBySector($query, $sector)
    {
        return $query->where('sector', $sector);
    }

    /**
     * Scope: Belirli bir duruma göre projeleri getir
     */
    public function scopeByStatus($query, $status)
    {
        return $query->where('status', $status);
    }

    /**
     * Proje süresi hesaplama (gün olarak)
     */
    public function getDurationInDaysAttribute()
    {
        if ($this->project_date && $this->completion_date) {
            return $this->project_date->diffInDays($this->completion_date);
        }
        return null;
    }

    /**
     * Proje durumu badge rengi
     */
    public function getStatusBadgeColorAttribute()
    {
        return match($this->status) {
            'tamamlandı' => 'success',
            'devam ediyor' => 'primary',
            'planlama' => 'warning',
            'beklemede' => 'secondary',
            'iptal' => 'danger',
            default => 'info',
        };
    }

    /**
     * Teknolojileri string olarak getir
     */
    public function getTechnologiesStringAttribute()
    {
        if (!$this->technologies_used || !is_array($this->technologies_used)) {
            return '';
        }
        return implode(', ', $this->technologies_used);
    }

    /**
     * Özellikleri string olarak getir
     */
    public function getFeaturesStringAttribute()
    {
        if (!$this->features || !is_array($this->features)) {
            return '';
        }
        return implode(', ', $this->features);
    }
}
