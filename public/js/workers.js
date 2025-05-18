document.addEventListener('DOMContentLoaded', function() {
    // Check if we're on the workers page
    const workersList = document.getElementById('workersList');
    if (!workersList) return;
    
    // Load workers from localStorage (demo data)
    let workers = JSON.parse(localStorage.getItem('workers') || '[]');
    
    // If no workers in localStorage, add some demo workers
    if (workers.length === 0) {
        workers = generateDemoWorkers();
        localStorage.setItem('workers', JSON.stringify(workers));
    }
    
    // Display workers initially
    displayWorkers(workers);
    updateWorkerCount(workers.length);
    
    // Set up filter functionality
    const applyFiltersBtn = document.getElementById('applyFilters');
    const resetFiltersBtn = document.getElementById('resetFilters');
    
    applyFiltersBtn.addEventListener('click', function() {
        applyFilters();
    });
    
    resetFiltersBtn.addEventListener('click', function() {
        document.getElementById('professionFilter').value = 'all';
        document.getElementById('regionFilter').value = 'all';
        document.getElementById('rateTypeFilter').value = 'all';
        document.getElementById('experienceFilter').value = '0';
        applyFilters();
    });
    
    // Set up sorting functionality
    const sortSelect = document.getElementById('sortWorkers');
    sortSelect.addEventListener('change', function() {
        applyFilters();
    });
    
    // Set up phone modal functionality
    setupPhoneModal();
});

function generateDemoWorkers() {
    const professions = ['suvoqchi', 'svarchik', 'santexnik', 'elektrik', 'ustaboshi', 'duradgor', 'mirob', 'otinchi'];
    const regions = ['toshkent', 'toshkent_vil', 'andijon', 'buxoro', 'fargona', 'jizzax', 'namangan'];
    const rateTypes = ['hourly', 'daily', 'monthly', 'project'];
    const names = [
        'Abdurahmon Tursunov', 'Bekzod Qosimov', 'Jahongir Aliyev', 'Doston Mamatov', 
        'Eldor Xolmirzayev', 'Farxod Jumayev', 'G\'ayrat Komilov', 'Hakim Dehqonov',
        'Ismoil Olimov', 'Javohir Rahimov', 'Komil Usmonov', 'Laziz Rahmatov'
    ];
    
    const demoWorkers = [];
    
    for (let i = 0; i < 12; i++) {
        const rating = Math.floor(Math.random() * 5) + 1; // Random rating between 1-5
        const profession = professions[Math.floor(Math.random() * professions.length)];
        const region = regions[Math.floor(Math.random() * regions.length)];
        const rateType = rateTypes[Math.floor(Math.random() * rateTypes.length)];
        
        let rate;
        switch(rateType) {
            case 'hourly':
                rate = Math.floor(Math.random() * 50000) + 30000; // 30,000 - 80,000 so'm
                break;
            case 'daily':
                rate = Math.floor(Math.random() * 200000) + 200000; // 200,000 - 400,000 so'm
                break;
            case 'monthly':
                rate = Math.floor(Math.random() * 3000000) + 2000000; // 2,000,000 - 5,000,000 so'm
                break;
            case 'project':
                rate = Math.floor(Math.random() * 5000000) + 1000000; // 1,000,000 - 6,000,000 so'm
                break;
        }
        
        demoWorkers.push({
            id: i + 1,
            name: names[i],
            age: Math.floor(Math.random() * 30) + 20, // 20-50 years old
            profession: profession,
            experience: Math.floor(Math.random() * 20) + 1, // 1-20 years
            region: region,
            district: 'Demo tumani',
            rateType: rateType,
            rate: rate,
            phone: '+998' + (90 + Math.floor(Math.random() * 10)) + (Math.floor(Math.random() * 10000000) + 1000000).toString(),
            description: profession.charAt(0).toUpperCase() + profession.slice(1) + ' bo\'yicha professional ishchi. Ko\'p yillik tajriba.',
            rating: rating,
            registerDate: new Date().toISOString()
        });
    }
    
    return demoWorkers;
}

