/* ASADO.com.py — interacciones mínimas.
   Regla: el JS solo AGREGA cosas. Si no corre, la página se lee perfecto. */
(function () {
  'use strict';

  var root = document.body;

  /* ------------------------------------------------------ menú móvil ---- */
  var toggle = document.querySelector('.nav-toggle');
  var links  = document.querySelector('.nav-links');

  if (toggle && links) {
    toggle.addEventListener('click', function () {
      var open = root.classList.toggle('nav-open');
      toggle.setAttribute('aria-expanded', open ? 'true' : 'false');
      root.style.overflow = open ? 'hidden' : '';
    });

    links.addEventListener('click', function (e) {
      if (e.target.closest('a')) {
        root.classList.remove('nav-open');
        toggle.setAttribute('aria-expanded', 'false');
        root.style.overflow = '';
      }
    });

    window.addEventListener('keydown', function (e) {
      if (e.key === 'Escape' && root.classList.contains('nav-open')) {
        root.classList.remove('nav-open');
        toggle.setAttribute('aria-expanded', 'false');
        root.style.overflow = '';
      }
    });

    window.addEventListener('resize', function () {
      if (window.innerWidth >= 900 && root.classList.contains('nav-open')) {
        root.classList.remove('nav-open');
        toggle.setAttribute('aria-expanded', 'false');
        root.style.overflow = '';
      }
    });
  }

  /* -------------------------------------------------------- revelados ---- */
  if (!('IntersectionObserver' in window)) return;

  var reduce = window.matchMedia && window.matchMedia('(prefers-reduced-motion: reduce)').matches;
  if (reduce) return;

  var play = function (el) {
    if (el.dataset.revealed) return;
    el.dataset.revealed = '1';
    var step = Math.min(parseInt(el.dataset.reveal, 10) || 1, 6);
    var delay = (step - 1) * 0.11;
    el.style.animation = 'omReveal 1.1s cubic-bezier(.22,.61,.36,1) ' + delay + 's both';
  };

  var io = new IntersectionObserver(function (entries) {
    entries.forEach(function (entry) {
      if (entry.isIntersecting) {
        play(entry.target);
        io.unobserve(entry.target);
      }
    });
  }, { threshold: 0.12, rootMargin: '0px 0px -8% 0px' });

  document.querySelectorAll('[data-reveal]').forEach(function (el) { io.observe(el); });
})();
