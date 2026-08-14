<?php
$PAGE = [
    'slug'  => 'home',
    'title' => 'ASADO.com.py — Asado a domicilio en Gran Asunción',
    'desc'  => 'Asado a domicilio en Gran Asunción. Parrilleros expertos, carne de calidad y todo incluido: parrilla, carbón y servicio. Pedí por WhatsApp.',
    'path'  => '/',
];
require __DIR__ . '/includes/header.php';
?>

<section id="top" class="hero">
  <?php bg_picture('assets/img/hero-social.jpg', 'hero-media'); ?>
  <div class="hero-inner">
    <div class="hero-copy">
      <div class="eyebrow" data-reveal="1">ASADO A DOMICILIO PARAGUAY</div>
      <h1 class="display" data-reveal="2">Reunimos<br>personas alrededor<br>de lo que importa.</h1>
      <p class="hero-lead" data-reveal="3">Parrilleros expertos. Carne de calidad.<br>Nosotros hacemos el asado, vos disfrutás.</p>
      <a class="btn-outline" data-reveal="4" href="<?= e(wa('Hola! Quiero pedir un asado a domicilio 🔥')) ?>" target="_blank" rel="noopener">
        <?= wa_icon(18) ?>
        <span>PEDÍ POR WHATSAPP</span>
      </a>
      <div class="scroll-hint">
        <i></i>
        <span>SCROLL PARA DESCUBRIR</span>
      </div>
    </div>
  </div>
</section>

<section id="servicios" class="section section--light">
  <div class="wrap">
    <div class="label label--dark label--center" data-reveal="1">NUESTROS SERVICIOS</div>
    <div class="grid-services">

      <div class="svc" data-reveal="2">
        <div class="svc-num">01</div>
        <div class="svc-rule"></div>
        <h3>ASADO COMPLETO<br>A DOMICILIO</h3>
        <p>Parrilla, carne, carbón y todo lo necesario. Cocinamos y servimos por vos.</p>
        <a class="link-arrow link-arrow--dark" href="/servicios.php#completo">
          <span>VER MÁS</span><i>&rarr;</i>
        </a>
      </div>

      <div class="svc" data-reveal="3">
        <div class="svc-num">02</div>
        <div class="svc-rule"></div>
        <h3>PARRILLERO<br>A DOMICILIO</h3>
        <p>El parrillero llega y se encarga de todo en la parrilla.</p>
        <a class="link-arrow link-arrow--dark" href="/servicios.php#parrillero">
          <span>VER MÁS</span><i>&rarr;</i>
        </a>
      </div>

      <div class="svc" data-reveal="4">
        <div class="svc-num">03</div>
        <div class="svc-rule"></div>
        <h3>ASADO<br>PARA EVENTOS</h3>
        <p>Empresas, cumpleaños y reuniones. Nos encargamos de todo.</p>
        <a class="link-arrow link-arrow--dark" href="/eventos.php">
          <span>VER MÁS</span><i>&rarr;</i>
        </a>
      </div>

    </div>
  </div>
</section>

<section id="experiencia" class="split split--dark">
  <div class="split-media split-media--dark" data-reveal="1">
    <?php bg_picture('assets/img/meat-grill.jpg', 'bg'); ?>
  </div>
  <div class="split-copy" data-reveal="2">
    <div class="label">LA EXPERIENCIA ASADO</div>
    <h2 class="title">Carne premium.<br>Fuego real. Gente real.</h2>
    <p class="body-text">Seleccionamos lo mejor y lo llevamos a tu casa para que vivas la experiencia de un verdadero asado.</p>
    <a class="link-arrow" href="/servicios.php">
      <span>CONOCÉ MÁS</span><i>&rarr;</i>
    </a>
  </div>
</section>

<section id="eventos" class="split split--light">
  <div class="split-copy" data-reveal="1">
    <div class="label label--dark">EVENTOS QUE SE SIENTEN</div>
    <h2 class="title title--dark">Eventos a la altura<br>de lo que celebrás.</h2>
    <p class="body-text body-text--dark">Servicios pensados para empresas, reuniones y ocasiones especiales en Gran Asunción.</p>
    <a class="link-arrow link-arrow--dark" href="/eventos.php">
      <span>MÁS SOBRE EVENTOS</span><i>&rarr;</i>
    </a>
  </div>
  <div class="split-media split-media--light" data-reveal="2">
    <?php bg_picture('assets/img/event-courtyard.jpg', 'bg'); ?>
  </div>