function displayWorkers(workers) {
    const workersList = document.getElementById('workersList');
    workersList.innerHTML = '';
    
    if (workers.length === 0) {
        workersList.innerHTML = '<div class="no-workers"><p>Hech qanday ishchi topilmadi.</p></div>';
        return;
    }
    
    workers.forEach(worker => {
        // Create rating stars
        let starsHtml = '';
        for (let i = 1; i <= 5; i++) {
            if (i <= worker.rating) {
                starsHtml += '<i class="fas fa-star star filled"></i>';
            } else {
                starsHtml += '<i class="far fa-star star"></i>';
            }
        }
        
        // Format profession display name
        let professionDisplay = '';
        switch(worker.profession) {
            case 'suvoqchi': professionDisplay = 'Suvoqchi'; break;
            case 'svarchik': professionDisplay = 'Svarchik'; break;
            case 'santexnik': professionDisplay = 'Santexnik'; break;
            case 'elektrik': professionDisplay = 'Elektrik'; break;
            case 'ustaboshi': professionDisplay = 'Ustaboshi'; break;
            case 'duradgor': professionDisplay = 'Duradgor'; break;
            case 'mirob': professionDisplay = 'Mirob'; break;
            case 'otinchi': professionDisplay = 'O\'tinchi'; break;
            default: professionDisplay = worker.profession;
        }
        
        // Format region display name
        let regionDisplay = '';
        switch(worker.region) {
            case 'toshkent': regionDisplay = 'Toshkent shahri'; break;
            case 'toshkent_vil': regionDisplay = 'Toshkent viloyati'; break;
            case 'andijon': regionDisplay = 'Andijon'; break;
            case 'buxoro': regionDisplay = 'Buxoro'; break;
            case 'fargona': regionDisplay = 'Farg\'ona'; break;
            case 'jizzax': regionDisplay = 'Jizzax'; break;
            case 'xorazm': regionDisplay = 'Xorazm'; break;
            case 'namangan': regionDisplay = 'Namangan'; break;
            case 'navoiy': regionDisplay = 'Navoiy'; break;
            case 'qashqadaryo': regionDisplay = 'Qashqadaryo'; break;
            case 'qoraqalpogiston': regionDisplay = 'Qoraqalpog\'iston'; break;
            case 'samarqand': regionDisplay = 'Samarqand'; break;
            case 'sirdaryo': regionDisplay = 'Sirdaryo'; break;
            case 'surxondaryo': regionDisplay = 'Surxondaryo'; break;
            default: regionDisplay = worker.region;
        }
        
        // Format rate type display
        let rateTypeDisplay = '';
        switch(worker.rateType) {
            case 'hourly': rateTypeDisplay = 'soatiga'; break;
            case 'daily': rateTypeDisplay = 'kuniga'; break;
            case 'monthly': rateTypeDisplay = 'oyiga'; break;
            case 'project': rateTypeDisplay = 'loyiha uchun'; break;
            default: rateTypeDisplay = worker.rateType;
        }
        
        // Format rate with commas
        const formattedRate = worker.rate.toString().replace(/\B(?=(\d{3})+(?!\d))/g, " ");
        
        const workerCard = document.createElement('div');
        workerCard.className = 'worker-card';
        workerCard.innerHTML = `
            <div class="worker-header">
                <div class="worker-avatar">
                    <img src="https://avatars.dicebear.com/api/initials/${encodeURIComponent(worker.name)}.svg" alt="${worker.name}">
                </div>
                <div>
                    <h3 class="worker-name">${worker.name}</h3>
                    <p class="worker-profession">${professionDisplay}</p>
                </div>
            </div>
            <div class="worker-details">
                <div class="worker-rating">
                    ${starsHtml}
                </div>
                <div class="worker-info-item">
                    <i class="fas fa-money-bill-wave worker-info-icon"></i>
                    <span class="worker-rate">${formattedRate} so'm ${rateTypeDisplay}</span>
                </div>
                <div class="worker-info-item">
                    <i class="fas fa-briefcase worker-info-icon"></i>
                    <span>${worker.experience} yillik tajriba</span>
                </div>
                <div class="worker-info-item">
                    <i class="fas fa-map-marker-alt worker-info-icon"></i>
                    <span>${regionDisplay}</span>
                </div>
            </div>
            <div class="worker-actions">
                <button class="btn btn-primary btn-small phone-button" data-worker-id="${worker.id}" data-worker-phone="${worker.phone}">
                    <i class="fas fa-phone-alt"></i> Telefon raqamini ko'rish
                </button>
            </div>
        `;
        
        workersList.appendChild(workerCard);
    });
    
    // Add event listeners to phone buttons
    const phoneButtons = document.querySelectorAll('.phone-button');
    phoneButtons.forEach(button => {
        button.addEventListener('click', function() {
            const workerId = this.getAttribute('data-worker-id');
            const workerPhone = this.getAttribute('data-worker-phone');
            openPhoneModal(workerId, workerPhone);
        });
    });
}

