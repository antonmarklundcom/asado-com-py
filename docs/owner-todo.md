# Pendientes del dueño antes de lanzar

Lo que el repositorio no puede resolver solo.

## Datos en `includes/config.php`
- [ ] `WHATSAPP_NUMBER` / `WHATSAPP_DISPLAY`: todavía es el número de ejemplo (595000000000). Mientras siga así, el teléfono no se emite en los datos estructurados.
- [ ] `CONTACT_EMAIL`: confirmar que el buzón exista en Hostinger (el formulario usa `mail()`).
- [ ] `PRECIOS`: cargar los precios reales (vacíos = la página muestra "Consultá el precio"). No se publicó ninguna cifra inventada.
- [ ] `HORARIOS`: opcional; vacío = no se muestra.
- [ ] `ZONAS`: confirmar la lista de 12 ciudades.
- [ ] `FACEBOOK_URL`: completar si existe.

## Textos a confirmar (se quitaron cifras y promesas que no estaban respaldadas)
Se generalizaron: anticipación de reserva, tamaños de grupo, degustación gratuita, factura legal, formas de pago y seña, uniforme, horarios. Si son ciertas, se pueden volver a agregar con datos reales en `index.php`, `eventos.php`, `servicios.php`, `precios.php`. También confirmar "carne elegida con cuidado" y "llegamos con anticipación".

## Fotos (no se generó ninguna)
Subir a `assets/img/` con los nombres exactos de `assets/img/BRIEF-IMAGENES.md` (prompts incluidos):
`hero-social.jpg`, `meat-grill.jpg`, `event-courtyard.jpg`, `parrillero.jpg`, `servicio-completo.jpg`, `servicio-parrillero.jpg`, `evento-empresa.jpg`, `galeria-1.jpg` a `galeria-4.jpg`, `favicon.png`, `apple-touch-icon.png`.
Sin fotos el sitio se ve correcto: los bloques con foto se ocultan, la galería desaparece y `og:image` / favicon no se emiten. Sin `hero-social.jpg` los enlaces compartidos no tendrán imagen.

## Hostinger
- [ ] Activar SSL y descomentar la redirección HTTPS en `.htaccess`.
- [ ] Probar el formulario de contacto (llegada del mail).
- [ ] Registrar el sitio en Google Search Console y enviar `sitemap.xml`.
- [ ] Crear el perfil de Google Business Profile.
- [ ] Nota: existe la rama `claude/asado-website-rebuild-3tn144` con fotos, páginas por ciudad y testimonios que no entraron a `master`; revisar los testimonios (no usar reseñas inventadas).

## Deploy por Git (hPanel → Avanzado → GIT)
1. Repositorio `antonmarklundcom/asado-com-py`, rama `master`, ruta de instalación vacía (= `public_html`). `public_html` tiene que estar vacío en el primer deploy (borrá `default.php` o los archivos del sitio viejo).
2. Copiá la URL del webhook de Hostinger a GitHub → Settings → Webhooks (evento push): cada merge redeploya solo.
3. Los archivos ignorados por Git (`config.php`, `.env`, `storage/`) no viajan: creálos una sola vez por el administrador de archivos y no se pisan en los deploys siguientes.
4. Después del primer deploy, verificá que `/docs/`, `/.git/HEAD` y `/PLAN.md` den 403/404.
