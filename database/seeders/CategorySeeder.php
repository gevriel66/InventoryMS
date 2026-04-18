<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Support\Str;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    public function run(): void
    {
        $categories = [
            [
                'name' => 'Fast Moving',
                'description' => 'Sparepart yang paling sering diganti saat servis rutin (Oli, Busi, Kampas Rem, Filter).'
            ],
            [
                'name' => 'Engine Parts',
                'description' => 'Komponen internal mesin (Piston, Ring Piston, Klep, Kruk As, Gasket).'
            ],
            [
                'name' => 'CVT & Transmission',
                'description' => 'Komponen penggerak matic dan manual (V-Belt, Roller, Kampas Ganda, Gear Set).'
            ],
            [
                'name' => 'Electrical & Sensor',
                'description' => 'Komponen kelistrikan motor (Aki, Kiprok, ECU, Spull, Bohlam, Sensor injeksi).'
            ],
            [
                'name' => 'Body & Chassis',
                'description' => 'Komponen eksterior dan rangka (Cover body, Mika lampu, Spion, Shockbreaker).'
            ],
            [
                'name' => 'Tires & Wheels',
                'description' => 'Komponen roda (Ban luar, Ban dalam, Velg, Bearing roda).'
            ],
        ];

        foreach ($categories as $cat) {
            Category::firstOrCreate(
                ['slug' => Str::slug($cat['name'])],
                [
                    'name' => $cat['name'],
                    'description' => $cat['description'],
                    'created_at' => now(),
                    'updated_at' => now(),
                ]
            );
        }
    }
}