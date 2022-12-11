<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Orders extends Model
{
    protected $fillable = [
        'user_id',
        'services_id',
        'history',
        'time',
        'note',
        'phone',
    ];

    use HasFactory;
}
