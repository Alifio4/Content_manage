@extends('app')

@section('content')
<div id="form" style="margin-top: 10px">
    <form action="{{ route('produk.update', $produk->id) }}" method="post" enctype="multipart/form-data">
        {{ csrf_field() }}
        @method('PUT')
        <input type="hidden" name="id" value="{{ $produk->id }}"> <br/>
        <div class="mb-3">
            <label for="nama" class="form-label input-runded"> Nama Produk </label>
            <input type="text" class="form-control Background" name="nama" value= "{{ $produk->nama }}">
            @error('nama')
            <div id="namaHelp" class="form-text">{{ $message }}</div>
            @enderror
        </div>
        <div class="mb-3">
            <label for="harga" class="form-label input-runded"> Harga</label>
            <input type="text" class="form-control Background" name="harga" value= "{{ $produk->harga }}">
            @error('harga')
            <div id="hargaHelp" class="form-text">{{ $message }}</div>
            @enderror
        </div>
        <select class="form-select" aria-label="Default select example" name="kategori_id">
            <option selected>Pilih Kategori Produk</option>
            @foreach ($kategori as $item)
            <option name="kategori_id" value="{{ $item->id }}">{{ $item->nama }}</option>
            @endforeach
            @error('kategori_id')
            <div id="kategori_idHelp" class="form-text">{{ $message }}</div>
            @enderror
          </select>
        <div class="mb-3">
            <label for="gambar" class="form-label input-runded"> Gambar</label>
            <input type="file" class="form-control Background" name="gambar">
            @error('gambar')
            <div id="gambarHelp" class="form-file">{{ $message }}</div>
            @enderror
        </div>
        <div class="mb-3">
            <button type="submit" class="btn btn-primary">Submit</button>
        </div>
        <td><a class="btn btn-primary" href="{{ route('kategori.create') }}" role="button">Tambahkan kategori</a></td> 
    </form>
</div>
@endsection