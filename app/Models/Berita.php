<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Berita extends Model
{
    use HasFactory;
    protected $table = 'berita';
    // protected $fillable = [
    //     'judul',
    //     'isi',
    //     'penulis',
    //     'gambar',
    //     'kategori',
    //     'status'
    // ];

    protected $guarded = ['id'];
    protected $primaryKey = 'id';
}
