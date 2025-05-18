<!DOCTYPE html>
<html lang="uz">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ishchi Ro'yxatdan O'tish - IshchiTop</title>
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
        <section class="page-header">
            <div class="container">
                <h1 class="page-title">Ishchi sifatida ro'yxatdan o'tish</h1>
                <p class="page-description">O'z ma'lumotlaringizni kiriting va ish topish imkoniyatingizni oshiring</p>
            </div>
        </section>

        <section class="registration">
            <div class="container">
                <form id="workerRegistrationForm" class="registration-form">
                    <div class="form-group">
                        <label for="fullName">To'liq ismingiz <span class="required">*</span></label>
                        <input type="text" id="fullName" name="fullName" required>
                        <div class="error-message" id="fullNameError"></div>
                    </div>

                    <div class="form-row">
                        <div class="form-group">
                            <label for="age">Yoshingiz <span class="required">*</span></label>
                            <input type="number" id="age" name="age" min="16" max="80" required>
                            <div class="error-message" id="ageError"></div>
                        </div>
                        <div class="form-group">
                            <label for="profession">Kasbingiz <span class="required">*</span></label>
                            <select id="profession" name="profession" required>
                                <option value="">Kasbingizni tanlang</option>
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
                            <div class="error-message" id="professionError"></div>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="experience">Tajriba yili <span class="required">*</span></label>
                        <input type="number" id="experience" name="experience" min="0" max="50" required>
                        <div class="error-message" id="experienceError"></div>
                    </div>

                    <div class="form-row">
                        <div class="form-group">
                            <label for="region">Viloyat <span class="required">*</span></label>
                            <select id="region" name="region" required>
                                <option value="">Viloyatni tanlang</option>
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
                            <div class="error-message" id="regionError"></div>
                        </div>
                        <div class="form-group">
                            <label for="district">Tuman <span class="required">*</span></label>
                            <input type="text" id="district" name="district" required>
                            <div class="error-message" id="districtError"></div>
                        </div>
                    </div>

                    <div class="form-row">
                        <div class="form-group">
                            <label for="rateType">Narx turi <span class="required">*</span></label>
                            <select id="rateType" name="rateType" required>
                                <option value="">Narx turini tanlang</option>
                                <option value="hourly">Soatlik</option>
                                <option value="daily">Kunlik</option>
                                <option value="monthly">Oylik</option>
                                <option value="project">Loyiha uchun</option>
                            </select>
                            <div class="error-message" id="rateTypeError"></div>
                        </div>
                        <div class="form-group">
                            <label for="rate">Narx (so'm) <span class="required">*</span></label>
                            <input type="number" id="rate" name="rate" min="0" required>
                            <div class="error-message" id="rateError"></div>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="phone">Telefon raqamingiz <span class="required">*</span></label>
                        <div class="phone-input-container">
                            <span class="phone-prefix">+998</span>
                            <input type="tel" id="phone" name="phone" placeholder="90 123 45 67" maxlength="9" required>
                        </div>
                        <div class="error-message" id="phoneError"></div>
                    </div>

                    <div class="form-group">
                        <label for="description">O'zingiz haqingizda qo'shimcha ma'lumot</label>
                        <textarea id="description" name="description" rows="4"></textarea>
                    </div>

                    <div class="form-group terms-group">
                        <label class="checkbox-label">
                            <input type="checkbox" id="terms" name="terms" required>
                            <span class="checkbox-custom"></span>
                            Men <a href="#">foydalanish shartlari</a> bilan tanishdim va roziman
                        </label>
                        <div class="error-message" id="termsError"></div>
                    </div>

                    <div class="form-actions">
                        <button type="submit" class="btn btn-primary">Ro'yxatdan o'tish</button>
                        <button type="reset" class="btn btn-outline">Tozalash</button>
                    </div>
                </form>
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
    <script src="{{ asset('js/register.js') }}"></script>
</body>
</html>