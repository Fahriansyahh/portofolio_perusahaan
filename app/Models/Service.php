<?php

namespace App\Models;

use App\Models\Promotion_service;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Service extends Model
{
    /** @use HasFactory<\Database\Factories\ServiceFactory> */
    use HasFactory;
    protected $fillable = [
        'title',
        'description',
        'price_range',
        'estimated_time',
        'image',
    ];
    protected static function booted()
    {
        static::deleting(function ($service) {
            // Hapus relasi di pivot table
            $service->promotions()->detach(); // Ini akan hapus entri di promotion_services
        });
    }

    public function promotions()
    {
        return $this->belongsToMany(Promotion::class, 'promotion_services');
    }
}
