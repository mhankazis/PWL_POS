<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PenjualanDetailSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            ['detail_id' => 1, 'penjualan_id' => 1, 'barang_id' => 1, 'harga' => 10000, 'jumlah' => 10],
            ['detail_id' => 2, 'penjualan_id' => 1, 'barang_id' => 2, 'harga' => 20000, 'jumlah' => 5],
            ['detail_id' => 3, 'penjualan_id' => 1, 'barang_id' => 3, 'harga' => 30000, 'jumlah' => 3],
            ['detail_id' => 4, 'penjualan_id' => 2, 'barang_id' => 4, 'harga' => 40000, 'jumlah' => 2],
            ['detail_id' => 5, 'penjualan_id' => 2, 'barang_id' => 5, 'harga' => 50000, 'jumlah' => 1],
            ['detail_id' => 6, 'penjualan_id' => 2, 'barang_id' => 6, 'harga' => 60000, 'jumlah' => 4],
            ['detail_id' => 7, 'penjualan_id' => 3, 'barang_id' => 7, 'harga' => 70000, 'jumlah' => 5],
            ['detail_id' => 8, 'penjualan_id' => 3, 'barang_id' => 8, 'harga' => 80000, 'jumlah' => 6],
            ['detail_id' => 9, 'penjualan_id' => 3, 'barang_id' => 9, 'harga' => 90000, 'jumlah' => 7],
            ['detail_id' => 10, 'penjualan_id' => 4, 'barang_id' => 10, 'harga' => 100000, 'jumlah' => 8],
            ['detail_id' => 11, 'penjualan_id' => 4, 'barang_id' => 1, 'harga' => 110000, 'jumlah' => 9],
            ['detail_id' => 12, 'penjualan_id' => 4, 'barang_id' => 2, 'harga' => 120000, 'jumlah' => 10],
            ['detail_id' => 13, 'penjualan_id' => 5, 'barang_id' => 3, 'harga' => 130000, 'jumlah' => 11],
            ['detail_id' => 14, 'penjualan_id' => 5, 'barang_id' => 4, 'harga' => 140000, 'jumlah' => 12],
            ['detail_id' => 15, 'penjualan_id' => 5, 'barang_id' => 5, 'harga' => 150000, 'jumlah' => 13],
            ['detail_id' => 16, 'penjualan_id' => 6, 'barang_id' => 6, 'harga' => 160000, 'jumlah' => 14],
            ['detail_id' => 17, 'penjualan_id' => 6, 'barang_id' => 7, 'harga' => 170000, 'jumlah' => 15],
            ['detail_id' => 18, 'penjualan_id' => 6, 'barang_id' => 8, 'harga' => 180000, 'jumlah' => 16],
            ['detail_id' => 19, 'penjualan_id' => 7, 'barang_id' => 9, 'harga' => 190000, 'jumlah' => 17],
            ['detail_id' => 20, 'penjualan_id' => 7, 'barang_id' => 10, 'harga' => 200000, 'jumlah' => 18],
            ['detail_id' => 21, 'penjualan_id' => 7, 'barang_id' => 1, 'harga' => 210000, 'jumlah' => 19],
            ['detail_id' => 22, 'penjualan_id' => 8, 'barang_id' => 2, 'harga' => 220000, 'jumlah' => 20],
            ['detail_id' => 23, 'penjualan_id' => 8, 'barang_id' => 3, 'harga' => 230000, 'jumlah' => 21],
            ['detail_id' => 24, 'penjualan_id' => 8, 'barang_id' => 4, 'harga' => 240000, 'jumlah' => 22],
            ['detail_id' => 25, 'penjualan_id' => 9, 'barang_id' => 5, 'harga' => 250000, 'jumlah' => 23],
            ['detail_id' => 26, 'penjualan_id' => 9, 'barang_id' => 6, 'harga' => 260000, 'jumlah' => 24],
            ['detail_id' => 27, 'penjualan_id' => 9, 'barang_id' => 7, 'harga' => 270000, 'jumlah' => 25],
            ['detail_id' => 28, 'penjualan_id' => 10, 'barang_id' => 8, 'harga' => 280000, 'jumlah' => 26],
            ['detail_id' => 29, 'penjualan_id' => 10, 'barang_id' => 9, 'harga' => 290000, 'jumlah' => 27],
            ['detail_id' => 30, 'penjualan_id' => 10, 'barang_id' => 10, 'harga' => 300000, 'jumlah' => 28],
        ];
        DB::table('t_penjualan_detail')->insert($data);
    }
}