<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    use HasFactory,HasApiTokens;
    protected $fillable =[
        'name',
        'username',
        'email',
        'phone',
        'password',
        'confirm_password'
    ];
}
