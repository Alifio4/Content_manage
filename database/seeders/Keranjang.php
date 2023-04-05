<?php

namespace Database\Seeders;

use App\Models\keranjang;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class keranjangs extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $keranjang = New keranjang;
        $keranjang->produk_id = "1";
        $keranjang->qty= "2";
        $keranjang->save();

        $keranjang = New keranjang;
        $keranjang->produk_id = "2";
        $keranjang->qty = "2";
        $keranjang->save();
    }
}