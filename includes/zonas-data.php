<?php
/**
 * Única fuente de verdad para las páginas de zona (asado-a-domicilio-en-*.php).
 * Cada .php de zona solo define el slug y llama a render_zona_page() en
 * includes/zona-template.php — así el layout vive en un solo lugar.
 */

return [
    'asuncion' => [
        'nombre'   => 'Asunción',
        'h1'       => 'Asado a domicilio<br>en Asunción',
        'title'    => 'Asado a domicilio en Asunción | ASADO.com.py',
        'desc'     => 'Asado a domicilio en Asunción: parrilleros expertos, carne de calidad y todo incluido. Llegamos a Villa Morra, Carmelitas, Recoleta y toda la capital. Pedí por WhatsApp.',
        'imagen'   => 'assets/img/hero-social.jpg',
        'barrios'  => ['VILLA MORRA', 'CARMELITAS', 'RECOLETA', 'SAJONIA', 'YCUÁ SATÍ', 'CENTRO'],
        'parrafos' => [
            'En Asunción trabajamos todos los días de la semana, desde departamentos en Villa Morra y Carmelitas hasta casas con patio en Sajonia o Recoleta. Conocemos el tránsito de la capital y coordinamos el horario de llegada para que el fuego esté prendido antes de que lleguen tus invitados.',
            'También armamos asados de oficina en el microcentro y sobre la Costanera, con equipo uniformado y factura legal para empresas. Si tu edificio pide datos del personal con anticipación, nos encargamos de mandarlos a tiempo.',
            'No importa si es un cumpleaños en un departamento sin quincho o una juntada grande en una quinta: llevamos parrilla portátil, carbón y todo lo necesario. Escribinos por WhatsApp y contanos el barrio, el día y cuántas personas son.',
        ],
    ],
    'lambare' => [
        'nombre'   => 'Lambaré',
        'h1'       => 'Asado a domicilio<br>en Lambaré',
        'title'    => 'Asado a domicilio en Lambaré | ASADO.com.py',
        'desc'     => 'Asado a domicilio en Lambaré: parrillero o asado completo en San José, 3 de Febrero y República Argentina. Presupuesto cerrado. Pedí por WhatsApp.',
        'imagen'   => 'assets/img/meat-grill.jpg',
        'barrios'  => ['SAN JOSÉ', '3 DE FEBRERO', 'REPÚBLICA ARGENTINA', 'TARUMANDYMI'],
        'parrafos' => [
            'Lambaré está a minutos de Asunción y ahí armamos asados en patios y quinchos de barrios como San José, 3 de Febrero y República Argentina. Al ser una zona tan cercana a la capital, podemos coordinar hasta con poca anticipación en muchos casos.',
            'Muchas familias en Lambaré ya tienen su propia parrilla armada; para esos casos el servicio de parrillero a domicilio es el más pedido: vos ponés la carne, nosotros ponemos la mano y el criterio en el punto de cocción.',
            'Para cumpleaños, bautismos o la juntada del domingo con la familia extendida, armamos el menú según la cantidad de gente y dejamos todo limpio al final. Contanos tu zona dentro de Lambaré y coordinamos por WhatsApp.',
        ],
    ],
    'fernando-de-la-mora' => [
        'nombre'   => 'Fernando de la Mora',
        'h1'       => 'Asado a domicilio en<br>Fernando de la Mora',
        'title'    => 'Asado a domicilio en Fernando de la Mora | ASADO.com.py',
        'desc'     => 'Asado a domicilio en Fernando de la Mora: parrilla, carbón y carne de calidad en Bernardino Caballero, Santa Librada y toda la ciudad. Pedí por WhatsApp.',
        'imagen'   => 'assets/img/event-courtyard.jpg',
        'barrios'  => ['BERNARDINO CABALLERO', 'SANTA LIBRADA', 'SAN JOSÉ', 'VILLA ADELA'],
        'parrafos' => [
            'Fernando de la Mora es una de las ciudades más densas de Gran Asunción, y ahí atendemos desde casas sobre la Avenida Mcal. López hasta barrios como Bernardino Caballero y Santa Librada. Al estar tan cerca de la Terminal de Ómnibus de Asunción, es una de las zonas donde más rápido llegamos.',
            'Trabajamos mucho con reuniones de fin de semana y cumpleaños infantiles, donde el patio es chico pero la cantidad de invitados no: ahí es clave llevar una parrilla del tamaño justo y organizar bien los tiempos de cocción.',
            'Si tenés un evento de empresa cerca de zonas comerciales de Fernando de la Mora, armamos presupuesto con factura legal. Escribinos con la fecha y la cantidad de personas y te confirmamos disponibilidad.',
        ],
    ],
    'san-lorenzo' => [
        'nombre'   => 'San Lorenzo',
        'h1'       => 'Asado a domicilio<br>en San Lorenzo',
        'title'    => 'Asado a domicilio en San Lorenzo | ASADO.com.py',
        'desc'     => 'Asado a domicilio en San Lorenzo: asado completo o parrillero cerca de la UNA, San Vicente y Laurelty. Presupuesto cerrado por WhatsApp.',
        'imagen'   => 'assets/img/parrillero.jpg',
        'barrios'  => ['ZONA UNA', 'SAN VICENTE', 'LAURELTY', 'BARRIO OBRERO'],
        'parrafos' => [
            'San Lorenzo es una ciudad universitaria — ahí está el campus de la Universidad Nacional de Asunción — y por eso, además de asados familiares en San Vicente y Laurelty, armamos bastante asados de grupos de amigos y despedidas de promoción.',
            'Para las familias con patio grande en zonas más alejadas del centro, ofrecemos el asado completo a domicilio: parrilla, carbón, cortes seleccionados y guarniciones, todo lo que hace falta para no tener que salir a comprar nada el día del evento.',
            'También coordinamos con instituciones y iglesias de la zona para eventos de mayor tamaño, con equipo de parrilleros ampliado. Escribinos por WhatsApp contándonos el barrio y la cantidad de personas.',
        ],
    ],
    'luque' => [
        'nombre'   => 'Luque',
        'h1'       => 'Asado a domicilio<br>en Luque',
        'title'    => 'Asado a domicilio en Luque | ASADO.com.py',
        'desc'     => 'Asado a domicilio en Luque: asados familiares y de empresa cerca del Aeropuerto Silvio Pettirossi y el centro de la ciudad. Pedí por WhatsApp.',
        'imagen'   => 'assets/img/servicio-completo.jpg',
        'barrios'  => ['ZONA AEROPUERTO', 'SAN RAFAEL', 'VILLA ADELA', 'CENTRO'],
        'parrafos' => [
            'Luque es conocida como la cuna del fútbol paraguayo, y también es zona de empresas y depósitos cerca del Aeropuerto Internacional Silvio Pettirossi. Ahí armamos tanto asados familiares en barrios como San Rafael como asados corporativos para empresas de logística y oficinas cercanas al aeropuerto.',
            'Para los cumpleaños y bautismos del centro de Luque, el servicio más pedido es el asado completo a domicilio: nosotros llevamos todo y vos recibís a tu familia sin tener que pensar en la parrilla.',
            'Si tu evento es de fin de año o cierre de proyecto para una empresa de la zona, coordinamos horarios con RR.HH. y emitimos factura legal. Contanos la fecha y armamos el presupuesto.',
        ],
    ],
    'mariano-roque-alonso' => [
        'nombre'   => 'Mariano Roque Alonso',
        'h1'       => 'Asado a domicilio en<br>Mariano Roque Alonso',
        'title'    => 'Asado a domicilio en Mariano Roque Alonso | ASADO.com.py',
        'desc'     => 'Asado a domicilio en Mariano Roque Alonso: asado completo o parrillero sobre la Ruta Transchaco y zonas residenciales. Pedí por WhatsApp.',
        'imagen'   => 'assets/img/servicio-parrillero.jpg',
        'barrios'  => ['ITÁ ENRAMADA', 'RUTA TRANSCHACO', 'LOMA PYTÃ'],
        'parrafos' => [
            'Mariano Roque Alonso es la puerta de entrada al Chaco paraguayo sobre la Ruta Transchaco, con zonas residenciales como Loma Pytã y áreas cercanas al Puerto Itá Enramada. Ahí trabajamos tanto con casas de fin de semana como con empresas logísticas de la zona.',
            'Para las reuniones familiares con patio grande, el asado completo a domicilio incluye parrilla, carbón, leña y cortes seleccionados el mismo día, además de chorizo, morcilla y provoleta para que nadie se quede esperando.',
            'También coordinamos eventos de empresa para negocios que operan sobre la Ruta Transchaco, con presupuesto cerrado y factura legal. Escribinos por WhatsApp con los datos de tu evento.',
        ],
    ],
    'nemby' => [
        'nombre'   => 'Ñemby',
        'h1'       => 'Asado a domicilio<br>en Ñemby',
        'title'    => 'Asado a domicilio en Ñemby | ASADO.com.py',
        'desc'     => 'Asado a domicilio en Ñemby: parrillero o asado completo cerca del Cerro Ñemby, San Isidro y el centro de la ciudad. Pedí por WhatsApp.',
        'imagen'   => 'assets/img/evento-empresa.jpg',
        'barrios'  => ['CERRO ÑEMBY', 'SAN ISIDRO', 'CENTRO'],
        'parrafos' => [
            'Ñemby tiene uno de los puntos más altos de Gran Asunción, el Cerro Ñemby, y muchas casas de la zona tienen patios con vista que son ideales para un asado al atardecer. Trabajamos en barrios como San Isidro y en el centro de la ciudad.',
            'Las familias de Ñemby suelen elegir el parrillero a domicilio cuando ya tienen su propia parrilla armada en el patio: nosotros llevamos al parrillero con experiencia y el resto de la familia se sienta a disfrutar.',
            'Para cumpleaños grandes o reuniones de fin de año armamos el menú completo con acompañamientos y presupuesto cerrado antes de confirmar. Contanos tu zona dentro de Ñemby y coordinamos la fecha.',
        ],
    ],
    'villa-elisa' => [
        'nombre'   => 'Villa Elisa',
        'h1'       => 'Asado a domicilio<br>en Villa Elisa',
        'title'    => 'Asado a domicilio en Villa Elisa | ASADO.com.py',
        'desc'     => 'Asado a domicilio en Villa Elisa: asados familiares y de empresa en la Capital del Mueble. Presupuesto cerrado, pedí por WhatsApp.',
        'imagen'   => 'assets/img/hero-social.jpg',
        'barrios'  => ['ZONA MUEBLERÍAS', 'RICARDO BRUGADA', 'CENTRO'],
        'parrafos' => [
            'Villa Elisa es conocida como la Capital del Mueble de Paraguay, con familias y talleres que suelen celebrar cierres de año y reuniones de equipo con un buen asado. Trabajamos tanto en el centro de la ciudad como en barrios residenciales cercanos a la Ruta 1.',
            'Para los talleres y pequeñas empresas de la zona armamos asados de fin de año con factura legal, coordinando el horario para no interrumpir la producción del día.',
            'En reuniones familiares, el servicio de asado completo a domicilio es el más elegido: parrilla, carbón, carne y guarniciones, todo lo que hace falta para que la familia se junte sin que nadie tenga que cocinar.',
        ],
    ],
    'capiata' => [
        'nombre'   => 'Capiatá',
        'h1'       => 'Asado a domicilio<br>en Capiatá',
        'title'    => 'Asado a domicilio en Capiatá | ASADO.com.py',
        'desc'     => 'Asado a domicilio en Capiatá: asado completo o parrillero en Isla Bogado, zona hortícola y el centro de la ciudad. Pedí por WhatsApp.',
        'imagen'   => 'assets/img/meat-grill.jpg',
        'barrios'  => ['ISLA BOGADO', 'ZONA HORTÍCOLA', 'CENTRO'],
        'parrafos' => [
            'Capiatá es una de las ciudades más pobladas de Gran Asunción y también una zona conocida por su producción hortícola. Ahí armamos asados en quintas grandes con patios amplios, ideales para reuniones familiares numerosas.',
            'En barrios como Isla Bogado y el centro de la ciudad trabajamos con familias que celebran cumpleaños, bautismos y aniversarios con más de 30 invitados: para esos casos sumamos parrilleros adicionales al equipo.',
            'Si tu evento es en una quinta o salón de eventos de Capiatá, coordinamos el montaje con varias horas de anticipación para que todo esté listo antes de que lleguen los primeros invitados. Escribinos por WhatsApp.',
        ],
    ],
    'limpio' => [
        'nombre'   => 'Limpio',
        'h1'       => 'Asado a domicilio<br>en Limpio',
        'title'    => 'Asado a domicilio en Limpio | ASADO.com.py',
        'desc'     => 'Asado a domicilio en Limpio: asado completo o parrillero en loteamientos nuevos y el centro de la ciudad. Presupuesto cerrado por WhatsApp.',
        'imagen'   => 'assets/img/event-courtyard.jpg',
        'barrios'  => ['ZONA HORTÍCOLA', 'CENTRO', 'NUEVOS LOTEAMIENTOS'],
        'parrafos' => [
            'Limpio es una de las ciudades de Gran Asunción con más crecimiento de nuevos barrios y loteamientos, además de su tradición hortícola y avícola. Trabajamos tanto en casas recién construidas como en el centro histórico de la ciudad.',
            'Para las familias que se instalaron en los loteamientos nuevos, el asado completo a domicilio es ideal para el estreno de la casa: llevamos parrilla, carbón y todo lo necesario aunque todavía no tengas quincho armado.',
            'También coordinamos asados para reuniones de vecinos y eventos de fin de año en salones de la zona. Contanos el barrio y la cantidad de personas y te confirmamos por WhatsApp.',
        ],
    ],
];
