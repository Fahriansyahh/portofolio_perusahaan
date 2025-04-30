<?php

namespace App\Models;

use App\Models\Service;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Factories\HasFactory;


class Testimonial extends Model
{
    /** @use HasFactory<\Database\Factories\TestimonialFactory> */
    use HasFactory;

    protected $fillable = [
        'name',
        'position',
        'company',
        'message',
        'photo',
        'service_id',
    ];




    protected static function booted()
    {
        static::updating(function ($testimonial) {
            if ($testimonial->isDirty('photo')) {
                Storage::disk('public')->delete($testimonial->getOriginal('photo'));
            }
        });

        static::deleting(function ($testimonial) {
            if ($testimonial->photo) {
                Storage::disk('public')->delete($testimonial->photo);
            }
        });
    }
    public function service()
    {
        return $this->belongsTo(Service::class);
    }
}
