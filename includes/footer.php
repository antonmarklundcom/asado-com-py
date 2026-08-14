</main>

<footer class="site-footer">
  <div class="footer-inner">
    <div class="footer-brand">ASADO.COM.PY</div>
    <div class="footer-links">
      <a href="/servicios.php">SERVICIOS</a>
      <a href="/eventos.php">EVENTOS</a>
      <a href="/precios.php">PRECIOS</a>
      <a href="/nosotros.php">NOSOTROS</a>
      <a href="/contacto.php">CONTACTO</a>
    </div>
    <div class="footer-links">
      <span>GRAN ASUNCIÓN, PARAGUAY</span>
      <a href="<?= e(wa()) ?>" target="_blank" rel="noopener">WHATSAPP</a>
      <?php if (INSTAGRAM_URL): ?><a href="<?= e(INSTAGRAM_URL) ?>" target="_blank" rel="noopener">INSTAGRAM</a><?php endif; ?>
      <span>&copy; <?= date('Y') ?></span>
    </div>
  </div>
</footer>

<a class="wa-float" href="<?= e(wa()) ?>" target="_blank" rel="noopener" aria-label="Escribinos por WhatsApp">
  <?= wa_icon(24) ?>
</a>

<script src="/assets/js/main.js?v=1" defer></script>
</body>
</html>
