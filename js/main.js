// Questo file contiene le funzionalità JavaScript principali per il sito web.

document.addEventListener('DOMContentLoaded', function() {
    // Esempio: Aggiunta di un event listener a un pulsante
    const contactButton = document.getElementById('contact-button');
    if (contactButton) {
        contactButton.addEventListener('click', function() {
            window.location.href = 'pages/contact.html';
        });
    }

    // Toggle per la navigazione mobile
    const mobileMenuToggle = document.querySelector('.mobile-menu-toggle');
    const mainNav = document.querySelector('.main-nav');
    
    if (mobileMenuToggle) {
        mobileMenuToggle.addEventListener('click', function() {
            mainNav.classList.toggle('active');
            document.body.classList.toggle('no-scroll');
        });
    }
    
    // Chiusura menu mobile quando si clicca su un link
    const navLinks = document.querySelectorAll('.nav-list a');
    navLinks.forEach(link => {
        link.addEventListener('click', function() {
            if (mainNav.classList.contains('active')) {
                mainNav.classList.remove('active');
                document.body.classList.remove('no-scroll');
            }
        });
    });
    
    // Chiusura menu mobile quando si clicca all'esterno
    document.addEventListener('click', function(event) {
        const isClickInsideNav = mainNav.contains(event.target);
        const isClickOnToggle = mobileMenuToggle.contains(event.target);
        
        if (!isClickInsideNav && !isClickOnToggle && mainNav.classList.contains('active')) {
            mainNav.classList.remove('active');
            document.body.classList.remove('no-scroll');
        }
    });
    
    // Slider semplice per le testimonianze
    let currentTestimonial = 0;
    const testimonials = document.querySelectorAll('.testimonial');
    const testimonialCount = testimonials.length;
    
    // Solo se ci sono più testimonianze e siamo su dispositivi mobili
    if (testimonialCount > 1 && window.innerWidth < 768) {
        // Nascondi tutte tranne la prima inizialmente
        testimonials.forEach((testimonial, index) => {
            if (index > 0) testimonial.style.display = 'none';
        });
        
        // Imposta rotazione automatica
        setInterval(() => {
            testimonials[currentTestimonial].style.display = 'none';
            currentTestimonial = (currentTestimonial + 1) % testimonialCount;
            testimonials[currentTestimonial].style.display = 'block';
        }, 5000);
    }
    
    // Scorrimento fluido per i link ancora
    document.querySelectorAll('a[href^="#"]').forEach(anchor => {
        anchor.addEventListener('click', function (e) {
            e.preventDefault();
            
            const target = document.querySelector(this.getAttribute('href'));
            if (target) {
                target.scrollIntoView({
                    behavior: 'smooth'
                });
            }
        });
    });
    
    // Gallery lightbox functionality
    const galleryItems = document.querySelectorAll('.gallery-item');
    if (galleryItems.length > 0) {
        galleryItems.forEach(item => {
            item.addEventListener('click', function() {
                const img = this.querySelector('img');
                const overlay = this.querySelector('.gallery-overlay');
                
                // Create lightbox
                const lightbox = document.createElement('div');
                lightbox.className = 'lightbox';
                lightbox.innerHTML = `
                    <div class="lightbox-content">
                        <img src="${img.src}" alt="${img.alt}">
                        <div class="lightbox-info">
                            <h3>${overlay.querySelector('h4').textContent}</h3>
                            <p>${overlay.querySelector('p').textContent}</p>
                        </div>
                        <button class="lightbox-close">&times;</button>
                    </div>
                `;
                
                document.body.appendChild(lightbox);
                document.body.classList.add('no-scroll');
                
                // Close lightbox
                const closeBtn = lightbox.querySelector('.lightbox-close');
                closeBtn.addEventListener('click', () => {
                    document.body.removeChild(lightbox);
                    document.body.classList.remove('no-scroll');
                });
                
                // Close on background click
                lightbox.addEventListener('click', (e) => {
                    if (e.target === lightbox) {
                        document.body.removeChild(lightbox);
                        document.body.classList.remove('no-scroll');
                    }
                });
            });
        });
    }
    
    // Oil brands animation on scroll
    const observerOptions = {
        threshold: 0.1,
        rootMargin: '0px 0px -50px 0px'
    };
    
    const observer = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                entry.target.style.opacity = '1';
                entry.target.style.transform = 'translateY(0)';
            }
        });
    }, observerOptions);
    
    // Observe oil brands and partners
    document.querySelectorAll('.oil-brand, .partner-card').forEach(el => {
        el.style.opacity = '0';
        el.style.transform = 'translateY(30px)';
        el.style.transition = 'opacity 0.6s ease, transform 0.6s ease';
        observer.observe(el);
    });
});