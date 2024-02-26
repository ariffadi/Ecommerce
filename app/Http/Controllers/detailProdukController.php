<?php

namespace App\Http\Controllers;

use App\Models\Produk; // Pastikan Anda mengimport model Produk

class detailProdukController extends Controller
{
    
    public function index($id)
    {

        $produk = Produk::find($id); // Mengambil data produk berdasarkan ID


        return view('produk.index', ['produk' => $produk]);
    }
}
