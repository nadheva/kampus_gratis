<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Alumni extends Model
{
    use HasFactory;
    protected $table = 'alumni';
    protected $guarded = ['id'];
    // protected $fillable = [
    //     'nama',
    //     'foto',
    //     'program_studi',
    //     'lulusan',
    //     'program',
    //     'deskripsi'
    // ];
}
