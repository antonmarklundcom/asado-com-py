<?php
$PAGE = [
    'slug'  => 'servicios',
    'title' => 'Servicios de asado a domicilio | ASADO.com.py',
    'desc'  => 'Asado completo a domicilio, parrillero a domicilio y asado para eventos en Gran Asunción. Llevamos parrilla, carbón, carne y servicio.',
    'path'  => '/servicios.php',
];
require __DIR__ . '/includes/header.php';
?>

<section class="page-hero">
  <div class="hero-media" style="background-image: url('/assets/img/meat-grill.jpg')"></div>
  <div class="hero-inner">
    <div class="hero-copy">
      <div class="eyebrow" data-reveal="1">NUESTROS SERVICIOS</div>
      <h1 class="display display--sm" data-reveal="2">Tres formas<br>de hacer el asado.</h1>
      <p class="hero-lead" data-reveal="3">Elegís cuánto querés delegar. Nosotros ponemos el fuego, la mano y el criterio.</p>
    </div>
  </div>
</section>

<section id="completo" class="split split--light">
  <div class="split-copy" data-reveal="1">
    <div class="label label--dark">SERVICIO 01</div>
    <h2 class="title title--dark">Asado completo<br>a domicilio.</h2>
    <p class="body-text body-text--dark">Llegamos con todo: parrilla, carbón, leña, carne seleccionada, acompañamientos y utensilios. Prendemos el fuego, cocinamos, servimos y al terminar dejamos el lugar como lo encontramos.</p>
    <ul class="svc-list">
      <li>Cortes seleccionados el mismo día</li>
      <li>Parrilla, carbón y leña incluidos</li>
      <li>Chorizo, morcilla, provoleta y guarniciones</li>
      <li>Servicio en mesa y limpieza final</li>
      <li>Presupuesto cerrado antes de confirmar</li>
    </ul>
    <a class="link-arrow link-arrow--dark" href="<?= e(wa('Hola! Me interesa el ASADO COMPLETO a domicilio.')) ?>" target="_blank" rel="noopener">
      <span>PEDIR ESTE SERVICIO</span><i>&rarr;</i>
    </a>
  </div>
  <div class="split-media split-media--light" data-reveal="2">
    <div class="bg" style="background-image: url('/assets/img/servicio-completo.jpg')"></div>
  </div>
</section>

<section id="parrillero" class="split split--dark">
  <div class="split-media split-media--dark" data-reveal="1">
    <div class="bg" style="background-image: url('/assets/img/servicio-parrillero.jpg')"></div>
  </div>
  <div class="split-copy" data-reveal="2">
    <div class="label">SERVICIO 02</div>
    <h2 class="title">Parrillero<br>a domicilio.</h2>
    <p class="body-text">Vos ponés la parrilla y la carne; nosotros ponemos al parrillero. Llega antes, arma el fuego, cocina a punto y sirve. Ideal cuando ya tenés todo comprado y solo querés disfrutar tu propia reunión.</p>
    <ul class="svc-list">
      <li>Parrillero con experiencia, uniformado</li>
      <li>Llega 1 hora antes para armar el fuego</li>
      <li>Manejo de puntos de cocción a pedido</li>
      <li>Deja la parrilla limpia</li>
      <li>Opción de sumar carne y carbón</li>
    </ul>
    <a class="link-arrow" href="<?= e(wa('Hola! Necesito un PARRILLERO a domicilio.')) ?>" target="_blank" rel="noopener">
      <span>PEDIR ESTE SERVICIO</span><i>&rarr;</i>
    </a>
  </div>
</section>

<section id="eventos" class="split split--light">
  <div class="split-copy" data-reveal="1">
    <div class="label label--dark">SERVICIO 03</div>
    <h2 class="title title--dark">Asado<br>para eventos.</h2>
    <p class="body-text body-text--dark">Cumpleaños, casamientos, asados de empresa y fin de año. Coordinamos el menú, el equipo y los tiempos para que la comida salga cuando tiene que salir, sin que nadie espere.</p>
    <ul class="svc-list">
      <li>Desde 10 hasta más de 200 personas</li>
      <li>Menú a medida con degustación previa (grupos grandes)</li>
      <li>Equipo de parrilleros y personal de servicio</li>
      <li>Coordinación de horarios con el resto del evento</li>
      <li>Factura legal para empresas</li>
    </ul>
    <a class="link-arrow link-arrow--dark" href="/eventos.php">
      <span>VER EVENTOS</span><i>&rarr;</i>
    </a>
  </div>
  <div class="split-media split-media--light" data-reveal="2">
    <div class="bg" style="background-image: url('/assets/img/event-courtyard.jpg')"></div>
  </div>
</section>

<section class="section section--dark">
  <div class="wrap">
    <div class="label" data-reveal="1">QUÉ INCLUYE</div>
    <h2 class="title title--sm" data-reveal="1">Todo lo que no<br>vas a tener que pensar.</h2>
    <div class="grid-services">
      <div class="svc" data-reveal="2">
        <div class="svc-num">01</div>
        <div class="svc-rule"></div>
        <h3>LA CARNE</h3>
        <p>Compramos el mismo día. Cortes elegidos según el grupo y el tiempo que tengamos para cocinar.</p>
      </div>
      <div class="svc" data-reveal="3">
        <div class="svc-num">02</div>
        <div class="svc-rule"></div>
        <h3>EL EQUIPO</h3>
        <p>Parrilla, carbón, leña, tablas, cuchillos y todo lo que hace falta para trabajar bien.</p>
      </div>
      <div class="svc" data-reveal="4">
        <div class="svc-num">03</div>
        <div class="svc-rule"></div>
        <h3>EL SERVICIO</h3>
        <p>Cocinamos, servimos por tandas y dejamos el espacio limpio antes de irnos.</p>
      </div>
    </div>
  </div>
</section>

<?php $cta_msg = 'Hola! Vi los servicios y quiero un presupuesto 🔥'; ?>
<?php require __DIR__ . '/includes/cta.php'; ?>
<?php require __DIR__ . '/includes/footer.php'; ?>
