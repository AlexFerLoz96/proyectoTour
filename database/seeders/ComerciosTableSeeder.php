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
        DB::table('comercios')->insert([//1
            'nombre' => 'La consentida',
            'ubicacion' => 'Plaza Antonio González Egea, 04001 Almería',
            'descripcion' => 'Sed bienvenidos a la Brasería la Consentida. Nuestra filosofía de trabajo se basa en hacer sentir a nuestros clientes unos auténticos consentid@s. Somos especialistas en carnes a la brasa pero no por ello nuestras tapas son solo de carne, disponemos de una de la más amplia variedad de tapas en Almería. ¡Os esperamos a tod@s!',
            'prioridad' => '1',
            'categoria_id' => '1'
        ]);

        DB::table('comercios')->insert([//2
            'nombre' => 'Taberna El Andaluz',
            'ubicacion' => 'Calle Marín, 14, 04003 Almería',
            'descripcion' => 'Nos complace darle la bienvenida a nuestro comercio e invitarle a conocer más de cerca nuestro local y nuestra excelente cocina. Tanto si se decanta por los platos clásicos como por las innovaciones: nuestros menús y la oferta de temporada satisfarán al paladar más exigente.',
            'prioridad' => '1',
            'categoria_id' => '1'
        ]);

        DB::table('comercios')->insert([//3
            'nombre' => 'La Tahona Bar & Tapas',
            'ubicacion' => 'Plaza de la Constitución, 3, 04003 Almería',
            'descripcion' => 'En Restaurantes La Tahona llevamos muchos años trabajando para mejorar la calidad en nuestros productos y servicios. Elaboramos tapas selectas de la mejor calidad y merecedoras de los inumerables premios de los certámentes Ruta de Tapas y Tapas de Película. Elaboramos nuestra propia cerveza artesanal tostada con un toque a mandarina. Además estamos situados en un sitio emblemático de la ciudad, la Plaza Vieja de Almería.',
            'prioridad' => '1',
            'categoria_id' => '1'
        ]);

        DB::table('comercios')->insert([//4
            'nombre' => 'Goiko',
            'ubicacion' => 'Calle Rambla Obispo Orberá, 11, 04001 Almería',
            'descripcion' => 'GOIKO es el lugar donde puedes dejarte llevar por el placer de las burgers más irresistibles y de mejor calidad, donde puedes rendirte a tus impulsos y disfrutar del chorreo sin que te importe mancharte las manos. ... Si te preguntan «¿Te hace un GOIKO?» solo podrás responder «F*CK YEAH!»',
            'prioridad' => '1',
            'categoria_id' => '1'
        ]);

        DB::table('comercios')->insert([//5
            'nombre' => 'El Chilecito',
            'ubicacion' => 'Av. Federico García Lorca, 117, 04004 Almería',
            'descripcion' => 'Este restaurante se ha especializado en cocina mexicana. El Chilecito te ofrece sus singulares tacos, su bien trabajado laing y sus generosos nachos. Empieza tu comida con una deliciosa cerveza.

        Se comenta que aquí el personal es extraordinario. Este lugar brinda un magnífico servicio a sus comensales. Se dice que aquí los precios son interesantes. En este lugar, sus invitados disfrutan de un ambiente encantador y de una decoración divina.',
            'prioridad' => '1',
            'categoria_id' => '1'
        ]);

        DB::table('comercios')->insert([//6
            'nombre' => 'AC Hotel Almeria',
            'ubicacion' => 'Plaza De Las Flores, 5, 04001 Almería',
            'descripcion' => 'El AC Hotel Almería está ubicado en el corazón del centro histórico y comercial de la provincia y localidad de Almería, cerca de la Alcazaba, y permite un fácil acceso al aeropuerto, Museo Arqueológico, estación de tren, recinto ferial, playa y mar. -Paseo lateral. Aproveche la conexión inalámbrica a internet gratuita en todo el hotel. Nuestro hotel de 4 estrellas también cuenta con 8 salones de eventos, habitaciones para no fumadores, cajas de seguridad, instalaciones para negocios y un restaurante, "El Asador".',
            'prioridad' => '1',
            'categoria_id' => '3'
        ]);

        DB::table('comercios')->insert([//7
            'nombre' => 'Restaurante La Cala',
            'ubicacion' => 'Calle Navarro Rodrigo, 8, 04001 Almería',
            'descripcion' => 'Los platos de sus cocinas mediterránea y española están muy bien elaborados en este bar. Te va a encantar su comida, especialmente su bien trabajado pescado, sus sabrosas tapas y su sorprendente laing. Merece la pena degustar aquí una buena cerveza o un sensacional vino.

        Su alegre personal demuestra un alto nivel de calidad en La Cala. Su magnífico servicio es algo que estos restauradores saben cuidar. Los adecuados precios de este lugar siempre son una buena noticia para sus comensales. Sin duda vas a agradecer su silencioso ambiente y su agradable decoración.',
            'prioridad' => '1',
            'categoria_id' => '1'
        ]);

        DB::table('comercios')->insert([//8
            'nombre' => 'La Taberna',
            'ubicacion' => 'Calle la Unión, 7, 04001 Almería',
            'descripcion' => 'Si la lluvia te ha sorprendido de camino a Parroquia de San Pedro Apostol, refúgiate en este restaurante. Las cocinas española y vegetariana son excelentes en El Candil. Ofrecer unas magníficas tapas, un bien trabajado hummus y unos fascinantes salmorejo es la principal característica de este lugar. Prueba su singular milhojas. Degusta una excelente cerveza o un buen vino en este lugar.

        Comprueba por ti mismo lo serviciales que son sus camareros y camareras. Tal y como una serie de críticos afirman, el servicio es correcto. Sus precios adecuados son una de esas cosas que se deben mencionar al hablar de este restaurante. Una decoración sorprendente y su ambiente encantador ayudan a sus clientes a sentirse relajados.
        Un encuentro con una culttura desconocida, cocina tradicional india, cocina fusión y toques mediterráneos.
        Naan, currys, y biryanis son algunas cosas que os podeis encontrar sin tener que volar.',
            'prioridad' => '1',
            'categoria_id' => '1'
        ]);

        DB::table('comercios')->insert([//9
            'nombre' => 'La Mala',
            'ubicacion' => 'Calle Martínez Almagro, 6, 04001 Almería',
            'descripcion' => 'Una de las atracciones turísticas locales, Iglesia de la Virgen del Mar, está muy cerca de este bar, y forma parte de la cultura única de la ciudad. En La mala, te servirán cocina española. Su famosa tortilla de patata, sabrosa tortilla de champiñones y extraordinario tataki de atún te van a saber estupendamente. Una serie de clientes han notado que puedes comer aquí con confianza unos bien preparados brownies, una casera tarta y una generosa tarta de queso. Este lugar te ofrece su insuperable cerveza artesanal, su delicioso vino y su sorprendente cordial. Es estupendo poder pedir un espectacular café cortado o una excelente limonada.

            El ambiente cálido de este lugar permite a sus invitados relajarse tras un duro día de trabajo. Se comenta que aquí el personal es exquisito. Su divino servicio demuestra el alto nivel de calidad de este bar. La mayoría de usuarios se han dado cuenta de que los precios son interesantes para lo que te dan. Su excepcional decoración te sorprenderá gratamente.',
            'prioridad' => '1',
            'categoria_id' => '1'
        ]);

        DB::table('comercios')->insert([//10
            'nombre' => 'Barceló Cabo de Gata',
            'ubicacion' => 'Urbanización El Toyo, Calle de los Juegos de Casablanca, 04131 Retamar, Almería',
            'descripcion' => 'Hotel frente al mar con piscinas, restaurantes, spa y habitaciones y suites con balcón.',
            'prioridad' => '2',
            'categoria_id' => '3'
        ]);

        DB::table('comercios')->insert([//11
            'nombre' => 'Restaurante La Tagliatella',
            'ubicacion' => 'Calle Ribera de las Almadrabillas, 2, 04004 Almería',
            'descripcion' => 'Iluminación cálida y adornos hogareños antiguos en cadena de restaurantes de gastronomía tradicional italiana.',
            'prioridad' => '2',
            'categoria_id' => '1'
        ]);

        DB::table('comercios')->insert([//12
            'nombre' => 'Tetería Almedina',
            'ubicacion' => 'Calle Paz, 2, 04002 Almería',
            'descripcion' => 'Ambiente íntimo, artesanía, sofás y taburetes y mesas bajos en restaurante halal y tetería con dulces árabes.',
            'prioridad' => '2',
            'categoria_id' => '1'
        ]);

        DB::table('comercios')->insert([//13
            'nombre' => 'Hotel Nuevo Torreluz Almeria',
            'ubicacion' => 'Plaza Flores, 10, 04001 Almería',
            'descripcion' => 'Este hotel sin pretensiones se encuentra en el centro de la ciudad, a 1 km de la estación de tren de Almería y de la Alcazaba, y a 5 minutos a pie de la catedral.

            Las habitaciones son funcionales y cuentan con Wi‑Fi gratis, minibar y televisión de pantalla plana. Las suites incluyen sofá cama. Hay servicio de habitaciones.

            El hotel sirve desayuno por un suplemento y dispone de un bar abierto las 24 horas, un restaurante de cocina mediterránea con terraza, un solárium en la azotea con bañera de hidromasaje y tumbonas, gimnasio y aparcamiento.',
            'prioridad' => '2',
            'categoria_id' => '3'
        ]);

        DB::table('comercios')->insert([//14
            'nombre' => 'El Quinto Toro',
            'ubicacion' => 'Calle Juan Leal, 6, 04001 Almería',
            'descripcion' => 'Una de las atracciones turísticas locales, Paseo de Almeria, está muy cerca de este bar, y forma parte de la cultura original de esta ciudad. Entre otros establecimientos de cocina española en los que comer, El Quinto Toro puede estar entre los más reconocidos. Invita a tus personas queridas y tomad sus sabrosas tapas, sus famosos patatas y su perfectamente elaborado laing. Es estupendo poder pedir una insuperable cerveza de grifo, un buen vino o un sensacional fino. Su extraordinaria limonada es el punto clave de este lugar.

            La estupenda ubicación de este lugar hace que llegar a él por cualquier medio sea muy sencillo. El estupendo personal de este bar demuestra lo mucho que valora a sus clientes. Descansar y comer aquí es siempre un placer, principalmente por su magnífico servicio. Los asiduos de El Quinto Toro dicen que sus precios les han parecido interesantes. Una decoración admirable y su ambiente encantador ayudan a sus clientes a sentirse relajados.',
            'prioridad' => '2',
            'categoria_id' => '1'
        ]);

        DB::table('comercios')->insert([//15
            'nombre' => 'Mini Bar',
            'ubicacion' => 'Calle Rueda López, 19, 04004 Almería',
            'descripcion' => 'Una vez que hayas disfrutado de Paseo de Almeria, visita este restaurante, que no está muy lejos. Si disfrutas de las cocinas mediterránea y española, completa tu colección en Mini Bar. Prueba sus magníficas tapas, su fascinante cerdo y sus singulares gambas.

            Es fácil encontrar este lugar gracias a su gran ubicación. Un gran número de usuarios destacan que puedes tomar una espectacular cerveza en este lugar. Recomienda a sus visitantes distintas variantes de su estupendo café cortado. Muchos clientes estiman que aquí los camareros y camareras son acogedores. Cada vez que vengas, notarás su divino servicio. Su encantador ambiente alegra el corazón de sus asiduos y atrae nuevos clientes.',
            'prioridad' => '2',
            'categoria_id' => '1'
        ]);

        DB::table('comercios')->insert([//16
            'nombre' => 'La Cabaña del Tio Tom',
            'ubicacion' => 'Calle Joaquín Vázquez, 2, Almería',
            'descripcion' => 'En este bar van a ofrecerte una carta variada basada en la cocina española. Sus sabrosas tapas, generoso entrecot y sorprendente entrecote te van a saber increíblemente bien. Muchos críticos se han dado cuenta de que aquí puedes comer con confianza un bien valorado pudin. Pide su insuperable cerveza, sus deliciosos tinto de verano o sus espectaculares tinto de verano. La limonada que podrás pedir aquí es sensacional.

            La buenísima ubicación de La Cabaña del Tío Tom hace que llegar a él por cualquier medio sea muy sencillo. La mayoría de clientes suponen que en este establecimiento los camareros y camareras son habladores. Una serie de usuarios mencionan que el servicio es aceptable. Según el punto de vista de los usuarios, sus precios son buenos. Sin duda vas a disfrutar de su agradable ambiente y su atrayente decoración.',
            'prioridad' => '2',
            'categoria_id' => '1'
        ]);

        DB::table('comercios')->insert([//17
            'nombre' => 'Taberna El Andaluz',
            'ubicacion' => 'Calle Felipe II 80 04009, Almería',
            'descripcion' => 'Los clientes recomiendan los platos de la cocina española de este bar. Con sus famosas tapas, su perfectamente elaborado laing y su singular teriyaki de atún te llevarás una espléndida impresión. Si todavía no has degustado la sabrosa tarta, la generosa tarta de chocolate o el delicado milhojas de Taberna El Andaluz, entonces no has disfrutado aún de la vida.

            La estupenda ubicación de este lugar hace que llegar a él por cualquier medio sea muy sencillo. Según las opiniones de los usuarios, aquí sus camareros ofrecen una sensacional cerveza de grifo, un buen vino y una deliciosa cerveza de barril. Cuando visites este lugar, tienes que probar su excelente café cortado. Muchos visitantes apuntan que aquí los camareros y camareras son serviciales. Su divino servicio es siempre un placer. Te van a sorprender sus precios razonables. En este bar, sus comensales disfrutan de un ambiente encantador y de una decoración interesante.',
            'prioridad' => '2',
            'categoria_id' => '1'
        ]);

        DB::table('comercios')->insert([//18
            'nombre' => 'Ohtels Gran Hotel Almería',
            'ubicacion' => 'Calle Reina Regente, 8, 04001 Almería',
            'descripcion' => 'Este sofisticado hotel, con vistas al puerto de Almería, se encuentra a 11 minutos a pie de la estación de tren, a 14 de la playa del Zapillo y a 2 km de la Alcazaba.

            Las habitaciones y suites son funcionales y tienen Wi‑Fi gratis, televisión por satélite, balcón, minibar y, en algunos casos, vistas al mar. Las suites incluyen zona de estar independiente. Hay servicio de habitaciones. Los menores de 4 años se alojan gratis con un adulto.

            El hotel dispone de un bar restaurante refinado de cocina regional, piscina exterior, aparcamiento de pago y espacio para eventos y reuniones. Se admiten mascotas.',
            'prioridad' => '2',
            'categoria_id' => '3'
            ]);

        DB::table('comercios')->insert([//19
            'nombre' => 'Casa Puga',
            'ubicacion' => 'Calle Jovellanos, 7, 04003 Almería',
            'descripcion' => 'rimero, disfruta de Centro de Interpretacion Patrimonial de Almeria y, después, come algo en Casa Puga. La cocina española es algo que no hay que dejar de probar en este bar. En este establecimiento, sus comensales disfrutan entre deliciosos platos y degustan sus famosas tapas españolas, su extraordinario atún y sus bien trabajadas gambas fritas. Aquí puedes pedir un sorprendente vino de la casa, un sensacional cordial o un insuperable jerez. Este lugar es famoso por su delicioso café cortado y su estupenda limonada.

            El ambiente hogareño de Casa Puga permite a sus clientes relajarse tras un duro día de trabajo. Los serviciales camareros y camareras de este lugar muestra lo mucho que aprecian a sus visitantes. Su magnífico servicio es siempre un placer. Aquí vas a pagar unos precios interesantes.',
            'prioridad' => '3',
            'categoria_id' => '1'
        ]);

        DB::table('comercios')->insert([//20
            'nombre' => 'Patio de Vecinas',
            'ubicacion' => 'Calle Arco, 3, 04003 Almería',
            'descripcion' => 'Imagínate que por fin has llegado a Patio De Vecinas tras visitar Parroquia de San Pedro Apostol. La cocina española es excelente en este bar. Puedes pedir unas famosas tapas, un generoso laing y unas bien trabajadas empanadas. Patio De Vecinas te agradará con su atrayente tarta, su delicada tarta de queso y sus bien preparados brownies. Para que tu almuerzo esté aún mejor, prueba una cerveza, que dicen que es sensacional. Este lugar te ofrece su espectacular café.

            El ambiente hogareño de este lugar permite a sus clientes relajarse tras un duro día de trabajo. Muchos comensales indican que el personal es extraordinario. Su divino servicio te hará sentirte especial. Podemos recomendar este establecimiento por sus precios bajos. Aquí te vas a encontrar con una excepcional decoración.',
            'prioridad' => '3',
            'categoria_id' => '1'
        ]);
        DB::table('comercios')->insert([//21
            'nombre' => 'Casa Sevilla',
            'ubicacion' => 'Calle Rueda López, 04004 Almería',
            'descripcion' => 'Seguro que vas a visitar Paseo de Almeria: la recomendación de sus clientes es que vengas también a este bar. Casa Sevilla es famoso por tener cocinas mediterránea y española. Pedir su famoso pulpo, su extraordinario tartar de atún o su exquisito jamón es, con seguridad, una buena idea. Si todavía no has degustado la atrayente tarta, los sorprendentes helados o la delicada leche frita de este lugar, entonces no has disfrutado aún de la vida.

            La carta de vinos es muy variada: hay que satisfacer las necesidades de todos los invitados. Empieza tu comida con un magnífico café cortado. Muchos comensales aseguran que los camareros y camareras son serviciales. Su fascinante servicio es siempre un placer. Pagarás unos precios buenos por la comida. En este lugar podrás disfrutar de su cuidada decoración y de un agradable ambiente.',
            'prioridad' => '3',
            'categoria_id' => '1'
        ]);
        DB::table('comercios')->insert([//22
            'nombre' => 'Restaurante Valentín',
            'ubicacion' => 'Calle Tenor Iribarne, 19, 04001 Almería',
            'descripcion' => 'Las vistas de Arabic Aljibes desde las ventanas de este restaurante te dejan un recuerdo imborrable. En Valentín sirven platos de las cocinas mediterránea y española. Este lugar te agradará con su sabroso pulpo, sus magníficas tapas y sus famosos zarzuela. Aquí podrás degustar un atrayente helado.

            La carta de vinos es muy variada: hay que satisfacer las necesidades de todos los invitados. Su extraordinaria limonada y su buen café están entre las bebidas más solicitadas de este lugar. Se comenta que aquí el personal esta bien preparado. Su servicio siempre es fascinante, no lo olvides. Sabemos que aquí los precios son interesantes. Una decoración hogareña y su ambiente encantador ayudan a sus clientes a sentirse relajados. Este restaurante ha sido seleccionado por Michelin y ha sido premiado con 2 símbolos negros del cuchillo y el tenedor: los expertos destacan que Valentín garantiza un óptimo nivel de confort.',
            'prioridad' => '3',
            'categoria_id' => '1'
        ]);
        DB::table('comercios')->insert([//23
            'nombre' => 'Hotel la Perla',
            'ubicacion' => 'Plaza del Carmen, 7, 04003 Almería',
            'descripcion' => 'Hotel la Perla es un alojamiento familiar y acogedor situado en pleno centro de Almería, en La Puerta Purchena, junto a lugares de gran interés turístico como La Alcazaba y La Catedral.
            Con más de 140 años de historia, contamos con una larga trayectoria a nuestras espaldas, ofreciendo el mejor servicio y profesionalidad a nuestros clientes.
            Entre nuestros huéspedes contamos con muchos actores como Clint Eastwood y Lee Van Cleef y directores como Sergio Leone, protagonistas de los Spaguetti Western que se rodaban en Almería en los años 60 y 70.
            El hotel fue completamente reformado en 2017 para poder ofrecer a nuestros clientes una estancia más confortable. Además ofrecemos otros servicios como Parking concertado, Recepción 24 horas e información turística.',
            'prioridad' => '3',
            'categoria_id' => '3'
        ]);
        DB::table('comercios')->insert([//24
            'nombre' => 'Restaurante La Bambalina',
            'ubicacion' => 'Calle Padre Alfonso Torres, 14, 04001 Almería',
            'descripcion' => 'Imagínate que por fin has llegado a la bambalina tras visitar Parroquia de San Pedro Apostol. En este bar te servirán recetas de cocinas mediterránea y española. Muchos visitan la bambalina para saborear sus famosas tapas de pescado, su extraordinario bacalao y sus atrayentes calamares. Es una buena idea pedir una singular tarta. Su buena cerveza, su irresistible vino y su estupendo cordial son el rasgo distintivo de este lugar.

            Vas a llevarte un buen recuerdo de este lugar, puesto que es famoso por su gran servicio y su amable personal, siempre dispuesto a ayudar. Pagarás unos precios interesantes por la comida. En este bar podrás disfrutar de su festiva decoración y de un encantador ambiente.',
            'prioridad' => '3',
            'categoria_id' => '1'
        ]);
        DB::table('comercios')->insert([//25
            'nombre' => 'La Hormiguita',
            'ubicacion' => 'Parque de Nicolás Salmerón, Almería',
            'descripcion' => 'Visita este bar y come algo si tienes hambre tras disfrutar de Centro Andaluz de la Fotografia. Lo que aquí te van a pedir que tomes es su cocina española. De acuerdo con las opiniones de los clientes, los camareros te sirven aquí unas caseras tapas de pescado, una atrayente sardina y un generoso laing. No puedes dejar de probar su buena cerveza siempre que vengas a La Hormiguita. Según las opiniones de los usuarios, aquí sus camareros ofrecen un excelente café.

            Es fácil encontrar este lugar gracias a su estupenda ubicación. Comprueba por ti mismo lo eficiente que es su personal. El servicio en este lugar se podría describir como algo magnífico. Según el punto de vista de los clientes, sus precios son interesantes. Con toda seguridad vas a disfrutar de su distendido ambiente.',
            'prioridad' => '3',
            'categoria_id' => '3'
        ]);
        DB::table('comercios')->insert([//26
            'nombre' => 'Restaurante China City',
            'ubicacion' => 'Calle Álvarez De Castro, 21, Almería, Andalucía, España',
            'descripcion' => 'Visita este restaurante y come algo si tienes hambre tras disfrutar de Iglesia de la Virgen del Mar. Prueba algo distinto de la cocina china. Aquí sirven un tierno pollo al limón. Algunos de sus visitantes aconsejan probar la excelente limonada de China City.

            Por si todo esto fuera poco, su personal es extraordinario. Tal y como un gran número de críticos observan, el servicio es bueno.',
            'prioridad' => '3',
            'categoria_id' => '1'
        ]);
        DB::table('comercios')->insert([//27
            'nombre' => 'Café bar restaurante El parque',
            'ubicacion' => 'Parque de Nicolás Salmerón, 9, 04001 Almería',
            'descripcion' => 'Si pasas por Iglesia de la Virgen del Mar, visita este restaurante. Relájate y ven a probar la cocina mediterránea. Ahora relájate y degusta un perfectamente elaborado pulpo, un magnífico pescado frito o una fascinante frita. Su generosa tarta te va a saber estupendamente. Los amantes del vino comprobarán que es sensacional. El Parque tiene entre sus bebidas un excelente café.

            Muchos clientes dicen que el personal es servicial. Descansar y comer aquí es siempre un placer, principalmente por su buen servicio. Los precios son interesantes para la calidad que recibes. Sin duda vas a disfrutar de su agradable ambiente y su festiva decoración.',
            'prioridad' => '3',
            'categoria_id' => '1'
        ]);
        DB::table('comercios')->insert([//28
            'nombre' => 'Restaurante Bagua Almería',
            'ubicacion' => 'Av. Federico García Lorca, 5, 04004 Almería',
            'descripcion' => 'En el mismo centro de la ciudad de Almería, enclavado en la parte baja de la Rambla Federico García Lorca se encuentra el Restaurante Bagua, un lugar ideal par dejar pasar el tiempo. Cualquier momento es bueno para hacer una parada en la rutina del día a día y encontrar en este establecimiento un ambiente ideal para descansar la mente, almorzar o cenar con un producto de primera calidad, disfrutar de un café, un aperitivo o una buena copa.

            La decoración vanguardista no es lo más destacado de nuestro establecimiento, sino que se ha hecho pensando en la comodidad del cliente. Sillas confortables, mesas amplias, espacio amplio y todo ello aderezado con música buena música. Además, dispone de una terraza en la misma acera de la Rambla de Almería.
            
            Restaurante Bagua se llena de gente de negocios y personal administrativo de nuestra ciudad que lo elige para reponer fuerzas en este ambiente idílico, un balcón de oxigeno para poder completar la jornada de trabajo. Por la tarde y la noche el local se adapta al reloj y cuida desde la copa, hasta una cena en compañía de los tuyos.',
            'prioridad' => '3',
            'categoria_id' => '1'
        ]);
        DB::table('comercios')->insert([//29
            'nombre' => 'Café Colombia',
            'ubicacion' => 'Av. Federico García Lorca, 6, 04004 Almería',
            'descripcion' => 'Si coincide que estás cerca de Biblioteca Publica Provincial Francisco Villaespesa, visita este café. Cafeteria Colombia sirve cocina española. La receta del éxito de este lugar está en su perfectamente elaborado laing. Empieza tu comida con un magnífico café.

            Es fácil encontrar este lugar gracias a su estupenda ubicación. Su preparado personal recibe a los comensales todo el año. Este café es conocido por su fascinante servicio. Muchos visitantes han reparado en el hecho de que los platos que ofrecen tienen unos precios aceptables.',
            'prioridad' => '4',
            'categoria_id' => '2'
        ]);
        DB::table('comercios')->insert([//30
            'nombre' => 'Cafetería tamayo29',
            'ubicacion' => 'Calle general Tamayo,numero29, bajo, 04001 Almería',
            'descripcion' => 'Un paseo admirando Escuela de Arte de Almeria es lo menos que puedes esperar tras cenar en este café. La comida española merece aquí la pena. Sus famosas tapas son una estupenda elección que merece la pena probar. De acuerdo con las opiniones de los críticos, aquí sus camareros ofrecen un magnífico café.',
            'prioridad' => '4',
            'categoria_id' => '2'
        ]);
        DB::table('comercios')->insert([//31
            'nombre' => 'Cafetería Sagunto',
            'ubicacion' => 'Calle Sagunto, 04004 Almería',
            'descripcion' => 'Este café te ofrece buenos platos y un lugar donde descansar tras un largo paseo alrededor de Biblioteca Publica Provincial Francisco Villaespesa. Prueba sus generosas tapas para hacerte una idea de cómo es Cafetería Sagunto. Una serie de usuarios estiman que en este establecimiento el personal es atento. Su divino servicio es prueba del alto nivel de calidad de este lugar. Disfruta de su espectacular ambiente.',
            'prioridad' => '4',
            'categoria_id' => '2'
        ]);
        DB::table('comercios')->insert([//32
            'nombre' => 'Collage Café',
            'ubicacion' => 'Calle Sagunto, 6, 04004 Almería',
            'descripcion' => 'Visita Biblioteca Publica Provincial Francisco Villaespesa y ven a esta cafetería. Collage Café brinda un divino servicio a sus clientes.',
            'prioridad' => '4',
            'categoria_id' => '2'
        ]);
        DB::table('comercios')->insert([//33
            'nombre' => 'Cafetería Clasijazz',
            'ubicacion' => 'Calle Maestro Serrano, 9, Almería, Andalucía, España',
            'descripcion' => 'Ven a beber algo tras ese largo paseo por Biblioteca Publica Provincial Francisco Villaespesa. Clasijazz te ofrece estupendos platos de la cocina mediterránea. El laing es aquí atrayente, y eso es lo que los comensales habituales de este lugar suelen asegurar. Empieza tu comida con una sensacional cerveza. Este lugar es conocido por su magnífico café.

            La buenísima ubicación de este lugar hace que llegar a él incluso en hora punta sea muy sencillo. El éxito de Clasijazz sería imposible sin unos corteses camareros y camareras. Sus clientes afirman que aquí el servicio es abnegado. Tienes garantizado un encantador ambiente en este lugar. ',
            'prioridad' => '4',
            'categoria_id' => '2'
        ]);
        DB::table('comercios')->insert([//33
            'nombre' => 'Lubrin Cafetería Cervecería',
            'ubicacion' => 'Calle de Rafael Alberti 9, Almería, Andalucía, España, 04004',
            'descripcion' => 'Si quieres tener un buen recuerdo de Biblioteca Publica Provincial Francisco Villaespesa, ven primero a este café. Las cocinas mediterránea y española son buenas en Cafeteria Lubrin. Siempre puedes degustar unas caseras tapas, unos sorprendentes patatas o un generoso laing en este lugar. Su buen café hará que tu comida sea más sabrosa, lo que, seguramente, te hará volver.',
            'prioridad' => '4',
            'categoria_id' => '2'
        ]);
    }
}
