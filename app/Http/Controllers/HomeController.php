<?php
namespace App\Http\Controllers;

use App\Models\Produk;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        // Ambil data produk dari database sesuai kebutuhan
        $produk = Produk::all(); // Ubah ini sesuai dengan kebutuhan Anda

        return view('home.index', ['produk' => $produk]);
    }
}
