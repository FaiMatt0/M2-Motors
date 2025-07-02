<?php
// Configurazione pagina
$current_page = 'home';
$base_path = '';
$page_title = 'M2 Motors - Meccanici Automobilistici Professionisti';
$page_description = 'M2 Motors - Meccanici automobilistici professionisti che offrono servizi e riparazioni di qualità nella tua zona';
$page_keywords = 'automobilistico, meccanici, riparazione auto, manutenzione veicoli';
$show_fixed_logo = true;

// Schema markup per JSON-LD
$schema_markup = '
<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "AutoRepair",
  "name": "M2 Motors di Mattia Milan",
  "image": "images/placeholders/logo.svg",
  "address": {
    "@type": "PostalAddress",
    "streetAddress": "Via Villotta 17",
    "addressLocality": "Villotta di Chions",
    "postalCode": "33083",
    "addressRegion": "PN",
    "addressCountry": "IT"
  },
  "telephone": "+390434630752",
  "email": "info@m2motors.it",
  "openingHoursSpecification": [
    {
      "@type": "OpeningHoursSpecification",
      "dayOfWeek": ["Monday", "Tuesday", "Wednesday", "Thursday", "Friday"],
      "opens": "08:30",
      "closes": "12:30"
    },
    {
      "@type": "OpeningHoursSpecification",
      "dayOfWeek": ["Monday", "Tuesday", "Wednesday", "Thursday", "Friday"],
      "opens": "14:00",
      "closes": "18:00"
    },
    {
      "@type": "OpeningHoursSpecification",
      "dayOfWeek": "Saturday",
      "opens": "08:30",
      "closes": "12:30"
    }
  ]
}
</script>';

