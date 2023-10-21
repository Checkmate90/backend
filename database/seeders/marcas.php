<?php

namespace Database\Seeders;

use App\Models\marcas as ModelsMarcas;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class marcas extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $nombre = [
            'Marca1',
            'Marca2',
            'Marca3',
            'Marca4',
            'Marca5'
        ];

        $temporal = array_map(function($marcas){
            return[
                'nombre' =>$marcas,
            ];
            }, $nombre
        );

        ModelsMarcas::insert($temporal);
        
    }
}
