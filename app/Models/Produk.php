<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Produk extends Model
{
    use HasFactory;

    protected $table = 'produk';
    protected $fillable = [
        'nama', 'gambar', 'deskripsi', 'harga', 'stok'
    ];

    public function kategori()
    {
        return $this->belongsTo(Kategori::class);
    }
    public function gambar()
    {
        return $this->belongsTo(gambar::class);
    }
}
