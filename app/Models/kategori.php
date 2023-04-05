<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class kategori extends Model
{
    use HasFactory;

    protected $tables = "grades";
    protected $primarykey = "id";
    protected $fillable = [
        "nama"
    ];

    public function kategori(){
        return $this->hasMany(Produk::class, 'kategori_id', 'id');
    }
}
