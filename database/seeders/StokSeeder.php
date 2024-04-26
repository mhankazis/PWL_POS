<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class StokSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $barang_ids = DB::table('m_barang')->pluck('barang_id')->toArray();
        $user_ids = DB::table('m_user')->pluck('user_id')->toArray();

        $data = [];
        for ($i = 0; $i < 10; $i++) {
            $data[] = [
                'barang_id' => $barang_ids[array_rand($barang_ids)],
                'user_id' => $user_ids[array_rand($user_ids)],
                'stok_tanggal' => now(),
                'stok_jumlah' => rand(1, 100),
            ];
        }

        // Insert data into the t_stok table
        DB::table('t_stok')->insert($data);
    }
}
