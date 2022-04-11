<?php

namespace App\Models;

use App\Models\KategoriBerita;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Berita extends Model
{
    use HasFactory;
    protected $guarded = ['id'];
    protected $primaryKey = 'id';

    public function category()
    {
        return $this->belongsTo(KategoriBerita::class);
    }
}
