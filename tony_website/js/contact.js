document.addEventListener('DOMContentLoaded', function() {
    // Gestione del form di contatto
    const contactForm = document.getElementById('contactForm');
    
    if (contactForm) {
        contactForm.addEventListener('submit', function(e) {
            e.preventDefault();
            
            // Validazione del form
            let isValid = true;
            const requiredFields = contactForm.querySelectorAll('[required]');
            
            requiredFields.forEach(field => {
                if (!field.value.trim()) {
                    isValid = false;
                    field.classList.add('is-invalid');
                } else {
                    field.classList.remove('is-invalid');
                }
            });
            
            if (isValid) {
                // Simulazione di invio del form
                const successMessage = document.createElement('div');
                successMessage.classList.add('alert', 'alert-success', 'mt-4');
                successMessage.textContent = 'Σας ευχαριστούμε για το μήνυμά σας! Θα επικοινωνήσουμε μαζί σας το συντομότερο δυνατό.';
                
                contactForm.style.display = 'none';
                contactForm.parentNode.insertBefore(successMessage, contactForm.nextSibling);
                
                // Reset del form
                contactForm.reset();
                
                // Mostra nuovamente il form dopo 5 secondi
                setTimeout(function() {
                    successMessage.remove();
                    contactForm.style.display = '';
                }, 5000);
            }
        });
    }
});