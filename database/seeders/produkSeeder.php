<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProdukSeeder extends Seeder
{
    public function run()
    {
        DB::table('produk')->insert([
            'id' => 6,
            'nama' => 'Casio G-Shock DW 5600',
            'deskripsi' => 'DW-5600 memiliki desain klasik dengan bentuk kotak dan tampilan digital.',
            'harga' => 1000000.00,
            'stok' => 7,
            'gambar1' => 'global/image/gshock1.jpeg',
            'gambar2' => 'global/image/gshock2.jpeg',
            'gambar3' => 'global/image/gshock3.jpeg',
        ]);
        DB::table('produk')->insert([
            'id' => 7,
            'nama' => 'Unisex Polarized Sunglasses - Black',
            'deskripsi' => 'Kacamata hitam polarized uniseks adalah aksesori yang serbaguna dan stylish yang memberikan perlindungan mata sekaligus memberikan tampilan estetika yang klasik.',
            'harga' => 50000.00,
            'stok' => 7,
            'gambar1' => 'global/image/kacamata1.jpeg',
            'gambar2' => 'global/image/kacamata2.jpeg',
            'gambar3' => 'global/image/kacamata3.jpeg',
        ]);
        DB::table('produk')->insert([
            'id' => 8,
            'nama' => 'Topi Balenciaga',
            'deskripsi' => 'Topi Balenciaga hitam adalah aksesori fashion yang mencerminkan keanggunan dan gaya dari merek mewah Balenciaga.',
            'harga' => 50000.00,
            'stok' => 7,
            'gambar1' => 'global/image/topiblc1.jpeg',
            'gambar2' => 'global/image/topiblc2.jpeg',
            'gambar3' => 'global/image/topiblc3.jpeg',
        ]);
        DB::table('produk')->insert([
            'id' => 9,
            'nama' => 'Topi New Balace',
            'deskripsi' => 'Topi New Balance adalah aksesori gaya yang mencerminkan gaya santai dan sporty yang sering terkait dengan merek olahraga New Balance.',
            'harga' => 250000.00,
            'stok' => 10,
            'gambar1' => 'global/image/topinb1.jpeg',
            'gambar2' => 'global/image/topinb2.jpeg',
            'gambar3' => 'global/image/topinb3.jpeg',
        ]);
    }
}
