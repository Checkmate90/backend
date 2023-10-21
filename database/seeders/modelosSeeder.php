<?php

namespace Database\Seeders;

use App\Models\modelos;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class modelosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $modelos=[
            ['Modelo1',1], 
            ['Modelo2',2], 
            ['Modelo3',3],
            ['Modelo4',4],
            ['Modelo5',5]
        ];

        $temporal = array_map(function($modelosTemp){
            return[
                'nombreModelos'=>$modelosTemp[0],
                'marcas_id'=>$modelosTemp[1]
            ];
        }, $modelos
    );

    modelos::insert($temporal);
    }
}
