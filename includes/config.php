<?php
/**
 * ASADO.com.py — configuración central del sitio.
 * Cambiá los valores de acá y se actualizan todas las páginas.
 */

// ---------------------------------------------------------------------------
// NEGOCIO
// ---------------------------------------------------------------------------
define('SITE_NAME',   'ASADO.com.py');
define('SITE_URL',    'https://asado.com.py');           // sin barra final
define('SITE_REGION', 'Gran Asunción, Paraguay');

// WhatsApp en formato internacional, solo dígitos (595 + número sin 0).
// Ej: 0981 123 456  ->  595981123456
define('WHATSAPP_NUMBER',  '595000000000');
define('WHATSAPP_DISPLAY', '+595 000 000 000');

// Email al que llegan los formularios de contacto.
define('CONTACT_EMAIL', 'hola@asado.com.py');

// Redes (dejá vacío '' para ocultar el enlace).
define('INSTAGRAM_URL', 'https://instagram.com/asado.com.py');
define('FACEBOOK_URL',  '');

// Zonas de cobertura (se usan en portada, nosotros y datos estructurados).
const ZONAS = [
    'Asunción', 'Lambaré', 'Fernando de la Mora', 'San Lorenzo', 'Luque',
    'Mariano Roque Alonso', 'Ñemby', 'Villa Elisa', 'Capiatá', 'Limpio',
    'San Antonio', 'Areguá',
];

// Precios reales por plan. Dejalos vacíos ('') hasta confirmarlos: la página
// de precios muestra "Consultá el precio" y no se inventa ninguna cifra.
// Ej: 'completo' => '₲ 95.000', 'completo_unidad' => 'por persona'
const PRECIOS = [
    'parrillero'        => '',
    'parrillero_unidad' => '',
    'completo'          => '',
    'completo_unidad'   => '',
    'eventos'           => '',
    'eventos_unidad'    => '',
];

// Horario de atención (vacío = no se muestra en ningún lado).
const HORARIOS = '';

// ---------------------------------------------------------------------------
// HELPERS
// ---------------------------------------------------------------------------

/** Enlace de WhatsApp con mensaje pre-cargado. */
function wa(string $mensaje = ''): string {
    $base = 'https://wa.me/' . WHATSAPP_NUMBER;
    if ($mensaje === '') {
        $mensaje = 'Hola! Quiero pedir un asado 🔥';
    }
    return $base . '?text=' . rawurlencode($mensaje);
}

/** Escapa texto para HTML. */
function e(?string $s): string {
    return htmlspecialchars((string) $s, ENT_QUOTES, 'UTF-8');
}

/** URL absoluta a partir de una ruta relativa. */
function url(string $path = ''): string {
    return SITE_URL . '/' . ltrim($path, '/');
}

/** Devuelve ' aria-current="page"' si la página actual coincide. */
function is_current(string $slug): string {
    global $PAGE;
    return (isset($PAGE['slug']) && $PAGE['slug'] === $slug) ? ' aria-current="page"' : '';
}

/** ¿Existe la imagen en assets/img/? Sirve para no dejar bloques vacíos. */
function img_ok(string $file): bool {
    return is_file(__DIR__ . '/../assets/img/' . $file);
}

/** Atributo style con la foto de fondo, o '' si todavía no se subió. */
function bg(string $file): string {
    return img_ok($file)
        ? ' style="background-image: url(\'/assets/img/' . e($file) . '\')"'
        : '';
}

/** True mientras el WhatsApp sea el número de ejemplo. */
function wa_placeholder(): bool {
    return WHATSAPP_NUMBER === '595000000000';
}

/** Imprime un bloque de preguntas frecuentes (<details>). */
function faq_render(array $faq): void {
    echo '<div class="faq" data-reveal="2">' . "\n";
    foreach ($faq as [$q, $a]) {
        echo '  <details><summary>' . e($q) . '</summary><p>' . e($a) . '</p></details>' . "\n";
    }
    echo '</div>' . "\n";
}
