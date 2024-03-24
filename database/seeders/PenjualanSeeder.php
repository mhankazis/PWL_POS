<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PenjualanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // create 10 sales transactions for penjualan table which have columns penjualan_id, user_id, pembeli, penjualan_kode, penjualan_tanggal
        $data = [
            ['penjualan_id' => 1, 'user_id' => 1, 'pembeli' => 'Budi', 'penjualan_kode' => 'JL001', 'penjualan_tanggal' => '2021-01-01'],
            ['penjualan_id' => 2, 'user_id' => 1, 'pembeli' => 'Ani', 'penjualan_kode' => 'JL002', 'penjualan_tanggal' => '2021-01-01'],
            ['penjualan_id' => 3, 'user_id' => 1, 'pembeli' => 'Budi', 'penjualan_kode' => 'JL003', 'penjualan_tanggal' => '2021-01-01'],
            ['penjualan_id' => 4, 'user_id' => 1, 'pembeli' => 'Ani', 'penjualan_kode' => 'JL004', 'penjualan_tanggal' => '2021-01-01'],
            ['penjualan_id' => 5, 'user_id' => 1, 'pembeli' => 'Budi', 'penjualan_kode' => 'JL005', 'penjualan_tanggal' => '2021-01-01'],
            ['penjualan_id' => 6, 'user_id' => 1, 'pembeli' => 'Ani', 'penjualan_kode' => 'JL006', 'penjualan_tanggal' => '2021-01-01'],
            ['penjualan_id' => 7, 'user_id' => 1, 'pembeli' => 'Budi', 'penjualan_kode' => 'JL007', 'penjualan_tanggal' => '2021-01-01'],
            ['penjualan_id' => 8, 'user_id' => 1, 'pembeli' => 'Ani', 'penjualan_kode' => 'JL008', 'penjualan_tanggal' => '2021-01-01'],
            ['penjualan_id' => 9, 'user_id' => 1, 'pembeli' => 'Budi', 'penjualan_kode' => 'JL009', 'penjualan_tanggal' => '2021-01-01'],
            ['penjualan_id' => 10, 'user_id' => 1, 'pembeli' => 'Ani', 'penjualan_kode' => 'JL010', 'penjualan_tanggal' => '2021-01-01'],
        ];
        DB::table('t_penjualan')->insert($data);
    }
}