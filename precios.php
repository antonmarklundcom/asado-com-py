<?php
/* ---------------------------------------------------------------------------
   ⚠️  PRECIOS PROVISORIOS — EDITAR ANTES DE PUBLICAR
   Los valores de abajo son ejemplos para que la página se vea completa.
   Cambiá `precio`, `unidad` y los `incluye` con tus números reales.
   --------------------------------------------------------------------------- */
$planes = [
    [
        'num'     => '01',
        'nombre'  => 'PARRILLERO<br>A DOMICILIO',
        'precio'  => '₲ 350.000',
        'unidad'  => 'por servicio · hasta 20 personas',
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
        'precio'  => '₲ 95.000',
        'unidad'  => 'por persona · mínimo 10 personas',
        'resumen' => 'Todo incluido. Vos solo elegís el día y la hora.',
        'incluye' => [
            'Carne seleccionada del día',
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
        'precio'  => 'A medida',
        'unidad'  => 'desde 50 personas',
        'resumen' => 'Menú, equipo y tiempos armados para tu evento.',
        'incluye' => [
            'Menú a medida y degustación previa',
            'Equipo de parrilleros y servicio',
            'Coordinación de horarios',
            'Factura legal para empresas',
            'Montaje y retiro completo',
        ],
        'msg'     => 'Hola! Quiero un presupuesto para un evento.',
    ],
];

$PAGE = [
    'slug'  => 'precios',
    'title' => 'Precios de asado a domicilio | ASADO.com.py',
    'desc'  => 'Precios de asado a domicilio, parrillero a domicilio y asado para eventos en Gran Asunción. Presupuesto cerrado, sin sorpresas.',
    'path'  => '/precios.php',
];
require __DIR__ . '/includes/header.php';
?>

<section class="page-hero">
  <?php bg_picture('assets/img/servicio-completo.jpg', 'hero-media'); ?>
  <div class="hero-inner">
    <div class="hero-copy">
      <div class="eyebrow" data-reveal="1">PRECIOS</div>
      <h1 class="display display--sm" data-reveal="2">Presupuesto cerrado.<br>Sin sorpresas.</h1>
      <p class="hero-lead" data-reveal="3">Te pasamos el precio final antes de confirmar. Lo que acordamos es lo que pagás.</p>
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
        <div style="font-family: var(--serif); font-size: clamp(26px, 2.4vw, 36px); color: var(--ink-3); margin-top: clamp(20px, 2.2vw, 28px)"><?= e($p['precio']) ?></div>
        <div style="font-size: 11px; letter-spacing: 0.18em; color: var(--gold-dark); margin-top: 10px"><?= e(mb_strtoupper($p['unidad'], 'UTF-8')) ?></div>
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
        <p>Calculamos las porciones sobre la cantidad confirmada. Siempre cocinamos un poco de más.</p>
      </div>
      <div class="step" data-reveal="3">
        <div class="step-num">02</div>
        <h3>Cortes elegidos</h3>
        <p>Podés subir o bajar el menú cambiando los cortes. Te mostramos las dos opciones.</p>
      </div>
      <div class="step" data-reveal="4">
        <div class="step-num">03</div>
        <h3>Distancia</h3>
        <p>Dentro de Gran Asunción el traslado va incluido. Fuera de zona se cotiza aparte.</p>
      </div>
      <div class="step" data-reveal="5">
        <div class="step-num">04</div>
        <h3>Seña y saldo</h3>
        <p>Se reserva la fecha con una seña y el resto se abona el día del evento.</p>
      </div>
    </div>
  </div>
</section>

<?php $cta_msg = 'Hola! Quiero un presupuesto para mi asado 🔥'; ?>
<?php require __DIR__ . '/includes/cta.php'; ?>
<?php require __DIR__ . '/includes/footer.php'; ?>
