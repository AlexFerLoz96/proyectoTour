<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Comercio;
use DB;

class ComerciosTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Comercio::truncate(); // Optativo: vacía la tabla antes de rellenarla
        DB::table('comercios')->insert([
            'nombre' => 'La consentida',
            'ubicacion' => 'Plaza Antonio González Egea, 04001 Almería',
            'descripcion' => 'Sed bienvenidos a la Brasería la Consentida. Nuestra filosofía de trabajo se basa en hacer sentir a nuestros clientes unos auténticos consentid@s. Somos especialistas en carnes a la brasa pero no por ello nuestras tapas son solo de carne, disponemos de una de la más amplia variedad de tapas en Almería. ¡Os esperamos a tod@s!',
            'prioridad' => '1',
            'categoria_id' => '1'
        ]);

        DB::table('comercios')->insert([
            'nombre' => 'Taberna El Andaluz',
            'ubicacion' => 'Calle Marín, 14, 04003 Almería',
            'descripcion' => 'Nos complace darle la bienvenida a nuestro comercio e invitarle a conocer más de cerca nuestro local y nuestra excelente cocina. Tanto si se decanta por los platos clásicos como por las innovaciones: nuestros menús y la oferta de temporada satisfarán al paladar más exigente.',
            'prioridad' => '1',
            'categoria_id' => '1'
        ]);

        DB::table('comercios')->insert([
            'nombre' => 'La Tahona Bar & Tapas',
            'ubicacion' => 'Plaza de la Constitución, 3, 04003 Almería',
            'descripcion' => 'En Restaurantes La Tahona llevamos muchos años trabajando para mejorar la calidad en nuestros productos y servicios. Elaboramos tapas selectas de la mejor calidad y merecedoras de los inumerables premios de los certámentes Ruta de Tapas y Tapas de Película. Elaboramos nuestra propia cerveza artesanal tostada con un toque a mandarina. Además estamos situados en un sitio emblemático de la ciudad, la Plaza Vieja de Almería.',
            'prioridad' => '1',
            'categoria_id' => '1'
        ]);

        DB::table('comercios')->insert([
            'nombre' => 'Goiko',
            'ubicacion' => 'Calle Rambla Obispo Orberá, 11, 04001 Almería',
            'descripcion' => 'GOIKO es el lugar donde puedes dejarte llevar por el placer de las burgers más irresistibles y de mejor calidad, donde puedes rendirte a tus impulsos y disfrutar del chorreo sin que te importe mancharte las manos. ... Si te preguntan «¿Te hace un GOIKO?» solo podrás responder «F*CK YEAH!»',
            'prioridad' => '1',
            'categoria_id' => '1'
        ]);

        DB::table('comercios')->insert([
            'nombre' => 'El Chilecito',
            'ubicacion' => 'Av. Federico García Lorca, 117, 04004 Almería',
            'descripcion' => 'Este restaurante se ha especializado en cocina mexicana. El Chilecito te ofrece sus singulares tacos, su bien trabajado laing y sus generosos nachos. Empieza tu comida con una deliciosa cerveza.

        Se comenta que aquí el personal es extraordinario. Este lugar brinda un magnífico servicio a sus comensales. Se dice que aquí los precios son interesantes. En este lugar, sus invitados disfrutan de un ambiente encantador y de una decoración divina.',
            'prioridad' => '1',
            'categoria_id' => '1'
        ]);

        DB::table('comercios')->insert([
            'nombre' => 'AC Hotel Almeria',
            'ubicacion' => 'Plaza De Las Flores, 5, 04001 Almería',
            'descripcion' => 'El AC Hotel Almería está ubicado en el corazón del centro histórico y comercial de la provincia y localidad de Almería, cerca de la Alcazaba, y permite un fácil acceso al aeropuerto, Museo Arqueológico, estación de tren, recinto ferial, playa y mar. -Paseo lateral. Aproveche la conexión inalámbrica a internet gratuita en todo el hotel. Nuestro hotel de 4 estrellas también cuenta con 8 salones de eventos, habitaciones para no fumadores, cajas de seguridad, instalaciones para negocios y un restaurante, "El Asador".',
            'prioridad' => '1',
            'categoria_id' => '3'
        ]);

        DB::table('comercios')->insert([
            'nombre' => 'Restaurante La Cala',
            'ubicacion' => 'Calle Navarro Rodrigo, 8, 04001 Almería',
            'descripcion' => 'Los platos de sus cocinas mediterránea y española están muy bien elaborados en este bar. Te va a encantar su comida, especialmente su bien trabajado pescado, sus sabrosas tapas y su sorprendente laing. Merece la pena degustar aquí una buena cerveza o un sensacional vino.

        Su alegre personal demuestra un alto nivel de calidad en La Cala. Su magnífico servicio es algo que estos restauradores saben cuidar. Los adecuados precios de este lugar siempre son una buena noticia para sus comensales. Sin duda vas a agradecer su silencioso ambiente y su agradable decoración.',
            'prioridad' => '1',
            'categoria_id' => '1'
        ]);

        DB::table('comercios')->insert([
            'nombre' => 'Taberna',
            'ubicacion' => 'Calle la Unión, 7, 04001 Almería',
            'descripcion' => 'Si la lluvia te ha sorprendido de camino a Parroquia de San Pedro Apostol, refúgiate en este restaurante. Las cocinas española y vegetariana son excelentes en El Candil. Ofrecer unas magníficas tapas, un bien trabajado hummus y unos fascinantes salmorejo es la principal característica de este lugar. Prueba su singular milhojas. Degusta una excelente cerveza o un buen vino en este lugar.

        Comprueba por ti mismo lo serviciales que son sus camareros y camareras. Tal y como una serie de críticos afirman, el servicio es correcto. Sus precios adecuados son una de esas cosas que se deben mencionar al hablar de este restaurante. Una decoración sorprendente y su ambiente encantador ayudan a sus clientes a sentirse relajados.
        Un encuentro con una culttura desconocida, cocina tradicional india, cocina fusión y toques mediterráneos.
        Naan, currys, y biryanis son algunas cosas que os podeis encontrar sin tener que volar.',
            'prioridad' => '1',
            'categoria_id' => '1'
        ]);

        DB::table('comercios')->insert([
            'nombre' => 'La Mala',
            'ubicacion' => 'Calle Martínez Almagro, 6, 04001 Almería',
            'descripcion' => 'Una de las atracciones turísticas locales, Iglesia de la Virgen del Mar, está muy cerca de este bar, y forma parte de la cultura única de la ciudad. En La mala, te servirán cocina española. Su famosa tortilla de patata, sabrosa tortilla de champiñones y extraordinario tataki de atún te van a saber estupendamente. Una serie de clientes han notado que puedes comer aquí con confianza unos bien preparados brownies, una casera tarta y una generosa tarta de queso. Este lugar te ofrece su insuperable cerveza artesanal, su delicioso vino y su sorprendente cordial. Es estupendo poder pedir un espectacular café cortado o una excelente limonada.

            El ambiente cálido de este lugar permite a sus invitados relajarse tras un duro día de trabajo. Se comenta que aquí el personal es exquisito. Su divino servicio demuestra el alto nivel de calidad de este bar. La mayoría de usuarios se han dado cuenta de que los precios son interesantes para lo que te dan. Su excepcional decoración te sorprenderá gratamente.',
            'prioridad' => '1',
            'categoria_id' => '1'
        ]);

        DB::table('comercios')->insert([
            'nombre' => 'Barceló Cabo de Gata',
            'ubicacion' => 'Urbanización El Toyo, Calle de los Juegos de Casablanca, 04131 Retamar, Almería',
            'descripcion' => 'Hotel frente al mar con piscinas, restaurantes, spa y habitaciones y suites con balcón.',
            'prioridad' => '2',
            'categoria_id' => '3'
        ]);

        DB::table('comercios')->insert([
            'nombre' => 'Restaurante La Tagliatella',
            'ubicacion' => 'Calle Ribera de las Almadrabillas, 2, 04004 Almería',
            'descripcion' => 'Iluminación cálida y adornos hogareños antiguos en cadena de restaurantes de gastronomía tradicional italiana.',
            'prioridad' => '2',
            'categoria_id' => '1'
        ]);

        DB::table('comercios')->insert([
            'nombre' => 'Tetería Almedina',
            'ubicacion' => 'Calle Paz, 2, 04002 Almería',
            'descripcion' => 'Ambiente íntimo, artesanía, sofás y taburetes y mesas bajos en restaurante halal y tetería con dulces árabes.',
            'prioridad' => '2',
            'categoria_id' => '1'
        ]);

        DB::table('comercios')->insert([
            'nombre' => 'Hotel Nuevo Torreluz Almeria',
            'ubicacion' => 'Plaza Flores, 10, 04001 Almería',
            'descripcion' => 'Este hotel sin pretensiones se encuentra en el centro de la ciudad, a 1 km de la estación de tren de Almería y de la Alcazaba, y a 5 minutos a pie de la catedral.

            Las habitaciones son funcionales y cuentan con Wi‑Fi gratis, minibar y televisión de pantalla plana. Las suites incluyen sofá cama. Hay servicio de habitaciones.

            El hotel sirve desayuno por un suplemento y dispone de un bar abierto las 24 horas, un restaurante de cocina mediterránea con terraza, un solárium en la azotea con bañera de hidromasaje y tumbonas, gimnasio y aparcamiento.',
            'prioridad' => '2',
            'categoria_id' => '3'
        ]);

        DB::table('comercios')->insert([
            'nombre' => 'El Quinto Toro',
            'ubicacion' => 'Calle Juan Leal, 6, 04001 Almería',
            'descripcion' => 'Una de las atracciones turísticas locales, Paseo de Almeria, está muy cerca de este bar, y forma parte de la cultura original de esta ciudad. Entre otros establecimientos de cocina española en los que comer, El Quinto Toro puede estar entre los más reconocidos. Invita a tus personas queridas y tomad sus sabrosas tapas, sus famosos patatas y su perfectamente elaborado laing. Es estupendo poder pedir una insuperable cerveza de grifo, un buen vino o un sensacional fino. Su extraordinaria limonada es el punto clave de este lugar.

            La estupenda ubicación de este lugar hace que llegar a él por cualquier medio sea muy sencillo. El estupendo personal de este bar demuestra lo mucho que valora a sus clientes. Descansar y comer aquí es siempre un placer, principalmente por su magnífico servicio. Los asiduos de El Quinto Toro dicen que sus precios les han parecido interesantes. Una decoración admirable y su ambiente encantador ayudan a sus clientes a sentirse relajados.',
            'prioridad' => '2',
            'categoria_id' => '1'
        ]);

        DB::table('comercios')->insert([
            'nombre' => 'Mini Bar',
            'ubicacion' => 'Calle Rueda López, 19, 04004 Almería',
            'descripcion' => 'Una vez que hayas disfrutado de Paseo de Almeria, visita este restaurante, que no está muy lejos. Si disfrutas de las cocinas mediterránea y española, completa tu colección en Mini Bar. Prueba sus magníficas tapas, su fascinante cerdo y sus singulares gambas.

            Es fácil encontrar este lugar gracias a su gran ubicación. Un gran número de usuarios destacan que puedes tomar una espectacular cerveza en este lugar. Recomienda a sus visitantes distintas variantes de su estupendo café cortado. Muchos clientes estiman que aquí los camareros y camareras son acogedores. Cada vez que vengas, notarás su divino servicio. Su encantador ambiente alegra el corazón de sus asiduos y atrae nuevos clientes.',
            'prioridad' => '2',
            'categoria_id' => '1'
        ]);

        DB::table('comercios')->insert([
            'nombre' => 'La Cabaña del Tio Tom',
            'ubicacion' => 'Calle Joaquín Vázquez, 2, Almería',
            'descripcion' => 'En este bar van a ofrecerte una carta variada basada en la cocina española. Sus sabrosas tapas, generoso entrecot y sorprendente entrecote te van a saber increíblemente bien. Muchos críticos se han dado cuenta de que aquí puedes comer con confianza un bien valorado pudin. Pide su insuperable cerveza, sus deliciosos tinto de verano o sus espectaculares tinto de verano. La limonada que podrás pedir aquí es sensacional.

            La buenísima ubicación de La Cabaña del Tío Tom hace que llegar a él por cualquier medio sea muy sencillo. La mayoría de clientes suponen que en este establecimiento los camareros y camareras son habladores. Una serie de usuarios mencionan que el servicio es aceptable. Según el punto de vista de los usuarios, sus precios son buenos. Sin duda vas a disfrutar de su agradable ambiente y su atrayente decoración.',
            'prioridad' => '2',
            'categoria_id' => '1'
        ]);

        DB::table('comercios')->insert([
            'nombre' => 'Taberna El Andaluz',
            'ubicacion' => 'Calle Felipe II 80 04009, Almería',
            'descripcion' => 'Los clientes recomiendan los platos de la cocina española de este bar. Con sus famosas tapas, su perfectamente elaborado laing y su singular teriyaki de atún te llevarás una espléndida impresión. Si todavía no has degustado la sabrosa tarta, la generosa tarta de chocolate o el delicado milhojas de Taberna El Andaluz, entonces no has disfrutado aún de la vida.

            La estupenda ubicación de este lugar hace que llegar a él por cualquier medio sea muy sencillo. Según las opiniones de los usuarios, aquí sus camareros ofrecen una sensacional cerveza de grifo, un buen vino y una deliciosa cerveza de barril. Cuando visites este lugar, tienes que probar su excelente café cortado. Muchos visitantes apuntan que aquí los camareros y camareras son serviciales. Su divino servicio es siempre un placer. Te van a sorprender sus precios razonables. En este bar, sus comensales disfrutan de un ambiente encantador y de una decoración interesante.',
            'prioridad' => '2',
            'categoria_id' => '1'
        ]);

        DB::table('comercios')->insert([
            'nombre' => 'Ohtels Gran Hotel Almería',
            'ubicacion' => 'Calle Reina Regente, 8, 04001 Almería',
            'descripcion' => 'Este sofisticado hotel, con vistas al puerto de Almería, se encuentra a 11 minutos a pie de la estación de tren, a 14 de la playa del Zapillo y a 2 km de la Alcazaba.

            Las habitaciones y suites son funcionales y tienen Wi‑Fi gratis, televisión por satélite, balcón, minibar y, en algunos casos, vistas al mar. Las suites incluyen zona de estar independiente. Hay servicio de habitaciones. Los menores de 4 años se alojan gratis con un adulto.

            El hotel dispone de un bar restaurante refinado de cocina regional, piscina exterior, aparcamiento de pago y espacio para eventos y reuniones. Se admiten mascotas.',
            'prioridad' => '2',
            'categoria_id' => '3'
            ]);
    }
}
