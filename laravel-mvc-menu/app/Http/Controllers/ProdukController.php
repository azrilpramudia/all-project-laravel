<?php

namespace App\Http\Controllers;

use App\Models\Produk;
use Illuminate\Http\Request;

class ProdukController extends Controller
{
    public function index()
    {
        $produk = Produk::all();
        return view('produk.index', compact('produk'));
    }

    public function create()
    {
        return view('produk.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required',
            'stok' => 'required|integer',
            'harga' => 'required|numeric',
        ]);

        Produk::create($request->all());

        return redirect('/produk')->with('success', 'Produk berhasil ditambahkan!');
    }

    public function edit(Produk $produk)
    {
        return view('produk.edit', compact('produk'));
    }

    public function update(Request $request, Produk $produk)
    {
        $request->validate([
            'nama' => 'required',
            'stok' => 'required|integer',
            'harga' => 'required|numeric',
        ]);

        $produk->update($request->all());

        return redirect('/produk')->with('success', 'Produk berhasil diupdate!');
    }

    public function destroy(Produk $produk)
    {
        $produk->delete();
        return redirect('/produk')->with('success', 'Produk berhasil dihapus!');
    }
}
