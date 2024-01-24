<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Team extends Model
{
    protected $table = 'employees';

    use HasFactory, SoftDeletes;

    protected $fillable = [
        'last_name',
        'first_name',
        'employee_number',
        'department',
        'gender',
        'phone',
        'email',
        'start_date',
        'photo',
    ];

    protected $dates = ['deleted_at'];
}
