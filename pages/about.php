<?php
// Configurazione pagina
$current_page = 'about';
$base_path = '../';
$page_title = 'Chi Siamo - M2 Motors';
$page_description = 'Scopri M2 Motors - la nostra storia, il nostro team e il nostro impegno per un servizio automobilistico di qualità';
$page_keywords = 'meccanico auto, storia officina, team M2 Motors, esperti automobilistici';

// Includi header
include '../includes/header.php';
?>

    <main>
        <section class="page-header">
            <div class="container">
                <h1>Chi Siamo</h1>
                <p>Il tuo fornitore di servizi automobilistici di fiducia dal 2010</p>
            </div>
        </section>
        
        <!-- Storia aziendale con layout a due colonne -->
        <section class="container section-padding">
            <h2 class="section-title">La Nostra Storia</h2>
            <div class="about-grid">
                <div class="about-image">
                    <img src="../images/officina.jpg" alt="Esterno dell'officina M2 Motors" class="rounded-image">
                </div>
                <div class="about-text">
                    <p>M2 Motors di Mattia Milan è un'officina meccanica specializzata che offre servizi di alta qualità per riparazioni e manutenzioni di tutti i tipi di veicoli a Villotta di Chions. Il nostro team di meccanici esperti si impegna a garantire che il tuo veicolo funzioni in modo sicuro ed efficiente.</p>
                    <p>Fondata nel 2010 con la passione per le automobili e la meccanica di precisione, la nostra officina è cresciuta fino a diventare un punto di riferimento per gli automobilisti della zona.</p>
                    <p>Nel corso degli anni abbiamo ampliato i nostri servizi introducendo sistemi di diagnostica computerizzata avanzati, rinnovato i nostri spazi e costantemente aggiornato le nostre attrezzature per offrire il miglior servizio possibile ai nostri clienti.</p>
                </div>
            </div>
        </section>
        
        <!-- Missione aziendale -->
        <section class="light-bg section-padding">
            <div class="container">
                <div class="about-grid reversed">
                    <div class="about-image">
                        <img src="../images/missone.jpg" alt="Il nostro team al lavoro" class="rounded-image">
                    </div>
                    <div class="about-text">
                        <h2>La Nostra Missione</h2>
                        <p>La nostra missione in M2 Motors è offrire servizi automobilistici eccezionali con integrità e professionalità. Ci impegniamo a costruire relazioni durature con i nostri clienti offrendo un servizio affidabile e onesto.</p>
                        <p>Vogliamo essere riconosciuti non solo per la qualità delle nostre riparazioni, ma anche per il rapporto di fiducia che costruiamo con ogni cliente che entra nella nostra officina.</p>
                        <p>Nell'officina M2 Motors trovate meccanici esperti con anni di esperienza nel settore, tecnici specializzati nei sistemi elettronici più moderni e personale attento alle esigenze di ogni cliente.</p>
                    </div>
                </div>
            </div>
        </section>
        
        <!-- I nostri valori con icone -->
        <section class="values-section section-padding">
            <div class="container">
                <h2 class="section-title">I Nostri Valori</h2>
                
                <div class="values-grid">
                    <div class="value-card">
                        <div class="value-icon">
                            <img src="../images/chart.gif" alt="Meccanici esperti al lavoro" class="feature-gif">
                        </div>
                        <h3>Integrità</h3>
                        <p>Trasparenza in tutte le nostre operazioni e comunicazioni con i clienti.</p>
                    </div>
                    
                    <div class="value-card">
                        <div class="value-icon">
                            <img src="../images/trend-up.gif" alt="Meccanici esperti al lavoro" class="feature-gif">
                        </div>
                        <h3>Eccellenza</h3>
                        <p>Impegno costante per offrire un servizio clienti di alta qualità.</p>
                    </div>
                    
                    <div class="value-card">
                        <div class="value-icon">
                            <img src="../images/check.gif" alt="Meccanici esperti al lavoro" class="feature-gif">
                        </div>
                        <h3>Qualità</h3>
                        <p>Precisione e attenzione ai dettagli in tutte le riparazioni che effettuiamo.</p>
                    </div>
                    
                    <div class="value-card">
                        <div class="value-icon">
                            <img src="../images/book.gif" alt="Meccanici esperti al lavoro" class="feature-gif">
                        </div>
                        <h3>Formazione</h3>
                        <p>Aggiornamento continuo del nostro personale sulle nuove tecnologie.</p>
                    </div>
                    
                    <div class="value-card">
                        <div class="value-icon">
                            <img src="../images/build.gif" alt="Meccanici esperti al lavoro" class="feature-gif">
                        </div>
                        <h3>Innovazione</h3>
                        <p>Utilizzo di tecnologie all'avanguardia per diagnostiche precise.</p>
                    </div>
                    
                    <div class="value-card">
                        <div class="value-icon">
                            <img src="../images/clock.gif" alt="Puntualità e affidabilità" class="feature-gif">
                        </div>
                        <h3>Affidabilità</h3>
                        <p>Rispetto degli impegni presi e puntualità nelle consegne.</p>
                    </div>
                </div>
            </div>
        </section>
        
        <!-- Statistiche -->
        <section class="stats-section light-bg section-padding">
            <div class="container">
                <h2 class="section-title">M2 Motors in Numeri</h2>
                
                <div class="stats-grid">
                    <div class="stat-item">
                        <div class="stat-number">15</div>
                        <div class="stat-label">Anni di Esperienza</div>
                    </div>
                    
                    <div class="stat-item">
                        <div class="stat-number">5000+</div>
                        <div class="stat-label">Clienti Soddisfatti</div>
                    </div>
                    
                    <div class="stat-item">
                        <div class="stat-number">20+</div>
                        <div class="stat-label">Marche Auto Servite</div>
                    </div>
                    
                    <div class="stat-item">
                        <div class="stat-number">98%</div>
                        <div class="stat-label">Tasso di Soddisfazione</div>
                    </div>
                </div>
            </div>
        </section>
        
        <!-- Call to Action -->
        <section class="cta-section section-padding">
            <div class="container">
                <div class="cta-box">
                    <h2>Pronto a Fare un'Esperienza Diversa?</h2>
                    <p>Scopri cosa può fare M2 Motors per la tua auto. Contattaci oggi stesso!</p>
                    <a href="contact.php" class="cta-button primary">Prenota un Appuntamento</a>
                </div>
            </div>
        </section>
    </main>

<?php
// Includi footer
include '../includes/footer.php';
?>
