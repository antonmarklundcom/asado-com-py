<?php
require_once __DIR__ . '/includes/config.php';

$errores = [];
$enviado = false;
$val = ['nombre' => '', 'telefono' => '', 'email' => '', 'fecha' => '', 'personas' => '', 'servicio' => '', 'mensaje' => ''];

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    foreach ($val as $k => $_) {
        $val[$k] = trim((string) ($_POST[$k] ?? ''));
    }

    // Honeypot: si un bot completa este campo oculto, cortamos sin avisar.
    $trampa = trim((string) ($_POST['website'] ?? ''));

    if ($val['nombre'] === '')                       { $errores[] = 'Poné tu nombre.'; }
    if ($val['telefono'] === '')                     { $errores[] = 'Necesitamos un teléfono para responderte.'; }
    if ($val['email'] !== '' && !filter_var($val['email'], FILTER_VALIDATE_EMAIL)) {
        $errores[] = 'Ese email no parece válido.';
    }
    if (mb_strlen($val['mensaje']) > 3000)           { $errores[] = 'El mensaje es demasiado largo.'; }

    if (!$errores && $trampa === '') {
        $cuerpo = "Nueva consulta desde asado.com.py\n\n"
            . "Nombre:   {$val['nombre']}\n"
            . "Teléfono: {$val['telefono']}\n"
            . "Email:    {$val['email']}\n"
            . "Fecha:    {$val['fecha']}\n"
            . "Personas: {$val['personas']}\n"
            . "Servicio: {$val['servicio']}\n\n"
            . "Mensaje:\n{$val['mensaje']}\n";

        $headers = "From: " . SITE_NAME . " <no-reply@asado.com.py>\r\n";
        if ($val['email'] !== '') {
            $headers .= "Reply-To: " . str_replace(["\r", "\n"], '', $val['email']) . "\r\n";
        }
        $headers .= "Content-Type: text/plain; charset=UTF-8\r\n";

        @mail(CONTACT_EMAIL, 'Consulta web — ' . $val['nombre'], $cuerpo, $headers);
    }

    if (!$errores) {
        header('Location: /gracias.php');
        exit;
    }
}

$PAGE = [
    'slug'  => 'contacto',
    'title' => 'Contacto | ASADO.com.py',
    'desc'  => 'Pedí tu asado a domicilio en Gran Asunción. Escribinos por WhatsApp o dejanos tus datos y te respondemos.',
    'path'  => '/contacto.php',
];
require __DIR__ . '/includes/header.php';
?>

<section class="page-hero">
  <?php bg_picture('assets/img/servicio-parrillero.jpg', 'hero-media'); ?>
  <div class="hero-inner">
    <div class="hero-copy">
      <div class="eyebrow" data-reveal="1">CONTACTO</div>
      <h1 class="display display--sm" data-reveal="2">Contanos qué<br>estás organizando.</h1>
      <p class="hero-lead" data-reveal="3">Lo más rápido es WhatsApp. Si preferís, dejanos tus datos y te escribimos nosotros.</p>
      <a class="btn-outline" data-reveal="4" href="<?= e(wa('Hola! Quiero pedir un asado 🔥')) ?>" target="_blank" rel="noopener">
        <?= wa_icon(18) ?><span>ESCRIBIR POR WHATSAPP</span>
      </a>
    </div>
  </div>
</section>

