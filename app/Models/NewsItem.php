<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class NewsItem extends Model
{
    protected $table = 'news';

    use HasFactory, SoftDeletes;

    protected $fillable = ['label', 'event_date', 'content', 'main_image', 'images', 'video'];

    protected $casts = [
        'images' => 'array',
    ];

    protected $dates = ['deleted_at'];
}
