<?php
$FAQ = [
    ['¿Con cuánta anticipación tengo que reservar?', 'Cuanto antes mejor, sobre todo para fines de semana y feriados. Escribinos por WhatsApp con la fecha y te confirmamos si tenemos lugar.'],
    ['¿Llevan la parrilla y el carbón?', 'En el servicio de asado completo llevamos parrilla, carbón, leña, utensilios y todo lo necesario. Si ya tenés parrilla en tu casa, podés contratar solo el parrillero.'],
    ['¿Para cuántas personas trabajan?', 'Trabajamos con grupos chicos y con eventos grandes. Contanos cuántos son y armamos el equipo y el menú para ese número.'],
    ['¿Qué incluye el precio?', 'Depende del servicio que elijas: en el asado completo entran la carne, los acompañamientos, el carbón, el parrillero y el servicio. Te pasamos el presupuesto por escrito antes de confirmar.'],
    ['¿Cómo se paga?', 'Coordinamos la forma de pago por WhatsApp al armar el presupuesto.'],
    ['¿Hacen opciones sin carne?', 'Sí, podemos sumar provoleta, verduras a la parrilla y ensaladas al menú. Avisanos cuántas personas las necesitan para dejarlo listo.'],
];

$PAGE = [
    'slug'  => 'home',
    'title' => 'Asado a domicilio en Gran Asunción | ASADO.com.py',
    'desc'  => 'Asado a domicilio en Gran Asunción. Parrilleros expertos, carne de calidad y todo incluido: parrilla, carbón y servicio. Pedí por WhatsApp.',
    'path'  => '/',
];
require __DIR__ . '/includes/header.php';
?>

<section id="top" class="hero">
  <div class="hero-media"<?= bg('hero-social.jpg') ?>></div>
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
  <?php if (img_ok('meat-grill.jpg')): ?>
  <div class="split-media split-media--dark" data-reveal="1">
    <div class="bg"<?= bg('meat-grill.jpg') ?>></div>
  </div>
  <?php endif; ?>
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
  <?php if (img_ok('event-courtyard.jpg')): ?>
  <div class="split-media split-media--light" data-reveal="2">
    <div class="bg"<?= bg('event-courtyard.jpg') ?>></div>
  </div>
  <?php endif; ?>
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

<section id="nosotros" class="section section--dark section--flush">
  <div class="wrap">
    <div class="about-grid" data-reveal="1">
      <div>
        <div class="label">NOSOTROS</div>
        <h2 class="title">Un equipo que cocina<br>para tu gente.</h2>
      </div>
      <p class="body-text mt-0">Llevamos parrilla, carbón y parrilleros a tu casa, tu oficina o tu salón en Gran Asunción. Vos elegís el lugar y la hora; del resto nos encargamos nosotros.</p>
    </div>
    <?php if (img_ok('parrillero.jpg')): ?>
    <div class="wide-media" data-reveal="2">
      <div class="bg"<?= bg('parrillero.jpg') ?>></div>
    </div>
    <?php endif; ?>
  </div>
</section>

<section class="section section--dark">
  <div class="wrap">
    <div class="label" data-reveal="1">ZONAS DE COBERTURA</div>
    <h2 class="title title--sm" data-reveal="1">Llegamos a todo<br>Gran Asunción.</h2>
    <ul class="zones" data-reveal="2">
      <?php foreach (ZONAS as $z): ?>
      <li><?= e(mb_strtoupper($z, 'UTF-8')) ?></li>
      <?php endforeach; ?>
    </ul>
    <p class="body-text" data-reveal="2">¿Estás fuera de la zona? Escribinos igual — según la fecha y el tamaño del grupo lo podemos coordinar.</p>
  </div>
</section>

<section class="section section--light">
  <div class="wrap">
    <div class="label label--dark" data-reveal="1">PREGUNTAS FRECUENTES</div>
    <h2 class="title title--dark title--sm" data-reveal="1">Lo que más nos preguntan.</h2>
    <?php faq_render($FAQ); ?>
  </div>
</section>

<?php require __DIR__ . '/includes/cta.php'; ?>
<?php require __DIR__ . '/includes/footer.php'; ?>
