<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Banner extends Model
{
    use HasFactory;
    protected $table = 'banner';
    // protected $fillable = [
    //     'heading',
    //     'deskripsi',
    //     'gambar',
    // ];

    protected $guarded = ['id'];
    protected $primaryKey = 'id';
}
