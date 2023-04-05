{{-- @extends('layouts.navbar') --}}
@extends('app')

@section('content')
{{-- @foreach ($produk as $item) --}}
<div class="card">
    <div class="card-body">
      {{-- {{ $item->nama }} --- {{ $item->kategori_id }} --}}

      <table class="table" >
        <thead>
          <tr>
            <th scope="col">No</th>
            <th scope="col">Nama Produk</th>
            <th scope="col">Harga</th>
            <th scope="col">Jenis</th>
          </tr>
        </thead>
        <tbody>
        @foreach ($produk as $no => $item)
        <tr>
            <td>{{ $no + 1}}</td>
            <td>{{ $item->nama}}</td>
            <td>{{ $item->harga }}</td>
            <td>{{ $item->kategori_id }}</td>
            <td><a class="btn btn-outline-warning" href="keranjang/store/{{ $item->id }}" role="button">Tambahkan</a></td>
        </tr>
        @endforeach
        </tbody>
        
      </table>
    </div>
  </div> 
  
{{-- @endforeach --}}

@endsection