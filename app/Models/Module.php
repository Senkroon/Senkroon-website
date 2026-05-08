<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class Module extends Model
{
    protected $fillable = [
        'title',
        'slug',
        'short_description',
        'content',
        'category',
        'parent_id',
        'icon',
        'cover_image',
        'meta_title',
        'meta_description',
        'is_active',
        'order',
        'extra_description'
    ];

    /**
     * Slug otomatik üretim
     */
    protected static function boot()
    {
        parent::boot();

        static::creating(function ($module) {
            if (empty($module->slug)) {
                $module->slug = Str::slug($module->title);
            }
        });
    }


    public function getCoverImageUrlAttribute()
    {
        if (!$this->cover_image) {
            return null;
        }

        if (Str::startsWith($this->cover_image, ['http://', 'https://'])) {
            return $this->cover_image;
        }

        return Storage::url($this->cover_image);
    }

    /**
     * Route Model Binding için
     */
    public function getRouteKeyName()
    {
        return 'slug';
    }

    /**
     * Üst modül ilişkisi
     */
    public function parent()
    {
        return $this->belongsTo(Module::class, 'parent_id');
    }

    /**
     * Alt modüller ilişkisi
     */
    public function children()
    {
        return $this->hasMany(Module::class, 'parent_id')
                    ->where('is_active', true)
                    ->orderBy('order', 'asc');
    }

    /**
     * Tüm alt modüller (pasif olanları da dahil)
     */
    public function allChildren()
    {
        return $this->hasMany(Module::class, 'parent_id')->orderBy('order', 'asc');
    }

    /**
     * Ana modül mü kontrolü
     */
    public function isParent()
    {
        return is_null($this->parent_id);
    }

    /**
     * Alt modül mü kontrolü
     */
    public function isChild()
    {
        return !is_null($this->parent_id);
    }
}