</section>

<section class="section section--dark">
  <div class="wrap">
    <div class="label" data-reveal="1">CÓMO FUNCIONA</div>
    <h2 class="title title--sm" data-reveal="1">Cuatro pasos y listo.</h2>
    <div class="steps">
      <div class="step" data-reveal="2">
        <div class="step-num">01</div>
        <h3>Escribinos</h3>
        <p>Contanos fecha, lugar y cuántas personas son. Respondemos por WhatsApp.</p>
      </div>
      <div class="step" data-reveal="3">
        <div class="step-num">02</div>
        <h3>Armamos el menú</h3>
        <p>Elegís los cortes y los acompañamientos. Te pasamos el presupuesto cerrado.</p>
      </div>
      <div class="step" data-reveal="4">
        <div class="step-num">03</div>
        <h3>Llegamos y prendemos</h3>
        <p>Vamos con parrilla, carbón y todo lo necesario. Vos no movés un dedo.</p>
      </div>
      <div class="step" data-reveal="5">
        <div class="step-num">04</div>
        <h3>Servimos y limpiamos</h3>
        <p>Comés recién salido de la parrilla. Al final dejamos todo como estaba.</p>
      </div>
    </div>
  </div>
</section>

<section id="nosotros" class="section section--dark" style="padding-bottom: 0">
  <div class="wrap">
    <div class="about-grid" data-reveal="1">
      <div>
        <div class="label">NOSOTROS</div>
        <h2 class="title">Un equipo que cocina<br>para tu gente.</h2>
      </div>
      <p class="body-text mt-0">Llevamos parrilla, carbón y parrilleros a tu casa, tu oficina o tu salón en Gran Asunción. Vos elegís el lugar y la hora; del resto nos encargamos nosotros.</p>
    </div>
    <div class="wide-media" data-reveal="2">
      <div class="bg" style="background-image: url('/assets/img/parrillero.jpg')"></div>
    </div>
  </div>
</section>

<section class="section section--light">
  <div class="wrap">
    <div class="label label--dark label--center" data-reveal="1">LO QUE DICEN</div>
    <h2 class="title title--dark title--sm center" data-reveal="1">Clientes que ya se sentaron a comer.</h2>
    <!--
      ⚠️ TESTIMONIOS DE MARCADOR DE POSICIÓN.
      Reemplazar las 3 citas de abajo por comentarios reales de clientes
      (con su consentimiento para publicar nombre y barrio) antes de
      publicar el sitio. No dejar estos textos de ejemplo en producción.
    -->
    <div class="testimonials" data-reveal="2">
      <blockquote class="testimonial">
        <p>“Texto de ejemplo — reemplazar por una cita real de un cliente sobre el asado completo a domicilio.”</p>
        <cite>Nombre Apellido — Barrio, Ciudad</cite>
      </blockquote>
      <blockquote class="testimonial">
        <p>“Texto de ejemplo — reemplazar por una cita real de un cliente sobre el parrillero a domicilio.”</p>
        <cite>Nombre Apellido — Barrio, Ciudad</cite>
      </blockquote>
      <blockquote class="testimonial">
        <p>“Texto de ejemplo — reemplazar por una cita real de un cliente sobre un evento de empresa.”</p>
        <cite>Nombre Apellido — Empresa, Ciudad</cite>
      </blockquote>
    </div>
  </div>
</section>

<!--
  Review/AggregateRating JSON-LD — dejar comentado hasta tener testimonios
  reales. Descomentar y completar "author", "reviewBody" y "ratingValue"
  con datos verdaderos recién cuando se reemplacen las citas de arriba.

<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "LocalBusiness",
  "name": "ASADO.com.py",
  "review": [
    {
      "@type": "Review",
      "author": { "@type": "Person", "name": "Nombre Apellido" },
      "reviewBody": "Cita real del cliente acá.",
      "reviewRating": { "@type": "Rating", "ratingValue": "5", "bestRating": "5" }
    }
  ],
  "aggregateRating": {
    "@type": "AggregateRating",
    "ratingValue": "5.0",
    "reviewCount": "1"
  }
}
</script>
-->

