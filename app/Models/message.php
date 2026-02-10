<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Message extends Model
{
    protected $fillable = [
        'name',
        'email',
        'phone',
        'subject',
        'message',
        'company',
        'kvkk_approved',
        'kvkk_approved_at',
        'ip_address',
    ];

    protected $casts = [
        'created_at' => 'datetime',
        'updated_at' => 'datetime',
        'kvkk_approved_at' => 'datetime',
        'kvkk_approved' => 'boolean',
    ];
}
