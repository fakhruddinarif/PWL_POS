<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class KategoriSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            [
                'kategori_id' => 1,
                'kategori_kode' => 'ELEK',
                'kategori_nama' => 'Elektronik',
            ],
            [
                'kategori_id' => 2,
                'kategori_kode' => 'PAKAI',
                'kategori_nama' => 'Pakaian',
            ],
            [
                'kategori_id' => 3,
                'kategori_kode' => 'MAKMIN',
                'kategori_nama' => 'Makanan dan Minuman',
            ],
            [
                'kategori_id' => 4,
                'kategori_kode' => 'ATK',
                'kategori_nama' => 'Alat Tulis Kantor',
            ],
            [
                'kategori_id' => 5,
                'kategori_kode' => 'PERHIAS',
                'kategori_nama' => 'Perhiasan',
            ],
        ];
        DB::table('m_kategori')->insert($data);
    }
}
