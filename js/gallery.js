// Gallery page functionality
document.addEventListener('DOMContentLoaded', function() {
    const categoryBtns = document.querySelectorAll('.category-btn');
    const galleryItems = document.querySelectorAll('.gallery-item-full');
    
    // Category filtering
    categoryBtns.forEach(btn => {
        btn.addEventListener('click', function() {
            const category = this.getAttribute('data-category');
            
            // Update active button
            categoryBtns.forEach(b => b.classList.remove('active'));
            this.classList.add('active');
            
            // Filter gallery items
            galleryItems.forEach(item => {
                if (category === 'all' || item.getAttribute('data-category') === category) {
                    item.style.display = 'block';
                    setTimeout(() => {
                        item.style.opacity = '1';
                        item.style.transform = 'scale(1)';
                    }, 50);
                } else {
                    item.style.opacity = '0';
                    item.style.transform = 'scale(0.8)';
                    setTimeout(() => {
                        item.style.display = 'none';
                    }, 300);
                }
            });
        });
    });
    
    // Lightbox functionality for gallery page
    galleryItems.forEach(item => {
        item.addEventListener('click', function() {
            const img = this.querySelector('img');
            const overlay = this.querySelector('.gallery-overlay-full');
            
            const lightbox = document.createElement('div');
            lightbox.className = 'lightbox';
            lightbox.innerHTML = `
                <div class="lightbox-content">
                    <img src="${img.src}" alt="${img.alt}">
                    <div class="lightbox-info">
                        <h3>${overlay.querySelector('h3').textContent}</h3>
                        <p>${overlay.querySelector('p').textContent}</p>
                    </div>
                    <button class="lightbox-close">&times;</button>
                </div>
            `;
            
            document.body.appendChild(lightbox);
            document.body.classList.add('no-scroll');
            
            // Close functionality
            const closeBtn = lightbox.querySelector('.lightbox-close');
            closeBtn.addEventListener('click', () => {
                document.body.removeChild(lightbox);
                document.body.classList.remove('no-scroll');
            });
            
            lightbox.addEventListener('click', (e) => {
                if (e.target === lightbox) {
                    document.body.removeChild(lightbox);
                    document.body.classList.remove('no-scroll');
                }
            });
            
            // Keyboard close
            document.addEventListener('keydown', function escClose(e) {
                if (e.key === 'Escape') {
                    document.body.removeChild(lightbox);
                    document.body.classList.remove('no-scroll');
                    document.removeEventListener('keydown', escClose);
                }
            });
        });
    });
    
    // Lightbox functionality for mobile gallery
    const mobileGalleryItems = document.querySelectorAll('.gallery-item-mobile');
    
    mobileGalleryItems.forEach(item => {
        item.addEventListener('click', function() {
            const img = this.querySelector('.gallery-image-mobile');
            const title = this.getAttribute('data-title');
            const description = this.getAttribute('data-description');
            
            const lightbox = document.createElement('div');
            lightbox.className = 'lightbox-mobile';
            lightbox.innerHTML = `
                <div class="lightbox-content-mobile">
                    <img src="${img.src}" alt="${img.alt}">
                    <div class="lightbox-info-mobile">
                        <h3>${title}</h3>
                        <p>${description}</p>
                    </div>
                    <button class="lightbox-close-mobile">&times;</button>
                </div>
            `;
            
            document.body.appendChild(lightbox);
            document.body.classList.add('no-scroll');
            
            // Close functionality
            const closeBtn = lightbox.querySelector('.lightbox-close-mobile');
            closeBtn.addEventListener('click', () => {
                document.body.removeChild(lightbox);
                document.body.classList.remove('no-scroll');
            });
            
            lightbox.addEventListener('click', (e) => {
                if (e.target === lightbox) {
                    document.body.removeChild(lightbox);
                    document.body.classList.remove('no-scroll');
                }
            });
            
            // Keyboard close
            document.addEventListener('keydown', function escCloseMobile(e) {
                if (e.key === 'Escape') {
                    if (document.body.contains(lightbox)) {
                        document.body.removeChild(lightbox);
                        document.body.classList.remove('no-scroll');
                    }
                    document.removeEventListener('keydown', escCloseMobile);
                }
            });
        });
    });
    
    // Animate gallery items on load
    setTimeout(() => {
        galleryItems.forEach((item, index) => {
            setTimeout(() => {
                item.style.opacity = '1';
                item.style.transform = 'translateY(0)';
            }, index * 100);
        });
    }, 200);
});
