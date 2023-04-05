<?php

namespace App\Http\Controllers;

use App\Models\keranjang;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class KeranjangController extends Controller
{
    public function store(Request $request, $id)
    {
        // @foreach ($kategori as $item)
        // $detect = keranjang::all();
        
        // foreach ($detect as $item) {
            
        //     if ($item->produk_id == $id) {
        //         $keranjang = keranjang::where('produk_id', $id)->get();
        //         $keranjang->qty = $keranjang->qty + 1;
        //         return redirect('pembelian');
        //       }
        //     else {
        //         $keranjang = new keranjang;
        //         $keranjang->produk_id = $id;
        //         $keranjang->save();
        //         return redirect('pembelian');
        //     }
        // }
        // return redirect('pembelian');
        // $detect = DB::table('keranjangs')->get();
        // foreach ($detect as $item) {
        //     if ($item->produk_id == $id) {
        //         $qty = keranjang::findorfail($item->id);
        //         // dd ($qty);
        //         DB::table('keranjangs')->where('produk_id',$id)->update([
        //             'qty'=> $qty->qty + 1,
        //         ]);
        //         return redirect('pembelian');
        //       }
        //     else {
                $keranjang = new keranjang;
                $keranjang->produk_id = $id;
                $keranjang->save();
                return redirect('pembelian');
        //     }
        // }
        
    }
}
