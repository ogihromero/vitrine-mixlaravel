<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Address extends Model
{
    use HasFactory;
    protected $fillable = [
        'user_id',
        'address',
        'city',
        'state',
        'country',
        'zip_code',
        'primary_address',
    ];

    protected function user()
    {
        return $this->belongsTo(User::class);
    }

    protected function shop()
    {
        return $this->belongsTo(Shop::class);
    }
}
