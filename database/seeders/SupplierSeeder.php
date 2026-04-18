<?php

namespace Database\Seeders;

use App\Models\Supplier;
use Illuminate\Database\Seeder;

class SupplierSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $suppliers = [
            [
                'name' => 'PT Yamaha Indonesia Motor Mfg (YIMM)',
                'contact_person' => 'Bpk. Hendra (Distributor Pusat)',
                'email' => 'distribusi@yamaha-motor.co.id',
                'phone' => '0214618000',
                'address' => 'Jl. DR. KRT. Radjiman Widyodiningrat, Jakarta Timur',
            ],
            [
                'name' => 'PT Gajah Tunggal Tbk (Ban IRC)',
                'contact_person' => 'Bpk. Agus (Sales Area)',
                'email' => 'sales@gt-tires.com',
                'phone' => '0213803936',
                'address' => 'Wisma Hayam Wuruk, Jakarta Pusat',
            ],
            [
                'name' => 'PT NGK Busi Indonesia',
                'contact_person' => 'Ibu Rina',
                'email' => 'order@ngkbusi.com',
                'phone' => '0218717878',
                'address' => 'Jl. Raya Bogor Km. 26, Jakarta Timur',
            ],
            [
                'name' => 'PT Astra Otoparts Tbk (Aki GS Astra)',
                'contact_person' => 'Bpk. Budi Santoso',
                'email' => 'order@astra-otoparts.com',
                'phone' => '0214567890',
                'address' => 'Jl. Pegangsaan Dua, Kelapa Gading, Jakarta Utara',
            ],
            [
                'name' => 'PT Yuasa Battery Indonesia',
                'contact_person' => 'Bpk. Diki',
                'email' => 'sales@yuasabattery.co.id',
                'phone' => '02155790088',
                'address' => 'Jl. MH. Thamrin, Kebon Nanas, Tangerang',
            ],
            [
                'name' => 'PT Faito Racing Development',
                'contact_person' => 'Ko Hendry',
                'email' => 'info@faito.co.id',
                'phone' => '0216543210',
                'address' => 'Komplek Ruko Otomotif, Jakarta Barat',
            ],
        ];

        foreach ($suppliers as $supplier) {
            Supplier::create($supplier);
        }
    }
}