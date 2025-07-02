<?php
// Configurazione pagina
$current_page = 'gallery';
$base_path = '../';
$page_title = 'Galleria - M2 Motors';
$page_description = 'Galleria foto dell\'officina M2 Motors - Scopri i nostri spazi di lavoro e le attrezzature professionali';
$page_keywords = 'officina, galleria foto, M2 Motors, attrezzature, spazi lavoro';
$show_fixed_logo = true;

// Script aggiuntivi
$additional_scripts = '<script src="../js/gallery.js"></script>';

// Includi header
include '../includes/header.php';
?>

    <main>
        <section class="page-header">
            <div class="container">
                <h1>La Nostra Officina</h1>
                <p>Scopri gli spazi professionali dove lavoriamo sui tuoi veicoli</p>
            </div>
        </section>

        <!-- Versione Desktop: Galleria con griglia, overlay e filtri -->
        <section class="container gallery-desktop">
            <h2 class="section-title">Le Nostre Aree di Lavoro</h2>
            <p class="gallery-intro">Scopri gli spazi professionali dove lavoriamo sui tuoi veicoli con attrezzature moderne e all'avanguardia</p>
            
            <!-- Filtri categoria -->
            <div class="gallery-filters">
                <button class="category-btn active" data-category="all">Tutto</button>
                <button class="category-btn" data-category="workspace">Spazi</button>
                <button class="category-btn" data-category="equipment">Attrezzature</button>
                <button class="category-btn" data-category="diagnostic">Diagnostica</button>
            </div>
            
            <!-- Griglia galleria -->
            <div class="gallery-grid">
                <div class="gallery-item-full" data-category="workspace">
                    <img src="../images/officina.jpg" alt="Interno officina">
                    <div class="gallery-overlay-full">
                        <h3>Area Principale</h3>
                        <p>Spazio moderno e organizzato per tutti i lavori di manutenzione</p>
                    </div>
                </div>
                
                <div class="gallery-item-full" data-category="equipment">
                    <img src="../images/service-maintenance.jpg" alt="Strumenti professionali">
                    <div class="gallery-overlay-full">
                        <h3>Strumenti Professionali</h3>
                        <p>Attrezzature all'avanguardia per ogni tipo di intervento</p>
                    </div>
                </div>
                
                <div class="gallery-item-full" data-category="diagnostic">
                    <img src="../images/service-diagnostic.jpg" alt="Area diagnostica">
                    <div class="gallery-overlay-full">
                        <h3>Centro Diagnostico</h3>
                        <p>Sistemi computerizzati per diagnosi precise e veloci</p>
                    </div>
                </div>
                
                <div class="gallery-item-full" data-category="workspace">
                    <img src="../images/service-repair.jpg" alt="Area riparazioni">
                    <div class="gallery-overlay-full">
                        <h3>Area Riparazioni</h3>
                        <p>Spazio dedicato alle riparazioni più complesse</p>
                    </div>
                </div>
                
                <div class="gallery-item-full" data-category="equipment">
                    <img src="../images/officina.png" alt="Attrezzature specializzate">
                    <div class="gallery-overlay-full">
                        <h3>Attrezzature Specializzate</h3>
                        <p>Strumenti specifici per ogni marca e modello</p>
                    </div>
                </div>
                
                <div class="gallery-item-full" data-category="equipment">
                    <img src="../images/gear.gif" alt="Meccanica di precisione">
                    <div class="gallery-overlay-full">
                        <h3>Meccanica di Precisione</h3>
                        <p>Area dedicata alla lavorazione di componenti meccanici</p>
                    </div>
                </div>
                
                <div class="gallery-item-full" data-category="workspace">
                    <img src="../images/build.gif" alt="Area costruzione">
                    <div class="gallery-overlay-full">
                        <h3>Area Costruzione</h3>
                        <p>Spazio per assemblaggio e montaggio componenti</p>
                    </div>
                </div>
                
                <div class="gallery-item-full" data-category="equipment">
                    <img src="../images/chart.gif" alt="Monitoraggio prestazioni">
                    <div class="gallery-overlay-full">
                        <h3>Monitoraggio Prestazioni</h3>
                        <p>Sistemi avanzati per il controllo qualità</p>
                    </div>
                </div>
                
                <div class="gallery-item-full" data-category="diagnostic">
                    <img src="../images/check.gif" alt="Controllo qualità">
                    <div class="gallery-overlay-full">
                        <h3>Controllo Qualità</h3>
                        <p>Verifiche finali per garantire la perfezione</p>
                    </div>
                </div>
                
                <div class="gallery-item-full" data-category="workspace">
                    <img src="../images/clock.gif" alt="Gestione tempi">
                    <div class="gallery-overlay-full">
                        <h3>Efficienza e Puntualità</h3>
                        <p>Organizzazione ottimale dei tempi di lavoro</p>
                    </div>
                </div>
                
                <div class="gallery-item-full" data-category="equipment">
                    <img src="../images/trend-up.gif" alt="Crescita continua">
                    <div class="gallery-overlay-full">
                        <h3>Miglioramento Continuo</h3>
                        <p>Sempre al passo con le nuove tecnologie</p>
                    </div>
                </div>
                
                <div class="gallery-item-full" data-category="workspace">
                    <img src="../images/book.gif" alt="Formazione continua">
                    <div class="gallery-overlay-full">
                        <h3>Formazione Continua</h3>
                        <p>Aggiornamento costante delle competenze tecniche</p>
                    </div>
                </div>
            </div>
        </section>

        <!-- Versione Mobile: Griglia 2x con lightbox -->
        <section class="container gallery-mobile">
            <h2 class="section-title">Le Nostre Aree di Lavoro</h2>
            <div class="gallery-content">
                <p>Scopri gli spazi professionali dove lavoriamo sui tuoi veicoli con attrezzature moderne e all'avanguardia:</p>
                
                <div class="gallery-grid-mobile">
                    <div class="gallery-item-mobile" data-title="Area Principale" data-description="Spazio moderno e organizzato per tutti i lavori di manutenzione, con un ambiente professionale e accogliente.">
                        <img src="../images/officina.jpg" alt="Interno officina" class="gallery-image-mobile">
                    </div>
                    
                    <div class="gallery-item-mobile" data-title="Strumenti Professionali" data-description="Attrezzature all'avanguardia per ogni tipo di intervento, garantendo precisione e qualità in ogni lavoro.">
                        <img src="../images/service-maintenance.jpg" alt="Strumenti professionali" class="gallery-image-mobile">
                    </div>
                    
                    <div class="gallery-item-mobile" data-title="Centro Diagnostico" data-description="Sistemi computerizzati per diagnosi precise e veloci, permettendo di identificare rapidamente ogni problema.">
                        <img src="../images/service-diagnostic.jpg" alt="Area diagnostica" class="gallery-image-mobile">
                    </div>
                    
                    <div class="gallery-item-mobile" data-title="Area Riparazioni" data-description="Spazio dedicato alle riparazioni più complesse con postazioni specializzate per ogni tipo di intervento.">
                        <img src="../images/service-repair.jpg" alt="Area riparazioni" class="gallery-image-mobile">
                    </div>
                    
                    <div class="gallery-item-mobile" data-title="Attrezzature Specializzate" data-description="Strumenti specifici per ogni marca e modello, garantendo compatibilità e prestazioni ottimali.">
                        <img src="../images/officina.png" alt="Attrezzature specializzate" class="gallery-image-mobile">
                    </div>
                    
                    <div class="gallery-item-mobile" data-title="Meccanica di Precisione" data-description="Area dedicata alla lavorazione di componenti meccanici con strumenti di precisione per la massima qualità.">
                        <img src="../images/gear.gif" alt="Meccanica di precisione" class="gallery-image-mobile">
                    </div>
                    
                    <div class="gallery-item-mobile" data-title="Area Costruzione" data-description="Spazio specializzato per l'assemblaggio e il montaggio di componenti con procedure standardizzate.">
                        <img src="../images/build.gif" alt="Area costruzione" class="gallery-image-mobile">
                    </div>
                    
                    <div class="gallery-item-mobile" data-title="Monitoraggio Prestazioni" data-description="Sistemi avanzati per il controllo delle prestazioni e la verifica dei risultati ottenuti.">
                        <img src="../images/chart.gif" alt="Monitoraggio prestazioni" class="gallery-image-mobile">
                    </div>
                    
                    <div class="gallery-item-mobile" data-title="Controllo Qualità" data-description="Verifiche finali approfondite per garantire la perfezione di ogni intervento eseguito.">
                        <img src="../images/check.gif" alt="Controllo qualità" class="gallery-image-mobile">
                    </div>
                    
                    <div class="gallery-item-mobile" data-title="Efficienza e Puntualità" data-description="Organizzazione ottimale dei tempi di lavoro per rispettare sempre le scadenze concordate.">
                        <img src="../images/clock.gif" alt="Gestione tempi" class="gallery-image-mobile">
                    </div>
                    
                    <div class="gallery-item-mobile" data-title="Miglioramento Continuo" data-description="Sempre al passo con le nuove tecnologie e metodologie per offrire il miglior servizio possibile.">
                        <img src="../images/trend-up.gif" alt="Crescita continua" class="gallery-image-mobile">
                    </div>
                    
                    <div class="gallery-item-mobile" data-title="Formazione Continua" data-description="Aggiornamento costante delle competenze tecniche del nostro team per garantire il miglior servizio possibile.">
                        <img src="../images/book.gif" alt="Formazione continua" class="gallery-image-mobile">
                    </div>
                </div>
            </div>
        </section>
    </main>

<?php
// Includi footer
include '../includes/footer.php';
?>
