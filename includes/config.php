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
