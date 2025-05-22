@extends('layouts.master')

@section('content')
<h2>Edit Penjualan</h2>

@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

<form action="{{ route('penjualan.update', $penjualan->id) }}" method="POST">
    @csrf
    @method('PUT')
    <div class="mb-3">
        <label>Nama Pelanggan</label>
        <input type="text" name="nama_pelanggan" value="{{ $penjualan->nama_pelanggan }}" class="form-control" required>
    </div>
    <div class="mb-3">
        <label>Nama Produk</label>
        <input type="text" name="produk" value="{{ $penjualan->produk }}" class="form-control" required>
    </div>
    <div class="mb-3">
        <label>Jumlah</label>
        <input type="number" name="jumlah" value="{{ $penjualan->jumlah }}" class="form-control" required>
    </div>
    <div class="mb-3">
        <label>Total Harga</label>
        <input type="number" name="total_harga" value="{{ $penjualan->total_harga }}" class="form-control" required>
    </div>
    <button class="btn btn-primary">Update</button>
    <a href="{{ route('penjualan.index') }}" class="btn btn-secondary">Kembali</a>
</form>
@endsection
