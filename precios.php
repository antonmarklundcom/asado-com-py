<?php
require_once __DIR__ . "/includes/config.php";
/* Los precios salen de PRECIOS en includes/config.php. Si están vacíos se
   muestra "Consultá el precio": nunca se inventa una cifra. */
$planes = [
    [
        'num'     => '01',
        'nombre'  => 'PARRILLERO<br>A DOMICILIO',
        'precio'  => PRECIOS['parrillero'],
        'unidad'  => PRECIOS['parrillero_unidad'],
        'resumen' => 'Vos ponés la carne y la parrilla. Nosotros ponemos la mano.',
        'incluye' => [
            'Parrillero con experiencia',
            'Armado y manejo del fuego',
            'Cocción y servido',
            'Limpieza de la parrilla',
        ],
        'msg'     => 'Hola! Quiero el servicio de PARRILLERO A DOMICILIO.',
    ],
    [
        'num'     => '02',
        'nombre'  => 'ASADO COMPLETO<br>A DOMICILIO',
        'precio'  => PRECIOS['completo'],
        'unidad'  => PRECIOS['completo_unidad'],
        'resumen' => 'Todo incluido. Vos solo elegís el día y la hora.',
        'incluye' => [
            'Carne seleccionada',
            'Chorizo, morcilla y provoleta',
            'Guarniciones y ensaladas',
            'Parrilla, carbón y utensilios',
            'Parrillero, servicio y limpieza',
        ],
        'msg'     => 'Hola! Quiero el ASADO COMPLETO a domicilio.',
    ],
    [
        'num'     => '03',
        'nombre'  => 'ASADO<br>PARA EVENTOS',
        'precio'  => PRECIOS['eventos'] !== '' ? PRECIOS['eventos'] : 'A medida',
        'unidad'  => PRECIOS['eventos_unidad'],
        'resumen' => 'Menú, equipo y tiempos armados para tu evento.',
        'incluye' => [
            'Menú a medida',
            'Equipo de parrilleros y servicio',
            'Coordinación de horarios',
            'Montaje y retiro completo',
        ],
        'msg'     => 'Hola! Quiero un presupuesto para un evento.',
    ],
];

$PAGE = [
    'slug'  => 'precios',
    'title' => 'Precios de asado a domicilio | ASADO.com.py',
    'desc'  => 'Cómo se arma el precio del asado a domicilio, el parrillero y los eventos en Gran Asunción. Presupuesto cerrado por escrito, sin sorpresas.',
    'crumb' => 'Precios',
    'path'  => '/precios.php',
];
require __DIR__ . '/includes/header.php';
?>

<section class="page-hero">
  <div class="hero-media"<?= bg('servicio-completo.jpg') ?>></div>
  <div class="hero-inner">
    <div class="hero-copy">
      <div class="eyebrow" data-reveal="1">PRECIOS</div>
      <h1 class="display display--sm" data-reveal="2">Presupuesto cerrado.<br>Sin sorpresas.</h1>
      <p class="hero-lead" data-reveal="3">Te pasamos el precio final por escrito antes de confirmar.</p>
    </div>
  </div>
</section>

<section class="section section--light">
  <div class="wrap">
    <div class="label label--dark label--center" data-reveal="1">NUESTROS PLANES</div>
    <div class="grid-services">
      <?php foreach ($planes as $i => $p): ?>
      <div class="svc" data-reveal="<?= $i + 2 ?>">
        <div class="svc-num"><?= e($p['num']) ?></div>
        <div class="svc-rule"></div>
        <h3><?= $p['nombre'] ?></h3>
        <div class="price"><?= e($p['precio'] !== '' ? $p['precio'] : 'Consultá el precio') ?></div>
        <?php if ($p['unidad'] !== ''): ?><div class="price-unit"><?= e(mb_strtoupper($p['unidad'], 'UTF-8')) ?></div><?php endif; ?>
        <p><?= e($p['resumen']) ?></p>
        <ul class="svc-list">
          <?php foreach ($p['incluye'] as $item): ?>
          <li><?= e($item) ?></li>
          <?php endforeach; ?>
        </ul>
        <a class="link-arrow link-arrow--dark" href="<?= e(wa($p['msg'])) ?>" target="_blank" rel="noopener">
          <span>PEDIR PRESUPUESTO</span><i>&rarr;</i>
        </a>
      </div>
      <?php endforeach; ?>
    </div>
  </div>
</section>

<section class="section section--dark">
  <div class="wrap">
    <div class="label" data-reveal="1">LETRA CHICA, EN GRANDE</div>
    <h2 class="title title--sm" data-reveal="1">Cómo se arma el precio.</h2>
    <div class="steps">
      <div class="step" data-reveal="2">
        <div class="step-num">01</div>
        <h3>Cantidad de personas</h3>
        <p>Calculamos las porciones sobre la cantidad de personas confirmada.</p>
      </div>
      <div class="step" data-reveal="3">
        <div class="step-num">02</div>
        <h3>Cortes elegidos</h3>
        <p>Podés subir o bajar el menú cambiando los cortes. Te mostramos las dos opciones.</p>
      </div>
      <div class="step" data-reveal="4">
        <div class="step-num">03</div>
        <h3>Distancia</h3>
        <p>Contanos dónde es el asado y te decimos si el traslado tiene costo. Fuera de zona lo cotizamos aparte.</p>
      </div>
      <div class="step" data-reveal="5">
        <div class="step-num">04</div>
        <h3>Seña y saldo</h3>
        <p>Las condiciones de reserva y pago se acuerdan por escrito en el presupuesto.</p>
      </div>
    </div>
  </div>
</section>

<?php $cta_msg = 'Hola! Quiero un presupuesto para mi asado 🔥'; ?>
<?php require __DIR__ . '/includes/cta.php'; ?>
<?php require __DIR__ . '/includes/footer.php'; ?>
