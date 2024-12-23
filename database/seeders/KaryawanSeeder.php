<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Karyawan;

class KaryawanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $now = date('y-m-d H:i:s');
        karyawan::insert([
            [
                'nama_karyawan' => 'Nando',
                'nomor_hp' => '0811',
                'alamat' => 'Banjarbaru',
                'created_at'=> $now, 'updated_at'=> $now
            ],
            [
                'nama_karyawan' => 'Fidah',
                'nomor_hp' => '0812',
                'alamat' => 'Astambul',
                'created_at'=> $now, 'updated_at'=> $now
            ],
        ]);
    }
}
