<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PenjualanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $user_ids = DB::table('m_user')->pluck('user_id')->toArray();

        $data = [];
        for ($i = 0; $i < 10; $i++) {
            $data[] = [
                'user_id' => $user_ids[array_rand($user_ids)],
                'pembeli' => 'Customer ' . ($i + 1),
                'penjualan_kode' => 'PJ' . str_pad($i + 1, 4, '0', STR_PAD_LEFT),
                'penjualan_tanggal' => now(),
            ];
        }

        DB::table('t_penjualan')->insert($data);
    }
}
