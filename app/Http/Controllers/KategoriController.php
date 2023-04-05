<?php

namespace App\Http\Controllers;

use App\Models\Produk;
use App\Models\kategori;
use Illuminate\Http\Request;

class KategoriController extends Controller
{
    public function index()
    {
        $data["produk"] = Produk::all(); 
        $data2["kategori"] = kategori::all();
        return view("index3",$data,$data2);
    }

    public function create()
{
    $data["produk"] = Produk::all(); 
    $data2["kategori"] = kategori::all();
    
  
    return view("kategori/create",$data,$data2);
}


    public function store(Request $request)
    {
        $kategori = new kategori;
        $kategori->nama = $request->nama;
        $kategori->save();
        return redirect('kategori');
    }

    public function edit($id)
    {
        $kategori = kategori::find($id);
        return view('kategori.edit',compact('kategori'));
    }

    public function update(Request $request, $id)
    {
        $kategori = kategori::find($id);
        $kategori->nama = $request->nama;
        $kategori->save();
        return redirect('kategori');
    }

    public function destroy($id)
    {
        $kategori = kategori::find($id);
        $kategori->delete();
        return redirect('kategori');
    }
}

