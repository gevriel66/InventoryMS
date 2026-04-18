<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Product;
use App\Models\Category;
use App\Models\Unit;
use Illuminate\Support\Str;

class ProductSeeder extends Seeder
{
    public function run(): void
    {
        // Cache ID untuk performa (Slug Kategori & Simbol Unit)
        $cats = Category::pluck('id', 'slug')->toArray();
        $units = Unit::pluck('id', 'symbol')->toArray();

        // Helper closure untuk ambil ID
        $getCat = fn($name) => $cats[Str::slug($name)] ?? array_first($cats);
        $getUnit = fn($sym) => $units[$sym] ?? array_first($units);

        $products = [
            // Fast Moving (Oli, Busi, Filter)
            ['cat' => 'Fast Moving', 'u' => 'btl', 'n' => 'Yamalube Super Matic (1 Liter)', 'p' => 75000],
            ['cat' => 'Fast Moving', 'u' => 'btl', 'n' => 'Yamalube Power Matic (800 ml)', 'p' => 52000],
            ['cat' => 'Fast Moving', 'u' => 'btl', 'n' => 'Yamalube Gear Motor Oil (150 ml)', 'p' => 17000],
            ['cat' => 'Fast Moving', 'u' => 'pcs', 'n' => 'Busi NGK CPR8EA-9 (NMAX, Aerox)', 'p' => 22000],
            ['cat' => 'Fast Moving', 'u' => 'pcs', 'n' => 'Busi NGK CR6HSA (Mio, Fino)', 'p' => 15000],
            ['cat' => 'Fast Moving', 'u' => 'pcs', 'n' => 'Filter Udara NMAX 155', 'p' => 55000],
            ['cat' => 'Fast Moving', 'u' => 'pcs', 'n' => 'Filter Udara Mio M3', 'p' => 35000],
            ['cat' => 'Fast Moving', 'u' => 'set', 'n' => 'Kampas Rem Depan NMAX/Aerox', 'p' => 60000],
            ['cat' => 'Fast Moving', 'u' => 'set', 'n' => 'Kampas Rem Belakang Tromol (Mio)', 'p' => 45000],

            // CVT & Transmission
            ['cat' => 'CVT & Transmission', 'u' => 'kit', 'n' => 'V-Belt Kit NMAX (Belt + Roller)', 'p' => 230000],
            ['cat' => 'CVT & Transmission', 'u' => 'kit', 'n' => 'V-Belt Kit Mio M3', 'p' => 180000],
            ['cat' => 'CVT & Transmission', 'u' => 'set', 'n' => 'Roller Weight NMAX (13 gram) Set', 'p' => 65000],
            ['cat' => 'CVT & Transmission', 'u' => 'pcs', 'n' => 'Kampas Ganda NMAX', 'p' => 185000],
            ['cat' => 'CVT & Transmission', 'u' => 'set', 'n' => 'Gear Set Vixion (Rantai + Gear)', 'p' => 275000],

            // Engine Parts
            ['cat' => 'Engine Parts', 'u' => 'set', 'n' => 'Piston Kit Vixion / R15 (Std)', 'p' => 210000],
            ['cat' => 'Engine Parts', 'u' => 'set', 'n' => 'Piston Kit Mio M3 (Std)', 'p' => 150000],
            ['cat' => 'Engine Parts', 'u' => 'pcs', 'n' => 'Klep IN/EX NMAX (1 Pcs)', 'p' => 85000],
            ['cat' => 'Engine Parts', 'u' => 'set', 'n' => 'Gasket Top Set NMAX', 'p' => 95000],
            ['cat' => 'Engine Parts', 'u' => 'pcs', 'n' => 'Noken As / Camshaft Lexi', 'p' => 250000],

            // Electrical & Sensor
            ['cat' => 'Electrical & Sensor', 'u' => 'pcs', 'n' => 'Aki Yuasa YTZ7V (NMAX, Aerox)', 'p' => 280000],
            ['cat' => 'Electrical & Sensor', 'u' => 'pcs', 'n' => 'Aki GS Astra GTZ4V (Mio, Soul)', 'p' => 210000],
            ['cat' => 'Electrical & Sensor', 'u' => 'pcs', 'n' => 'Bohlam Lampu Depan Halogen', 'p' => 35000],
            ['cat' => 'Electrical & Sensor', 'u' => 'pcs', 'n' => 'Sensor ISC (Idle Speed Control) NMAX', 'p' => 150000],
            ['cat' => 'Electrical & Sensor', 'u' => 'pcs', 'n' => 'Kiprok / Regulator R15', 'p' => 125000],

            // Body & Chassis
            ['cat' => 'Body & Chassis', 'u' => 'psg', 'n' => 'Spion Standar NMAX', 'p' => 85000],
            ['cat' => 'Body & Chassis', 'u' => 'pcs', 'n' => 'Mika Lampu Depan Vixion', 'p' => 110000],
            ['cat' => 'Body & Chassis', 'u' => 'pcs', 'n' => 'Shockbreaker Belakang NMAX (Tabung)', 'p' => 650000],
            ['cat' => 'Body & Chassis', 'u' => 'pcs', 'n' => 'Cover Knalpot Aerox 155', 'p' => 45000],

            // Tires & Wheels
            ['cat' => 'Tires & Wheels', 'u' => 'pcs', 'n' => 'Ban Luar Depan IRC NMAX 110/70-13', 'p' => 275000],
            ['cat' => 'Tires & Wheels', 'u' => 'pcs', 'n' => 'Ban Luar Belakang IRC NMAX 130/70-13', 'p' => 320000],
            ['cat' => 'Tires & Wheels', 'u' => 'pcs', 'n' => 'Ban Dalam Ring 14', 'p' => 35000],
            ['cat' => 'Tires & Wheels', 'u' => 'pcs', 'n' => 'Bearing Roda Depan (6300)', 'p' => 25000],
        ];

        foreach ($products as $item) {
            Product::create([
                'category_id' => $getCat($item['cat']),
                'unit_id' => $getUnit($item['u']),
                // Format SKU diganti ala kode part otomotif Yamaha
                'sku' => 'YMH-' . date('ym') . '-' . strtoupper(Str::random(4)),
                'name' => $item['n'],
                'description' => 'Yamaha Genuine Part untuk ' . $item['n'],
                'purchase_price' => $item['p'] * 0.85, // Margin toko 15% dari HET
                'selling_price' => $item['p'],
                'quantity' => rand(5, 50), // Stok diubah biar realistis untuk part motor
                'min_stock' => 3,
                'is_active' => true,
            ]);
        }
    }
}