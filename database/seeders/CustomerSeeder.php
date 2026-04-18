<?php

namespace Database\Seeders;

use App\Models\Customer;
use Illuminate\Database\Seeder;

class CustomerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $customers = [
            // ----------------------------------------
            // 1. Pelanggan Kategori Umum / Walk-in
            // ----------------------------------------
            [
                'name' => 'Pelanggan Umum (Walk-in)',
                'email' => 'umum@yamaha-mataram.com',
                'phone' => '-',
                'address' => 'Customer langsung datang ke bengkel/kasir',
            ],

            // ----------------------------------------
            // 2. Kategori Driver Ojol & Kurir
            // ----------------------------------------
            [
                'name' => 'Ahmad (Driver Gojek/Grab)',
                'email' => 'ahmad.ojol@gmail.com',
                'phone' => '081234567890',
                'address' => 'Pangkalan Ojek Stasiun Poris, Tangerang',
            ],
            [
                'name' => 'Rizki (Kurir ShopeeFood - Gear 125)',
                'email' => 'rizki.kurir@yahoo.com',
                'phone' => '081344556677',
                'address' => 'Kost Karyawan Cikokol',
            ],
            [
                'name' => 'Bowo (Lalamove - Vixion Old)',
                'email' => 'bowo.lalamove@gmail.com',
                'phone' => '085987654321',
                'address' => 'Pasar Kemis, Kab. Tangerang',
            ],

            // ----------------------------------------
            // 3. Kategori Anak Komunitas / Hobi
            // ----------------------------------------
            [
                'name' => 'Budi Santoso (Member YRFI - NMAX Club)',
                'email' => 'budi.nmax@yahoo.com',
                'phone' => '081122334455',
                'address' => 'Jl. Merdeka No. 45, Perumahan Dasana Indah',
            ],
            [
                'name' => 'Kevin (Aerox 155 - Sunmori Squad)',
                'email' => 'kevin.aerox@gmail.com',
                'phone' => '082233445566',
                'address' => 'Alam Sutera Boulevard',
            ],
            [
                'name' => 'Dimas (R15 V3 - Trackday)',
                'email' => 'dimas.r15@outlook.com',
                'phone' => '087788990011',
                'address' => 'Pamulang Estate',
            ],
            [
                'name' => 'Denny (XMAX 250 - Touring)',
                'email' => 'denny.xmax.touring@gmail.com',
                'phone' => '081999888777',
                'address' => 'Bintaro Jaya Sektor 7',
            ],

            // ----------------------------------------
            // 4. Kategori Corporate / Instansi / Bengkel Rekanan
            // ----------------------------------------
            [
                'name' => 'PT Pos Indonesia (Servis Armada)',
                'email' => 'fleet.motor@posindonesia.co.id',
                'phone' => '0219876543',
                'address' => 'Kantor Pos Cabang Utama Tangerang',
            ],
            [
                'name' => 'Klinik Sehat Bersama (Operasional Lexi)',
                'email' => 'admin@kliniksehat.com',
                'phone' => '02155667788',
                'address' => 'Jl. Imam Bonjol, Karawaci',
            ],
            [
                'name' => 'Bengkel Mandiri Motor (Pembelian Grosir)',
                'email' => 'mandirimotor.sparepart@gmail.com',
                'phone' => '087766554433',
                'address' => 'Jl. Raya Serpong Km. 7',
            ],

            // ----------------------------------------
            // 5. Kategori Pengguna Harian / Rumah Tangga
            // ----------------------------------------
            [
                'name' => 'Siti Aminah (Mio Sporty)',
                'email' => 'siti.aminah99@gmail.com',
                'phone' => '081299998888',
                'address' => 'Perumnas 1, Karawaci Baru',
            ],
            [
                'name' => 'Putri Ayu (Yamaha Fazzio)',
                'email' => 'putri.fazzio.cute@gmail.com',
                'phone' => '085544332211',
                'address' => 'BSD City, Cluster Nusantara',
            ],
            [
                'name' => 'Ibu Lina (Grand Filano)',
                'email' => 'lina.shop@yahoo.com',
                'phone' => '081111222333',
                'address' => 'Gading Serpong',
            ],
            [
                'name' => 'Pak RT Supardi (Jupiter Z Burhan)',
                'email' => 'supardi.rt04@gmail.com',
                'phone' => '088877776666',
                'address' => 'Cipondoh Makmur',
            ],
            [
                'name' => 'Hendra (FreeGo 125)',
                'email' => 'hendra.keluarga@outlook.com',
                'phone' => '081233334444',
                'address' => 'Ciledug Indah 2',
            ],
        ];

        foreach ($customers as $customer) {
            Customer::create($customer);
        }

        // Fake Customer tambahan untuk testing (opsional)
        // Customer::factory()->count(15)->create();
    }
}