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
        $numbers = 5;
        $kode = ['ELEK', 'PAKAI', 'MAKMIN', 'ATK', 'PERHIAS'];
        $nama = ['Elektronik', 'Pakaian', 'Makanan dan Minuman', 'Alat Tulis Kantor', 'Perhiasan'];
        $data = [];

        for ($i = 0; $i < $numbers; $i++) {
            $data[] = [
                'kategori_id' => $numbers + 1,
                'kategori_kode' => $kode[$i],
                'kategori_nama' => $nama[$i],
            ];
        }
        DB::table('m_kategori')->insert($data);
    }
}
