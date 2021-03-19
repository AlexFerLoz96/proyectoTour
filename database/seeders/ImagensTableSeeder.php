<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Imagen;
use DB;

class ImagensTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Imagen::truncate(); // Optativo: vacía la tabla antes de rellenarla
        DB::table('imagens')->insert([
        'ruta' => 'alcazaba.jpg',
        'descripcion' => 'Alcazaba',
        'lugar_id' => '1'
        ]);
        //LUGARES
        DB::table('imagens')->insert([
            'ruta' => 'catedral.jpg',
            'descripcion' => 'Catedral de Almería',
            'lugar_id' => '2'
        ]);
        DB::table('imagens')->insert([
            'ruta' => 'sierranevada.jpg',
            'descripcion' => 'Sierra Nevada',
            'lugar_id' => '3'
        ]);
        DB::table('imagens')->insert([
            'ruta' => 'cabogata.jpg',
            'descripcion' => 'Cabo de Gata',
            'lugar_id' => '4'
        ]);
        DB::table('imagens')->insert([
            'ruta' => 'costa.jpg',
            'descripcion' => 'Costa de Almería',
            'lugar_id' => '5'
        ]);
        DB::table('imagens')->insert([
            'ruta' => 'minihollywood.jpg',
            'descripcion' => 'Mini Hollywood',
            'lugar_id' => '6'
        ]);
        DB::table('imagens')->insert([
            'ruta' => 'sorbas.jpg',
            'descripcion' => 'Cuevas de Sorbas',
            'lugar_id' => '7'
        ]);
        DB::table('imagens')->insert([
            'ruta' => 'museo.jpg',
            'descripcion' => 'Museo de Almeria',
            'lugar_id' => '8'
        ]);
        //COMERCIO 1
        DB::table('imagens')->insert([
            'ruta' => 'consentida1.jpg',
            'descripcion' => 'La consentida',
            'comercio_id' => '1'
        ]);
        
        DB::table('imagens')->insert([
            'ruta' => 'consentida2.jpg',
            'descripcion' => 'La consentida',
            'comercio_id' => '1'
        ]);
        //COMERCIO 2
        DB::table('imagens')->insert([
            'ruta' => 'andaluz1.jpg',
            'descripcion' => 'Taberna el Andaluz',
            'comercio_id' => '2'
        ]);
        
        DB::table('imagens')->insert([
            'ruta' => 'andaluz2.jpg',
            'descripcion' => 'Taberna el Andaluz',
            'comercio_id' => '2'
        ]);

        DB::table('imagens')->insert([
            'ruta' => 'andaluz3.jpg',
            'descripcion' => 'Taberna el Andaluz',
            'comercio_id' => '2'
        ]);
        //COMERCIO 3
        DB::table('imagens')->insert([
            'ruta' => 'tahona1.jpg',
            'descripcion' => 'La Tahona',
            'comercio_id' => '3'
        ]);
        DB::table('imagens')->insert([
            'ruta' => 'tahona2.jpg',
            'descripcion' => 'La Tahona',
            'comercio_id' => '3'
        ]);
        //COMERCIO 4
        DB::table('imagens')->insert([
            'ruta' => 'goiko1.jpg',
            'descripcion' => 'Goiko',
            'comercio_id' => '4'
        ]);

        DB::table('imagens')->insert([
            'ruta' => 'goiko2.jpg',
            'descripcion' => 'Goiko',
            'comercio_id' => '4'
        ]);
        DB::table('imagens')->insert([
            'ruta' => 'goiko3.jpg',
            'descripcion' => 'Goiko',
            'comercio_id' => '4'
        ]);
        DB::table('imagens')->insert([
            'ruta' => 'goiko4.jpg',
            'descripcion' => 'Goiko',
            'comercio_id' => '4'
        ]);
        //COMERCIO 5
        DB::table('imagens')->insert([
            'ruta' => 'chilecito1.jpg',
            'descripcion' => 'El chilecito',
            'comercio_id' => '5'
        ]);
        DB::table('imagens')->insert([
            'ruta' => 'chilecito2.jpg',
            'descripcion' => 'El chilecito',
            'comercio_id' => '5'
        ]);
        //COMERCIO 6
        DB::table('imagens')->insert([
            'ruta' => 'achotel1.jpg',
            'descripcion' => 'AC Hotel Almeria',
            'comercio_id' => '6'
        ]);

        DB::table('imagens')->insert([
            'ruta' => 'achotel2.jpg',
            'descripcion' => 'AC Hotel Almeria',
            'comercio_id' => '6'
        ]);

        DB::table('imagens')->insert([
            'ruta' => 'achotel3.jpg',
            'descripcion' => 'AC Hotel Almeria',
            'comercio_id' => '6'
        ]);
        //COMERCIO 7
        DB::table('imagens')->insert([
            'ruta' => 'cala1.jpg',
            'descripcion' => 'La cala',
            'comercio_id' => '7'
        ]);
        DB::table('imagens')->insert([
            'ruta' => 'cala2.jpg',
            'descripcion' => 'La cala',
            'comercio_id' => '7'
        ]);
        //COMERCIO 8
        DB::table('imagens')->insert([
            'ruta' => 'taberna1.jpg',
            'descripcion' => 'La taberna',
            'comercio_id' => '8'
        ]);
        DB::table('imagens')->insert([
            'ruta' => 'taberna2.jpg',
            'descripcion' => 'La taberna',
            'comercio_id' => '8'
        ]);
        //COMERCIO 9
        DB::table('imagens')->insert([
            'ruta' => 'mala1.jpg',
            'descripcion' => 'La mala',
            'comercio_id' => '9'
        ]);
        DB::table('imagens')->insert([
            'ruta' => 'mala2.jpg',
            'descripcion' => 'La mala',
            'comercio_id' => '9'
        ]);
        //COMERCIO 10
        DB::table('imagens')->insert([
            'ruta' => 'barcelo1.jpg',
            'descripcion' => 'Hotel Barcelo',
            'comercio_id' => '10'
        ]);
        DB::table('imagens')->insert([
            'ruta' => 'barcelo2.jpg',
            'descripcion' => 'Hotel Barcelo',
            'comercio_id' => '10'
        ]);
        DB::table('imagens')->insert([
            'ruta' => 'barcelo3.jpg',
            'descripcion' => 'Hotel Barcelo',
            'comercio_id' => '10'
        ]);
        DB::table('imagens')->insert([
            'ruta' => 'barcelo4.jpg',
            'descripcion' => 'Hotel Barcelo',
            'comercio_id' => '10'
        ]);
        DB::table('imagens')->insert([
            'ruta' => 'barcelo5.jpg',
            'descripcion' => 'Hotel Barcelo',
            'comercio_id' => '10'
        ]);
        //COMERCIO 11
        DB::table('imagens')->insert([
            'ruta' => 'tagli1.jpg',
            'descripcion' => 'Tagliatella',
            'comercio_id' => '11'
        ]);
        DB::table('imagens')->insert([
            'ruta' => 'tagli2.jpg',
            'descripcion' => 'Tagliatella',
            'comercio_id' => '11'
        ]);
        //COMERCIO 12
        DB::table('imagens')->insert([
            'ruta' => 'almedina1.jpg',
            'descripcion' => 'Teteria Almedina',
            'comercio_id' => '12'
        ]);
        DB::table('imagens')->insert([
            'ruta' => 'almedina2.jpg',
            'descripcion' => 'Teteria Almedina',
            'comercio_id' => '12'
        ]);
        //COMERCIO 13
        DB::table('imagens')->insert([
            'ruta' => 'torreluz1.jpg',
            'descripcion' => 'Hotel Nuevo Torreluz',
            'comercio_id' => '13'
        ]);

        DB::table('imagens')->insert([
            'ruta' => 'torreluz2.jpg',
            'descripcion' => 'Hotel Nuevo Torreluz',
            'comercio_id' => '13'
        ]);
        //COMERCIO 14
        DB::table('imagens')->insert([
            'ruta' => 'toro1.jpg',
            'descripcion' => 'El quinto toro',
            'comercio_id' => '14'
        ]);
        DB::table('imagens')->insert([
            'ruta' => 'toro2.jpg',
            'descripcion' => 'El quinto toro',
            'comercio_id' => '14'
        ]);
        //COMERCIO 15
        DB::table('imagens')->insert([
            'ruta' => 'minibar1.jpg',
            'descripcion' => 'Minibar',
            'comercio_id' => '15'
        ]);

        DB::table('imagens')->insert([
            'ruta' => 'minibar2.jpg',
            'descripcion' => 'Minibar',
            'comercio_id' => '15'
        ]);
        //COMERCIO 16
        DB::table('imagens')->insert([
            'ruta' => 'tom1.jpg',
            'descripcion' => 'La cabaña del tio Tom',
            'comercio_id' => '16'
        ]);
        DB::table('imagens')->insert([
            'ruta' => 'tom2.jpg',
            'descripcion' => 'La cabaña del tio Tom',
            'comercio_id' => '16'
        ]);
        //COMERCIO 17
        DB::table('imagens')->insert([
            'ruta' => 'andaluz1.jpg',
            'descripcion' => 'Taberna el Andaluz',
            'comercio_id' => '17'
        ]);
        
        DB::table('imagens')->insert([
            'ruta' => 'andaluz2.jpg',
            'descripcion' => 'Taberna el Andaluz',
            'comercio_id' => '17'
        ]);

        DB::table('imagens')->insert([
            'ruta' => 'andaluz3.jpg',
            'descripcion' => 'Taberna el Andaluz',
            'comercio_id' => '17'
        ]);
        //COMERCIO 18
        DB::table('imagens')->insert([
            'ruta' => 'granhotel1.jpg',
            'descripcion' => 'Ohtels Gran Hotel',
            'comercio_id' => '18'
        ]);

        DB::table('imagens')->insert([
            'ruta' => 'granhotel2.jpg',
            'descripcion' => 'Ohtels Gran Hotel',
            'comercio_id' => '18'
        ]);
        //COMERCIO 19
        DB::table('imagens')->insert([
            'ruta' => 'puga1.jpg',
            'descripcion' => 'Casa Puga',
            'comercio_id' => '19'
        ]);
        //COMERCIO 20
        DB::table('imagens')->insert([
            'ruta' => 'vecinas1.jpg',
            'descripcion' => 'Patio de Vecinas',
            'comercio_id' => '20'
        ]);
        //COMERCIO 21
        DB::table('imagens')->insert([
            'ruta' => 'sevilla1.jpg',
            'descripcion' => 'Casa Sevilla',
            'comercio_id' => '21'
        ]);
        //COMERCIO 22
        DB::table('imagens')->insert([
            'ruta' => 'valentin1.jpg',
            'descripcion' => 'Restaurante Valentin',
            'comercio_id' => '22'
        ]);
        //COMERCIO 23
        DB::table('imagens')->insert([
            'ruta' => 'perla1.jpg',
            'descripcion' => 'Hotel la Perla',
            'comercio_id' => '23'
        ]);
        //COMERCIO 24
        DB::table('imagens')->insert([
            'ruta' => 'bambalina1.jpg',
            'descripcion' => 'Restaurante La Bambalina',
            'comercio_id' => '24'
        ]);
        //COMERCIO 25
        DB::table('imagens')->insert([
            'ruta' => 'hormiguita1.jpg',
            'descripcion' => 'Bar La hormiguita',
            'comercio_id' => '25'
        ]);
        //COMERCIO 26
        DB::table('imagens')->insert([
            'ruta' => 'china1.jpg',
            'descripcion' => 'Restaurante China City',
            'comercio_id' => '26'
        ]);
        //COMERCIO 27
        DB::table('imagens')->insert([
            'ruta' => 'parque1.jpg',
            'descripcion' => 'Cafe bar restaurante el parque',
            'comercio_id' => '27'
        ]);
        //COMERCIO 28
        DB::table('imagens')->insert([
            'ruta' => 'bagua1.jpg',
            'descripcion' => 'Restaurante Bagua ALmeria',
            'comercio_id' => '28'
        ]);
        //COMERCIO 29
        DB::table('imagens')->insert([
            'ruta' => 'colombia1.jpg',
            'descripcion' => 'Cafe Colombia',
            'comercio_id' => '29'
        ]);
        //COMERCIO 30
        DB::table('imagens')->insert([
            'ruta' => 'tamayo1.jpg',
            'descripcion' => 'Cafetería tamayo29',
            'comercio_id' => '30'
        ]);
        //COMERCIO 31
        DB::table('imagens')->insert([
            'ruta' => 'sagunto1.jpg',
            'descripcion' => 'Cafetería Sagunto',
            'comercio_id' => '31'
        ]);
        //COMERCIO 32
        DB::table('imagens')->insert([
            'ruta' => 'collage1.jpg',
            'descripcion' => 'Collage Cafe',
            'comercio_id' => '32'
        ]);
        //COMERCIO 33
        DB::table('imagens')->insert([
            'ruta' => 'clasijazz1.jpg',
            'descripcion' => 'Cafetería clasijazz',
            'comercio_id' => '33'
        ]);
        //COMERCIO 34
        DB::table('imagens')->insert([
            'ruta' => 'lubrin1.jpg',
            'descripcion' => 'Lubrin Cafetería Cerveceria',
            'comercio_id' => '34'
        ]);
    }
}
