<?php
require_once __DIR__ . "/includes/config.php";
$galeria = array_values(array_filter([
    ['galeria-1.jpg', 'Carne a la parrilla sobre brasas'],
    ['galeria-2.jpg', 'Parrillero trabajando el fuego'],
    ['galeria-3.jpg', 'Mesa de asado servida'],
    ['galeria-4.jpg', 'Cortes de asado listos para servir'],
], fn($g) => img_ok($g[0])));

$PAGE = [
    'slug'  => 'nosotros',
    'title' => 'Nosotros: parrilleros en Gran Asunción | ASADO.com.py',
    'desc'  => 'Somos un equipo de parrilleros de Gran Asunción. Llevamos parrilla, carbón y oficio a tu casa, tu oficina o tu salón. Conocé cómo trabajamos.',
    'crumb' => 'Nosotros',
    'path'  => '/nosotros.php',
];
require __DIR__ . '/includes/header.php';
?>

<section class="page-hero">
  <div class="hero-media"<?= bg('parrillero.jpg') ?>></div>
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
  <?php if (img_ok('meat-grill.jpg')): ?>
  <div class="split-media split-media--light" data-reveal="2">
    <div class="bg"<?= bg('meat-grill.jpg') ?>></div>
  </div>
  <?php endif; ?>
</section>

<section class="section section--dark">
  <div class="wrap">
    <div class="label" data-reveal="1">CÓMO TRABAJAMOS</div>
    <h2 class="title title--sm" data-reveal="1">Tres cosas que<br>no negociamos.</h2>
    <div class="grid-services">
      <div class="svc" data-reveal="2">
        <div class="svc-num">01</div>
        <div class="svc-rule"></div>
        <h3>CARNE<br>ELEGIDA</h3>
        <p>Elegimos la carne con cuidado para cada servicio. Nada comprado de apuro.</p>
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

<?php if ($galeria): ?>
<section class="section section--dark section--tight">
  <div class="wrap">
    <div class="label" data-reveal="1">GALERÍA</div>
    <h2 class="title title--sm" data-reveal="1">Del fuego a la mesa.</h2>
  </div>
</section>
<?php endif; ?>

<?php if ($galeria): ?>
<div class="gallery" data-reveal="2">
  <?php foreach ($galeria as $g): ?>
  <figure role="img" aria-label="<?= e($g[1]) ?>"><div class="bg"<?= bg($g[0]) ?>></div></figure>
  <?php endforeach; ?>
</div>
<?php endif; ?></figure>
</div>

<section class="section section--dark">
  <div class="wrap">
    <div class="about-grid" data-reveal="1">
      <div>
        <div class="label">ZONAS</div>
        <h2 class="title">Trabajamos en todo<br>Gran Asunción.</h2>
      </div>
      <p class="body-text mt-0"><?= e(implode(', ', array_slice(ZONAS, 0, -1)) . ' y ' . end(ZONAS)) ?>. ¿Estás fuera de la zona? Escribinos igual y lo coordinamos.</p>
    </div>
  </div>
</section>

<?php $cta_msg = 'Hola! Quiero saber más sobre el servicio 🔥'; ?>
<?php require __DIR__ . '/includes/cta.php'; ?>
<?php require __DIR__ . '/includes/footer.php'; ?>
