    <footer>
        <div class="container">
            <div class="footer-grid">
                <div class="footer-column">
                    <h4>M2 Motors</h4>
                    <p>Il tuo partner di fiducia per riparazione e manutenzione automobilistica di Mattia Milan dal 2010.</p>
                </div>
                <div class="footer-column">
                    <h4>Contatti</h4>
                    <address>
                        <p><i class="fas fa-map-marker-alt"></i> Via Villotta 17, 33083 Villotta di Chions (PN)</p>
                        <p><i class="fas fa-phone"></i> <span class="phone-number" aria-label="phone number">390434630752</span></p>
                        <p><i class="fas fa-envelope"></i> info@m2motors.it</p>
                    </address>
                </div>
                <div class="footer-column">
                    <h4>Orari</h4>
                    <p>Lunedì-Venerdì: 8:30 - 12:30, 14:00 - 18:00</p>
                    <p>Sabato: 8:30 - 12:30</p>
                    <p>Domenica: Chiuso</p>
                </div>
                <div class="footer-column">
                    <h4>Seguici</h4>
                    <div class="social-links">
                        <a href="https://www.instagram.com/m2motors_mattia" target="_blank" rel="noopener noreferrer" aria-label="Instagram"><i class="fab fa-instagram"></i></a>
                        <a href="https://wa.me/390434630752" target="_blank" rel="noopener noreferrer" aria-label="WhatsApp"><i class="fab fa-whatsapp"></i></a>
                    </div>
                </div>
            </div>
            <div class="footer-bottom">
                <p>&copy; 2025 M2 Motors di Mattia Milan - Villotta di Chions (PN). Tutti i diritti riservati.</p>
                <p><a href="<?php echo $base_path; ?>pages/privacy.php" class="privacy-link">Privacy Policy</a></p>
            </div>
        </div>
    </footer>

    <!-- WhatsApp Floating Button -->
    <div class="whatsapp-float">
        <a href="https://wa.me/390434630752" target="_blank" rel="noopener noreferrer" aria-label="Contattaci su WhatsApp">
            <i class="fab fa-whatsapp"></i>
        </a>
    </div>

    <script src="<?php echo $base_path; ?>js/main.js"></script>
    <?php if(isset($additional_scripts)) echo $additional_scripts; ?>
    <?php if(isset($schema_markup)) echo $schema_markup; ?>
</body>
</html>
