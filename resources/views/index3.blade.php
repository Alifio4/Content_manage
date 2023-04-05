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
          <th scope="col">Nama</th>
        </tr>
      </thead>
      <tbody>
      @foreach ($kategori as $no => $item)
      <tr>
          <td>{{ $no + 1}}</td>
          <td>{{ $item->nama}}</td>
          <td><a class="btn btn-outline-warning" href="kategori/edit/{{ $item->id }}" role="button">Ubah</a>
              <form action="{{ route('kategori.destroy', $item->id) }}" method="POST">
                @csrf
                @method('DELETE')
                <button type="submit"
                    class="btn btn-outline-danger">Hapus</button>
            </form>
      </tr>
      @endforeach
      </tbody>
      
    </table>
    <td><a class="btn btn-primary" href="kategori/create" role="button">Tambahkan kategori</a></td> 
  </div>
</div> 
{{-- @endforeach --}}
@endauth
@guest
<h1 style="text-align: center;">Harap Login Terlebih Dahulu!</h1>
@endguest



@endsection