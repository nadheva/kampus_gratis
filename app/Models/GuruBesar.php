<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class GuruBesar extends Model
{
    use HasFactory;
    protected $table = 'gurubesar';
    protected $fillable = [
        'nama',
        'foto',
        'deskripsi',
        'lulusan',
        'pekerjaan'
    ];

    
    protected $primaryKey = 'id';
}
