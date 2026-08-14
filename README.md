# ASADO.com.py

Sitio estático en **HTML + PHP** para Hostinger. Sin build, sin Node, sin base de
datos: se sube por FTP o Git y funciona.

---

## Antes de publicar — 3 cosas obligatorias

1. **Número de WhatsApp.** Abrí `includes/config.php` y cambiá:
   ```php
   define('WHATSAPP_NUMBER',  '595000000000');   // 595 + número sin el 0 inicial
   define('WHATSAPP_DISPLAY', '+595 000 000 000');
   define('CONTACT_EMAIL',    'hola@asado.com.py');
   ```
2. **Precios.** `precios.php` arranca con un array `$planes` con valores de ejemplo.
   Están marcados con un comentario `⚠️ PRECIOS PROVISORIOS`. Cambialos o sacá la
   página del menú (`includes/header.php` y `includes/footer.php`).
3. **Imágenes.** Falta subirlas. Ver `assets/img/BRIEF-IMAGENES.md`: ahí está la lista
   exacta de nombres de archivo y el prompt de cada una para Higgsfield.
   Mientras no estén, los bloques se ven en negro carbón (no se rompe nada).

---

## Estructura

```
index.php          Portada
servicios.php      Los 3 servicios en detalle
eventos.php        Eventos y empresas
precios.php        Planes y precios
nosotros.php       Equipo, forma de trabajo, galería
contacto.php       Formulario (mail de PHP) + datos directos
gracias.php        Confirmación después de enviar el formulario
404.php            Página de error

includes/
  config.php       ⭐ Datos del negocio: WhatsApp, email, redes
  header.php       <head>, SEO, JSON-LD, navegación
  footer.php       Pie, botón flotante de WhatsApp, script
  cta.php          Bloque de cierre "Escribinos por WhatsApp"

assets/
  css/style.css    Toda la hoja de estilos
  js/main.js       Menú móvil + animaciones de aparición
  img/             Acá van las fotos (ver BRIEF-IMAGENES.md)

.htaccess          URLs limpias, caché, compresión, 404, seguridad
robots.txt         + sitemap.xml
```

## Diseño

| Uso | Color |
|---|---|
| Fondo oscuro | `#0D0D0E` |
| Fondo oscuro alterno | `#161210` |
| Fondo claro / crema | `#F6F1EA` |
| Texto sobre oscuro | `#F3EFE8` |
| Texto sobre claro | `#1A1614` |
| Dorado principal | `#B88A4A` |
| Dorado sobre oscuro | `#C79A5C` |
| Dorado sobre claro | `#A87F45` |

Tipografías: **Playfair Display** (títulos) + **Inter** 300/400/500 (texto).
Todas las variables están arriba de `assets/css/style.css` en `:root`.

## Subir a Hostinger

**Opción A — Administrador de archivos (más simple)**
1. hPanel → Archivos → Administrador de archivos → `public_html`.
2. Borrá lo que haya adentro y subí todo el contenido de este repo
   (que `index.php` quede directamente en `public_html`, no dentro de una subcarpeta).
3. hPanel → SSL → activar el certificado del dominio.
4. Descomentá el bloque HTTPS de `.htaccess` cuando el SSL esté activo.

**Opción B — Git**
hPanel → Avanzado → Git → conectar este repositorio, rama `main`, carpeta `public_html`.
Después de cada push, apretar *Deploy*.

## Formulario de contacto

`contacto.php` usa la función `mail()` de PHP y envía a `CONTACT_EMAIL`.
En Hostinger funciona si el email es una casilla del mismo dominio (creála en
hPanel → Emails). Si los mails no llegan, revisá spam y que el dominio tenga
los registros SPF/DKIM que Hostinger genera solo.

El formulario tiene un campo trampa (honeypot) contra bots. No lo saques.

## Probar en local

```bash
php -S localhost:8000
```
Y abrir http://localhost:8000
