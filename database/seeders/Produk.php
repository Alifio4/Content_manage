<?php

namespace Database\Seeders;

use App\Models\Produk;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class keranjang extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $Produk = New Produk;
        $Produk->nama = "Ayam Geprek";
        $Produk->harga = "7000";
        $Produk->deskripsi = "sedap";
        $Produk->save();

        $Produk = New Produk;
        $Produk->nama = "Es Teh";
        $Produk->harga = "2000";
        $Produk->deskripsi = "Segar";
        $Produk->save();
    }
}