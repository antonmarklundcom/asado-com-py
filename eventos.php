<?php
$PAGE = [
    'slug'  => 'eventos',
    'title' => 'Asado para eventos y empresas | ASADO.com.py',
    'desc'  => 'Asado para eventos en Gran Asunción: cumpleaños, casamientos, asados de empresa y fin de año. Menú a medida, equipo completo y factura legal.',
    'path'  => '/eventos.php',
];
require __DIR__ . '/includes/header.php';
?>

<section class="page-hero">
  <?php bg_picture('assets/img/event-courtyard.jpg', 'hero-media'); ?>
  <div class="hero-inner">
    <div class="hero-copy">
      <div class="eyebrow" data-reveal="1">EVENTOS QUE SE SIENTEN</div>
      <h1 class="display display--sm" data-reveal="2">Eventos a la altura<br>de lo que celebrás.</h1>
      <p class="hero-lead" data-reveal="3">De un cumpleaños en el patio a un asado de fin de año para toda la empresa.</p>
    </div>
  </div>
</section>

<section class="section section--light">
  <div class="wrap">
    <div class="label label--dark label--center" data-reveal="1">TIPOS DE EVENTO</div>
    <div class="grid-services">
      <div class="svc" data-reveal="2">
        <div class="svc-num">01</div>
        <div class="svc-rule"></div>
        <h3>ASADO<br>DE EMPRESA</h3>
        <p>Fin de año, cierres de proyecto y celebraciones de equipo. Coordinamos con RR.HH., emitimos factura legal y respetamos los horarios de oficina.</p>
      </div>
      <div class="svc" data-reveal="3">
        <div class="svc-num">02</div>
        <div class="svc-rule"></div>
        <h3>CUMPLEAÑOS<br>Y REUNIONES</h3>
        <p>En tu casa, en el quincho o en un salón. Vos recibís a tu gente y nosotros nos ocupamos de que todos coman caliente.</p>
      </div>
      <div class="svc" data-reveal="4">
        <div class="svc-num">03</div>
        <div class="svc-rule"></div>
        <h3>CASAMIENTOS<br>Y FECHAS GRANDES</h3>
        <p>Menú degustado antes, equipo ampliado y tiempos coordinados con el resto del evento. Sin filas y sin comida fría.</p>
      </div>
    </div>
  </div>
</section>

<section class="split split--dark">
  <div class="split-media split-media--dark" data-reveal="1">
    <?php bg_picture('assets/img/evento-empresa.jpg', 'bg'); ?>
  </div>
  <div class="split-copy" data-reveal="2">
    <div class="label">CÓMO LO ORGANIZAMOS</div>
    <h2 class="title">Un solo interlocutor,<br>de principio a fin.</h2>
    <p class="body-text">Te asignamos un responsable que coordina el menú, el equipo y los horarios. El día del evento ya está todo hablado: solo hay que prender el fuego.</p>
    <ul class="svc-list">
      <li>Visita o llamada previa para ver el espacio</li>
      <li>Menú y cantidades cerradas por escrito</li>
      <li>Montaje 2 a 3 horas antes del servicio</li>
      <li>Servicio por tandas para que nadie espere</li>
      <li>Retiro completo del equipo al finalizar</li>
    </ul>
  </div>
</section>

<section class="section section--dark">
  <div class="wrap">
    <div class="label" data-reveal="1">PARA EMPRESAS</div>
    <h2 class="title title--sm" data-reveal="1">Lo que pide administración,<br>resuelto.</h2>
    <div class="steps">
      <div class="step" data-reveal="2">
        <div class="step-num">01</div>
        <h3>Presupuesto formal</h3>
        <p>Documento con detalle de menú, cantidades y precio final por persona.</p>
      </div>
      <div class="step" data-reveal="3">
        <div class="step-num">02</div>
        <h3>Factura legal</h3>
        <p>Emitimos factura a nombre de la empresa con todos los datos fiscales.</p>
      </div>
      <div class="step" data-reveal="4">
        <div class="step-num">03</div>
        <h3>Personal identificado</h3>
        <p>Equipo uniformado y con datos informados si el edificio lo requiere.</p>
      </div>
      <div class="step" data-reveal="5">
        <div class="step-num">04</div>
        <h3>Pago a convenir</h3>
        <p>Seña para reservar la fecha y saldo por transferencia después del evento.</p>
      </div>
    </div>
  </div>
</section>

<?php
// Única fuente de verdad para las FAQ de eventos: alimenta el <details>
// de abajo y el FAQPage JSON-LD, sin duplicar el texto a mano.
$faqs = [
    ['¿Cuál es el mínimo de personas para un evento?', 'Trabajamos desde 10 personas. Para grupos más chicos te conviene el servicio de parrillero a domicilio.'],
    ['¿Necesito tener parrilla en el lugar?', 'No. Llevamos nuestra parrilla y el carbón. Solo necesitamos un espacio ventilado y acceso para descargar el equipo.'],
    ['¿Con cuánta anticipación se reserva un evento grande?', 'Para más de 50 personas recomendamos 2 a 3 semanas. En noviembre y diciembre las fechas se agotan antes: escribinos cuanto antes.'],
    ['¿Se puede probar el menú antes?', 'Sí, para eventos de más de 60 personas coordinamos una degustación previa sin costo adicional.'],
];
?>
<section class="section section--light">
  <div class="wrap">
    <div class="label label--dark" data-reveal="1">PREGUNTAS DE EVENTOS</div>
    <h2 class="title title--dark title--sm" data-reveal="1">Antes de reservar.</h2>
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

<?php $cta_msg = 'Hola! Quiero organizar un evento con asado 🔥'; ?>
<?php require __DIR__ . '/includes/cta.php'; ?>
<?php require __DIR__ . '/includes/footer.php'; ?>
