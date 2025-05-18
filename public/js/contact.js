document.addEventListener('DOMContentLoaded', function() {
    const contactForm = document.getElementById('contactForm');
    
    if (!contactForm) return;
    
    // Form validation
    contactForm.addEventListener('submit', function(e) {
        e.preventDefault();
        
        let isValid = true;
        
        // Clear previous error messages
        const errorMessages = document.querySelectorAll('.error-message');
        errorMessages.forEach(error => error.textContent = '');
        
        // Validate Name
        const name = document.getElementById('name');
        if (name.value.trim() === '') {
            document.getElementById('nameError').textContent = 'Ism kiritish majburiy';
            isValid = false;
        }
        
        // Validate Email
        const email = document.getElementById('email');
        const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
        if (email.value.trim() === '') {
            document.getElementById('emailError').textContent = 'Email kiritish majburiy';
            isValid = false;
        } else if (!emailRegex.test(email.value.trim())) {
            document.getElementById('emailError').textContent = 'To\'g\'ri email manzilini kiriting';
            isValid = false;
        }
        
        // Validate Phone (if provided)
        const phone = document.getElementById('phone');
        if (phone.value.trim() !== '') {
            const phoneRegex = /^[0-9]{9}$/;
            if (!phoneRegex.test(phone.value.replace(/\s/g, ''))) {
                document.getElementById('phoneError').textContent = 'Telefon raqami noto\'g\'ri formatda';
                isValid = false;
            }
        }
        
        // Validate Subject
        const subject = document.getElementById('subject');
        if (subject.value === '') {
            document.getElementById('subjectError').textContent = 'Mavzuni tanlash majburiy';
            isValid = false;
        }
        
        // Validate Message
        const message = document.getElementById('message');
        if (message.value.trim() === '') {
            document.getElementById('messageError').textContent = 'Xabar matni kiritish majburiy';
            isValid = false;
        } else if (message.value.trim().length < 10) {
            document.getElementById('messageError').textContent = 'Xabar matni kamida 10 ta belgidan iborat bo\'lishi kerak';
            isValid = false;
        }
        
        // If form is valid, submit it
        if (isValid) {
            // For demonstration purposes, we're just logging the form data
            const formData = new FormData(contactForm);
            const contactData = Object.fromEntries(formData.entries());
            console.log('Contact Form Data:', contactData);
            
            // Show success message
            alert('Xabar muvaffaqiyatli yuborildi! Tez orada sizga javob beramiz.');
            
            // Reset form
            contactForm.reset();
        }
    });
    
    // Format phone number as user types
    const phoneInput = document.getElementById('phone');
    if (phoneInput) {
        phoneInput.addEventListener('input', function(e) {
            // Remove non-digits
            let value = this.value.replace(/\D/g, '');
            
            // Format with spaces: XX XXX XX XX
            if (value.length > 2) {
                value = value.substring(0, 2) + ' ' + value.substring(2);
            }
            if (value.length > 6) {
                value = value.substring(0, 6) + ' ' + value.substring(6);
            }
            if (value.length > 9) {
                value = value.substring(0, 9) + ' ' + value.substring(9);
            }
            
            // Update input value
            this.value = value;
        });
    }
});