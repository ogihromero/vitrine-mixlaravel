<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Shop extends Model
{
    use HasFactory;

    protected $fillable = [
        'shop_name',
        'shop_description',
        'shop_picture_path',
        'shop_banner_path',
        'shop_phone_number',
        'shop_email',
        'shop_opening_time',
        'shop_closing_time',
        'facebook_link',
        'instagram_link',
        'twitter_link',
        'youtube_link',
        'tiktok_link',
        'owner',
    ];

    protected function owner()
    {
        return $this->belongsTo(User::class);
    }

    protected function addresses()
    {
        return $this->hasOne(Address::class);
    }
}
