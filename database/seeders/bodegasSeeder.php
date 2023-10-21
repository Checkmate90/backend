<?php

namespace Database\Seeders;

use App\Models\bodegas;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class bodegasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $nombreBodega = [
            'Bodega1',
            'Bodega2',
            'Bodega3',
            'Bodega4',
            'Bodega5'
        ];

        $temporal = array_map(function($bodegas){
            return[
                'nombreBodega' =>$bodegas,
            ];
        }, $nombreBodega
    );

    bodegas::insert($temporal);
    }
}
