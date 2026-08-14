<?php
http_response_code(404);
$PAGE = [
    'slug'  => '404',
    'title' => 'Página no encontrada | ASADO.com.py',
    'desc'  => 'La página que buscás no existe. Volvé al inicio o escribinos por WhatsApp.',
    'path'  => '/404.php',
];
require __DIR__ . '/includes/header.php';
?>

<section class="hero" style="min-height: max(80svh, 600px)">
  <div class="hero-media" style="background-image: url('/assets/img/meat-grill.jpg')"></div>
  <div class="hero-inner">
    <div class="hero-copy">
      <div class="eyebrow" data-reveal="1">ERROR 404</div>
      <h1 class="display display--sm" data-reveal="2">Esta página<br>se quemó.</h1>
      <p class="hero-lead" data-reveal="3">No encontramos lo que buscabas. Volvé al inicio o escribinos y te ayudamos.</p>
      <a class="btn-outline" data-reveal="4" href="/"><span>VOLVER AL INICIO</span></a>
    </div>
  </div>
</section>

<?php require __DIR__ . '/includes/footer.php'; ?>