function applyFilters() {
    // Get all workers
    const allWorkers = JSON.parse(localStorage.getItem('workers') || '[]');
    
    // Get filter values
    const professionFilter = document.getElementById('professionFilter').value;
    const regionFilter = document.getElementById('regionFilter').value;
    const rateTypeFilter = document.getElementById('rateTypeFilter').value;
    const experienceFilter = parseInt(document.getElementById('experienceFilter').value);
    
    // Filter workers
    let filteredWorkers = allWorkers.filter(worker => {
        // Filter by profession
        if (professionFilter !== 'all' && worker.profession !== professionFilter) {
            return false;
        }
        
        // Filter by region
        if (regionFilter !== 'all' && worker.region !== regionFilter) {
            return false;
        }
        
        // Filter by rate type
        if (rateTypeFilter !== 'all' && worker.rateType !== rateTypeFilter) {
            return false;
        }
        
        // Filter by experience
        if (worker.experience < experienceFilter) {
            return false;
        }
        
        return true;
    });
    
    // Sort workers
    const sortBy = document.getElementById('sortWorkers').value;
    filteredWorkers = sortWorkers(filteredWorkers, sortBy);
    
    // Display filtered workers
    displayWorkers(filteredWorkers);
    updateWorkerCount(filteredWorkers.length);
}

function sortWorkers(workers, sortBy) {
    switch(sortBy) {
        case 'rating':
            return workers.sort((a, b) => b.rating - a.rating);
        case 'price-low':
            return workers.sort((a, b) => a.rate - b.rate);
        case 'price-high':
            return workers.sort((a, b) => b.rate - a.rate);
        case 'experience':
            return workers.sort((a, b) => b.experience - a.experience);
        default:
            return workers;
    }
}

function updateWorkerCount(count) {
    const workerCount = document.getElementById('workerCount');
    if (workerCount) {
        workerCount.textContent = `(${count})`;
    }
}

function setupPhoneModal() {
    const modal = document.getElementById('phoneModal');
    const closeModal = document.querySelector('.close-modal');
    const confirmPaymentBtn = document.getElementById('confirmPayment');
    const cancelPaymentBtn = document.getElementById('cancelPayment');
    const phoneNumberContainer = document.getElementById('phoneNumberContainer');
    const callNowBtn = document.getElementById('callNow');
    
    // Close modal when X is clicked
    if (closeModal) {
        closeModal.addEventListener('click', function() {
            modal.classList.remove('show');
            phoneNumberContainer.classList.add('hidden');
        });
    }
    
    // Close modal when clicking outside
    window.addEventListener('click', function(event) {
        if (event.target === modal) {
            modal.classList.remove('show');
            phoneNumberContainer.classList.add('hidden');
        }
    });
    
    // Confirm payment button
    if (confirmPaymentBtn) {
        confirmPaymentBtn.addEventListener('click', function() {
            phoneNumberContainer.classList.remove('hidden');
        });
    }
    
    // Cancel payment button
    if (cancelPaymentBtn) {
        cancelPaymentBtn.addEventListener('click', function() {
            modal.classList.remove('show');
        });
    }
    
    // Call now button
    if (callNowBtn) {
        callNowBtn.addEventListener('click', function() {
            const phoneNumber = document.getElementById('workerPhoneNumber').textContent;
            window.location.href = `tel:${phoneNumber}`;
        });
    }
}

function openPhoneModal(workerId, workerPhone) {
    const modal = document.getElementById('phoneModal');
    const phoneNumberContainer = document.getElementById('phoneNumberContainer');
    const workerPhoneElement = document.getElementById('workerPhoneNumber');
    
    // Reset modal state
    phoneNumberContainer.classList.add('hidden');
    
    // Set worker phone number
    workerPhoneElement.textContent = workerPhone;
    
    // Show modal
    modal.classList.add('show');
}