<?php

namespace App\Http\Controllers;

use App\Models\Produk;
use App\Models\kategori;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ProdukController extends Controller
{
    /**
 * Display a listing of the resource.
 */
public function index()
{
    $data["produk"] = Produk::all(); 
    $data2["kategori"] = kategori::all();
 
    return view("index",$data,$data2);
}

public function index2()
{
    $data["produk"] = Produk::all(); 
  
    return view("index2",$data);
}

/**
 * Show the form for creating a new resource.
 */
public function create()
{
    $data["produk"] = Produk::all(); 
    $data2["kategori"] = kategori::all();
    
  
    return view("produk/create",$data,$data2);
}

/**
 * Store a newly created resource in storage.
 */
public function store(Request $request)
{
    $request->validate([
        'nama' => ['required','string', 'max:100', 'unique:'.Produk::class],
        'harga' => ['required','integer'],
        'kategori_id' => ['required', 'integer']
    ]);
    $produk = new Produk;
    $produk->nama = $request->nama;
    $produk->harga = $request->harga;
    $produk->kategori_id = $request->kategori_id;
    $produk->save();
    
    return redirect('produk');
}

/**
 * Display the specified resource.
 */
public function show(string $id)
{
    //
}

/**
 * Show the form for editing the specified resource.
 */
public function edit($id)
{
    $produk = Produk::find($id);
    $data2["kategori"] = kategori::all();
    return view('produk.edit',$data2, compact('produk'));
}

/**
 * Update the specified resource in storage.
 */
public function update(Request $request, $id)
{
    $request->validate([
        'nama' => ['required','string', 'max:100'],
        'harga' => ['required','integer'],
        'kategori_id' => ['required', 'integer']
    ]);
    $produk = Produk::find($id);
    $produk->nama = $request->nama;
    $produk->harga = $request->harga;
    $produk->kategori_id = $request->kategori_id;
    $produk->save();
    return redirect('produk');
}

/**
 * Remove the specified resource from storage.
 */
public function destroy($id)
{
    $produk = Produk::find($id);
    $produk->delete();
    return redirect('produk');
}
}
