<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Municipality extends Model
{
    use HasFactory, SoftDeletes;

    protected $table = 'municipalities';

    protected $fillable = ['label', 'file', 'content', 'additional_info', 'municipality_type_id'];

    protected $casts = [
        'additional_info' => 'array',
    ];

    protected $dates = ['deleted_at'];
}
