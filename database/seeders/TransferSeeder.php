<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TransferSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $transfers = [
            ['name' => 'Shared Shuttle'],
            ['name' => 'Private Car'],
            ['name' => 'Private Minibus'],
            ['name' => 'Private Bus'],
            ['name' => 'Limousine'],
            ['name' => 'Water Taxi'],
            ['name' => 'Helicopter'],
            ['name' => 'Public Transportation'],
        ];
        DB::table('transfers')->insert($transfers);
    }
}
