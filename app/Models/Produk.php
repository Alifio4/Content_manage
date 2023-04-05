<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Produk extends Model
{
    use HasFactory;

    protected $table = 'produks';
    protected $primarykey = 'id';
    protected $fillable = [
        "nama",
        "harga",
        "deskripsi"
    ];

    public function kategori(){
        return $this->belongsTo(kategori::class, 'kategori_id');
    }
    public function keranjang(){
        return $this->hasMany(keranjang::class, 'produk_id', 'id');
    }
}
