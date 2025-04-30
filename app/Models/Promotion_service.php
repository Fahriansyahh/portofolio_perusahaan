<?php

namespace App\Models;

use App\Models\Service;
use App\Models\Promotion;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Promotion_service extends Model
{
    /** @use HasFactory<\Database\Factories\PromotionServiceFactory> */
    use HasFactory;

    protected $fillable = ['promotion_id', 'service_id'];

    public function promotion()
    {
        return $this->belongsTo(Promotion::class);
    }

    public function service()
    {
        return $this->belongsTo(Service::class);
    }
}
