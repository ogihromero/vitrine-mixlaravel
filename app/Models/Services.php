<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Services extends Model
{
    use HasFactory;

    protected $fillable = [
        'service_name',
        'service_description',
        'service_duration',
        'service_price',
        'shop_id',
    ];

    protected function shop()
    {
        return $this->belongsTo(Shop::class);
    }
}
