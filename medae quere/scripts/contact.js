// Contact page specific JavaScript

document.addEventListener('DOMContentLoaded', function() {
    setupContactForm();
    setupNewsletterForm();

    // Listen for language changes
    window.addEventListener('languageChanged', function() {
        // Re-setup forms with new translations
        setupContactForm();
        setupNewsletterForm();
    });
});

function setupContactForm() {
    const contactForm = document.getElementById('contactForm');

    if (contactForm) {
        contactForm.addEventListener('submit', function(e) {
            e.preventDefault();

            // Get form data
            const formData = {
                name: document.getElementById('name').value,
                email: document.getElementById('email').value,
                message: document.getElementById('message').value
            };

            // Simulate form submission
            console.log('Form submitted:', formData);

            // Show success message
            if (typeof showToast === 'function') {
                showToast(getTranslation('contact.sendMessageBtn') + ' successfully! We\'ll get back to you soon.', 'success');
            } else {
                alert(getTranslation('contact.sendMessageBtn') + ' successfully! We\'ll get back to you soon.');
            }

            // Reset form
            this.reset();
        });
    }
}

function setupNewsletterForm() {
    const newsletterForm = document.getElementById('newsletterFormContact');

    if (newsletterForm) {
        newsletterForm.addEventListener('submit', function(e) {
            e.preventDefault();

            const email = this.querySelector('input[type="email"]').value;

            // Simulate subscription
            console.log('Newsletter subscription:', email);

            // Show success message
            if (typeof showToast === 'function') {
                showToast(getTranslation('contact.subscribe') + ' successfully!', 'success');
            } else {
                alert(getTranslation('contact.subscribe') + ' successfully!');
            }

            // Reset form
            this.reset();
        });
    }
}
