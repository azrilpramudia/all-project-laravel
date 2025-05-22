@extends('layouts.master')

@section('content')
<h2>Tambah Penjualan</h2>

@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

<form action="{{ route('penjualan.store') }}" method="POST">
    @csrf
    <div class="mb-3">
        <label>Nama Pelanggan</label>
        <input type="text" name="nama_pelanggan" class="form-control" required>
    </div>
    <div class="mb-3">
        <label>Nama Produk</label>
        <input type="text" name="produk" class="form-control" required>
    </div>
    <div class="mb-3">
        <label>Jumlah</label>
        <input type="number" name="jumlah" class="form-control" required>
    </div>
    <div class="mb-3">
        <label>Total Harga</label>
        <input type="number" name="total_harga" class="form-control" required>
    </div>
    <button class="btn btn-success">Simpan</button>
    <a href="{{ route('penjualan.index') }}" class="btn btn-secondary">Kembali</a>
</form>
@endsection
