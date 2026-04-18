<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Str;
use App\Models\FinanceCategory;
use App\Enums\FinanceCategoryType;

class FinanceCategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $categories = [
            // ==========================================
            // INCOME (PEMASUKAN)
            // ==========================================
            [
                'name' => 'Penjualan Sparepart & Apparel',
                'type' => FinanceCategoryType::Income,
                'description' => 'Pendapatan dari penjualan suku cadang (Fast/Slow moving), oli, ban, dan aksesoris resmi Yamaha.',
            ],
            [
                'name' => 'Pendapatan Jasa Bengkel',
                'type' => FinanceCategoryType::Income,
                'description' => 'Pendapatan dari ongkos servis ringan, servis besar, ganti oli, dan perbaikan kelistrikan.',
            ],
            [
                'name' => 'Klaim Garansi (YIMM)',
                'type' => FinanceCategoryType::Income,
                'description' => 'Pemasukan dari penggantian dana klaim garansi part cacat pabrik dari pusat (YIMM).',
            ],
            [
                'name' => 'Pendapatan Lain-lain',
                'type' => FinanceCategoryType::Income,
                'description' => 'Pendapatan di luar operasional utama dealer/bengkel.',
            ],

            // ==========================================
            // EXPENSES (PENGELUARAN)
            // ==========================================
            [
                'name' => 'Gaji Karyawan & Mekanik',
                'type' => FinanceCategoryType::Expense,
                'description' => 'Biaya gaji bulanan admin, kasir, kepala bengkel, dan sistem bagi hasil mekanik.',
            ],
            [
                'name' => 'Pembelian Stok Sparepart (PO)',
                'type' => FinanceCategoryType::Expense,
                'description' => 'Biaya kulakan / Purchase Order suku cadang ke distributor resmi atau pusat.',
            ],
            [
                'name' => 'Peralatan & Tools Bengkel',
                'type' => FinanceCategoryType::Expense,
                'description' => 'Biaya pembelian atau peremajaan alat mekanik (kunci set, kompresor, alat scan injeksi FI).',
            ],
            [
                'name' => 'Sewa Gedung Dealer',
                'type' => FinanceCategoryType::Expense,
                'description' => 'Biaya sewa ruko atau gedung operasional dealer dan bengkel.',
            ],
            [
                'name' => 'Operasional (Listrik, Air, Internet)',
                'type' => FinanceCategoryType::Expense,
                'description' => 'Tagihan utilitas bulanan untuk penerangan dealer dan koneksi sistem Yamaha.',
            ],
            [
                'name' => 'Promosi & Marketing',
                'type' => FinanceCategoryType::Expense,
                'description' => 'Biaya cetak brosur, spanduk diskon servis, dan iklan media sosial.',
            ],
            [
                'name' => 'Perawatan & Kebersihan',
                'type' => FinanceCategoryType::Expense,
                'description' => 'Biaya maintenance AC ruang tunggu, kebersihan toilet pelanggan, dan operasional harian.',
            ],
            [
                'name' => 'Transportasi & Logistik',
                'type' => FinanceCategoryType::Expense,
                'description' => 'Biaya bensin operasional, pengiriman part, atau mobil pikap dealer.',
            ],
        ];

        foreach ($categories as $category) {
            FinanceCategory::create([
                'name' => $category['name'],
                'slug' => Str::slug($category['name']),
                'type' => $category['type'],
                'description' => $category['description'],
            ]);
        }
    }
}