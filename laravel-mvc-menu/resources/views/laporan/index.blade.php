@extends('layouts.master')

@section('content')
<h2>Laporan Ringkas</h2>
<ul class="list-group">
    <li class="list-group-item">Jumlah Produk: <strong>{{ $total_produk }}</strong></li>
    <li class="list-group-item">Jumlah Transaksi Penjualan: <strong>{{ $total_penjualan }}</strong></li>
    <li class="list-group-item">Total Pemasukan: <strong>Rp {{ number_format($total_pemasukan, 0, ',', '.') }}</strong></li>
</ul>
@endsection
