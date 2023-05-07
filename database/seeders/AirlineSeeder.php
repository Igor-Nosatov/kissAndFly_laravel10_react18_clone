<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AirlineSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $airlines = [
            [
                'name' => 'Lufthansa',
                'code' => 'LH',
            ],
            [
                'name' => 'Turkish Airlines',
                'code' => 'TK',
            ],
            [
                'name' => 'Emirates',
                'code' => 'EK',
            ],
            [
                'name' => 'Etihad Airways',
                'code' => 'EY',
            ],
            [
                'name' => 'Ryanair',
                'code' => 'FR',
            ],
            [
                'name' => 'Wizz Air',
                'code' => 'W6',
            ],
            [
                'name' => 'British Airways',
                'code' => 'BA',
            ],
            [
                'name' => 'Air France',
                'code' => 'AF',
            ],
            [
                'name' => 'KLM',
                'code' => 'KL',
            ],
            [
                'name' => 'Swiss International Air Lines',
                'code' => 'LX',
            ],
            [
                'name' => 'Austrian Airlines',
                'code' => 'OS',
            ],
            [
                'name' => 'LOT Polish Airlines',
                'code' => 'LO',
            ],
            [
                'name' => 'SAS',
                'code' => 'SK',
            ],
            [
                'name' => 'Finnair',
                'code' => 'AY',
            ],
        ];

        DB::table('airlines')->insert($airlines);
    }
}