// Includi header
include 'includes/header.php';
?>

    <main>
        <div class="logo-bg-wrapper">
            <section class="hero">
                <div class="container">
                    <div class="hero-content">
                        <h1>Riparazione e Manutenzione Auto da Esperti</h1>
                        <p class="hero-subtitle">Il tuo partner di fiducia per servizi automobilistici professionali</p>
                        <div class="hero-buttons">
                            <a href="pages/services.php" class="cta-button primary">I Nostri Servizi</a>
                            <a href="pages/contact.php" class="cta-button secondary">Prenota Appuntamento</a>
                        </div>
                    </div>
                </div>
            </section>

            <section class="features">
                <div class="container">
                    <h2 class="section-title">Perché Scegliere M2 Motors</h2>
                    <div class="features-grid">
                        <div class="feature-card">
                            <div class="feature-icon">
                                <img src="images/build.gif" alt="Meccanici esperti al lavoro" class="feature-gif">
                            </div>
                            <h3>Meccanici Esperti</h3>
                            <p>I nostri tecnici certificati hanno anni di esperienza con tutti i modelli e le marche di veicoli.</p>
                        </div>
                        <div class="feature-card">
                            <div class="feature-icon">
                                <img src="images/gear.gif" alt="Meccanici esperti al lavoro" class="feature-gif">
                            </div>
                            <h3>Ricambi di Qualità</h3>
                            <p>Utilizziamo solo ricambi originali OEM e aftermarket di alta qualità per tutte le riparazioni e manutenzioni.</p>
                        </div>
                        <div class="feature-card">
                            <div class="feature-icon">
                                <img src="images/check.gif" alt="Meccanici esperti al lavoro" class="feature-gif">
                            </div>
                            <h3>Soddisfazione Garantita</h3>
                            <p>Il nostro lavoro è coperto da garanzia e dal nostro impegno per la tua completa soddisfazione.</p>
                        </div>
                    </div>
                </div>
            </section>
        </div>

        <section class="services-preview">
            <div class="container">
                <h2 class="section-title">I Nostri Servizi</h2>
                <div class="services-grid">
                    <div class="service-card">
                        <img src="images/service-maintenance.jpg" alt="Manutenzione Regolare">
                        <h3>Manutenzione Regolare</h3>
                        <p>Mantieni il tuo veicolo in perfetta efficienza con i nostri servizi di manutenzione completa.</p>
                    </div>
                    <div class="service-card">
                        <img src="images/service-repair.jpg" alt="Riparazioni">
                        <h3>Riparazioni</h3>
                        <p>Dalle piccole riparazioni a quelle più complesse, il nostro team è a tua disposizione.</p>
                    </div>
                    <div class="service-card">
                        <img src="images/service-diagnostic.jpg" alt="Diagnostica">
                        <h3>Diagnostica</h3>
                        <p>Strumenti diagnostici avanzati per identificare problemi in modo rapido e preciso.</p>
                    </div>
                </div>
                <div class="text-center">
                    <a href="pages/services.php" class="cta-button primary">Vedi Tutti i Servizi</a>
                </div>
            </div>
        </section>

        <div class="logo-bg-wrapper">
        <!-- Gallery Section -->
        <section id="gallery" class="gallery">
            <div class="container">
                <h2 class="section-title">La Nostra Officina</h2>
                <p class="section-subtitle">Scopri l'ambiente professionale dove lavoriamo sui tuoi veicoli</p>
                <div class="gallery-grid">
                    <div class="gallery-item">
                        <img src="images/officina.jpg" alt="Interno officina M2 Motors">
                        <div class="gallery-overlay">
                            <h4>Area di Lavoro</h4>
                            <p>Spazio moderno e attrezzato</p>
                        </div>
                    </div>
                    <div class="gallery-item">
                        <img src="images/service-maintenance.jpg" alt="Strumenti professionali">
                        <div class="gallery-overlay">
                            <h4>Strumenti Professionali</h4>
                            <p>Tecnologie all'avanguardia</p>
                        </div>
                    </div>
                    <div class="gallery-item">
                        <img src="images/service-diagnostic.jpg" alt="Area diagnostica">
                        <div class="gallery-overlay">
                            <h4>Diagnostica Avanzata</h4>
                            <p>Sistemi computerizzati</p>
                        </div>
                    </div>
                    <div class="gallery-item">
                        <img src="images/service-repair.jpg" alt="Area riparazioni">
                        <div class="gallery-overlay">
                            <h4>Area Riparazioni</h4>
                            <p>Spazio dedicato alle riparazioni</p>
                        </div>
                    </div>
                    <div class="gallery-item">
                        <img src="images/gear.gif" alt="Meccanica di precisione">
                        <div class="gallery-overlay">
                            <h4>Meccanica di Precisione</h4>
                            <p>Lavorazioni specializzate</p>
                        </div>
                    </div>
                    <div class="gallery-item">
                        <img src="images/build.gif" alt="Costruzione e montaggio">
                        <div class="gallery-overlay">
                            <h4>Montaggio Componenti</h4>
                            <p>Assemblaggio professionale</p>
                        </div>
                    </div>
                </div>
                <div class="text-center">
                    <a href="pages/gallery.php" class="cta-button primary">Vedi tutte le foto</a>
                </div>
            </div>
        </section>
        </div>

        <!-- Oil Types Section -->
        <section class="oil-types">
            <div class="container">
                <h2 class="section-title">Oli di Qualità Premium</h2>
                <p class="section-subtitle">Utilizziamo solo i migliori oli per la manutenzione del tuo veicolo</p>
                <div class="oil-brands">
                    <div class="oil-brand">
                        <div class="oil-brand-header">
                            <img src="images/revenol.png" alt="Revenol Oil">
                            <h3>Revenol</h3>
                        </div>
                        <div class="oil-description">
                            <p>Oli motore sintetici tedeschi di alta qualità, specificamente formulati per prestazioni superiori e protezione motore.</p>
                            <ul>
                                <li>Tecnologia tedesca avanzata</li>
                                <li>Protezione estesa del motore</li>
                                <li>Adatto per tutte le stagioni</li>
                            </ul>
                        </div>
                    </div>
                    <div class="oil-brand">
                        <div class="oil-brand-header">
                            <img src="images/valvoline.png" alt="Valvoline Oil">
                            <h3>Valvoline</h3>
                        </div>
                        <div class="oil-description">
                            <p>Marca americana leader mondiale con oltre 150 anni di esperienza nella lubrificazione automobilistica.</p>
                            <ul>
                                <li>Innovazione continua dal 1866</li>
                                <li>Formula avanzata anti-usura</li>
                                <li>Ideale per veicoli ad alto chilometraggio</li>
                            </ul>
                        </div>
                    </div>
                    <div class="oil-brand">
                        <div class="oil-brand-header">
                            <img src="images/shell.png" alt="Shell Oil">
                            <h3>Shell Helix</h3>
                        </div>
                        <div class="oil-description">
                            <p>Oli motore con tecnologia Shell PurePlus, derivata dal gas naturale per una pulizia superiore del motore.</p>
                            <ul>
                                <li>Tecnologia PurePlus avanzata</li>
                                <li>Pulizia superiore del motore</li>
                                <li>Protezione dalla formazione di depositi</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <div class="logo-bg-wrapper">
        <!-- Partners Section -->
        <section class="partners">
            <div class="container">
                <h2 class="section-title">I Nostri Partner</h2>
                <p class="section-subtitle">Collaboriamo con aziende di fiducia per offrire servizi e prodotti di eccellenza</p>
                <div class="partners-grid">
                    <div class="partner-card">
                        <a href="https://www.aposto.it/officina/m2-motors-di-mattia-milan/" target="_blank" rel="noopener noreferrer">
                            <div class="partner-logo">
                                <img src="images/rhiag.jpg" alt="Rhiag Group">
                            </div>
                            <div class="partner-info">
                                <h3>Rhiag Group</h3>
                                <p>Leader europeo nella distribuzione di ricambi auto, con oltre 30 anni di esperienza nel settore.</p>
                                <span class="partner-link">Visita il sito <i class="fas fa-external-link-alt"></i></span>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="partners-grid">
                    <div class="partner-card">
                        <a href="https://www.santanderbank.com/" target="_blank" rel="noopener noreferrer">
                            <div class="partner-logo">
                                <img src="images/santander.png" alt="Santander Bank">
                            </div>
                            <div class="partner-info">
                                <h3>Santander Bank</h3>
                                <p>Partner finanziario di fiducia per soluzioni di pagamento e finanziamenti dedicati ai servizi automobilistici.</p>
                                <span class="partner-link">Visita il sito <i class="fas fa-external-link-alt"></i></span>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </section>
        </div>

        <section class="testimonials">
            <div class="container">
                <h2 class="section-title">Cosa Dicono i Nostri Clienti</h2>
                <div class="testimonials-container">
                    <div class="testimonials-slider">
                        <div class="testimonials-track" id="testimonialsTrack">
                            <div class="testimonial">
                                <div class="stars">★★★★★</div>
                                <blockquote>"I had to interrupt my trip due to a minor technical issue and I got here a quick and correct repair. Guys, thanks for your cooperation. Warm regards from Hungary"</blockquote>
                                <cite>- Csaba Pintér</cite>
                            </div>
                            <div class="testimonial">
                                <div class="stars">★★★★★</div>
                                <blockquote>"Professionisti del settore anche se pieni di lavoro disponibili e sempre pronti a soddisfare le richieste del cliente"</blockquote>
                                <cite>- Davide Caldon</cite>
                            </div>
                            <div class="testimonial">
                                <div class="stars">★★★★★</div>
                                <blockquote>"Il titolare ed il meccanico in officina sono molto giovani, ma non abbiate pregiudizi! Sono persone preparate e competenti. Sanno trovare anche soluzioni ad-hoc per risolvere problemi di cui molte altre officine non sono venute a capo."</blockquote>
                                <cite>- Amedeo Battiston</cite>
                            </div>
                            <div class="testimonial">
                                <div class="stars">★★★★☆</div>
                                <blockquote>"Servizio, professionalitá e cortesia. Serietá e passione. Il migliore in zona."</blockquote>
                                <cite>- Daniele Iseppi</cite>
                            </div>
                            <div class="testimonial">
                                <div class="stars">★★★★★</div>
                                <blockquote>"Bravissimo, Serietà è prezzi molto buoni ho ritirato la mia PANDA 1300 MULTI JET DEL 2015 È RITORNATA COME NUOVA, BRAVO MATTIA SEI UN GRANDE PERSONA"</blockquote>
                                <cite>- Salvatore Iannarino</cite>
                            </div>
                            <div class="testimonial">
                                <div class="stars">★★★★★</div>
                                <blockquote>"Ottimo servizio personale gentile e competente nel proprio lavoro"</blockquote>
                                <cite>- Claudio Innocente</cite>
                            </div>
                            <div class="testimonial">
                                <div class="stars">★★★★★</div>
                                <blockquote>"Giovane intraprendente, bravo, capace e corretto."</blockquote>
                                <cite>- Pieraldo Gennari</cite>
                            </div>
                        </div>
                    </div>
                    <div class="testimonials-controls">
                        <button class="testimonial-nav" id="prevTestimonial" aria-label="Testimonianza precedente">
                            <i class="fas fa-chevron-left"></i>
                        </button>
                        <div class="testimonials-dots" id="testimonialsDots">
                            <span class="dot active" data-slide="0"></span>
                            <span class="dot" data-slide="1"></span>
                            <span class="dot" data-slide="2"></span>
                            <span class="dot" data-slide="3"></span>
                            <span class="dot" data-slide="4"></span>
                            <span class="dot" data-slide="5"></span>
                            <span class="dot" data-slide="6"></span>
                        </div>
                        <button class="testimonial-nav" id="nextTestimonial" aria-label="Testimonianza successiva">
                            <i class="fas fa-chevron-right"></i>
                        </button>
                    </div>
                </div>
            </div>
        </section>
    </main>

    <script src="js/main.js"></script>
    <script src="js/testimonials.js"></script>

<?php
// Includi footer
include 'includes/footer.php';
?>