<section class="section section--dark">
  <div class="wrap">
    <div class="form-grid">

      <div data-reveal="1">
        <div class="label">PEDIDO POR FORMULARIO</div>
        <h2 class="title title--sm">Dejanos tus datos.</h2>

        <?php if ($errores): ?>
        <div class="alert alert--error" style="margin-top: 28px">
          <?php foreach ($errores as $err): ?>
            <div><?= e($err) ?></div>
          <?php endforeach; ?>
        </div>
        <?php endif; ?>

        <form class="form" method="post" action="/contacto.php">
          <div class="field">
            <label for="nombre">NOMBRE *</label>
            <input type="text" id="nombre" name="nombre" required value="<?= e($val['nombre']) ?>">
          </div>
          <div class="field">
            <label for="telefono">TELÉFONO / WHATSAPP *</label>
            <input type="tel" id="telefono" name="telefono" required value="<?= e($val['telefono']) ?>">
          </div>
          <div class="field">
            <label for="email">EMAIL</label>
            <input type="email" id="email" name="email" value="<?= e($val['email']) ?>">
          </div>
          <div class="field">
            <label for="servicio">SERVICIO</label>
            <select id="servicio" name="servicio">
              <option value="">Elegí una opción</option>
              <option value="Asado completo a domicilio"<?= $val['servicio'] === 'Asado completo a domicilio' ? ' selected' : '' ?>>Asado completo a domicilio</option>
              <option value="Parrillero a domicilio"<?= $val['servicio'] === 'Parrillero a domicilio' ? ' selected' : '' ?>>Parrillero a domicilio</option>
              <option value="Asado para eventos"<?= $val['servicio'] === 'Asado para eventos' ? ' selected' : '' ?>>Asado para eventos</option>
              <option value="Otro"<?= $val['servicio'] === 'Otro' ? ' selected' : '' ?>>Otro</option>
            </select>
          </div>
          <div class="field">
            <label for="fecha">FECHA DEL ASADO</label>
            <input type="date" id="fecha" name="fecha" value="<?= e($val['fecha']) ?>">
          </div>
          <div class="field">
            <label for="personas">CANTIDAD DE PERSONAS</label>
            <input type="number" id="personas" name="personas" min="1" max="1000" value="<?= e($val['personas']) ?>">
          </div>
          <div class="field">
            <label for="mensaje">CONTANOS UN POCO MÁS</label>
            <textarea id="mensaje" name="mensaje"><?= e($val['mensaje']) ?></textarea>
          </div>

          <!-- honeypot anti-spam: no tocar -->
          <div style="position:absolute; left:-9999px" aria-hidden="true">
            <label for="website">No completar</label>
            <input type="text" id="website" name="website" tabindex="-1" autocomplete="off">
          </div>

          <button type="submit" class="btn-outline" style="margin-top: 10px">
            <span>ENVIAR CONSULTA</span>
          </button>
          <p class="form-note">Te respondemos dentro de las 24 horas. Tus datos se usan solo para responder esta consulta.</p>
        </form>
      </div>

      <div data-reveal="2">
        <div class="label">DATOS DIRECTOS</div>
        <h2 class="title title--sm">Hablemos.</h2>
        <ul class="contact-info">
          <li>
            <span>WHATSAPP</span>
            <a href="<?= e(wa()) ?>" target="_blank" rel="noopener"><?= e(WHATSAPP_DISPLAY) ?></a>
          </li>
          <li>
            <span>EMAIL</span>
            <a href="mailto:<?= e(CONTACT_EMAIL) ?>"><?= e(CONTACT_EMAIL) ?></a>
          </li>
          <li>
            <span>ZONA DE SERVICIO</span>
            Gran Asunción, Paraguay
          </li>
          <li>
            <span>HORARIOS DE ATENCIÓN</span>
            Lunes a domingo · 08:00 a 22:00
          </li>
          <?php if (INSTAGRAM_URL): ?>
          <li>
            <span>INSTAGRAM</span>
            <a href="<?= e(INSTAGRAM_URL) ?>" target="_blank" rel="noopener">@asado.com.py</a>
          </li>
          <?php endif; ?>
        </ul>
      </div>

    </div>
  </div>
</section>

<?php $cta_msg = 'Hola! Quiero pedir un asado 🔥'; ?>
<?php require __DIR__ . '/includes/cta.php'; ?>
<?php require __DIR__ . '/includes/footer.php'; ?>
