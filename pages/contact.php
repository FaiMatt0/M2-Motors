<?php
// Configurazione pagina
$current_page = 'contact';
$base_path = '../';
$page_title = 'Contatti - M2 Motors';
$page_description = 'Contatta M2 Motors per servizi di riparazione auto e manutenzione. Trova i nostri orari, indirizzo e informazioni di contatto.';
$page_keywords = 'contatti officina, M2 Motors, indirizzo officina, orari apertura, telefono officina';

// Includi header
include '../includes/header.php';
?>

    <main>
        <section class="page-header">
            <div class="container">
                <h1>Contatta M2 Motors</h1>
                <p>Siamo qui per aiutarti con tutte le tue esigenze automobilistiche</p>
            </div>
        </section>
        
        <section class="contact-info section-padding">
            <div class="container">
                <h2 class="section-title">Le Nostre Informazioni</h2>
                
                <div class="contact-details-grid">
                    <div class="contact-card">
                        <div class="contact-icon">
                            <i class="fas fa-map-marker-alt"></i>
                        </div>
                        <div class="contact-card-content">
                            <h3>Indirizzo</h3>
                            <p>Via Villotta 17<br>33083 Villotta di Chions (PN)<br>Italia</p>
                        </div>
                    </div>
                    
                    <div class="contact-card">
                        <div class="contact-icon">
                            <i class="fas fa-phone"></i>
                        </div>
                        <div class="contact-card-content">
                            <h3>Telefono</h3>
                            <p><a href="tel:+390434630752">390434630752</a></p>
                            <p class="contact-note">Chiamaci per prenotazioni e informazioni</p>
                        </div>
                    </div>
                    
                    <div class="contact-card">
                        <div class="contact-icon">
                            <i class="fas fa-envelope"></i>
                        </div>
                        <div class="contact-card-content">
                            <h3>Email</h3>
                            <p><a href="mailto:info@m2motors.it">info@m2motors.it</a></p>
                            <p class="contact-note">Scrivici per richieste e preventivi</p>
                        </div>
                    </div>
                    
                    <div class="contact-card">
                        <div class="contact-icon">
                            <i class="fas fa-clock"></i>
                        </div>
                        <div class="contact-card-content">
                            <h3>Orari di Apertura</h3>
                            <div class="schedule">
                                <p><strong>Lunedì - Venerdì</strong><br>8:30 - 12:30<br>14:00 - 18:00</p>
                                <p><strong>Sabato</strong><br>8:30 - 12:30</p>
                                <p><strong>Domenica</strong><br>Chiuso</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        
        <section class="location-section light-bg section-padding">
            <div class="container">
                <h2 class="section-title">Come Raggiungerci</h2>
                <div class="map-container">
                    <iframe 
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2778.640104366549!2d12.751366712301687!3d45.858501706922624!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x477bdf6a9ab817a9%3A0xd09c0561e2d9509f!2sVia%20Cadore%2C%205%2C%2033083%20Villotta%20PN!5e0!3m2!1sen!2sit!4v1751478088001!5m2!1sen!2sit" 
                        width="100%" 
                        height="450" 
                        style="border:0;" 
                        allowfullscreen="" 
                        loading="lazy" 
                        referrerpolicy="no-referrer-when-downgrade"
                        title="Mappa M2 Motors - Via Villotta 17, Villotta di Chions">
                    </iframe>
                </div>
            </div>
        </section>
    </main>

<?php
// Includi footer
include '../includes/footer.php';
?>
