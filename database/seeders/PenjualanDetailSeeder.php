<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PenjualanDetailSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $penjualan_ids = DB::table('t_penjualan')->pluck('penjualan_id')->toArray();

        $barang_ids = DB::table('m_barang')->pluck('barang_id')->toArray();


        $data = [];
        foreach ($penjualan_ids as $penjualan_id) {
            for ($i = 0; $i < 3; $i++) {
                $data[] = [
                    'penjualan_id' => $penjualan_id,
                    'barang_id' => $barang_ids[array_rand($barang_ids)],
                    'harga' => rand(5000, 30000), 
                    'jumlah' => rand(1, 10),
                ];
            }
        }

        DB::table('t_penjualan_detail')->insert($data);
    }
}
