// Carosello testimonianze
class TestimonialsCarousel {
    constructor() {
        this.track = document.getElementById('testimonialsTrack');
        this.prevBtn = document.getElementById('prevTestimonial');
        this.nextBtn = document.getElementById('nextTestimonial');
        this.dotsContainer = document.getElementById('testimonialsDots');
        
        this.currentSlide = 0;
        this.totalSlides = 7; // 7 testimonianze
        this.autoPlayInterval = null;
        this.isPlaying = true;
        this.autoPlayDelay = 5000; // 5 secondi
        
        this.init();
    }
    
    init() {
        this.setupEventListeners();
        this.startAutoPlay();
        this.updateUI();
    }
    
    setupEventListeners() {
        // Bottoni navigazione
        this.prevBtn.addEventListener('click', () => {
            this.prevSlide();
            this.resetAutoPlay();
        });
        
        this.nextBtn.addEventListener('click', () => {
            this.nextSlide();
            this.resetAutoPlay();
        });
        
        // Dots indicator
        const dots = this.dotsContainer.querySelectorAll('.dot');
        dots.forEach((dot, index) => {
            dot.addEventListener('click', () => {
                this.goToSlide(index);
                this.resetAutoPlay();
            });
        });
        
        // Pause on hover
        this.track.parentElement.addEventListener('mouseenter', () => {
            this.pauseAutoPlay();
        });
        
        this.track.parentElement.addEventListener('mouseleave', () => {
            if (this.isPlaying) {
                this.startAutoPlay();
            }
        });
        
        // Gestione touch per mobile
        this.setupTouchEvents();
    }
    
    setupTouchEvents() {
        let startX = 0;
        let currentX = 0;
        let isDragging = false;
        
        this.track.addEventListener('touchstart', (e) => {
            startX = e.touches[0].clientX;
            isDragging = true;
            this.pauseAutoPlay();
        });
        
        this.track.addEventListener('touchmove', (e) => {
            if (!isDragging) return;
            currentX = e.touches[0].clientX;
        });
        
        this.track.addEventListener('touchend', () => {
            if (!isDragging) return;
            isDragging = false;
            
            const diffX = startX - currentX;
            const threshold = 50;
            
            if (Math.abs(diffX) > threshold) {
                if (diffX > 0) {
                    this.nextSlide();
                } else {
                    this.prevSlide();
                }
            }
            
            this.resetAutoPlay();
        });
    }
    
    goToSlide(slideIndex) {
        this.currentSlide = slideIndex;
        this.updateSlider();
        this.updateDots();
        this.updateNavButtons();
    }
    
    nextSlide() {
        this.currentSlide = (this.currentSlide + 1) % this.totalSlides;
        this.updateSlider();
        this.updateDots();
        this.updateNavButtons();
    }
    
    prevSlide() {
        this.currentSlide = (this.currentSlide - 1 + this.totalSlides) % this.totalSlides;
        this.updateSlider();
        this.updateDots();
        this.updateNavButtons();
    }
    
    updateSlider() {
        const translateX = -(this.currentSlide * (100 / this.totalSlides));
        this.track.style.transform = `translateX(${translateX}%)`;
        
        // Aggiungi animazione fade al testimoniale attivo
        const testimonials = this.track.querySelectorAll('.testimonial');
        testimonials.forEach((testimonial, index) => {
            testimonial.classList.remove('fade-in');
            if (index === this.currentSlide) {
                setTimeout(() => {
                    testimonial.classList.add('fade-in');
                }, 100);
            }
        });
    }
    
    updateDots() {
        const dots = this.dotsContainer.querySelectorAll('.dot');
        dots.forEach((dot, index) => {
            dot.classList.toggle('active', index === this.currentSlide);
        });
    }
    
    updateNavButtons() {
        // Per un carosello infinito, i bottoni sono sempre attivi
        this.prevBtn.disabled = false;
        this.nextBtn.disabled = false;
    }
    
    updateUI() {
        this.updateSlider();
        this.updateDots();
        this.updateNavButtons();
    }
    
    startAutoPlay() {
        if (this.autoPlayInterval) {
            clearInterval(this.autoPlayInterval);
        }
        
        this.autoPlayInterval = setInterval(() => {
            this.nextSlide();
        }, this.autoPlayDelay);
    }
    
    pauseAutoPlay() {
        if (this.autoPlayInterval) {
            clearInterval(this.autoPlayInterval);
            this.autoPlayInterval = null;
        }
    }
    
    resetAutoPlay() {
        if (this.isPlaying) {
            this.pauseAutoPlay();
            this.startAutoPlay();
        }
    }
}

// Inizializza il carosello quando il DOM è caricato
document.addEventListener('DOMContentLoaded', () => {
    const testimonialsSection = document.querySelector('.testimonials');
    if (testimonialsSection) {
        new TestimonialsCarousel();
    }
});

// Gestione della visibilità della pagina per pausare/riprendere l'autoplay
document.addEventListener('visibilitychange', () => {
    const carousel = window.testimonialsCarousel;
    if (carousel) {
        if (document.hidden) {
            carousel.pauseAutoPlay();
        } else if (carousel.isPlaying) {
            carousel.startAutoPlay();
        }
    }
});
