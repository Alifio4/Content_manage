@extends('app')

@section('content')
<div id="form" style="margin-top: 10px">
    <form action="{{ url('produk/store') }}" method="post">
        {{ csrf_field() }}
        <div class="mb-3">
            <label for="nama" class="form-label input-runded"> Nama Produk </label>
            <input type="text" class="form-control Background" name="nama">
            {{-- @if ($errors->has('password'))
                <span class="text-danger">{{ $errors->first('password') }}</span>
            @endif --}}
            @error('nama')
                <div id="namaHelp" class="form-text">{{ $message }}</div>
            @enderror
        </div>
        <div class="mb-3">
            <label for="harga" class="form-label input-runded"> Harga</label>
            <input type="text" class="form-control Background" name="harga">
            @error('harga')
            <div id="hargaHelp" class="form-text">{{ $message }}</div>
            @enderror
        </div>

        <select class="form-select" aria-label="Default select example" name="kategori_id">
            <option selected>Pilih Kategori Produk</option>
            @foreach ($kategori as $item)
            <option value="{{ $item->id }}">{{ $item->nama }}</option>
            @endforeach
            @error('kategori_id')
            <div id="kategori_idHelp" class="form-text">{{ $message }}</div>
            @enderror
          </select>

        <div class="mb-3">
            <button type="submit" class="btn btn-primary">Submit</button>
        </div>
    </form>
</div>
@endsection

