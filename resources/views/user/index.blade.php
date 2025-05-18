<!DOCTYPE html>
<html lang="uz">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ishchilar Ro'yxati - IshchiTop</title>
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}">
    <link href="https://fonts.googleapis.com/css2?family=Rubik:wght@400;500;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
</head>
<body>
    <header class="header">
        <div class="container">
            <div class="header-content">
                <a href="index.html" class="logo">
                    <span class="logo-text">Ishchi<span class="highlight">Top</span></span>
                </a>
                <nav class="main-nav">
                    <ul class="nav-list">
                        <li class="nav-item"><a href="index.html" class="nav-link">Bosh sahifa</a></li>
                        <li class="nav-item"><a href="workers.html" class="nav-link active">Ishchilar</a></li>
                        <li class="nav-item"><a href="about.html" class="nav-link">Biz haqimizda</a></li>
                        <li class="nav-item"><a href="contact.html" class="nav-link">Aloqa</a></li>
                    </ul>
                </nav>
                <button class="mobile-menu-toggle" id="menuToggle">
                    <i class="fas fa-bars"></i>
                </button>
            </div>
        </div>
    </header>

    <main>
        <section class="page-header">
            <div class="container">
                <h1 class="page-title">Ishchilar ro'yxati</h1>
                <p class="page-description">Filter yordamida kerakli ishchini toping</p>
            </div>
        </section>

        <section class="workers-section">
            <div class="container">
                <div class="filters-and-workers">
                    <div class="filters">
                        <h2 class="filters-title">Filtrlar</h2>
                        <div class="filter-group">
                            <label for="professionFilter">Kasb bo'yicha</label>
                            <select id="professionFilter" class="filter-select">
                                <option value="all">Barcha kasblar</option>
                                <option value="suvoqchi">Suvoqchi</option>
                                <option value="svarchik">Svarchik</option>
                                <option value="santexnik">Santexnik</option>
                                <option value="elektrik">Elektrik</option>
                                <option value="ustaboshi">Ustaboshi</option>
                                <option value="duradgor">Duradgor</option>
                                <option value="mirob">Mirob</option>
                                <option value="otinchi">O'tinchi</option>
                                <option value="boshqa">Boshqa</option>
                            </select>
                        </div>
                        <div class="filter-group">
                            <label for="regionFilter">Viloyat</label>
                            <select id="regionFilter" class="filter-select">
                                <option value="all">Barcha viloyatlar</option>
                                <option value="toshkent">Toshkent shahri</option>
                                <option value="toshkent_vil">Toshkent viloyati</option>
                                <option value="andijon">Andijon</option>
                                <option value="buxoro">Buxoro</option>
                                <option value="fargona">Farg'ona</option>
                                <option value="jizzax">Jizzax</option>
                                <option value="xorazm">Xorazm</option>
                                <option value="namangan">Namangan</option>
                                <option value="navoiy">Navoiy</option>
                                <option value="qashqadaryo">Qashqadaryo</option>
                                <option value="qoraqalpogiston">Qoraqalpog'iston</option>
                                <option value="samarqand">Samarqand</option>
                                <option value="sirdaryo">Sirdaryo</option>
                                <option value="surxondaryo">Surxondaryo</option>
                            </select>
                        </div>
                        <div class="filter-group">
                            <label for="rateTypeFilter">Narx turi</label>
                            <select id="rateTypeFilter" class="filter-select">
                                <option value="all">Barcha narx turlari</option>
                                <option value="hourly">Soatlik</option>
                                <option value="daily">Kunlik</option>
                                <option value="monthly">Oylik</option>
                                <option value="project">Loyiha uchun</option>
                            </select>
                        </div>
                        <div class="filter-group">
                            <label for="experienceFilter">Minimum tajriba (yil)</label>
                            <input type="number" id="experienceFilter" class="filter-input" min="0" value="0">
                        </div>
                        <button id="applyFilters" class="btn btn-primary btn-small">Filtrlash</button>
                        <button id="resetFilters" class="btn btn-outline btn-small">Tozalash</button>
                    </div>
                    <div class="workers-container">
                        <div class="workers-header">
                            <h2 class="workers-title">Ishchilar <span id="workerCount" class="worker-count">(12)</span></h2>
                            <div class="sort-container">
                                <label for="sortWorkers">Saralash:</label>
                                <select id="sortWorkers" class="sort-select">
                                    <option value="rating">Reyting (yuqoridan)</option>
                                    <option value="price-low">Narx (pastdan)</option>
                                    <option value="price-high">Narx (yuqoridan)</option>
                                    <option value="experience">Tajriba (yuqoridan)</option>
                                </select>
                            </div>
                        </div>
                        <div id="workersList" class="workers-grid">
                            <!-- Worker cards will be added here by JavaScript -->
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>

    <!-- Phone Number Modal -->
    <div id="phoneModal" class="modal">
        <div class="modal-content">
            <span class="close-modal">&times;</span>
            <h2 class="modal-title">Telefon raqamni ko'rish</h2>
            <p class="modal-text">Ishchining telefon raqamini ko'rish uchun 1000 so'm to'lov qilish kerak.</p>
            <div class="modal-payment-info">
                <div class="payment-card">
                    <div class="payment-icon">
                        <i class="fas fa-mobile-alt"></i>
                    </div>
                    <div class="payment-details">
                        <p class="payment-title">Click, Payme orqali</p>
                        <p class="payment-number">+998 90 123 45 67</p>
                    </div>
                </div>
                <p class="payment-instruction">To'lovni amalga oshirganingizdan so'ng, "To'ladim" tugmasini bosing.</p>
            </div>
            <div class="modal-actions">
                <button id="confirmPayment" class="btn btn-primary">To'ladim</button>
                <button id="cancelPayment" class="btn btn-outline">Bekor qilish</button>
            </div>
            <div id="phoneNumberContainer" class="phone-number-container hidden">
                <p class="success-message">To'lov muvaffaqiyatli amalga oshirildi!</p>
                <div class="phone-display">
                    <i class="fas fa-phone"></i>
                    <span id="workerPhoneNumber">+998 90 123 45 67</span>
                </div>
                <button id="callNow" class="btn btn-secondary btn-small">
                    <i class="fas fa-phone-alt"></i> Qo'ng'iroq qilish
                </button>
            </div>
        </div>
    </div>

    <footer class="footer">
        <div class="container">
            <div class="footer-content">
                <div class="footer-logo">
                    <span class="logo-text">Ishchi<span class="highlight">Top</span></span>
                    <p class="footer-tagline">Ishchi topishning eng oson yo'li!</p>
                </div>
                <div class="footer-links">
                    <div class="footer-links-column">
                        <h3 class="footer-links-title">Sahifalar</h3>
                        <ul class="footer-links-list">
                            <li><a href="index.html">Bosh sahifa</a></li>
                            <li><a href="workers.html">Ishchilar</a></li>
                            <li><a href="about.html">Biz haqimizda</a></li>
                            <li><a href="contact.html">Aloqa</a></li>
                        </ul>
                    </div>
                    <div class="footer-links-column">
                        <h3 class="footer-links-title">Aloqa</h3>
                        <ul class="footer-links-list">
                            <li><a href="tel:+998901234567">+998 90 123 45 67</a></li>
                            <li><a href="mailto:info@ishchitop.uz">info@ishchitop.uz</a></li>
                            <li>Toshkent shahri, Shayxontohur tumani</li>
                        </ul>
                    </div>
                    <div class="footer-links-column">
                        <h3 class="footer-links-title">Ijtimoiy tarmoqlar</h3>
                        <ul class="footer-social-list">
                            <li><a href="#"><i class="fab fa-telegram"></i></a></li>
                            <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                            <li><a href="#"><i class="fab fa-facebook"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="footer-bottom">
                <p>&copy; 2025 IshchiTop. Barcha huquqlar himoyalangan.</p>
            </div>
        </div>
    </footer>

    <script src="{{ asset('js/main.js') }}"></script>
    <script src="{{ asset('js/workers.js') }}"></script>
</body>
</html>