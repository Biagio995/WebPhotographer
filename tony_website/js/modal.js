// Modal Gallery functionality
document.addEventListener('DOMContentLoaded', function() {
    // Create modal container if it doesn't exist
    if (!document.getElementById('photoModal')) {
        const modal = document.createElement('div');
        modal.id = 'photoModal';
        modal.className = 'photo-modal';
        
        modal.innerHTML = `
            <span class="close">&times;</span>
            <a class="prev">&#10094;</a>
            <a class="next">&#10095;</a>
            <div class="modal-content">
                <!-- Slides will be added dynamically -->
            </div>
            <div class="caption-container">
                <p id="caption"></p>
            </div>
        `;
        
        document.body.appendChild(modal);
    }
    
    const modal = document.getElementById('photoModal');
    const modalContent = modal.querySelector('.modal-content');
    const captionText = document.getElementById('caption');
    const closeBtn = modal.querySelector('.close');
    const prevBtn = modal.querySelector('.prev');
    const nextBtn = modal.querySelector('.next');
    
    // Add click event to all gallery items
    const galleryItems = document.querySelectorAll('.gallery-item');
    
    galleryItems.forEach(function(item, index) {
        item.addEventListener('click', function() {
            openModal();
            createSlides();
            currentSlide(index + 1);
        });
    });
    
    // Close the modal
    closeBtn.addEventListener('click', closeModal);
    
    // Close modal when clicking outside of content
    window.addEventListener('click', function(event) {
        if (event.target === modal) {
            closeModal();
        }
    });
    
    // Navigate slides
    prevBtn.addEventListener('click', function() {
        plusSlides(-1);
    });
    
    nextBtn.addEventListener('click', function() {
        plusSlides(1);
    });
    
    // Add keyboard navigation
    document.addEventListener('keydown', function(e) {
        if (modal.style.display === 'block') {
            if (e.key === 'Escape') {
                closeModal();
            } else if (e.key === 'ArrowLeft') {
                plusSlides(-1);
            } else if (e.key === 'ArrowRight') {
                plusSlides(1);
            }
        }
    });
    
    // Function to open modal
    function openModal() {
        modal.style.display = 'block';
        document.body.style.overflow = 'hidden'; // Prevent scrolling when modal is open
    }
    
    // Function to close modal
    function closeModal() {
        modal.style.display = 'none';
        document.body.style.overflow = ''; // Restore scrolling
    }
    
    let slideIndex = 1;
    
    // Function to navigate between slides
    function plusSlides(n) {
        showSlides(slideIndex += n);
    }
    
    // Function to set current slide
    function currentSlide(n) {
        showSlides(slideIndex = n);
    }
    
    // Function to show slides
    function showSlides(n) {
        const slides = document.getElementsByClassName('modal-slide');
        
        if (slides.length === 0) return;
        
        if (n > slides.length) {
            slideIndex = 1;
        }
        
        if (n < 1) {
            slideIndex = slides.length;
        }
        
        for (let i = 0; i < slides.length; i++) {
            slides[i].classList.remove('active');
        }
        
        slides[slideIndex - 1].classList.add('active');
        
        // Update caption
        const currentImg = slides[slideIndex - 1].querySelector('img');
        if (currentImg && currentImg.alt) {
            captionText.textContent = currentImg.alt;
        } else {
            captionText.textContent = '';
        }
        
        // Update number text
        const numberText = slides[slideIndex - 1].querySelector('.numbertext');
        if (numberText) {
            numberText.textContent = slideIndex + ' / ' + slides.length;
        }
    }
    
    // Function to create slides
    function createSlides() {
        // Clear existing slides
        modalContent.innerHTML = '';
        
        // Get all gallery images
        const galleryImages = document.querySelectorAll('.gallery-item img');
        
        // For each gallery image, create a slide with the actual image
        galleryImages.forEach(function(img, index) {
            const slide = document.createElement('div');
            slide.className = 'modal-slide';
            
            // Get caption from gallery overlay if available
            let caption = '';
            const overlayContent = img.closest('.gallery-item').querySelector('.gallery-content');
            if (overlayContent) {
                const heading = overlayContent.querySelector('h3');
                const paragraph = overlayContent.querySelector('p');
                
                if (heading && paragraph) {
                    caption = heading.textContent + ' - ' + paragraph.textContent;
                } else if (heading) {
                    caption = heading.textContent;
                }
            }
            
            // Create slide content
            slide.innerHTML = `
                <div class="numbertext">${index + 1} / ${galleryImages.length}</div>
                <img src="${getImageUrl(img.src, index)}" alt="${caption}">
            `;
            
            modalContent.appendChild(slide);
        });
    }
    
    // Function to get image URL (using Picsum for additional images)
    function getImageUrl(originalSrc, index) {
        // For the original images, use their source
        if (index < galleryItems.length) {
            return originalSrc;
        }
        
        // For additional images, use Picsum with a seed based on the index
        // This ensures we get different but consistent images
        const width = 800;
        const height = 600;
        const seed = index * 10; // Simple way to get different seeds
        
        return `https://picsum.photos/seed/${seed}/${width}/${height}`;
    }
});

