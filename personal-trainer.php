<!DOCTYPE html>
    <html lang="ar">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <!--=============== FAVICON ===============-->
        <link rel="shortcut icon" href="assets/img/favicon.png" type="image/x-icon">

        <!--=============== BOXICONS ===============-->
        <link href='https://unpkg.com/boxicons@2.1.1/css/boxicons.min.css' rel='stylesheet'>

        <!--=============== CSS ===============-->
        <link rel="stylesheet" href="assets/css/styles.css">

        <title> مدرب  شخصي  </title>
    </head>
    <body>
        <!--==================== LOADER ====================-->
        <div class="load" id="load">
            <img src="assets/img/logo1.png" alt="" class="load__gif">
        </div>

        <!--==================== HEADER ====================-->
        <header class="header" id="header">
            <nav class="nav container">
                <a href="#" class="nav__logo">
                    <img src="assets/img/logo.png" alt="" class="nav__logo-img">
                    نادي اللياقة 
                </a>

                <div class="nav__menu" id="nav-menu">
                    <ul class="nav__list">
                        <li class="nav__item">
                            <a href="index.php" class="nav__link ">الصفحة الرئيسية</a>
                        </li>
                      
                        <li class="nav__item">
                            <a href="index.php" class="nav__link">عن نادي اللياقة</a>
                        </li>
                        <li class="nav__item">
                            <a href="index.php" class="nav__link">اشتراكات</a>
                        </li>
                    </ul>

                    <div class="nav__close" id="nav-close">
                        <i class='bx bx-x' ></i>
                    </div>
                </div>

                <!-- Toggle button -->
                <div class="nav__toggle" id="nav-toggle">
                    <i class='bx bx-grid-alt'></i>
                </div>
            </nav>
        </header>

        <!--==================== MAIN ====================-->
        <main>
        
            
            <!--==================== QUALITY ====================-->
            <section class="quality section" id="premium">
                <div class="quality__container container">
                    <h2 class="section__title">
                        اشتراك الان  في نادي اللياقة النسائي 
                    </h2>

                    <div class="quality__content grid">
                        <div class="quality__images">
                            <img src="assets/img/blog1.png" alt="" class="quality__img-big">
                            <img src="assets/img/quality2.png" alt="" class="quality__img-small">
                        </div>

                        <div class="quality__data">
                            <h1 class="quality__title">  مدرب شخصي </h1>
                            
                            <span class="quality__special">نادي نسائي متكامل</span>
                            <p class="quality__description">
                                ستجد مزيجاً من المعدات المناسبة والصفوف والخبراء الذين سيساعدونك في تحقيق طموحاتك حول لياقتك البدنية. بدءاً من مناطق الفري ستايل المخصصة واستوديوهات التمرين الجماعي الى حصص التدريب الشخصي، نوفر لكم بيئة ديناميكية تمد الأعضاء بالحافز المستمر. انها ليست لياقة بدنية فقط، انها نمط الحياة.
                            </p>

                            <a href="registration-p.php">
                            <p class="quality__description">
                                اشترك الان
                            </p>
                            </a>
                            

                            <button class="footer__button">
                                <i class='bx bx-right-arrow-alt' ></i>
                            </button>
                        </div>
                    </div>
                </div>
            </section>
        </main>

        <!--==================== FOOTER ====================-->
        <footer class="footer">
            <div class="footer__container container">
                <h1 class="footer__title">نادي اللياقة النسائي</h1>

                <div class="footer__content grid">
                    <div class="footer__data">
                        <p class="footer__description">
                            اشترك في نشرتنا الإخبارية
                        </p>

                        <div class="footer__newsletter">
                            <input type="email" placeholder="اكتب ايميلك" class="footer__input">
                            <button class="footer__button">
                                <i class='bx bx-right-arrow-alt' ></i>
                            </button>
                        </div>
                    </div>

                    <div class="footer__data">
                        <h2 class="footer__subtitle">
                            العنوان
                        </h2>
                        <p class="footer__information">
                            المملكة العربية السعودية <br>
                            مناطق الاحساء , الرياض , الطائف , جدة
                            <img src="" alt="" class="footer__flag">
                        </p>
                    </div>

                    <div class="footer__data">
                        <h2 class="footer__subtitle">
                            للتواصل
                        </h2>
                        <p class="footer__information">
                            +987654321 <br>
                            fitenss@email.com
                        </p>
                    </div>

                    <div class="footer__data">
                        <h2 class="footer__subtitle">
                            اوقات الدوام
                        </h2>
                        <p class="footer__information">
                            جميع ايام الاسبوع<br>
                            من ست صباحاً -إلى 11 ليلاً
                        </p>
                    </div>
                </div>

                <div class="footer__group">
                    <ul class="footer__social">
                        <a href="https://www.facebook.com/" target="_blank" class="footer__social-link">
                            <i class='bx bxl-facebook' ></i>
                        </a>
                        <a href="https://www.instagram.com/" target="_blank" class="footer__social-link">
                            <i class='bx bxl-instagram' ></i>
                        </a>
                        <a href="https://twitter.com/" target="_blank" class="footer__social-link">
                            <i class='bx bxl-twitter' ></i>
                        </a>
                        
                    </ul>

                    <span class="footer__copy">
                        &#169; كل الحقوق محفوظة لدى نادي اللياقة النسائي
                    </span>
                </div>
            </div>
        </footer>


        <!--========== SCROLL UP ==========-->
        <a href="#" class="scrollup" id="scroll-up">
            <i class='bx bx-up-arrow-alt'></i>
        </a>

        <!--=============== MIXITUP FILTER ===============-->
        <script src="assets/js/mixitup.min.js"></script>

        <!--=============== MAIN JS ===============-->
        <script src="assets/js/main.js"></script>
    </body>
</html>