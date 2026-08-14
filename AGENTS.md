# asado.com.py

Sitio **HTML + PHP plano** que se sube a Hostinger. **No hay Next.js, ni Node, ni
build, ni base de datos.** Si vas a agregar algo, agregalo en este mismo estilo.

## Reglas

- **Nada de frameworks ni bundlers.** Un `.php` por página, un `.css`, un `.js`.
- **Datos del negocio solo en `includes/config.php`.** Nunca escribas el número de
  WhatsApp, el email ni las redes dentro de una página; usá `wa()`, `WHATSAPP_DISPLAY`,
  `CONTACT_EMAIL`.
- **Escapá siempre lo que se imprime** con `e()`.
- **Estilos en `assets/css/style.css`**, usando las variables de `:root`. Evitá estilos
  inline salvo las `background-image` de las fotos.
- **Base oscura.** Los colores por defecto están pensados para fondo oscuro; los
  bloques claros invierten con `.section--light` / `.split--light`.
- **El JS solo agrega.** Si no corre, la página tiene que leerse igual. No ocultes
  contenido por CSS esperando que el JS lo muestre.
- **Idioma: español paraguayo** (voseo: "pedí", "escribinos", "vos"). Nada de "tú".
- Las páginas nuevas se agregan al menú en `includes/header.php` y `includes/footer.php`,
  y a `sitemap.xml`.

## Probar

```bash
php -S localhost:8000
```

## Imágenes

Van en `assets/img/` con los nombres exactos de `assets/img/BRIEF-IMAGENES.md`.
Se generan con Higgsfield y se suben por el administrador de archivos de Hostinger.
