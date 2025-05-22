@extends('layouts.master')

@section('content')
<h2>Daftar Produk</h2>
<a href="{{ route('produk.create') }}" class="btn btn-primary mb-2">Tambah Produk</a>

@if (session('success'))
<div class="alert alert-success">{{ session('success') }}</div>
@endif

<table class="table table-bordered">
    <thead>
        <tr>
            <th>Nama</th>
            <th>Stok</th>
            <th>Harga</th>
            <th>Aksi</th>
        </tr>
    </thead>
    <tbody>
        @foreach($produk as $item)
        <tr>
            <td>{{ $item->nama }}</td>
            <td>{{ $item->stok }}</td>
            <td>Rp {{ number_format($item->harga, 0, ',', '.') }}</td>
            <td>
                <a href="{{ route('produk.edit', $item->id) }}" class="btn btn-warning btn-sm">Edit</a>
                <form action="{{ route('produk.destroy', $item->id) }}" method="POST" style="display:inline;">
                    @csrf @method('DELETE')
                    <button class="btn btn-danger btn-sm" onclick="return confirm('Yakin?')">Hapus</button>
                </form>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>
@endsection
