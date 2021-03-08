<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Lugar;
use DB;

class LugarsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Lugar::truncate(); // Optativo: vacía la tabla antes de rellenarla
        DB::table('lugars')->insert([
        'nombre' => '1. La Alcazaba',
        'descripcion' => 'Fundado por Abderramán, el califa de Córdoba, en el año 995 a. C., se trata del segundo fuerte morisco más grande de España. Difrutarás además de unas vistas alucinantes del Barrio de la Chanca, una vecindad que habita en cuevas.'
        ]);
        DB::table('lugars')->insert([
            'nombre' => '2. Catedral de Almería',
            'descripcion' => 'Desde fuera parece un castillo, pero por dentro es una bella catedral. La razón de su robusta construcción fue la de proteger los tesoros que guarda en su interior de las incursiones de los piratas.'
        ]);
        DB::table('lugars')->insert([
            'nombre' => '3. Sierra Nevada',
            'descripcion' => 'El parque nacional más grande de España no solo es el lugar perfecto para hacer esquí en invierno, sino un paraje ideal para descubrir la belleza salvaje de su naturaleza y los pueblos blancos que anidan en sus laderas.'
        ]);
        DB::table('lugars')->insert([
            'nombre' => '4. Parque Natural Cabo de Gata',
            'descripcion' => 'El parque cubre 33.600 hectáreas y cuenta con 16 senderos de diferentes grados de dificultad, así como con miles de playas vírgenes y miradores, como el Mirador de los Muertos, a lo largo de la costa.'
        ]);
        DB::table('lugars')->insert([
            'nombre' => '5. Costa de Almería',
            'descripcion' => 'La extensa línea de cosa es famosa por sus soleadas playas donde, para tu sorpresa, podrás disfrutar de todo el espacio que quieras. Las playas de la Bahía de Almería son la puerta de entrada a la ciudad.'
        ]);
        DB::table('lugars')->insert([
            'nombre' => '6. Mini Hollywood',
            'descripcion' => 'Sí, hay uno en el Desierto de Tabernas. Su paisaje árido y extenso han hecho de este lugar el escenario ideal para películas del oeste y producciones de Hollywood, tales como "Indiana Jones y la Última Cruzada".'
        ]);
        DB::table('lugars')->insert([
            'nombre' => '7. Cuevas de Sorbas',
            'descripcion' => 'Estas cuevas, situadas en el Parque Natural Karst en Yesos, cuentan con tres visitas guiadas al día por este fascinante mundo subterráneo lleno de estalactitas, estalagmitas y cristales de yeso.'
        ]);
        DB::table('lugars')->insert([
            'nombre' => '8. Museo de Almería',
            'descripcion' => 'Gracias a los restos prehistóricos que encontró en la región el ingeniero belga Luis Sirat en 1880, el museo alberga la colección arqueológica más completa e impresionante de Almería.'
        ]);
    }
}
