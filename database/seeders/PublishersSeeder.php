<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PublishersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('publishers') -> insert(
            [
                'publisher_id' => 'PB001',
                'name' => 'Gramedia Pustaka Utama',
                'address' => 'Gedung Kompas Gramedia Blok 1 lt.5 Jl. Palmerah Barat No.29-37 Jakarta 10270 Indonesia',
                'phone' => '(021) 53650110/11',
                'email' => 'redaksi@gramediapustakautama.id',
                'image' => 'https://cdn.gramedia.com/uploads/vendor/gramedia_gpu_PWogFpD__w98_hauto.png'
            ]);
            DB::table('publishers') -> insert(
            [
                'publisher_id' => 'PB002',
                'name' => 'Bhuana Ilmu Populer',
                'address' => 'Jl. Gelora VII No.33, RT.1/RW.2, Gelora, Kecamatan Tanah Abang, Kota Jakarta Pusat, Daerah Khusus Ibukota Jakarta 10270',
                'phone' => '(021) 53677834',
                'email' => 'redaksi_bip@penerbitbip.id',
                'image' => 'https://cdn.gramedia.com/uploads/vendor/Logo_BIP__w98_hauto.jpeg'
            ]);
            DB::table('publishers') -> insert(
            [
                'publisher_id' => 'PB003',
                'name' => 'Elex Media Komputindo',
                'address' => 'Kompas Gramedia, Gedung Kompas-Gramedia Lantai 2, Jl. Palmerah Barat No. 29 - 32, Gelora, Tanah Abang, Jl. Palmerah Barat No.29 - 32, RT.1/RW.2, Gelora, Kecamatan Tanah Abang, Kota Jakarta Pusat, Daerah Khusus Ibukota Jakarta 10270',
                'phone' => '(021) 53650110',
                'email' => 'customercare@gramedia.com',
                'image' => 'https://cdn.gramedia.com/uploads/vendor/logo_elex__w98_hauto.jpg'
            ]);
    }
}
