<?php

namespace Database\Seeders;

use App\Models\existencias;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class existenciasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $existencias=[
            [1,2],
            [2,3],
            [3,4],
            [4,5],
            [5,1],
            [6,2],
            [7,3],
            [8,4],
            [9,5],
            [10,1]
        ];

        $temporal = array_map(function($existenciasTemp){
            return[
                'idDispositivos'=>$existenciasTemp[0],
                'idBodega'=>$existenciasTemp[1]
            ];
        }, $existencias
    );

    existencias::insert($temporal);
    }
}
