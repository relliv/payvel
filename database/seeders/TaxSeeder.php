<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use \App\Models\Tax;

class TaxSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $taxes = [
            [
                'name' => 'GST (Goods and Services Tax) - 10%',
                'rate' => 10,
            ],
            [
                'name' => 'VAT (Value Added Tax) - 18%',
                'rate' => 18,
            ],
            [
                'name' => 'VAT (Value Added Tax) - 20%',
                'rate' => 20,
            ],
        ];

        foreach ($taxes as $tax) {
            Tax::create([
                ...$tax,
                'created_at' => now(),
            ]);
        }
    }
}
