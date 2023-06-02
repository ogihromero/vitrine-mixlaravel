<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;
    protected $fillable = [
        'user_id',
        'service_id',
        'booking_time',
        'total_price',
        'status',
        'note'
    ];

    protected function user()
    {
        return $this->belongsTo(User::class);
    }

    protected function service()
    {
        return $this->belongsTo(Services::class);
    }
}
