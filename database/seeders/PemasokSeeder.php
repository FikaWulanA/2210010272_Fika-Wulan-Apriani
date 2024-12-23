<?php

namespace Database\Seeders;

use App\Models\Pemasok;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PemasokSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $now = date('y-m-d H:i:s');
        pemasok::insert([
            [
                'nama_pemasok' => 'CV Alading',
                'nama_kontak' => 'mas Dikky',
                'nomor_hp' => '0800000000',
                'alamat' => 'Banjarbaru',
                'created_at'=> $now, 'updated_at'=> $now
            ],
            [
                'nama_pemasok' => 'CV Benalu',
                'nama_kontak' => 'Mba Fidah',
                'nomor_hp' => '0810000001',
                'alamat' => 'Banjarmasin',
                'created_at'=> $now, 'updated_at'=> $now
            ],
        ]);
    }
}
