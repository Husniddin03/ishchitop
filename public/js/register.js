document.addEventListener('DOMContentLoaded', function() {
    const registrationForm = document.getElementById('workerRegistrationForm');
    
    if (!registrationForm) return;
    
    // Form validation
    registrationForm.addEventListener('submit', function(e) {
        e.preventDefault();
        
        let isValid = true;
        
        // Clear previous error messages
        const errorMessages = document.querySelectorAll('.error-message');
        errorMessages.forEach(error => error.textContent = '');
        
        // Validate Full Name
        const fullName = document.getElementById('fullName');
        if (fullName.value.trim() === '') {
            document.getElementById('fullNameError').textContent = 'Ism kiritish majburiy';
            isValid = false;
        } else if (fullName.value.trim().length < 3) {
            document.getElementById('fullNameError').textContent = 'Ism kamida 3 ta belgidan iborat bo\'lishi kerak';
            isValid = false;
        }
        
        // Validate Age
        const age = document.getElementById('age');
        if (age.value === '') {
            document.getElementById('ageError').textContent = 'Yoshni kiritish majburiy';
            isValid = false;
        } else if (parseInt(age.value) < 16 || parseInt(age.value) > 80) {
            document.getElementById('ageError').textContent = 'Yosh 16 dan 80 gacha bo\'lishi kerak';
            isValid = false;
        }
        
        // Validate Profession
        const profession = document.getElementById('profession');
        if (profession.value === '') {
            document.getElementById('professionError').textContent = 'Kasbni tanlash majburiy';
            isValid = false;
        }
        
        // Validate Experience
        const experience = document.getElementById('experience');
        if (experience.value === '') {
            document.getElementById('experienceError').textContent = 'Tajribani kiritish majburiy';
            isValid = false;
        } else if (parseInt(experience.value) < 0 || parseInt(experience.value) > 50) {
            document.getElementById('experienceError').textContent = 'Tajriba 0 dan 50 gacha bo\'lishi kerak';
            isValid = false;
        }
        
        // Validate Region
        const region = document.getElementById('region');
        if (region.value === '') {
            document.getElementById('regionError').textContent = 'Viloyatni tanlash majburiy';
            isValid = false;
        }
        
        // Validate District
        const district = document.getElementById('district');
        if (district.value.trim() === '') {
            document.getElementById('districtError').textContent = 'Tumanni kiritish majburiy';
            isValid = false;
        }
        
        // Validate Rate Type
        const rateType = document.getElementById('rateType');
        if (rateType.value === '') {
            document.getElementById('rateTypeError').textContent = 'Narx turini tanlash majburiy';
            isValid = false;
        }
        
        // Validate Rate
        const rate = document.getElementById('rate');
        if (rate.value === '') {
            document.getElementById('rateError').textContent = 'Narxni kiritish majburiy';
            isValid = false;
        } else if (parseInt(rate.value) < 0) {
            document.getElementById('rateError').textContent = 'Narx 0 dan katta bo\'lishi kerak';
            isValid = false;
        }
        
        // Validate Phone
        const phone = document.getElementById('phone');
        const phoneRegex = /^[0-9]{9}$/;
        if (phone.value.trim() === '') {
            document.getElementById('phoneError').textContent = 'Telefon raqamini kiritish majburiy';
            isValid = false;
        } else if (!phoneRegex.test(phone.value.replace(/\s/g, ''))) {
            document.getElementById('phoneError').textContent = 'Telefon raqami noto\'g\'ri formatda';
            isValid = false;
        }
        
        // Validate Terms
        const terms = document.getElementById('terms');
        if (!terms.checked) {
            document.getElementById('termsError').textContent = 'Foydalanish shartlarini qabul qilish kerak';
            isValid = false;
        }
        
        // If form is valid, submit it
        if (isValid) {
            // For demonstration purposes, we're just logging the form data
            const formData = new FormData(registrationForm);
            const workerData = Object.fromEntries(formData.entries());
            console.log('Worker Data:', workerData);
            
            // Show success message
            alert('Ro\'yxatdan o\'tish muvaffaqiyatli yakunlandi!');
            
            // Store in localStorage for demo
            const workers = JSON.parse(localStorage.getItem('workers') || '[]');
            workers.push({
                id: Date.now(),
                name: workerData.fullName,
                age: parseInt(workerData.age),
                profession: workerData.profession,
                experience: parseInt(workerData.experience),
                region: workerData.region,
                district: workerData.district,
                rateType: workerData.rateType,
                rate: parseInt(workerData.rate),
                phone: '+998' + workerData.phone.replace(/\s/g, ''),
                description: workerData.description || '',
                rating: Math.floor(Math.random() * 5) + 1, // Random rating for demo
                registerDate: new Date().toISOString()
            });
            localStorage.setItem('workers', JSON.stringify(workers));
            
            // Reset form
            registrationForm.reset();
            
            // Redirect to workers page
            window.location.href = 'workers.html';
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