<?php
$FAQ = [
    ['¿Cuál es el mínimo de personas para un evento?', 'Escribinos con la cantidad de invitados y te decimos qué servicio te conviene: si son pocos, suele alcanzar con el parrillero a domicilio.'],
    ['¿Necesito tener parrilla en el lugar?', 'No. En el servicio completo llevamos la parrilla y el carbón. Solo necesitamos un espacio ventilado y acceso para descargar el equipo.'],
    ['¿Con cuánta anticipación se reserva un evento grande?', 'Cuanto antes mejor, sobre todo en fin de año, cuando las fechas se ocupan primero. Escribinos apenas tengas la fecha.'],
    ['¿Se puede probar el menú antes?', 'Para eventos grandes lo conversamos: contanos la fecha y la cantidad de invitados y coordinamos los detalles del menú.'],
];

$PAGE = [
    'slug'  => 'eventos',
    'title' => 'Asado para eventos y empresas | ASADO.com.py',
    'desc'  => 'Asado para eventos en Gran Asunción: cumpleaños, casamientos, asados de empresa y fin de año. Menú a medida y equipo completo. Pedí tu presupuesto.',
    'crumb' => 'Eventos',
    'path'  => '/eventos.php',
];
require __DIR__ . '/includes/header.php';
?>

<section class="page-hero">
  <div class="hero-media"<?= bg('event-courtyard.jpg') ?>></div>
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
        <p>Fin de año, cierres de proyecto y celebraciones de equipo. Coordinamos con quien organice, coordinamos fechas y horarios con vos.</p>
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
        <p>Menú conversado antes, equipo ampliado y tiempos coordinados con el resto del evento. Sin filas y sin comida fría.</p>
      </div>
    </div>
  </div>
</section>

<section class="split split--dark">
  <?php if (img_ok('evento-empresa.jpg')): ?>
  <div class="split-media split-media--dark" data-reveal="1">
    <div class="bg"<?= bg('evento-empresa.jpg') ?>></div>
  </div>
  <?php endif; ?>
  <div class="split-copy" data-reveal="2">
    <div class="label">CÓMO LO ORGANIZAMOS</div>
    <h2 class="title">Un solo interlocutor,<br>de principio a fin.</h2>
    <p class="body-text">Te asignamos un responsable que coordina el menú, el equipo y los horarios. El día del evento ya está todo hablado: solo hay que prender el fuego.</p>
    <ul class="svc-list">
      <li>Llamada previa para ver el espacio y los detalles</li>
      <li>Menú y cantidades cerradas por escrito</li>
      <li>Montaje con anticipación al servicio</li>
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
        <p>Detalle de menú, cantidades y precio, por escrito.</p>
      </div>
      <div class="step" data-reveal="3">
        <div class="step-num">02</div>
        <h3>Datos de facturación</h3>
        <p>Si tu empresa necesita comprobante, consultanos al pedir el presupuesto.</p>
      </div>
      <div class="step" data-reveal="4">
        <div class="step-num">03</div>
        <h3>Personal identificado</h3>
        <p>Si el edificio pide datos del equipo, los informamos antes.</p>
      </div>
      <div class="step" data-reveal="5">
        <div class="step-num">04</div>
        <h3>Pago a coordinar</h3>
        <p>La forma de pago la coordinamos al armar el presupuesto.</p>
      </div>
    </div>
  </div>
</section>

<section class="section section--light">
  <div class="wrap">
    <div class="label label--dark" data-reveal="1">PREGUNTAS DE EVENTOS</div>
    <h2 class="title title--dark title--sm" data-reveal="1">Antes de reservar.</h2>
    <?php faq_render($FAQ); ?>
  </div>
</section>

<?php $cta_msg = 'Hola! Quiero organizar un evento con asado 🔥'; ?>
<?php require __DIR__ . '/includes/cta.php'; ?>
<?php require __DIR__ . '/includes/footer.php'; ?>
