<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class BarangSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
        [

            'kode_barang' => 'B001',
            'nama_barang' => 'Sepatu',
            'harga' => 100000,
            'stok' => 10,
        ],
        [
            'kode_barang' => 'B002',
            'nama_barang' => 'Sandal',
            'harga' => 30000,
            'stok' => 15,
        ],
    ];
    08::table('barang')->insert($data);
    }
}
