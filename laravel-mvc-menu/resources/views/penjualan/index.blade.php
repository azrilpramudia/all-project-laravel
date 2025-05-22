@extends('layouts.master')

@section('content')
<h2>Daftar Penjualan</h2>
<a href="{{ route('penjualan.create') }}" class="btn btn-primary mb-2">Tambah Penjualan</a>

@if (session('success'))
<div class="alert alert-success">{{ session('success') }}</div>
@endif

<table class="table table-bordered">
    <thead>
        <tr>
            <th>Pelanggan</th>
            <th>Produk</th>
            <th>Jumlah</th>
            <th>Total Harga</th>
            <th>Aksi</th>
        </tr>
    </thead>
    <tbody>
        @foreach($penjualan as $item)
        <tr>
            <td>{{ $item->nama_pelanggan }}</td>
            <td>{{ $item->produk }}</td>
            <td>{{ $item->jumlah }}</td>
            <td>Rp {{ number_format($item->total_harga, 0, ',', '.') }}</td>
            <td>
                <a href="{{ route('penjualan.edit', $item->id) }}" class="btn btn-warning btn-sm">Edit</a>
                <form action="{{ route('penjualan.destroy', $item->id) }}" method="POST" style="display:inline;">
                    @csrf @method('DELETE')
                    <button class="btn btn-danger btn-sm" onclick="return confirm('Yakin?')">Hapus</button>
                </form>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>
@endsection
