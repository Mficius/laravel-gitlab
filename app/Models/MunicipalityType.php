<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class MunicipalityType extends Model
{
    protected $table = 'municipality_types';

    use HasFactory, SoftDeletes;

    protected $fillable = ['label', 'description'];

    protected $dates = ['deleted_at'];
}
