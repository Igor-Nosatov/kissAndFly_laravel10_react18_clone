<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AirportSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $airports = [
            [
                'name' => 'Berlin Tegel Airport',
                'code' => 'TXL',
                'city' => 'Berlin',
                'country' => 'Germany',
            ],
            [
                'name' => 'Berlin Schönefeld Airport',
                'code' => 'SXF',
                'city' => 'Berlin',
                'country' => 'Germany',
            ],
            [
                'name' => 'Hamburg Airport',
                'code' => 'HAM',
                'city' => 'Hamburg',
                'country' => 'Germany',
            ],
            [
                'name' => 'Munich Airport',
                'code' => 'MUC',
                'city' => 'Munich',
                'country' => 'Germany',
            ],
            [
                'name' => 'Frankfurt am Main Airport',
                'code' => 'FRA',
                'city' => 'Frankfurt',
                'country' => 'Germany',
            ],
            [
                'name' => 'Cologne Bonn Airport',
                'code' => 'CGN',
                'city' => 'Cologne',
                'country' => 'Germany',
            ],
            [
                'name' => 'Düsseldorf Airport',
                'code' => 'DUS',
                'city' => 'Düsseldorf',
                'country' => 'Germany',
            ],
            [
                'name' => 'Stuttgart Airport',
                'code' => 'STR',
                'city' => 'Stuttgart',
                'country' => 'Germany',
            ],
            [
                'name' => 'Hanover Airport',
                'code' => 'HAJ',
                'city' => 'Hanover',
                'country' => 'Germany',
            ],
            [
                'name' => 'Nuremberg Airport',
                'code' => 'NUE',
                'city' => 'Nuremberg',
                'country' => 'Germany',
            ],
            [
                'name' => 'Leipzig/Halle Airport',
                'code' => 'LEJ',
                'city' => 'Leipzig',
                'country' => 'Germany',
            ],
            [
                'name' => 'Bremen Airport',
                'code' => 'BRE',
                'city' => 'Bremen',
                'country' => 'Germany',
            ],
            [
                'name' => 'Hannover Airport',
                'code' => 'HAJ',
                'city' => 'Hannover',
                'country' => 'Germany',
            ],
            [
                'name' => 'Copenhagen Airport',
                'code' => 'CPH',
                'city' => 'Copenhagen',
                'country' => 'Denmark',
            ],
            [
                'name' => 'Stockholm Arlanda Airport',
                'code' => 'ARN',
                'city' => 'Stockholm',
                'country' => 'Sweden',
            ],
            [
                'name' => 'Oslo Gardermoen Airport',
                'code' => 'OSL',
                'city' => 'Oslo',
                'country' => 'Norway',
            ],
        ];

        DB::table('airports')->insert($airports);

    }
}
