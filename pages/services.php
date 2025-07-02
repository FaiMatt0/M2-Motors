<?php
// Configurazione pagina
$current_page = 'services';
$base_path = '../';
$page_title = 'I Nostri Servizi - M2 Motors';
$page_description = 'Scopri i servizi automobilistici completi offerti da M2 Motors - dalla manutenzione ordinaria alle riparazioni importanti';
$page_keywords = 'servizi auto, riparazione auto, cambio olio, servizio freni, diagnostica motore';

// Includi header
include '../includes/header.php';
?>

    <main>
        <section class="page-header">
            <div class="container">
                <h1>I Nostri Servizi</h1>
                <p>Soluzioni automobilistiche complete per ogni esigenza</p>
            </div>
        </section>
        
        <section class="container services-list">
            <h2 class="section-title">Cosa Offriamo</h2>
            <div class="services-content">
                <p>In M2 Motors offriamo una vasta gamma di servizi automobilistici per mantenere il tuo veicolo in perfette condizioni. I nostri meccanici esperti sono qui per aiutarti con:</p>
                
                <div class="services-grid">
                    <div class="service-card">
                        <img src="../images/tagliando.jpg" alt="Cambio Olio">
                        <h3>Cambio Olio</h3>
                        <p>Manutenzione regolare per mantenere il motore della tua auto in condizioni ottimali.</p>
                    </div>
                    
                    <div class="service-card">
                        <img src="../images/ruote.jpg" alt="Rotazione Pneumatici">
                        <h3>Rotazione Pneumatici</h3>
                        <p>Garantisce un'usura uniforme e prolunga la vita dei tuoi pneumatici.</p>
                    </div>
                    
                    <div class="service-card">
                        <img src="../images/freni.jpg" alt="Servizi Freni">
                        <h3>Servizi Freni</h3>
                        <p>Manutenzione e riparazione dell'intero sistema frenante per la tua sicurezza.</p>
                    </div>
                    
                    <div class="service-card">
                        <img src="../images/service-diagnostic.jpg" alt="Diagnostica Motore">
                        <h3>Diagnostica Motore</h3>
                        <p>Utilizziamo apparecchiature avanzate per identificare problemi al motore con precisione.</p>
                    </div>
                    
                    <div class="service-card">
                        <img src="../images/trasmissione.jpg" alt="Servizi Trasmissione">
                        <h3>Servizi Trasmissione</h3>
                        <p>Manutenzione e riparazione del sistema di trasmissione per garantire cambiate fluide.</p>
                    </div>
                    
                    <div class="service-card">
                        <img src="../images/elettrico.jpg" alt="Riparazioni Impianto Elettrico">
                        <h3>Riparazioni Impianto Elettrico</h3>
                        <p>Diagnostica e riparazione di tutti i problemi elettrici della tua auto.</p>
                    </div>
                </div>
                
                <div class="cta-container">
                    <p>Contattaci per prezzi e per fissare un appuntamento!</p>
                    <a href="contact.php" class="btn-special">Prenota Ora</a>
                </div>
            </div>
        </section>
    </main>

<?php
// Includi footer
include '../includes/footer.php';
?>
