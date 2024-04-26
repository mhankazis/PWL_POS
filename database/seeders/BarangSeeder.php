<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BarangSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Fetch all kategori_ids from the m_kategori table
        $kategori_ids = DB::table('m_kategori')->pluck('kategori_id')->toArray();

        // Check if kategori_ids array is not empty
        if (!empty($kategori_ids)) {
            $data = [];

            // Generate data for each item
            for ($i = 0; $i < 10; $i++) {
                $data[] = [
                    'kategori_id' => $kategori_ids[array_rand($kategori_ids)],
                    'barang_kode' => 'BRG' . str_pad($i + 1, 3, '0', STR_PAD_LEFT),
                    'barang_nama' => 'Item ' . ($i + 1),
                    'harga_beli' => rand(5000, 20000),
                    'harga_jual' => rand(15000, 30000),
                ];
            }

            // Insert data into the m_barang table
            DB::table('m_barang')->insert($data);
        } else {
            echo "No records found in m_kategori table. Please ensure there are records before running this seeder.";
        }
    }
}
