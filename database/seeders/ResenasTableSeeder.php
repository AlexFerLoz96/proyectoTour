<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Resena;
use DB;

class ResenasTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Resena::truncate(); // Optativo: vacía la tabla antes de rellenarla
        DB::table('resenas')->insert([
            'comentario' => 'Muy buena calidad en las tapas, trato excelente y local muy bien acondicionado',
            'puntuacion' => '5',
            'fecha' => '2020/10/10',
            'user_id' => '1',
            'comercio_id' => '1'
        ]);

        DB::table('resenas')->insert([
            'comentario' => 'Buen sitio con buenas tapas y variadas. Pero ojo!! Algunas como el USUN YUN (tataki de atún) un verdadero TIMO (dos trocitos enanos y eso que tiene suplemento!!!)',
            'puntuacion' => '4',
            'fecha' => '2019/10/11',
            'user_id' => '2',
            'comercio_id' => '1'
        ]);

        DB::table('resenas')->insert([
            'comentario' => 'Espectaculares tapas para consentirse! Las patatas cheesebacon me encantaron. No te vayas sin probarlas. Mi preferida la consentida Usun Yoon',
            'puntuacion' => '5',
            'fecha' => '2020/04/10',
            'user_id' => '3',
            'comercio_id' => '1'
        ]);

        DB::table('resenas')->insert([
            'comentario' => 'Muy buen servicio y una carta muy variada y de buena calidad,... con precios asequibles',
            'puntuacion' => '5',
            'fecha' => '2019/10/04',
            'user_id' => '4',
            'comercio_id' => '1'
        ]);

        /************************************************ */

        DB::table('resenas')->insert([
            'comentario' => 'Excelente, tanto el servicio como la comida. Las tapas deliciosas y muy bien todo calidad precio! Lo recomiendo',
            'puntuacion' => '5',
            'fecha' => '2020/04/10',
            'user_id' => '1',
            'comercio_id' => '2'
        ]);

        DB::table('resenas')->insert([
            'comentario' => 'Excelente tapeo y magnífico el servicio. Muy recomendable',
            'puntuacion' => '4',
            'fecha' => '2019/10/11',
            'user_id' => '2',
            'comercio_id' => '2'
        ]);

        DB::table('resenas')->insert([
            'comentario' => 'Sin lugar a dudas, la comida en sí no está tan buena como la de la Taberna el Andaluz de la Avenida Meditarreneo. Algunas tapas estaban sosas, otras la carne más tiesa y la cerveza deja que desear... La carta de tapas es la misma que la de la otra taberna. Un punto a favor, es que, la atención es rápida y atenta por parte de los camareros. El local es llamativo. En conclusión, es un bar para estar de paso por la zona y que la cocina, está mucho mejor la de la otra taberna.',
            'puntuacion' => '2',
            'fecha' => '2020/04/10',
            'user_id' => '3',
            'comercio_id' => '2'
        ]);

        DB::table('resenas')->insert([
            'comentario' => 'Buen ambiente y buena comida.',
            'puntuacion' => '4',
            'fecha' => '2019/10/04',
            'user_id' => '4',
            'comercio_id' => '2'
        ]);

        /************************************************ */

        DB::table('resenas')->insert([
            'comentario' => 'Muy buena atención por parte de los camareros, lo recomiendo para desayuno, comida y cena',
            'puntuacion' => '5',
            'fecha' => '2020/02/10',
            'user_id' => '1',
            'comercio_id' => '3'
        ]);

        DB::table('resenas')->insert([
            'comentario' => 'Nos gusta mucho. Vamos con frecuencia. Te atienden genial. Nos encantan las visitas.',
            'puntuacion' => '4',
            'fecha' => '2019/10/11',
            'user_id' => '2',
            'comercio_id' => '3'
        ]);

        DB::table('resenas')->insert([
            'comentario' => 'Muy malas tapas.',
            'puntuacion' => '1',
            'fecha' => '2020/04/10',
            'user_id' => '3',
            'comercio_id' => '3'
        ]);

        DB::table('resenas')->insert([
            'comentario' => 'Ambiente rancio. Solo se salva por la ubicación.',
            'puntuacion' => '2',
            'fecha' => '2019/10/04',
            'user_id' => '4',
            'comercio_id' => '3'
        ]);

        /************************************************ */

        DB::table('resenas')->insert([
            'comentario' => 'Hamburguesas riquísimas, pero un poco caro',
            'puntuacion' => '4',
            'fecha' => '2020/01/24',
            'user_id' => '1',
            'comercio_id' => '4'
        ]);

        DB::table('resenas')->insert([
            'comentario' => 'Excelente comida, pero la falta de personal hace que la atención disminuya y se genere lentitud',
            'puntuacion' => '1',
            'fecha' => '2019/10/11',
            'user_id' => '2',
            'comercio_id' => '4'
        ]);

        DB::table('resenas')->insert([
            'comentario' => 'En este restaurante da igual lo que pidas, te ponen lo que les da la gana. Hicimos un pedido de 2 hamburguesas muy hechas, unas patatas finas y unas rústicas. Nos trajeron: 2 hamburguesas crudas (no nos las pudimos comer) y dos de patatas rústicas blandas y aceitosas. Por no alargarme acerca de cómo estaban el resto de ingredientes de las hamburguesas. Un desastre, no vuelvo a pedir aquí.',
            'puntuacion' => '1',
            'fecha' => '2020/04/10',
            'user_id' => '3',
            'comercio_id' => '4'
        ]);

        DB::table('resenas')->insert([
            'comentario' => 'Chorreante . La calidad es bastante buena',
            'puntuacion' => '5',
            'fecha' => '2019/10/04',
            'user_id' => '4',
            'comercio_id' => '4'
        ]);

        /************************************************ */

        DB::table('resenas')->insert([
            'comentario' => 'Calidad si, pero un pelin por encima del precio sobre todo los postres son excesivamente caros para lo que se ve por ahí por el mismo precio siendo el mismo postre o parecido.Y los platos igual un pelin por encima.Para ir un par de veces al año y ya',
            'puntuacion' => '4',
            'fecha' => '2020/02/09',
            'user_id' => '1',
            'comercio_id' => '5'
        ]);

        DB::table('resenas')->insert([
            'comentario' => 'Trato y comida genial... Repetiré segurooo',
            'puntuacion' => '5',
            'fecha' => '2019/10/11',
            'user_id' => '2',
            'comercio_id' => '5'
        ]);

        DB::table('resenas')->insert([
            'comentario' => 'Soy mexicano y el chilecito hizo de mi estancia en Almería, mas Feliz de lo que ya estaba, la comida muy buena, los tacos al pastor son muy parecidos a los de México, me encantaria regresar y visitar el chilecito',
            'puntuacion' => '4',
            'fecha' => '2020/04/10',
            'user_id' => '3',
            'comercio_id' => '5'
        ]);

        DB::table('resenas')->insert([
            'comentario' => 'Venden por just eat tacos cuando la masa es de burritos y no de maíz. Ojo, no son tacos originales.',
            'puntuacion' => '3',
            'fecha' => '2019/10/04',
            'user_id' => '4',
            'comercio_id' => '5'
        ]);

        /************************************************ */

        DB::table('resenas')->insert([
            'comentario' => 'Muy buena calidad en las tapas, trato excelente y local muy bien acondicionado',
            'puntuacion' => '5',
            'fecha' => '2020/10/10',
            'user_id' => '1',
            'comercio_id' => '6'
        ]);

        DB::table('resenas')->insert([
            'comentario' => 'Buen sitio con buenas tapas y variadas. Pero ojo!! Algunas como el USUN YUN (tataki de atún) un verdadero TIMO (dos trocitos enanos y eso que tiene suplemento!!!)',
            'puntuacion' => '4',
            'fecha' => '2019/10/11',
            'user_id' => '2',
            'comercio_id' => '6'
        ]);

        DB::table('resenas')->insert([
            'comentario' => 'Espectaculares tapas para consentirse! Las patatas cheesebacon me encantaron. No te vayas sin probarlas. Mi preferida la consentida Usun Yoon',
            'puntuacion' => '5',
            'fecha' => '2020/04/10',
            'user_id' => '3',
            'comercio_id' => '6'
        ]);

        DB::table('resenas')->insert([
            'comentario' => 'Muy buen servicio y una carta muy variada y de buena calidad,... con precios asequibles',
            'puntuacion' => '5',
            'fecha' => '2019/10/04',
            'user_id' => '4',
            'comercio_id' => '6'
        ]);

        /************************************************ */

        DB::table('resenas')->insert([
            'comentario' => 'Excelente, tanto el servicio como la comida. Las tapas deliciosas y muy bien todo calidad precio! Lo recomiendo',
            'puntuacion' => '5',
            'fecha' => '2020/04/10',
            'user_id' => '1',
            'comercio_id' => '7'
        ]);

        DB::table('resenas')->insert([
            'comentario' => 'Excelente tapeo y magnífico el servicio. Muy recomendable',
            'puntuacion' => '4',
            'fecha' => '2019/10/11',
            'user_id' => '2',
            'comercio_id' => '7'
        ]);

        DB::table('resenas')->insert([
            'comentario' => 'Sin lugar a dudas, la comida en sí no está tan buena como la de la Taberna el Andaluz de la Avenida Meditarreneo. Algunas tapas estaban sosas, otras la carne más tiesa y la cerveza deja que desear... La carta de tapas es la misma que la de la otra taberna. Un punto a favor, es que, la atención es rápida y atenta por parte de los camareros. El local es llamativo. En conclusión, es un bar para estar de paso por la zona y que la cocina, está mucho mejor la de la otra taberna.',
            'puntuacion' => '2',
            'fecha' => '2020/04/10',
            'user_id' => '3',
            'comercio_id' => '7'
        ]);

        DB::table('resenas')->insert([
            'comentario' => 'Buen ambiente y buena comida.',
            'puntuacion' => '4',
            'fecha' => '2019/10/04',
            'user_id' => '4',
            'comercio_id' => '7'
        ]);

        /************************************************ */

        DB::table('resenas')->insert([
            'comentario' => 'Muy buena atención por parte de los camareros, lo recomiendo para desayuno, comida y cena',
            'puntuacion' => '5',
            'fecha' => '2020/02/10',
            'user_id' => '1',
            'comercio_id' => '8'
        ]);

        DB::table('resenas')->insert([
            'comentario' => 'Nos gusta mucho. Vamos con frecuencia. Te atienden genial. Nos encantan las visitas.',
            'puntuacion' => '4',
            'fecha' => '2019/10/11',
            'user_id' => '2',
            'comercio_id' => '8'
        ]);

        DB::table('resenas')->insert([
            'comentario' => 'Muy malas tapas.',
            'puntuacion' => '1',
            'fecha' => '2020/04/10',
            'user_id' => '3',
            'comercio_id' => '8'
        ]);

        DB::table('resenas')->insert([
            'comentario' => 'Ambiente rancio. Solo se salva por la ubicación.',
            'puntuacion' => '2',
            'fecha' => '2019/10/04',
            'user_id' => '4',
            'comercio_id' => '8'
        ]);

        /************************************************ */

        DB::table('resenas')->insert([
            'comentario' => 'Hamburguesas riquísimas, pero un poco caro',
            'puntuacion' => '4',
            'fecha' => '2020/01/24',
            'user_id' => '1',
            'comercio_id' => '9'
        ]);

        DB::table('resenas')->insert([
            'comentario' => 'Excelente comida, pero la falta de personal hace que la atención disminuya y se genere lentitud',
            'puntuacion' => '1',
            'fecha' => '2019/10/11',
            'user_id' => '2',
            'comercio_id' => '9'
        ]);

        DB::table('resenas')->insert([
            'comentario' => 'En este restaurante da igual lo que pidas, te ponen lo que les da la gana. Hicimos un pedido de 2 hamburguesas muy hechas, unas patatas finas y unas rústicas. Nos trajeron: 2 hamburguesas crudas (no nos las pudimos comer) y dos de patatas rústicas blandas y aceitosas. Por no alargarme acerca de cómo estaban el resto de ingredientes de las hamburguesas. Un desastre, no vuelvo a pedir aquí.',
            'puntuacion' => '1',
            'fecha' => '2020/04/10',
            'user_id' => '3',
            'comercio_id' => '9'
        ]);

        DB::table('resenas')->insert([
            'comentario' => 'Chorreante . La calidad es bastante buena',
            'puntuacion' => '5',
            'fecha' => '2019/10/04',
            'user_id' => '4',
            'comercio_id' => '9'
        ]);

        /************************************************ */

        DB::table('resenas')->insert([
            'comentario' => 'Calidad si, pero un pelin por encima del precio sobre todo los postres son excesivamente caros para lo que se ve por ahí por el mismo precio siendo el mismo postre o parecido.Y los platos igual un pelin por encima.Para ir un par de veces al año y ya',
            'puntuacion' => '4',
            'fecha' => '2020/02/09',
            'user_id' => '1',
            'comercio_id' => '10'
        ]);

        DB::table('resenas')->insert([
            'comentario' => 'Trato y comida genial... Repetiré segurooo',
            'puntuacion' => '5',
            'fecha' => '2019/10/11',
            'user_id' => '2',
            'comercio_id' => '10'
        ]);

        DB::table('resenas')->insert([
            'comentario' => 'Soy mexicano y el chilecito hizo de mi estancia en Almería, mas Feliz de lo que ya estaba, la comida muy buena, los tacos al pastor son muy parecidos a los de México, me encantaria regresar y visitar el chilecito',
            'puntuacion' => '4',
            'fecha' => '2020/04/10',
            'user_id' => '3',
            'comercio_id' => '10'
        ]);

        DB::table('resenas')->insert([
            'comentario' => 'Venden por just eat tacos cuando la masa es de burritos y no de maíz. Ojo, no son tacos originales.',
            'puntuacion' => '3',
            'fecha' => '2019/10/04',
            'user_id' => '4',
            'comercio_id' => '10'
        ]);

        /************************************************ */

        DB::table('resenas')->insert([
            'comentario' => 'Muy buena calidad en las tapas, trato excelente y local muy bien acondicionado',
            'puntuacion' => '5',
            'fecha' => '2020/10/10',
            'user_id' => '1',
            'comercio_id' => '11'
        ]);

        DB::table('resenas')->insert([
            'comentario' => 'Buen sitio con buenas tapas y variadas. Pero ojo!! Algunas como el USUN YUN (tataki de atún) un verdadero TIMO (dos trocitos enanos y eso que tiene suplemento!!!)',
            'puntuacion' => '4',
            'fecha' => '2019/10/11',
            'user_id' => '2',
            'comercio_id' => '11'
        ]);

        DB::table('resenas')->insert([
            'comentario' => 'Espectaculares tapas para consentirse! Las patatas cheesebacon me encantaron. No te vayas sin probarlas. Mi preferida la consentida Usun Yoon',
            'puntuacion' => '5',
            'fecha' => '2020/04/10',
            'user_id' => '3',
            'comercio_id' => '11'
        ]);

        DB::table('resenas')->insert([
            'comentario' => 'Muy buen servicio y una carta muy variada y de buena calidad,... con precios asequibles',
            'puntuacion' => '5',
            'fecha' => '2019/10/04',
            'user_id' => '4',
            'comercio_id' => '11'
        ]);

        /************************************************ */

        DB::table('resenas')->insert([
            'comentario' => 'Excelente, tanto el servicio como la comida. Las tapas deliciosas y muy bien todo calidad precio! Lo recomiendo',
            'puntuacion' => '5',
            'fecha' => '2020/04/10',
            'user_id' => '1',
            'comercio_id' => '12'
        ]);

        DB::table('resenas')->insert([
            'comentario' => 'Excelente tapeo y magnífico el servicio. Muy recomendable',
            'puntuacion' => '4',
            'fecha' => '2019/10/11',
            'user_id' => '2',
            'comercio_id' => '12'
        ]);

        DB::table('resenas')->insert([
            'comentario' => 'Sin lugar a dudas, la comida en sí no está tan buena como la de la Taberna el Andaluz de la Avenida Meditarreneo. Algunas tapas estaban sosas, otras la carne más tiesa y la cerveza deja que desear... La carta de tapas es la misma que la de la otra taberna. Un punto a favor, es que, la atención es rápida y atenta por parte de los camareros. El local es llamativo. En conclusión, es un bar para estar de paso por la zona y que la cocina, está mucho mejor la de la otra taberna.',
            'puntuacion' => '2',
            'fecha' => '2020/04/10',
            'user_id' => '3',
            'comercio_id' => '12'
        ]);

        DB::table('resenas')->insert([
            'comentario' => 'Buen ambiente y buena comida.',
            'puntuacion' => '4',
            'fecha' => '2019/10/04',
            'user_id' => '4',
            'comercio_id' => '12'
        ]);

        /************************************************ */

        DB::table('resenas')->insert([
            'comentario' => 'Muy buena atención por parte de los camareros, lo recomiendo para desayuno, comida y cena',
            'puntuacion' => '5',
            'fecha' => '2020/02/10',
            'user_id' => '1',
            'comercio_id' => '13'
        ]);

        DB::table('resenas')->insert([
            'comentario' => 'Nos gusta mucho. Vamos con frecuencia. Te atienden genial. Nos encantan las visitas.',
            'puntuacion' => '4',
            'fecha' => '2019/10/11',
            'user_id' => '2',
            'comercio_id' => '13'
        ]);

        DB::table('resenas')->insert([
            'comentario' => 'Muy malas tapas.',
            'puntuacion' => '1',
            'fecha' => '2020/04/10',
            'user_id' => '3',
            'comercio_id' => '13'
        ]);

        DB::table('resenas')->insert([
            'comentario' => 'Ambiente rancio. Solo se salva por la ubicación.',
            'puntuacion' => '2',
            'fecha' => '2019/10/04',
            'user_id' => '4',
            'comercio_id' => '13'
        ]);

        /************************************************ */

        DB::table('resenas')->insert([
            'comentario' => 'Hamburguesas riquísimas, pero un poco caro',
            'puntuacion' => '4',
            'fecha' => '2020/01/24',
            'user_id' => '1',
            'comercio_id' => '14'
        ]);

        DB::table('resenas')->insert([
            'comentario' => 'Excelente comida, pero la falta de personal hace que la atención disminuya y se genere lentitud',
            'puntuacion' => '1',
            'fecha' => '2019/10/11',
            'user_id' => '2',
            'comercio_id' => '14'
        ]);

        DB::table('resenas')->insert([
            'comentario' => 'En este restaurante da igual lo que pidas, te ponen lo que les da la gana. Hicimos un pedido de 2 hamburguesas muy hechas, unas patatas finas y unas rústicas. Nos trajeron: 2 hamburguesas crudas (no nos las pudimos comer) y dos de patatas rústicas blandas y aceitosas. Por no alargarme acerca de cómo estaban el resto de ingredientes de las hamburguesas. Un desastre, no vuelvo a pedir aquí.',
            'puntuacion' => '1',
            'fecha' => '2020/04/10',
            'user_id' => '3',
            'comercio_id' => '14'
        ]);

        DB::table('resenas')->insert([
            'comentario' => 'Chorreante . La calidad es bastante buena',
            'puntuacion' => '5',
            'fecha' => '2019/10/04',
            'user_id' => '4',
            'comercio_id' => '14'
        ]);

        /************************************************ */

        DB::table('resenas')->insert([
            'comentario' => 'Calidad si, pero un pelin por encima del precio sobre todo los postres son excesivamente caros para lo que se ve por ahí por el mismo precio siendo el mismo postre o parecido.Y los platos igual un pelin por encima.Para ir un par de veces al año y ya',
            'puntuacion' => '4',
            'fecha' => '2020/02/09',
            'user_id' => '1',
            'comercio_id' => '15'
        ]);

        DB::table('resenas')->insert([
            'comentario' => 'Trato y comida genial... Repetiré segurooo',
            'puntuacion' => '5',
            'fecha' => '2019/10/11',
            'user_id' => '2',
            'comercio_id' => '15'
        ]);

        DB::table('resenas')->insert([
            'comentario' => 'Soy mexicano y el chilecito hizo de mi estancia en Almería, mas Feliz de lo que ya estaba, la comida muy buena, los tacos al pastor son muy parecidos a los de México, me encantaria regresar y visitar el chilecito',
            'puntuacion' => '4',
            'fecha' => '2020/04/10',
            'user_id' => '3',
            'comercio_id' => '15'
        ]);

        DB::table('resenas')->insert([
            'comentario' => 'Venden por just eat tacos cuando la masa es de burritos y no de maíz. Ojo, no son tacos originales.',
            'puntuacion' => '3',
            'fecha' => '2019/10/04',
            'user_id' => '4',
            'comercio_id' => '15'
        ]);

        /************************************************ */

        DB::table('resenas')->insert([
            'comentario' => 'Muy buena calidad en las tapas, trato excelente y local muy bien acondicionado',
            'puntuacion' => '5',
            'fecha' => '2020/10/10',
            'user_id' => '1',
            'comercio_id' => '16'
        ]);

        DB::table('resenas')->insert([
            'comentario' => 'Buen sitio con buenas tapas y variadas. Pero ojo!! Algunas como el USUN YUN (tataki de atún) un verdadero TIMO (dos trocitos enanos y eso que tiene suplemento!!!)',
            'puntuacion' => '4',
            'fecha' => '2019/10/11',
            'user_id' => '2',
            'comercio_id' => '16'
        ]);

        DB::table('resenas')->insert([
            'comentario' => 'Espectaculares tapas para consentirse! Las patatas cheesebacon me encantaron. No te vayas sin probarlas. Mi preferida la consentida Usun Yoon',
            'puntuacion' => '5',
            'fecha' => '2020/04/10',
            'user_id' => '3',
            'comercio_id' => '16'
        ]);

        DB::table('resenas')->insert([
            'comentario' => 'Muy buen servicio y una carta muy variada y de buena calidad,... con precios asequibles',
            'puntuacion' => '5',
            'fecha' => '2019/10/04',
            'user_id' => '4',
            'comercio_id' => '16'
        ]);

        /************************************************ */

        DB::table('resenas')->insert([
            'comentario' => 'Excelente, tanto el servicio como la comida. Las tapas deliciosas y muy bien todo calidad precio! Lo recomiendo',
            'puntuacion' => '5',
            'fecha' => '2020/04/10',
            'user_id' => '1',
            'comercio_id' => '17'
        ]);

        DB::table('resenas')->insert([
            'comentario' => 'Excelente tapeo y magnífico el servicio. Muy recomendable',
            'puntuacion' => '4',
            'fecha' => '2019/10/11',
            'user_id' => '2',
            'comercio_id' => '17'
        ]);

        DB::table('resenas')->insert([
            'comentario' => 'Sin lugar a dudas, la comida en sí no está tan buena como la de la Taberna el Andaluz de la Avenida Meditarreneo. Algunas tapas estaban sosas, otras la carne más tiesa y la cerveza deja que desear... La carta de tapas es la misma que la de la otra taberna. Un punto a favor, es que, la atención es rápida y atenta por parte de los camareros. El local es llamativo. En conclusión, es un bar para estar de paso por la zona y que la cocina, está mucho mejor la de la otra taberna.',
            'puntuacion' => '2',
            'fecha' => '2020/04/10',
            'user_id' => '3',
            'comercio_id' => '17'
        ]);

        DB::table('resenas')->insert([
            'comentario' => 'Buen ambiente y buena comida.',
            'puntuacion' => '4',
            'fecha' => '2019/10/04',
            'user_id' => '4',
            'comercio_id' => '17'
        ]);

        /************************************************ */

        DB::table('resenas')->insert([
            'comentario' => 'Muy buena atención por parte de los camareros, lo recomiendo para desayuno, comida y cena',
            'puntuacion' => '5',
            'fecha' => '2020/02/10',
            'user_id' => '1',
            'comercio_id' => '18'
        ]);

        DB::table('resenas')->insert([
            'comentario' => 'Nos gusta mucho. Vamos con frecuencia. Te atienden genial. Nos encantan las visitas.',
            'puntuacion' => '4',
            'fecha' => '2019/10/11',
            'user_id' => '2',
            'comercio_id' => '18'
        ]);

        DB::table('resenas')->insert([
            'comentario' => 'Muy malas tapas.',
            'puntuacion' => '1',
            'fecha' => '2020/04/10',
            'user_id' => '3',
            'comercio_id' => '18'
        ]);

        DB::table('resenas')->insert([
            'comentario' => 'Ambiente rancio. Solo se salva por la ubicación.',
            'puntuacion' => '2',
            'fecha' => '2019/10/04',
            'user_id' => '4',
            'comercio_id' => '18'
        ]);

        /************************************************ */

        DB::table('resenas')->insert([
            'comentario' => 'Hamburguesas riquísimas, pero un poco caro',
            'puntuacion' => '4',
            'fecha' => '2020/01/24',
            'user_id' => '1',
            'comercio_id' => '19'
        ]);

        DB::table('resenas')->insert([
            'comentario' => 'Excelente comida, pero la falta de personal hace que la atención disminuya y se genere lentitud',
            'puntuacion' => '1',
            'fecha' => '2019/10/11',
            'user_id' => '2',
            'comercio_id' => '19'
        ]);

        DB::table('resenas')->insert([
            'comentario' => 'En este restaurante da igual lo que pidas, te ponen lo que les da la gana. Hicimos un pedido de 2 hamburguesas muy hechas, unas patatas finas y unas rústicas. Nos trajeron: 2 hamburguesas crudas (no nos las pudimos comer) y dos de patatas rústicas blandas y aceitosas. Por no alargarme acerca de cómo estaban el resto de ingredientes de las hamburguesas. Un desastre, no vuelvo a pedir aquí.',
            'puntuacion' => '1',
            'fecha' => '2020/04/10',
            'user_id' => '3',
            'comercio_id' => '19'
        ]);

        DB::table('resenas')->insert([
            'comentario' => 'Chorreante . La calidad es bastante buena',
            'puntuacion' => '5',
            'fecha' => '2019/10/04',
            'user_id' => '4',
            'comercio_id' => '19'
        ]);

        /************************************************ */

        DB::table('resenas')->insert([
            'comentario' => 'Calidad si, pero un pelin por encima del precio sobre todo los postres son excesivamente caros para lo que se ve por ahí por el mismo precio siendo el mismo postre o parecido.Y los platos igual un pelin por encima.Para ir un par de veces al año y ya',
            'puntuacion' => '4',
            'fecha' => '2020/02/09',
            'user_id' => '1',
            'comercio_id' => '20'
        ]);

        DB::table('resenas')->insert([
            'comentario' => 'Trato y comida genial... Repetiré segurooo',
            'puntuacion' => '5',
            'fecha' => '2019/10/11',
            'user_id' => '2',
            'comercio_id' => '20'
        ]);

        DB::table('resenas')->insert([
            'comentario' => 'Soy mexicano y el chilecito hizo de mi estancia en Almería, mas Feliz de lo que ya estaba, la comida muy buena, los tacos al pastor son muy parecidos a los de México, me encantaria regresar y visitar el chilecito',
            'puntuacion' => '4',
            'fecha' => '2020/04/10',
            'user_id' => '3',
            'comercio_id' => '20'
        ]);

        DB::table('resenas')->insert([
            'comentario' => 'Venden por just eat tacos cuando la masa es de burritos y no de maíz. Ojo, no son tacos originales.',
            'puntuacion' => '3',
            'fecha' => '2019/10/04',
            'user_id' => '4',
            'comercio_id' => '20'
        ]);

        /************************************************ */


        DB::table('resenas')->insert([
            'comentario' => 'Muy buena calidad en las tapas, trato excelente y local muy bien acondicionado',
            'puntuacion' => '5',
            'fecha' => '2020/10/10',
            'user_id' => '1',
            'comercio_id' => '21'
        ]);

        DB::table('resenas')->insert([
            'comentario' => 'Buen sitio con buenas tapas y variadas. Pero ojo!! Algunas como el USUN YUN (tataki de atún) un verdadero TIMO (dos trocitos enanos y eso que tiene suplemento!!!)',
            'puntuacion' => '4',
            'fecha' => '2019/10/11',
            'user_id' => '2',
            'comercio_id' => '21'
        ]);

        DB::table('resenas')->insert([
            'comentario' => 'Espectaculares tapas para consentirse! Las patatas cheesebacon me encantaron. No te vayas sin probarlas. Mi preferida la consentida Usun Yoon',
            'puntuacion' => '5',
            'fecha' => '2020/04/10',
            'user_id' => '3',
            'comercio_id' => '21'
        ]);

        DB::table('resenas')->insert([
            'comentario' => 'Muy buen servicio y una carta muy variada y de buena calidad,... con precios asequibles',
            'puntuacion' => '5',
            'fecha' => '2019/10/04',
            'user_id' => '4',
            'comercio_id' => '21'
        ]);

        /************************************************ */

        DB::table('resenas')->insert([
            'comentario' => 'Excelente, tanto el servicio como la comida. Las tapas deliciosas y muy bien todo calidad precio! Lo recomiendo',
            'puntuacion' => '5',
            'fecha' => '2020/04/10',
            'user_id' => '1',
            'comercio_id' => '22'
        ]);

        DB::table('resenas')->insert([
            'comentario' => 'Excelente tapeo y magnífico el servicio. Muy recomendable',
            'puntuacion' => '4',
            'fecha' => '2019/10/11',
            'user_id' => '2',
            'comercio_id' => '22'
        ]);

        DB::table('resenas')->insert([
            'comentario' => 'Sin lugar a dudas, la comida en sí no está tan buena como la de la Taberna el Andaluz de la Avenida Meditarreneo. Algunas tapas estaban sosas, otras la carne más tiesa y la cerveza deja que desear... La carta de tapas es la misma que la de la otra taberna. Un punto a favor, es que, la atención es rápida y atenta por parte de los camareros. El local es llamativo. En conclusión, es un bar para estar de paso por la zona y que la cocina, está mucho mejor la de la otra taberna.',
            'puntuacion' => '2',
            'fecha' => '2020/04/10',
            'user_id' => '3',
            'comercio_id' => '22'
        ]);

        DB::table('resenas')->insert([
            'comentario' => 'Buen ambiente y buena comida.',
            'puntuacion' => '4',
            'fecha' => '2019/10/04',
            'user_id' => '4',
            'comercio_id' => '22'
        ]);

        /************************************************ */

        DB::table('resenas')->insert([
            'comentario' => 'Muy buena atención por parte de los camareros, lo recomiendo para desayuno, comida y cena',
            'puntuacion' => '5',
            'fecha' => '2020/02/10',
            'user_id' => '1',
            'comercio_id' => '23'
        ]);

        DB::table('resenas')->insert([
            'comentario' => 'Nos gusta mucho. Vamos con frecuencia. Te atienden genial. Nos encantan las visitas.',
            'puntuacion' => '4',
            'fecha' => '2019/10/11',
            'user_id' => '2',
            'comercio_id' => '23'
        ]);

        DB::table('resenas')->insert([
            'comentario' => 'Muy malas tapas.',
            'puntuacion' => '1',
            'fecha' => '2020/04/10',
            'user_id' => '3',
            'comercio_id' => '23'
        ]);

        DB::table('resenas')->insert([
            'comentario' => 'Ambiente rancio. Solo se salva por la ubicación.',
            'puntuacion' => '2',
            'fecha' => '2019/10/04',
            'user_id' => '4',
            'comercio_id' => '23'
        ]);

        /************************************************ */

        DB::table('resenas')->insert([
            'comentario' => 'Hamburguesas riquísimas, pero un poco caro',
            'puntuacion' => '4',
            'fecha' => '2020/01/24',
            'user_id' => '1',
            'comercio_id' => '24'
        ]);

        DB::table('resenas')->insert([
            'comentario' => 'Excelente comida, pero la falta de personal hace que la atención disminuya y se genere lentitud',
            'puntuacion' => '1',
            'fecha' => '2019/10/11',
            'user_id' => '2',
            'comercio_id' => '24'
        ]);

        DB::table('resenas')->insert([
            'comentario' => 'En este restaurante da igual lo que pidas, te ponen lo que les da la gana. Hicimos un pedido de 2 hamburguesas muy hechas, unas patatas finas y unas rústicas. Nos trajeron: 2 hamburguesas crudas (no nos las pudimos comer) y dos de patatas rústicas blandas y aceitosas. Por no alargarme acerca de cómo estaban el resto de ingredientes de las hamburguesas. Un desastre, no vuelvo a pedir aquí.',
            'puntuacion' => '1',
            'fecha' => '2020/04/10',
            'user_id' => '3',
            'comercio_id' => '24'
        ]);

        DB::table('resenas')->insert([
            'comentario' => 'Chorreante . La calidad es bastante buena',
            'puntuacion' => '5',
            'fecha' => '2019/10/04',
            'user_id' => '4',
            'comercio_id' => '24'
        ]);

        /************************************************ */

        DB::table('resenas')->insert([
            'comentario' => 'Calidad si, pero un pelin por encima del precio sobre todo los postres son excesivamente caros para lo que se ve por ahí por el mismo precio siendo el mismo postre o parecido.Y los platos igual un pelin por encima.Para ir un par de veces al año y ya',
            'puntuacion' => '4',
            'fecha' => '2020/02/09',
            'user_id' => '1',
            'comercio_id' => '25'
        ]);

        DB::table('resenas')->insert([
            'comentario' => 'Trato y comida genial... Repetiré segurooo',
            'puntuacion' => '5',
            'fecha' => '2019/10/11',
            'user_id' => '2',
            'comercio_id' => '25'
        ]);

        DB::table('resenas')->insert([
            'comentario' => 'Soy mexicano y el chilecito hizo de mi estancia en Almería, mas Feliz de lo que ya estaba, la comida muy buena, los tacos al pastor son muy parecidos a los de México, me encantaria regresar y visitar el chilecito',
            'puntuacion' => '4',
            'fecha' => '2020/04/10',
            'user_id' => '3',
            'comercio_id' => '25'
        ]);

        DB::table('resenas')->insert([
            'comentario' => 'Venden por just eat tacos cuando la masa es de burritos y no de maíz. Ojo, no son tacos originales.',
            'puntuacion' => '3',
            'fecha' => '2019/10/04',
            'user_id' => '4',
            'comercio_id' => '25'
        ]);

        /************************************************ */


        DB::table('resenas')->insert([
            'comentario' => 'Muy buena calidad en las tapas, trato excelente y local muy bien acondicionado',
            'puntuacion' => '5',
            'fecha' => '2020/10/10',
            'user_id' => '1',
            'comercio_id' => '26'
        ]);

        DB::table('resenas')->insert([
            'comentario' => 'Buen sitio con buenas tapas y variadas. Pero ojo!! Algunas como el USUN YUN (tataki de atún) un verdadero TIMO (dos trocitos enanos y eso que tiene suplemento!!!)',
            'puntuacion' => '4',
            'fecha' => '2019/10/11',
            'user_id' => '2',
            'comercio_id' => '26'
        ]);

        DB::table('resenas')->insert([
            'comentario' => 'Espectaculares tapas para consentirse! Las patatas cheesebacon me encantaron. No te vayas sin probarlas. Mi preferida la consentida Usun Yoon',
            'puntuacion' => '5',
            'fecha' => '2020/04/10',
            'user_id' => '3',
            'comercio_id' => '26'
        ]);

        DB::table('resenas')->insert([
            'comentario' => 'Muy buen servicio y una carta muy variada y de buena calidad,... con precios asequibles',
            'puntuacion' => '5',
            'fecha' => '2019/10/04',
            'user_id' => '4',
            'comercio_id' => '26'
        ]);

        /************************************************ */

        DB::table('resenas')->insert([
            'comentario' => 'Excelente, tanto el servicio como la comida. Las tapas deliciosas y muy bien todo calidad precio! Lo recomiendo',
            'puntuacion' => '5',
            'fecha' => '2020/04/10',
            'user_id' => '1',
            'comercio_id' => '27'
        ]);

        DB::table('resenas')->insert([
            'comentario' => 'Excelente tapeo y magnífico el servicio. Muy recomendable',
            'puntuacion' => '4',
            'fecha' => '2019/10/11',
            'user_id' => '2',
            'comercio_id' => '27'
        ]);

        DB::table('resenas')->insert([
            'comentario' => 'Sin lugar a dudas, la comida en sí no está tan buena como la de la Taberna el Andaluz de la Avenida Meditarreneo. Algunas tapas estaban sosas, otras la carne más tiesa y la cerveza deja que desear... La carta de tapas es la misma que la de la otra taberna. Un punto a favor, es que, la atención es rápida y atenta por parte de los camareros. El local es llamativo. En conclusión, es un bar para estar de paso por la zona y que la cocina, está mucho mejor la de la otra taberna.',
            'puntuacion' => '2',
            'fecha' => '2020/04/10',
            'user_id' => '3',
            'comercio_id' => '27'
        ]);

        DB::table('resenas')->insert([
            'comentario' => 'Buen ambiente y buena comida.',
            'puntuacion' => '4',
            'fecha' => '2019/10/04',
            'user_id' => '4',
            'comercio_id' => '27'
        ]);

        /************************************************ */

        DB::table('resenas')->insert([
            'comentario' => 'Muy buena atención por parte de los camareros, lo recomiendo para desayuno, comida y cena',
            'puntuacion' => '5',
            'fecha' => '2020/02/10',
            'user_id' => '1',
            'comercio_id' => '28'
        ]);

        DB::table('resenas')->insert([
            'comentario' => 'Nos gusta mucho. Vamos con frecuencia. Te atienden genial. Nos encantan las visitas.',
            'puntuacion' => '4',
            'fecha' => '2019/10/11',
            'user_id' => '2',
            'comercio_id' => '28'
        ]);

        DB::table('resenas')->insert([
            'comentario' => 'Muy malas tapas.',
            'puntuacion' => '1',
            'fecha' => '2020/04/10',
            'user_id' => '3',
            'comercio_id' => '28'
        ]);

        DB::table('resenas')->insert([
            'comentario' => 'Ambiente rancio. Solo se salva por la ubicación.',
            'puntuacion' => '2',
            'fecha' => '2019/10/04',
            'user_id' => '4',
            'comercio_id' => '28'
        ]);

        /************************************************ */

        DB::table('resenas')->insert([
            'comentario' => 'Hamburguesas riquísimas, pero un poco caro',
            'puntuacion' => '4',
            'fecha' => '2020/01/24',
            'user_id' => '1',
            'comercio_id' => '29'
        ]);

        DB::table('resenas')->insert([
            'comentario' => 'Excelente comida, pero la falta de personal hace que la atención disminuya y se genere lentitud',
            'puntuacion' => '1',
            'fecha' => '2019/10/11',
            'user_id' => '2',
            'comercio_id' => '29'
        ]);

        DB::table('resenas')->insert([
            'comentario' => 'En este restaurante da igual lo que pidas, te ponen lo que les da la gana. Hicimos un pedido de 2 hamburguesas muy hechas, unas patatas finas y unas rústicas. Nos trajeron: 2 hamburguesas crudas (no nos las pudimos comer) y dos de patatas rústicas blandas y aceitosas. Por no alargarme acerca de cómo estaban el resto de ingredientes de las hamburguesas. Un desastre, no vuelvo a pedir aquí.',
            'puntuacion' => '1',
            'fecha' => '2020/04/10',
            'user_id' => '3',
            'comercio_id' => '29'
        ]);

        DB::table('resenas')->insert([
            'comentario' => 'Chorreante . La calidad es bastante buena',
            'puntuacion' => '5',
            'fecha' => '2019/10/04',
            'user_id' => '4',
            'comercio_id' => '29'
        ]);

        /************************************************ */

        DB::table('resenas')->insert([
            'comentario' => 'Calidad si, pero un pelin por encima del precio sobre todo los postres son excesivamente caros para lo que se ve por ahí por el mismo precio siendo el mismo postre o parecido.Y los platos igual un pelin por encima.Para ir un par de veces al año y ya',
            'puntuacion' => '4',
            'fecha' => '2020/02/09',
            'user_id' => '1',
            'comercio_id' => '30'
        ]);

        DB::table('resenas')->insert([
            'comentario' => 'Trato y comida genial... Repetiré segurooo',
            'puntuacion' => '5',
            'fecha' => '2019/10/11',
            'user_id' => '2',
            'comercio_id' => '30'
        ]);

        DB::table('resenas')->insert([
            'comentario' => 'Soy mexicano y el chilecito hizo de mi estancia en Almería, mas Feliz de lo que ya estaba, la comida muy buena, los tacos al pastor son muy parecidos a los de México, me encantaria regresar y visitar el chilecito',
            'puntuacion' => '4',
            'fecha' => '2020/04/10',
            'user_id' => '3',
            'comercio_id' => '30'
        ]);

        DB::table('resenas')->insert([
            'comentario' => 'Venden por just eat tacos cuando la masa es de burritos y no de maíz. Ojo, no son tacos originales.',
            'puntuacion' => '3',
            'fecha' => '2019/10/04',
            'user_id' => '4',
            'comercio_id' => '30'
        ]);

        /************************************************ */


        DB::table('resenas')->insert([
            'comentario' => 'Muy buena calidad en las tapas, trato excelente y local muy bien acondicionado',
            'puntuacion' => '5',
            'fecha' => '2020/10/10',
            'user_id' => '1',
            'comercio_id' => '31'
        ]);

        DB::table('resenas')->insert([
            'comentario' => 'Buen sitio con buenas tapas y variadas. Pero ojo!! Algunas como el USUN YUN (tataki de atún) un verdadero TIMO (dos trocitos enanos y eso que tiene suplemento!!!)',
            'puntuacion' => '4',
            'fecha' => '2019/10/11',
            'user_id' => '2',
            'comercio_id' => '31'
        ]);

        DB::table('resenas')->insert([
            'comentario' => 'Espectaculares tapas para consentirse! Las patatas cheesebacon me encantaron. No te vayas sin probarlas. Mi preferida la consentida Usun Yoon',
            'puntuacion' => '5',
            'fecha' => '2020/04/10',
            'user_id' => '3',
            'comercio_id' => '31'
        ]);

        DB::table('resenas')->insert([
            'comentario' => 'Muy buen servicio y una carta muy variada y de buena calidad,... con precios asequibles',
            'puntuacion' => '5',
            'fecha' => '2019/10/04',
            'user_id' => '4',
            'comercio_id' => '31'
        ]);

        /************************************************ */

        DB::table('resenas')->insert([
            'comentario' => 'Excelente, tanto el servicio como la comida. Las tapas deliciosas y muy bien todo calidad precio! Lo recomiendo',
            'puntuacion' => '5',
            'fecha' => '2020/04/10',
            'user_id' => '1',
            'comercio_id' => '32'
        ]);

        DB::table('resenas')->insert([
            'comentario' => 'Excelente tapeo y magnífico el servicio. Muy recomendable',
            'puntuacion' => '4',
            'fecha' => '2019/10/11',
            'user_id' => '2',
            'comercio_id' => '32'
        ]);

        DB::table('resenas')->insert([
            'comentario' => 'Sin lugar a dudas, la comida en sí no está tan buena como la de la Taberna el Andaluz de la Avenida Meditarreneo. Algunas tapas estaban sosas, otras la carne más tiesa y la cerveza deja que desear... La carta de tapas es la misma que la de la otra taberna. Un punto a favor, es que, la atención es rápida y atenta por parte de los camareros. El local es llamativo. En conclusión, es un bar para estar de paso por la zona y que la cocina, está mucho mejor la de la otra taberna.',
            'puntuacion' => '2',
            'fecha' => '2020/04/10',
            'user_id' => '3',
            'comercio_id' => '32'
        ]);

        DB::table('resenas')->insert([
            'comentario' => 'Buen ambiente y buena comida.',
            'puntuacion' => '4',
            'fecha' => '2019/10/04',
            'user_id' => '4',
            'comercio_id' => '32'
        ]);

        /************************************************ */

        DB::table('resenas')->insert([
            'comentario' => 'Muy buena atención por parte de los camareros, lo recomiendo para desayuno, comida y cena',
            'puntuacion' => '5',
            'fecha' => '2020/02/10',
            'user_id' => '1',
            'comercio_id' => '33'
        ]);

        DB::table('resenas')->insert([
            'comentario' => 'Nos gusta mucho. Vamos con frecuencia. Te atienden genial. Nos encantan las visitas.',
            'puntuacion' => '4',
            'fecha' => '2019/10/11',
            'user_id' => '2',
            'comercio_id' => '33'
        ]);

        DB::table('resenas')->insert([
            'comentario' => 'Muy malas tapas.',
            'puntuacion' => '1',
            'fecha' => '2020/04/10',
            'user_id' => '3',
            'comercio_id' => '33'
        ]);

        DB::table('resenas')->insert([
            'comentario' => 'Ambiente rancio. Solo se salva por la ubicación.',
            'puntuacion' => '2',
            'fecha' => '2019/10/04',
            'user_id' => '4',
            'comercio_id' => '33'
        ]);

        /************************************************ */

        DB::table('resenas')->insert([
            'comentario' => 'Hamburguesas riquísimas, pero un poco caro',
            'puntuacion' => '4',
            'fecha' => '2020/01/24',
            'user_id' => '1',
            'comercio_id' => '34'
        ]);

        DB::table('resenas')->insert([
            'comentario' => 'Excelente comida, pero la falta de personal hace que la atención disminuya y se genere lentitud',
            'puntuacion' => '1',
            'fecha' => '2019/10/11',
            'user_id' => '2',
            'comercio_id' => '34'
        ]);

        DB::table('resenas')->insert([
            'comentario' => 'En este restaurante da igual lo que pidas, te ponen lo que les da la gana. Hicimos un pedido de 2 hamburguesas muy hechas, unas patatas finas y unas rústicas. Nos trajeron: 2 hamburguesas crudas (no nos las pudimos comer) y dos de patatas rústicas blandas y aceitosas. Por no alargarme acerca de cómo estaban el resto de ingredientes de las hamburguesas. Un desastre, no vuelvo a pedir aquí.',
            'puntuacion' => '1',
            'fecha' => '2020/04/10',
            'user_id' => '3',
            'comercio_id' => '34'
        ]);

        DB::table('resenas')->insert([
            'comentario' => 'Chorreante . La calidad es bastante buena',
            'puntuacion' => '5',
            'fecha' => '2019/10/04',
            'user_id' => '4',
            'comercio_id' => '34'
        ]);

        /************************************************ */

        DB::table('resenas')->insert([
            'comentario' => 'Calidad si, pero un pelin por encima del precio sobre todo los postres son excesivamente caros para lo que se ve por ahí por el mismo precio siendo el mismo postre o parecido.Y los platos igual un pelin por encima.Para ir un par de veces al año y ya',
            'puntuacion' => '4',
            'fecha' => '2020/02/09',
            'user_id' => '1',
            'comercio_id' => '35'
        ]);

        DB::table('resenas')->insert([
            'comentario' => 'Trato y comida genial... Repetiré segurooo',
            'puntuacion' => '5',
            'fecha' => '2019/10/11',
            'user_id' => '2',
            'comercio_id' => '35'
        ]);

        DB::table('resenas')->insert([
            'comentario' => 'Soy mexicano y el chilecito hizo de mi estancia en Almería, mas Feliz de lo que ya estaba, la comida muy buena, los tacos al pastor son muy parecidos a los de México, me encantaria regresar y visitar el chilecito',
            'puntuacion' => '4',
            'fecha' => '2020/04/10',
            'user_id' => '3',
            'comercio_id' => '35'
        ]);

        DB::table('resenas')->insert([
            'comentario' => 'Venden por just eat tacos cuando la masa es de burritos y no de maíz. Ojo, no son tacos originales.',
            'puntuacion' => '3',
            'fecha' => '2019/10/04',
            'user_id' => '4',
            'comercio_id' => '35'
        ]);

        /************************************************ */
    }
}
