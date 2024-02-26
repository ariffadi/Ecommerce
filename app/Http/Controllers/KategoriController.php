<?php

namespace App\Http\Controllers;

use App\Models\Produk;
use Illuminate\Http\Request;

class KategoriController extends Controller
{
    public function index()
    {
        // Ambil data kategori unik dari produk
        $kategoris = Produk::distinct('kategori')->pluck('kategori');

        // Ambil semua produk
        $allProduk = Produk::all();

        return view('kategori.index', ['kategoris' => $kategoris, 'allProduk' => $allProduk]);
    }
}
