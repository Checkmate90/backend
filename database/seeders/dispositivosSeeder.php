<?php

namespace Database\Seeders;

use App\Models\dispositivos;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class dispositivosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $dispositivos=[
            ['Dispositivo1',1,1],
            ['Dispositivo2',1,1],
            ['Dispositivo3',2,2],
            ['Dispositivo4',2,2],
            ['Dispositivo5',3,3],
            ['Dispositivo6',3,3],
            ['Dispositivo7',4,4],
            ['Dispositivo8',4,4],
            ['Dispositivo9',5,5],
            ['Dispositivo10',5,5]
        ];

        $temporal = array_map(function($dispositivosTemp){
            return[
                'nombreDispositivos'=>$dispositivosTemp[0],
                'modeloDispositivos'=>$dispositivosTemp[1],
                'marcasDispositivos'=>$dispositivosTemp[2]
            ];
        }, $dispositivos
    );

    dispositivos::insert($temporal);
    }
}
