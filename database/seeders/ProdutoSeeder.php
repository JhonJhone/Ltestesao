<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProdutoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('produtos')->insert([[
            'name' => 'Bermuda',
            'price' => 28,
            'quantity' => 48,
        ],
        [
            'name' => '8tão',
            'price' => 2,
            'quantity' => 169,
    ]
]);
    }
}
