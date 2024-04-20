<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MaintlbsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        $maintlb = [
            [   'id' =>12,
                'name' => 'table_1',
                'area' => 'area_1',
                'equipeCode'=> "equipe_1",
                'from_date'=>Carbon::createFromFormat('m/d/Y', '25/12/2024'),
                'to_date'=>Carbon::createFromFormat('m/d/Y', '25/12/2025'),
                
            ],

            [  'id' =>13,
                'name' => 'table_2',
                'area' => 'area_2',
                'equipeCode'=> "equipe_2",
                'from_date'=>Carbon::createFromFormat('d/m/Y', '25/12/2024'),
                'to_date'=>Carbon::createFromFormat('d/m/Y', '25/12/2025'),
                
            ],
            [   'id' =>14,
            'name' => 'table_3',
            'area' => 'area_3',
            'equipeCode'=> "equipe_3",
            'from_date'=>Carbon::createFromFormat('d/m/Y', '25/12/2024'),
                'to_date'=>Carbon::createFromFormat('d/m/Y', '25/12/2025'),
            
        ],

        [  'id' =>15,
            'name' => 'table_4',
            'area' => 'area_4',
            'equipeCode'=> "equipe_4",
            'from_date'=>Carbon::createFromFormat('d/m/Y', '25/12/2024'),
                'to_date'=>Carbon::createFromFormat('d/m/Y', '25/12/2025'),
            
        ],
            // Add more users as needed
        ];

        DB::table('maintlbs')->insert($maintlb);
        
    }
}
