<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserDB2 extends Model
{
    use HasFactory;
    protected $connection = 'mysql2';
    protected $table = "users";
    protected $fillable = [
        'name',
        'email',
        'password',
    ];
}
