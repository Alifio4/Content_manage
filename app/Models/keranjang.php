<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class keranjang extends Model
{
    use HasFactory;
    protected $table = 'keranjangs';
    protected $primarykey = 'id';
    protected $fillable = [
        "nama",
        "harga",
        "deskripsi",
        "qty",
        "produk_id"
    ];

    public function keranjang(){
        return $this->belongsTo(Produk::class, 'produk_id');
    }
}
