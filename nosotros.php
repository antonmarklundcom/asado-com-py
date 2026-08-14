<?php
$PAGE = [
    'slug'  => 'nosotros',
    'title' => 'Nosotros | ASADO.com.py',
    'desc'  => 'Somos un equipo de parrilleros de Gran Asunción. Llevamos parrilla, carbón y oficio a tu casa, tu oficina o tu salón.',
    'path'  => '/nosotros.php',
];
require __DIR__ . '/includes/header.php';
?>

<section class="page-hero">
  <?php bg_picture('assets/img/parrillero.jpg', 'hero-media'); ?>
  <div class="hero-inner">
    <div class="hero-copy">
      <div class="eyebrow" data-reveal="1">NOSOTROS</div>
      <h1 class="display display--sm" data-reveal="2">Un equipo que cocina<br>para tu gente.</h1>
      <p class="hero-lead" data-reveal="3">Vos elegís el lugar y la hora; del resto nos encargamos nosotros.</p>
    </div>
  </div>
</section>

<section class="split split--light">
  <div class="split-copy" data-reveal="1">
    <div class="label label--dark">LA IDEA</div>
    <h2 class="title title--dark">El asado no es<br>solo la comida.</h2>
    <p class="body-text body-text--dark">Empezamos porque nos cansamos de ver siempre a la misma persona atrapada en la parrilla mientras el resto disfrutaba. El asado junta gente, y el que cocina debería poder sentarse también.</p>
    <p class="body-text body-text--dark">Por eso llevamos todo: parrilla, carbón, carne y oficio. Vos recibís a tu gente, nosotros nos ocupamos del fuego.</p>
  </div>
  <div class="split-media split-media--light" data-reveal="2">
    <?php bg_picture('assets/img/meat-grill.jpg', 'bg'); ?>
  </div>
</section>

<section class="section section--dark">
  <div class="wrap">
    <div class="label" data-reveal="1">CÓMO TRABAJAMOS</div>
    <h2 class="title title--sm" data-reveal="1">Tres cosas que<br>no negociamos.</h2>
    <div class="grid-services">
      <div class="svc" data-reveal="2">
        <div class="svc-num">01</div>
        <div class="svc-rule"></div>
        <h3>CARNE<br>DEL DÍA</h3>
        <p>Compramos el mismo día del servicio. Nada congelado ni comprado de apuro.</p>
      </div>
      <div class="svc" data-reveal="3">
        <div class="svc-num">02</div>
        <div class="svc-rule"></div>
        <h3>FUEGO<br>CON TIEMPO</h3>
        <p>Llegamos con anticipación. Un buen asado no se apura, se planifica.</p>
      </div>
      <div class="svc" data-reveal="4">
        <div class="svc-num">03</div>
        <div class="svc-rule"></div>
        <h3>PRECIO<br>CERRADO</h3>
        <p>Lo que te pasamos por escrito es lo que pagás. Sin extras al final.</p>
      </div>
    </div>
  </div>
</section>

<section class="section section--dark section--tight">
  <div class="wrap">
    <div class="label" data-reveal="1">GALERÍA</div>
    <h2 class="title title--sm" data-reveal="1">Del fuego a la mesa.</h2>
  </div>
</section>

<div class="gallery" data-reveal="2">
  <figure><div class="bg" style="background-image: url('/assets/img/galeria-1.jpg')"></div></figure>
  <figure><div class="bg" style="background-image: url('/assets/img/galeria-2.jpg')"></div></figure>
  <figure><div class="bg" style="background-image: url('/assets/img/galeria-3.jpg')"></div></figure>
  <figure><div class="bg" style="background-image: url('/assets/img/galeria-4.jpg')"></div></figure>
</div>

<section class="section section--dark">
  <div class="wrap">
    <div class="about-grid" data-reveal="1">
      <div>
        <div class="label">ZONAS</div>
        <h2 class="title">Trabajamos en todo<br>Gran Asunción.</h2>
      </div>
      <p class="body-text mt-0">Asunción, Lambaré, Fernando de la Mora, San Lorenzo, Luque, Mariano Roque Alonso, Ñemby, Villa Elisa, Capiatá, Limpio, San Antonio y Areguá. ¿Estás fuera de la zona? Escribinos igual y lo coordinamos.</p>
    </div>
  </div>
</section>

<?php $cta_msg = 'Hola! Quiero saber más sobre el servicio 🔥'; ?>
<?php require __DIR__ . '/includes/cta.php'; ?>
<?php require __DIR__ . '/includes/footer.php'; ?>
