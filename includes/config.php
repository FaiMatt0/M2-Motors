<?php
/**
 * File di configurazione per M2 Motors
 * Contiene impostazioni comuni per tutto il sito
 */

// Informazioni aziendali
define('COMPANY_NAME', 'M2 Motors');
define('COMPANY_OWNER', 'Mattia Milan');
define('COMPANY_YEAR', '2010');
define('COMPANY_ADDRESS', 'Via Villotta 17, 33083 Villotta di Chions (PN)');
define('COMPANY_PHONE', '0434 630752');
define('COMPANY_EMAIL', 'info@m2motors.it');
define('COMPANY_WHATSAPP', '393471234567');
define('COMPANY_INSTAGRAM', 'https://www.instagram.com/m2motors_mattia');

// Orari di apertura
define('OPENING_HOURS', [
    'weekdays' => 'Lunedì-Venerdì: 8:30 - 12:30, 14:00 - 18:00',
    'saturday' => 'Sabato: 8:30 - 12:30',
    'sunday' => 'Domenica: Chiuso'
]);

// Impostazioni sito
define('SITE_NAME', 'M2 Motors');
define('DEFAULT_DESCRIPTION', 'M2 Motors - Meccanici automobilistici professionisti che offrono servizi e riparazioni di qualità nella tua zona');
define('DEFAULT_KEYWORDS', 'automobilistico, meccanici, riparazione auto, manutenzione veicoli');

// Funzione per ottenere il titolo della pagina
function getPageTitle($pageTitle = null) {
    if ($pageTitle) {
        return $pageTitle . ' - ' . SITE_NAME;
    }
    return SITE_NAME . ' - Meccanici Automobilistici Professionisti';
}

// Funzione per ottenere la descrizione della pagina
function getPageDescription($pageDescription = null) {
    return $pageDescription ? $pageDescription : DEFAULT_DESCRIPTION;
}

// Funzione per ottenere le keywords della pagina
function getPageKeywords($pageKeywords = null) {
    return $pageKeywords ? $pageKeywords : DEFAULT_KEYWORDS;
}

// Funzione per generare il menu di navigazione
function generateNavigation($currentPage, $basePath = '') {
    $menuItems = [
        'home' => ['url' => $basePath . 'index.php', 'label' => 'Home'],
        'about' => ['url' => $basePath . 'pages/about.php', 'label' => 'Chi Siamo'],
        'services' => ['url' => $basePath . 'pages/services.php', 'label' => 'Servizi'],
        'gallery' => ['url' => $basePath . 'pages/gallery.php', 'label' => 'Galleria'],
        'contact' => ['url' => $basePath . 'pages/contact.php', 'label' => 'Contatti']
    ];
    
    $navigation = '';
    foreach ($menuItems as $key => $item) {
        $activeClass = ($currentPage === $key) ? ' class="active"' : '';
        $navigation .= '<li><a href="' . $item['url'] . '"' . $activeClass . '>' . $item['label'] . '</a></li>';
    }
    
    return $navigation;
}
?>
