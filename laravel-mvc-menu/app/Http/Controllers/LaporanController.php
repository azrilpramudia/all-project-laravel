<?php

namespace App\Http\Controllers;

use App\Models\Produk;
use App\Models\Penjualan;

class LaporanController extends Controller
{
    public function index()
    {
        $total_produk = Produk::count();
        $total_penjualan = Penjualan::count();
        $total_pemasukan = Penjualan::sum('total_harga');

        return view('laporan.index', compact('total_produk', 'total_penjualan', 'total_pemasukan'));
    }
}
