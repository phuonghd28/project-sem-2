<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class User extends Model
{
    use SoftDeletes;
    use HasFactory;
    protected $fillable= [
        'firstname',
        'lastname',
        'email',
        'phone',
        'address',
        'username',
        'password'
    ];
}
