<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authe;
use Laravel\Sanctum\HasApiTokens;

class User extends Authe
{

    use HasApiTokens, HasFactory;

    protected $fillable = [
        "name",
        "email",
        "password"
    ];
    
}
