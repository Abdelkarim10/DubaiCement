<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Carbon\Carbon;
class TableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        
        $table = [
            [   'id'=> 20,
               
               
                'date'=>Carbon::createFromFormat('d/m/Y', '1/1/2025'),
                'time'=>Carbon::createFromTime(02, 15, 17),
                'kilo_current'=>2505,
                'kilo_consumed'=>155,
                'hour_current'=>1550,
                'hour_consumed'=>100,
                'dieselQty'=>25,
                'concreteQtyM3'=>25.3,
                'trips'=>9,
                'tripPerGal'=> 2.5,
                'concreteM3PerGal'=>3.5,
                'maintlbs_id' => 12

            ],
            [   'id'=> 25,
               
               
                'date'=>Carbon::createFromFormat('d/m/Y', '1/1/2025'),
                'time'=>Carbon::createFromTime(14, 0, 0),
                'kilo_current'=>2500,
                'kilo_consumed'=>150,
                'hour_current'=>1500,
                'hour_consumed'=>150,
                'dieselQty'=>75.6,
                'concreteQtyM3'=>25.3,
                'trips'=>10,
                'tripPerGal'=> 5.5,
                'concreteM3PerGal'=>53.5,
                'maintlbs_id' => 12

            ],
            [   'id'=> 24,
               
            'date'=>Carbon::createFromFormat('d/m/Y', '1/1/2025'),
            'time'=>Carbon::createFromTime(03, 15, 2),
            'kilo_current'=>2000,
            'kilo_consumed'=>150,
            'hour_current'=>500,
            'hour_consumed'=>50,
            'dieselQty'=>40.6,
            'concreteQtyM3'=>22.3,
            'trips'=>6,
            'tripPerGal'=> 8.5,
            'concreteM3PerGal'=>1.5,
            'maintlbs_id' => 12

        ],
        [   'id'=> 23,
               
                
       
        'date'=>Carbon::createFromFormat('d/m/Y', '1/1/3500'),
        'time'=>Carbon::createFromTime(14, 0, 0),
        'kilo_current'=>2500,
        'kilo_consumed'=>150,
        'hour_current'=>1500,
        'hour_consumed'=>150,
        'dieselQty'=>40.6,
        'concreteQtyM3'=>25.3,
        'trips'=>5,
        'tripPerGal'=> 5.5,
        'concreteM3PerGal'=>23.5,
        'maintlbs_id' => 12

    ],
            [
                'id'=> 26,
               
                
                'date'=>Carbon::createFromFormat('d/m/Y', '1/1/2026'),
                'time'=>Carbon::createFromTime(15, 0, 0),
                'kilo_current'=>3760,
                'kilo_consumed'=>175,
                'hour_current'=>2506,
                'hour_consumed'=>258,
                'dieselQty'=>33.6,
                'concreteQtyM3'=>23.3,
                'trips'=>12,
                'tripPerGal'=> 8.5,
                'concreteM3PerGal'=>28.5,
                'maintlbs_id' => 13
            ],
            [
                'id'=> 27,
                
             
                'date'=>Carbon::createFromFormat('d/m/Y', '1/1/2027'),
                'time'=>Carbon::createFromTime(13, 0, 0),
                'kilo_current'=>1760,
                'kilo_consumed'=>375,
                'hour_current'=>1505,
                'hour_consumed'=>254,
                'dieselQty'=>63.9,
                'concreteQtyM3'=>37.1,
                'trips'=>16,
                'tripPerGal'=> 12.5,
                'concreteM3PerGal'=>48.1,
                'maintlbs_id' => 14


            ],
            [
                'id'=> 28,
                
             
                'date'=>Carbon::createFromFormat('d/m/Y', '1/1/2028'),
                'time'=>Carbon::createFromTime(16, 0, 0),
                'kilo_current'=>2767,
                'kilo_consumed'=>198,
                'hour_current'=>2602,
                'hour_consumed'=>221,
                'dieselQty'=>43.2,
                'concreteQtyM3'=>43.6,
                'trips'=>12,
                'tripPerGal'=> 15.5,
                'concreteM3PerGal'=>56.3,
                'maintlbs_id' => 15

            ],
            [
                'id'=> 29,
                
             
                'date'=>Carbon::createFromFormat('d/m/Y', '1/1/2028'),
                'time'=>Carbon::createFromTime(18, 0, 0),
                'kilo_current'=>2525,
                'kilo_consumed'=>105,
                'hour_current'=>2402,
                'hour_consumed'=>121,
                'dieselQty'=>23.9,
                'concreteQtyM3'=>73.9,
                'trips'=>22,
                'tripPerGal'=> 13.5,
                'concreteM3PerGal'=>96.3,
                'maintlbs_id' => 15

            ]
        ];

        DB::table('tables')->insert($table);

  
    }
}
