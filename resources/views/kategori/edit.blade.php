@extends('app')

@section('content')
<div id="form" style="margin-top: 10px">
    <form action="{{ route('kategori.update', $kategori->id) }}" method="post">
        {{ csrf_field() }}
        <input type="hidden" name="id" value="{{ $kategori->id }}"> <br/>
        <div class="mb-3">
            <label for="nama" class="form-label input-runded"> Nama Kategori </label>
            <input type="text" class="form-control Background" name="nama" value= "{{ $kategori->nama }}">
            @error('nama')
                <div id="namaHelp" class="form-text">{{ $message }}</div>
            @enderror
        </div>
        
        <div class="mb-3">
            <button type="submit" class="btn btn-primary">Submit</button>
        </div>
    </form>
</div>
@endsection