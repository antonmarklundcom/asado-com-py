<?php
/**
 * Plantilla única para todas las páginas de zona (asado-a-domicilio-en-*.php).
 * Los datos de cada ciudad viven en includes/zonas-data.php; cada .php de
 * zona solo llama a render_zona_page('slug').
 */
require_once __DIR__ . '/config.php';

function render_zona_page(string $slug): void {
    $ZONAS = require __DIR__ . '/zonas-data.php';
    if (!isset($ZONAS[$slug])) {
        http_response_code(404);
        require __DIR__ . '/../404.php';
        exit;
    }
    $z = $ZONAS[$slug];

    global $PAGE;
    $PAGE = [
        'slug'  => 'zona-' . $slug,
        'title' => $z['title'],
        'desc'  => $z['desc'],
        'path'  => '/asado-a-domicilio-en-' . $slug . '.php',
        'image' => $z['imagen'],
    ];
    require __DIR__ . '/header.php';
    ?>

<section class="page-hero">
  <?php bg_picture($z['imagen'], 'hero-media'); ?>
  <div class="hero-inner">
    <div class="hero-copy">
      <div class="eyebrow" data-reveal="1">ASADO A DOMICILIO EN <?= e(mb_strtoupper($z['nombre'], 'UTF-8')) ?></div>
      <h1 class="display display--sm" data-reveal="2"><?= $z['h1'] ?></h1>
      <p class="hero-lead" data-reveal="3">Parrilleros expertos, carne de calidad y todo incluido. Nosotros hacemos el asado, vos disfrutás con tu gente.</p>
      <a class="btn-outline" data-reveal="4" href="<?= e(wa('Hola! Quiero pedir un asado a domicilio en ' . $z['nombre'] . ' 🔥')) ?>" target="_blank" rel="noopener">
        <?= wa_icon(18) ?>
        <span>PEDÍ POR WHATSAPP</span>
      </a>
    </div>
  </div>
</section>

<section class="section section--light">
  <div class="wrap">
    <div class="label label--dark" data-reveal="1">ASADO EN <?= e(mb_strtoupper($z['nombre'], 'UTF-8')) ?></div>
    <h2 class="title title--dark title--sm" data-reveal="1">Llegamos a toda la ciudad.</h2>
    <?php foreach ($z['parrafos'] as $i => $parrafo): ?>
    <p class="body-text body-text--dark" data-reveal="<?= min($i + 2, 6) ?>"><?= e($parrafo) ?></p>
    <?php endforeach; ?>
    <ul class="zones" data-reveal="2">
      <?php foreach ($z['barrios'] as $barrio): ?>
      <li><?= e($barrio) ?></li>
      <?php endforeach; ?>
    </ul>
  </div>
</section>

<section class="section section--dark">
  <div class="wrap">
    <div class="label" data-reveal="1">TAMBIÉN LLEGAMOS A</div>
    <h2 class="title title--sm" data-reveal="1">Otras zonas de<br>Gran Asunción.</h2>
    <ul class="zones" data-reveal="2">
      <?php foreach ($ZONAS as $otroSlug => $otraZona): if ($otroSlug === $slug) continue; ?>
      <li><a href="/asado-a-domicilio-en-<?= e($otroSlug) ?>.php"><?= e(mb_strtoupper($otraZona['nombre'], 'UTF-8')) ?></a></li>
      <?php endforeach; ?>
    </ul>
  </div>
</section>

    <?php
    $cta_msg = 'Hola! Quiero pedir un asado a domicilio en ' . $z['nombre'] . ' 🔥';
    require __DIR__ . '/cta.php';
    require __DIR__ . '/footer.php';
}
