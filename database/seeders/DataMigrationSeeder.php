<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DataMigrationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $old_data = DB::connection('old_sqlite')->table('tb_etalase')->get();

        foreach ($old_data as $data) {
            DB::connection('sqlite')->table('etalase')->insert([
                'id_barang' => $data->{'Id Barang'},
                'nama_barang' => $data->{'Nama Barang'},
                'jenis_barang' => $data->{'Jenis Barang'},
                'stock' => $data->{'Stok'},
                'satuan' => $data->{'Satuan'},
                'harga' => $data->{'harga'},
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }
    }
}
