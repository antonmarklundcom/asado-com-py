<?php
/** Bloque de cierre con el CTA de WhatsApp. */
$cta_msg = $cta_msg ?? 'Hola! Quiero pedir un asado 🔥';
?>
<section class="cta">
  <div class="cta-inner" data-reveal="1">
    <h2>
      <span class="cta-line">
        <span>Escribinos por WhatsApp</span>
        <a class="cta-circle" href="<?= e(wa($cta_msg)) ?>" target="_blank" rel="noopener" aria-label="Escribinos por WhatsApp">&rarr;</a>
      </span>
      <span class="cta-sub">y pedí tu asado.</span>
    </h2>
  </div>
</section>
