document.addEventListener('DOMContentLoaded', function() {
    // Filter buttons on Products page
    const filterButtons = document.querySelectorAll('.filter-button');
    if (filterButtons.length > 0) {
        filterButtons.forEach(button => {
            button.addEventListener('click', function() {
                // Remove active class from all buttons
                filterButtons.forEach(btn => btn.classList.remove('active'));
                
                // Add active class to clicked button
                this.classList.add('active');
                
                const category = this.getAttribute('data-category');
                const productCards = document.querySelectorAll('.product-card');
                
                productCards.forEach(card => {
                    if (category === 'all') {
                        card.style.display = 'block';
                    } else {
                        if (card.getAttribute('data-category') === category) {
                            card.style.display = 'block';
                        } else {
                            card.style.display = 'none';
                        }
                    }
                });
            });
        });
    }

    // Form validation for Contact form
    const contactForm = document.getElementById('contactForm');
    if (contactForm) {
        contactForm.addEventListener('submit', function(event) {
            if (!validateForm()) {
                event.preventDefault();
                event.stopPropagation();
            }
            contactForm.classList.add('was-validated');
        });

        // Input validation on blur
        const formInputs = contactForm.querySelectorAll('.form-control');
        formInputs.forEach(input => {
            input.addEventListener('blur', function() {
                validateInput(this);
            });
        });
    }

    // Back to top button
    const backToTopBtn = document.getElementById('backToTopBtn');
    if (backToTopBtn) {
        window.addEventListener('scroll', function() {
            if (window.pageYOffset > 300) {
                backToTopBtn.style.display = 'block';
            } else {
                backToTopBtn.style.display = 'none';
            }
        });

        backToTopBtn.addEventListener('click', function() {
            window.scrollTo({top: 0, behavior: 'smooth'});
        });
    }
});

// Form validation functions
function validateForm() {
    let isValid = true;
    const name = document.getElementById('name');
    const email = document.getElementById('email');
    const phone = document.getElementById('phone');
    const message = document.getElementById('message');

    if (name) {
        isValid = validateInput(name) && isValid;
    }
    if (email) {
        isValid = validateInput(email) && isValid;
    }
    if (phone) {
        isValid = validateInput(phone) && isValid;
    }
    if (message) {
        isValid = validateInput(message) && isValid;
    }

    return isValid;
}

function validateInput(input) {
    let isValid = true;
    const value = input.value.trim();

    // Reset validation
    input.classList.remove('is-invalid');
    input.classList.remove('is-valid');

    // Check for empty fields
    if (value === '') {
        input.classList.add('is-invalid');
        isValid = false;
    } else {
        // Specific validation for email
        if (input.id === 'email') {
            const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
            if (!emailRegex.test(value)) {
                input.classList.add('is-invalid');
                isValid = false;
            } else {
                input.classList.add('is-valid');
            }
        }
        // Specific validation for phone
        else if (input.id === 'phone') {
            const phoneRegex = /^\d{3}[-\s]?\d{3}[-\s]?\d{4}$/;
            if (!phoneRegex.test(value)) {
                input.classList.add('is-invalid');
                isValid = false;
            } else {
                input.classList.add('is-valid');
            }
        } else {
            input.classList.add('is-valid');
        }
    }

    return isValid;
}
