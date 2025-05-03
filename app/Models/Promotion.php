<?php

namespace App\Models;

use App\Models\Service;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Promotion extends Model
{
    /** @use HasFactory<\Database\Factories\PromotionFactory> */
    use HasFactory;
    protected $fillable = [
        'title',
        'description',
        'discount_percent',
        'price_after_discount',
        'start_date',
        'end_date',
        'image',
    ];
    protected static function booted()
    {
        static::updating(function ($promo) {
            if ($promo->isDirty('image')) {
                $oldImage = $promo->getOriginal('image');

                if ($oldImage) {
                    Storage::disk('public')->delete($oldImage);
                }
            }
        });

        static::deleting(function ($promo) {
            if ($promo->image) {
                Storage::disk('public')->delete($promo->image);
            }
        });
    }
    // Promotion.php
    public function services()
    {
        return $this->belongsToMany(Service::class, 'promotion_services');
    }
}
