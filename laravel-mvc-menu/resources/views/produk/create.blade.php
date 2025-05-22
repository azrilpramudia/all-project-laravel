@extends('layouts.master')

@section('content')
<h2>Tambah Produk</h2>
<form action="{{ route('produk.store') }}" method="POST">
    @csrf
    <div class="mb-2">
        <label>Nama Produk</label>
        <input type="text" name="nama" class="form-control">
    </div>
    <div class="mb-2">
        <label>Stok</label>
        <input type="number" name="stok" class="form-control">
    </div>
    <div class="mb-2">
        <label>Harga</label>
        <input type="number" name="harga" class="form-control">
    </div>
    <button class="btn btn-primary">Simpan</button>
    <a href="{{ route('produk.index') }}" class="btn btn-secondary">Kembali</a>
</form>
@endsection
