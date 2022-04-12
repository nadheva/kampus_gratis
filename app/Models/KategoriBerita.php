<?php

namespace App\Models;

use App\Models\Berita;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class KategoriBerita extends Model
{
    use HasFactory;
    protected $guarded = ['id'];

    public function berita()
    {
        return $this->hasMany(Berita::class, 'category_id', 'id');
    }
}
