<?php
/**
 * Cabecera común. Cada página define $PAGE antes de incluir este archivo:
 *
 *   $PAGE = [
 *     'slug'  => 'servicios',
 *     'title' => 'Servicios | ASADO.com.py',
 *     'desc'  => 'Descripción para Google (máx ~155 caracteres).',
 *     'path'  => '/servicios.php',
 *     'image' => 'assets/img/hero-social.jpg',   // opcional
 *   ];
 */
require_once __DIR__ . '/config.php';

$PAGE = array_merge([
    'slug'  => 'home',
    'title' => 'ASADO.com.py — Asado a domicilio en Gran Asunción',
    'desc'  => 'Asado a domicilio en Gran Asunción. Parrilleros expertos, carne de calidad, todo incluido. Pedí por WhatsApp.',
    'path'  => '/',
    'image' => 'assets/img/hero-social.jpg',
], $PAGE ?? []);

/** Icono de WhatsApp reutilizable. */
function wa_icon(int $size = 18): string {
    return '<svg width="' . $size . '" height="' . $size . '" viewBox="0 0 24 24" fill="currentColor" aria-hidden="true" focusable="false">'
        . '<path d="M12.04 2C6.58 2 2.13 6.45 2.13 11.91c0 1.75.46 3.45 1.32 4.95L2 22l5.25-1.38c1.45.79 3.08 1.21 4.79 1.21 5.46 0 9.91-4.45 9.91-9.92C21.95 6.45 17.5 2 12.04 2m0 1.67c4.54 0 8.24 3.7 8.24 8.25s-3.7 8.24-8.24 8.24c-1.54 0-3.04-.42-4.34-1.23l-.31-.19-3.1.81.82-3.02-.2-.32a8.19 8.19 0 0 1-1.26-4.35c0-4.55 3.7-8.25 8.39-8.25m-3.6 4.03c-.17 0-.44.06-.67.31-.23.25-.88.86-.88 2.1s.9 2.43 1.03 2.6c.13.16 1.75 2.79 4.25 3.8 2.08.84 2.5.67 2.95.63.45-.04 1.46-.6 1.67-1.18.21-.58.21-1.08.15-1.18-.06-.1-.23-.17-.48-.29-.25-.13-1.46-.72-1.69-.8-.23-.09-.39-.13-.56.12-.16.25-.64.81-.79.98-.14.16-.29.19-.54.06-.25-.12-1.06-.39-2.02-1.25-.71-.63-1.19-1.4-1.33-1.65-.14-.25-.02-.39.11-.51.11-.11.29-.29.42-.45.14-.16.19-.27.29-.45.1-.19.05-.35-.02-.48-.06-.12-.54-1.34-.75-1.83-.2-.48-.4-.4-.56-.41h-.26"/></svg>';
}
?>
<!DOCTYPE html>
<html lang="es-PY">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title><?= e($PAGE['title']) ?></title>
<meta name="description" content="<?= e($PAGE['desc']) ?>">
<link rel="canonical" href="<?= e(url($PAGE['path'])) ?>">
<meta name="theme-color" content="#0D0D0E">
<meta name="robots" content="index, follow">

<meta property="og:type" content="website">
<meta property="og:locale" content="es_PY">
<meta property="og:site_name" content="<?= e(SITE_NAME) ?>">
<meta property="og:title" content="<?= e($PAGE['title']) ?>">
<meta property="og:description" content="<?= e($PAGE['desc']) ?>">
<meta property="og:url" content="<?= e(url($PAGE['path'])) ?>">
<meta property="og:image" content="<?= e(url($PAGE['image'])) ?>">
<meta name="twitter:card" content="summary_large_image">

<link rel="icon" href="/assets/img/favicon.png" type="image/png">
<link rel="apple-touch-icon" href="/assets/img/apple-touch-icon.png">

<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@400;500;600&family=Inter:wght@300;400;500&display=swap" rel="stylesheet">
<link rel="stylesheet" href="/assets/css/style.css?v=1">

<script type="application/ld+json">
<?= json_encode([
    '@context'    => 'https://schema.org',
    '@type'       => 'FoodEstablishment',
    'additionalType' => 'https://schema.org/CateringService',
    'name'        => SITE_NAME,
    'description' => 'Asado a domicilio, parrillero a domicilio y asado para eventos en Gran Asunción, Paraguay.',
    'url'         => SITE_URL,
    'image'       => url('assets/img/hero-social.jpg'),
    'telephone'   => '+' . WHATSAPP_NUMBER,
    'priceRange'  => '₲₲',
    'servesCuisine' => 'Parrilla paraguaya',
    'address'     => [
        '@type'          => 'PostalAddress',
        'addressLocality'=> 'Asunción',
        'addressRegion'  => 'Central',
        'addressCountry' => 'PY',
    ],
    'areaServed'  => array_map(
        fn($z) => ['@type' => 'City', 'name' => $z],
        ['Asunción', 'Lambaré', 'Fernando de la Mora', 'San Lorenzo', 'Luque', 'Mariano Roque Alonso', 'Ñemby', 'Villa Elisa', 'Capiatá', 'Limpio']
    ),
    'sameAs'      => array_values(array_filter([INSTAGRAM_URL, FACEBOOK_URL])),
], JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE | JSON_PRETTY_PRINT) ?>
</script>
</head>
<body>

<a href="#contenido" class="sr-only">Saltar al contenido</a>

<header class="site-header">
  <a href="/" class="brand" aria-label="ASADO.com.py — inicio">
    <div class="brand-mark">ASADO</div>
    <div class="brand-tld">.COM.PY.</div>
  </a>

  <nav class="nav" aria-label="Principal">
    <div class="nav-links" id="nav-links">
      <a href="/servicios.php"<?= is_current('servicios') ?>>SERVICIOS</a>
      <a href="/eventos.php"<?= is_current('eventos') ?>>EVENTOS</a>
      <a href="/precios.php"<?= is_current('precios') ?>>PRECIOS</a>
      <a href="/nosotros.php"<?= is_current('nosotros') ?>>NOSOTROS</a>
      <a href="/contacto.php"<?= is_current('contacto') ?>>CONTACTO</a>
      <a class="btn-wa-mobile" href="<?= e(wa()) ?>" target="_blank" rel="noopener">
        <?= wa_icon(16) ?><span>PEDÍ TU ASADO</span>
      </a>
    </div>

    <a class="btn-wa-header" href="<?= e(wa()) ?>" target="_blank" rel="noopener">
      <span>PEDÍ TU ASADO</span>
      <?= wa_icon(15) ?>
    </a>

    <button class="nav-toggle" type="button" aria-label="Abrir menú" aria-expanded="false" aria-controls="nav-links">
      <span></span>
    </button>
  </nav>
</header>

<main id="contenido">
