<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Produk extends Model
{
    use HasFactory;

    protected $table = 'produk';

    protected $fillable = [
        'id',
        'nama',
        'deskripsi',
        'harga',
        'gambar1',
        'gambar2',
        'gambar3',
        'stok',
        'kategori',
    ];

    // Jika Anda tidak ingin menggunakan kolom timestamps (created_at dan updated_at)
    public $timestamps = false;
}