<section class="section section--dark">
  <div class="wrap">
    <div class="label" data-reveal="1">ZONAS DE COBERTURA</div>
    <h2 class="title title--sm" data-reveal="1">Llegamos a todo<br>Gran Asunción.</h2>
    <ul class="zones" data-reveal="2">
      <li><a href="/asado-a-domicilio-en-asuncion.php">ASUNCIÓN</a></li>
      <li><a href="/asado-a-domicilio-en-lambare.php">LAMBARÉ</a></li>
      <li><a href="/asado-a-domicilio-en-fernando-de-la-mora.php">FERNANDO DE LA MORA</a></li>
      <li><a href="/asado-a-domicilio-en-san-lorenzo.php">SAN LORENZO</a></li>
      <li><a href="/asado-a-domicilio-en-luque.php">LUQUE</a></li>
      <li><a href="/asado-a-domicilio-en-mariano-roque-alonso.php">MARIANO ROQUE ALONSO</a></li>
      <li><a href="/asado-a-domicilio-en-nemby.php">ÑEMBY</a></li>
      <li><a href="/asado-a-domicilio-en-villa-elisa.php">VILLA ELISA</a></li>
      <li><a href="/asado-a-domicilio-en-capiata.php">CAPIATÁ</a></li>
      <li><a href="/asado-a-domicilio-en-limpio.php">LIMPIO</a></li>
      <li>SAN ANTONIO</li>
      <li>AREGUÁ</li>
    </ul>
    <p class="body-text" data-reveal="2">¿Estás fuera de la zona? Escribinos igual — según la fecha y el tamaño del grupo lo podemos coordinar.</p>
  </div>
</section>

<?php
// Única fuente de verdad para las FAQ: se usa para pintar el <details> de
// abajo Y para el FAQPage JSON-LD, así nunca quedan desincronizados.
$faqs = [
    ['¿Con cuánta anticipación tengo que reservar?', 'Lo ideal es entre 3 y 7 días antes, sobre todo para fines de semana y feriados. Si es de un día para el otro escribinos igual: muchas veces tenemos lugar.'],
    ['¿Llevan la parrilla y el carbón?', 'Sí. En el servicio de asado completo llevamos parrilla, carbón, leña, utensilios y todo lo necesario. Si ya tenés parrilla en tu casa, contratás solo el parrillero.'],
    ['¿Para cuántas personas trabajan?', 'Desde grupos de 10 personas hasta eventos de más de 200. Para grupos grandes coordinamos con más tiempo y sumamos parrilleros al equipo.'],
    ['¿Qué incluye el precio?', 'Carne, acompañamientos acordados, carbón, parrillero, servicio y limpieza de la parrilla. Te pasamos el presupuesto cerrado antes de confirmar: sin sorpresas.'],
    ['¿Se puede pagar por transferencia?', 'Sí. Aceptamos transferencia bancaria, billeteras y efectivo. Se reserva la fecha con una seña y el resto se abona el día del evento.'],
    ['¿Hacen opciones sin carne?', 'Sí. Sumamos provoleta, verduras a la parrilla, ensaladas y opciones vegetarianas al menú. Avisanos cuántas personas para dejarlo listo.'],
];
?>
<section class="section section--light">
  <div class="wrap">
    <div class="label label--dark" data-reveal="1">PREGUNTAS FRECUENTES</div>
    <h2 class="title title--dark title--sm" data-reveal="1">Lo que más nos preguntan.</h2>
    <div class="faq" data-reveal="2">
      <?php foreach ($faqs as [$pregunta, $respuesta]): ?>
      <details>
        <summary><?= e($pregunta) ?></summary>
        <p><?= e($respuesta) ?></p>
      </details>
      <?php endforeach; ?>
    </div>
  </div>
</section>

<script type="application/ld+json">
<?= json_encode([
    '@context'   => 'https://schema.org',
    '@type'      => 'FAQPage',
    'mainEntity' => array_map(fn($f) => [
        '@type'          => 'Question',
        'name'           => $f[0],
        'acceptedAnswer' => ['@type' => 'Answer', 'text' => $f[1]],
    ], $faqs),
], JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE | JSON_PRETTY_PRINT) ?>
</script>

<?php require __DIR__ . '/includes/cta.php'; ?>
<?php require __DIR__ . '/includes/footer.php'; ?>
