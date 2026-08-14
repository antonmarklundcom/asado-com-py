<?php
$PAGE = [
    'slug'  => 'gracias',
    'title' => 'Gracias por escribirnos | ASADO.com.py',
    'desc'  => 'Recibimos tu consulta. Te respondemos dentro de las 24 horas.',
    'path'  => '/gracias.php',
];
require __DIR__ . '/includes/header.php';
?>

<section class="hero" style="min-height: max(80svh, 620px)">
  <div class="hero-media" style="background-image: url('/assets/img/hero-social.jpg')"></div>
  <div class="hero-inner">
    <div class="hero-copy">
      <div class="eyebrow" data-reveal="1">CONSULTA RECIBIDA</div>
      <h1 class="display display--sm" data-reveal="2">Gracias.<br>Ya estamos en eso.</h1>
      <p class="hero-lead" data-reveal="3">Te respondemos dentro de las 24 horas. Si es para una fecha cercana, escribinos por WhatsApp y lo resolvemos ahora.</p>
      <a class="btn-outline" data-reveal="4" href="<?= e(wa('Hola! Acabo de enviar una consulta desde la web.')) ?>" target="_blank" rel="noopener">
        <?= wa_icon(18) ?><span>ESCRIBIR POR WHATSAPP</span>
      </a>
    </div>
  </div>
</section>

<section class="section section--light">
  <div class="wrap center">
    <div class="label label--dark label--center" data-reveal="1">MIENTRAS TANTO</div>
    <div class="grid-services">
      <div class="svc" data-reveal="2">
        <div class="svc-num">01</div>
        <div class="svc-rule"></div>
        <h3>VER SERVICIOS</h3>
        <p>Las tres formas de contratar el asado y qué incluye cada una.</p>
        <a class="link-arrow link-arrow--dark" href="/servicios.php"><span>SERVICIOS</span><i>&rarr;</i></a>
      </div>
      <div class="svc" data-reveal="3">
        <div class="svc-num">02</div>
        <div class="svc-rule"></div>
        <h3>VER PRECIOS</h3>
        <p>Cómo se arma el presupuesto y qué entra en cada plan.</p>
        <a class="link-arrow link-arrow--dark" href="/precios.php"><span>PRECIOS</span><i>&rarr;</i></a>
      </div>
      <div class="svc" data-reveal="4">
        <div class="svc-num">03</div>
        <div class="svc-rule"></div>
        <h3>EVENTOS</h3>
        <p>Cumpleaños, casamientos y asados de empresa en Gran Asunción.</p>
        <a class="link-arrow link-arrow--dark" href="/eventos.php"><span>EVENTOS</span><i>&rarr;</i></a>
      </div>
    </div>
  </div>
</section>

<?php require __DIR__ . '/includes/footer.php'; ?>
