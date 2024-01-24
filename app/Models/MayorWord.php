<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class MayorWord extends Model
{
    protected $table = 'mayor_messages';

    use HasFactory, SoftDeletes;

    protected $fillable = ['mayor_name', 'mayor_image', 'content'];

    protected $dates = ['deleted_at'];
}
