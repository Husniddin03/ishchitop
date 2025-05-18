<!DOCTYPE html>
<html lang="uz">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>IshchiTop — Ishchi topishning eng oson yo'li!</title>
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
                        <li class="nav-item"><a href="index.html" class="nav-link active">Bosh sahifa</a></li>
                        <li class="nav-item"><a href="workers.html" class="nav-link">Ishchilar</a></li>
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
        <section class="hero">
            <div class="container">
                <div class="hero-content">
                    <h1 class="hero-title">Ishchi topishning eng oson yo'li!</h1>
                    <p class="hero-subtitle">IshchiTop platformasi orqali malakali ishchilarni toping yoki o'z xizmatlaringizni taklif qiling.</p>
                    <div class="hero-buttons">
                        <a href="worker-register.html" class="btn btn-primary">Ish topmoqchiman</a>
                        <a href="workers.html" class="btn btn-secondary">Ishchi izlayapman</a>
                    </div>
                </div>
                <div class="hero-image">
                    <img src="https://images.pexels.com/photos/3760067/pexels-photo-3760067.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=2" alt="Ishchilar guruhi">
                </div>
            </div>
        </section>

        <section class="features">
            <div class="container">
                <h2 class="section-title">Nima uchun IshchiTop?</h2>
                <div class="features-grid">
                    <div class="feature-card">
                        <div class="feature-icon">
                            <i class="fas fa-user-tie"></i>
                        </div>
                        <h3 class="feature-title">Malakali ishchilar</h3>
                        <p class="feature-description">Barcha sohalardagi tajribali mutaxassislarni bir joyda toping.</p>
                    </div>
                    <div class="feature-card">
                        <div class="feature-icon">
                            <i class="fas fa-money-bill-wave"></i>
                        </div>
                        <h3 class="feature-title">Qulay narxlar</h3>
                        <p class="feature-description">Ishchilar o'z narxlarini belgilaydilar, siz esa o'zingizga mos variantni tanlaysiz.</p>
                    </div>
                    <div class="feature-card">
                        <div class="feature-icon">
                            <i class="fas fa-map-marker-alt"></i>
                        </div>
                        <h3 class="feature-title">Yaqin joylashuv</h3>
                        <p class="feature-description">O'z hududingizdagi ishchilarni filter orqali topishingiz mumkin.</p>
                    </div>
                    <div class="feature-card">
                        <div class="feature-icon">
                            <i class="fas fa-star"></i>
                        </div>
                        <h3 class="feature-title">Reyting tizimi</h3>
                        <p class="feature-description">Ishchilarning sifatini reyting orqali baholang va ko'ring.</p>
                    </div>
                </div>
            </div>
        </section>

        <section class="cta">
            <div class="container">
                <div class="cta-content">
                    <h2 class="cta-title">Hoziroq platformamizga qo'shiling!</h2>
                    <p class="cta-description">Mijozlar yoki ish izlayotganlar bilan bog'lanish uchun ro'yxatdan o'ting.</p>
                    <div class="cta-buttons">
                        <a href="worker-register.html" class="btn btn-primary">Ro'yxatdan o'tish</a>
                        <a href="workers.html" class="btn btn-outline">Ishchilarni ko'rish</a>
                    </div>
                </div>
            </div>
        </section>
    </main>

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
</body>
</html>