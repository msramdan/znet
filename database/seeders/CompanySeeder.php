<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CompanySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('companies')->insert(
            [
                'nama_perusahaan' => "Evdigi",
                'nama_pemilik' => "Muhammad Saeful Ramdan",
                'telepon_perusahaan' => '021 111111',
                'email' => 'saepulramdan244@gmail.com',
                'no_wa' => '6283874731480',
                'alamat' => 'Perum SAI Residance Kab.Bogor',
                'deskripsi_perusahaan' => '-',
                'logo' => null,
                'favicon' => null,
                'url_wa_gateway' => 'https://wa.evdigi.id/',
                'api_key_wa_gateway' => 'r3w66teCN8dI52LFkfOcpgEVlrcnLC',
                'is_active' => 'No',
                'footer_pesan_wa_tagihan' => 'Footer',
                'footer_pesan_wa_pembayaran' => 'Terdepan membuka akses',
                'url_tripay' => '	https://tripay.co.id/api/',
                'api_key_tripay' => 'XXXXXXXXXXXXXXX',
                'kode_merchant' => 'XXXXXXXXXXXX',
                'private_key' => 'XXXXXXXXXXXXXX',
                'paket_id' => 1,
                'expired' => '2024-12-30',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
        );
        DB::table('companies')->insert(
            [
                'nama_perusahaan' => "Byan Tech",
                'nama_pemilik' => "Muhammad Saeful Ramdan",
                'telepon_perusahaan' => '021 111111',
                'email' => 'byan@gmail.com',
                'no_wa' => '6283874731480',
                'alamat' => 'Perum SAI Residance Kab.Bogor',
                'deskripsi_perusahaan' => '-',
                'logo' => null,
                'favicon' => null,
                'url_wa_gateway' => 'https://wa.evdigi.id/',
                'api_key_wa_gateway' => 'c851ba7398c8b2713cd424fccdd997be18b5da2b',
                'is_active' => 'No',
                'footer_pesan_wa_tagihan' => '',
                'footer_pesan_wa_pembayaran' => 'Terdepan membuka akses',
                'url_tripay' => '	https://tripay.co.id/api/',
                'api_key_tripay' => 'MipM6kIhJ1FZYX1VvyIxYikZXVXJovNYxjo3l5tq',
                'kode_merchant' => 'T25408',
                'private_key' => 'IyiQy-hKNM3-OnVGg-rojcs-EKHmL',
                'paket_id' => 1,
                'expired' => '2024-12-30',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
        );
    }
}
