<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;

class Slider extends Model
{
    protected $fillable = [
        'title',
        'subtitle',
        'description',
        'features',
        'background_image',
        'front_image',
        'button_text',
        'button_link',
        'secondary_button_text',
        'secondary_button_link',
        'bottom_text',
        'order',
        'is_active',
        'animation_delay',
        'overlay_class',
        'text_position',
        'text_color',
        "button_color"
    ];

    protected $casts = [
        'is_active' => 'boolean',
        'order' => 'integer',
        'animation_delay' => 'integer',
        'features' => 'array'
    ];

    // Aktif slider'ları sıralı şekilde getir
    public static function getActiveSliders()
    {
        return self::where('is_active', true)
                  ->orderBy('order')
                  ->get();
    }

    // Background image URL'i döndür
    public function getBackgroundImageUrlAttribute()
    {
        if (filter_var($this->background_image, FILTER_VALIDATE_URL)) {
            // Eğer tam URL ise direkt döndür
            return $this->background_image;
        }

        // Storage'dan dosya yolu döndür
        return $this->background_image
            ? Storage::url($this->background_image)
            : asset('img/slides/slide-bg-default.jpg'); // Varsayılan resim
    }

    // Buton var mı kontrolü
    public function hasButton()
    {
        return !empty($this->button_text) && !empty($this->button_link);
    }

    // Scope: Sadece aktif slider'lar
    public function scopeActive($query)
    {
        return $query->where('is_active', true);
    }

    // Scope: Sıralı
    public function scopeOrdered($query)
    {
        return $query->orderBy('order');
    }
}
