<?php

namespace Database\Seeders;

use App\Models\Unit;
use Illuminate\Database\Seeder;

class UnitSeeder extends Seeder
{
    public function run(): void
    {
        $units = [
            ['name' => 'Pieces', 'symbol' => 'pcs'],      // Satuan paling umum (Busi, Filter, Bohlam)
            ['name' => 'Set', 'symbol' => 'set'],         // Gear set, Kampas rem, Ring Piston
            ['name' => 'Botol', 'symbol' => 'btl'],       // Oli mesin, Oli gardan, Coolant
            ['name' => 'Kit', 'symbol' => 'kit'],         // V-Belt Kit, Repair Kit Karbu
            ['name' => 'Pasang', 'symbol' => 'psg'],      // Spion, Handgrip
            ['name' => 'Box', 'symbol' => 'box'],         // Pembelian grosir aki atau busi
            ['name' => 'Liter', 'symbol' => 'ltr'],       // Cairan pembersih injector / bensin
        ];

        foreach ($units as $unit) {
            Unit::firstOrCreate(
                ['symbol' => $unit['symbol']],
                ['name' => $unit['name']]
            );
        }
    }
}