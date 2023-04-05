@extends('app')

@section('content')
{{-- @foreach ($produk as $item) --}}
@auth
{{-- <p>{{ Auth::user()->name }}</p> --}}
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
          <td><a class="btn btn-outline-warning" href="produk/edit/{{ $item->id }}" role="button">Ubah</a>
            <form action="{{ route('produk.destroy', $item->id) }}" method="POST">
              @csrf
              @method('DELETE')
              <button type="submit"
                  class="btn btn-outline-danger">Hapus</button>
          </form>
        </td>
      </tr>
      @endforeach
      </tbody>
      
    </table>
    <td><a class="btn btn-primary" href="produk/create" role="button">Tambahkan Produk</a></td> 
  </div>
</div> 
@endauth
@guest
<h1 style="text-align: center;">Harap Login Terlebih Dahulu!</h1>
@endguest

{{-- @endforeach --}}

@endsection