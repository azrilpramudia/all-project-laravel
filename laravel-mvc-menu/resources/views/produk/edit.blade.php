@extends('layouts.master')

@section('content')
<h2>Edit Produk</h2>
<form action="{{ route('produk.update', $produk->id) }}" method="POST">
    @csrf @method('PUT')
    <div class="mb-2">
        <label>Nama Produk</label>
        <input type="text" name="nama" class="form-control" value="{{ $produk->nama }}">
    </div>
    <div class="mb-2">
        <label>Stok</label>
        <input type="number" name="stok" class="form-control" value="{{ $produk->stok }}">
    </div>
    <div class="mb-2">
        <label>Harga</label>
        <input type="number" name="harga" class="form-control" value="{{ $produk->harga }}">
    </div>
    <button class="btn btn-primary">Update</button>
    <a href="{{ route('produk.index') }}" class="btn btn-secondary">Kembali</a>
</form>
@endsection
