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

        <title>نادي اللياقة النسائي </title>
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
                            <a href="#home" class="nav__link ">الصفحة الرئيسية</a>
                        </li>
                      
                        <li class="nav__item">
                            <a href="#premium" class="nav__link color">عن نادي اللياقة</a>
                        </li>
                        <li class="nav__item">
                            <a href="#blog" class="nav__link color" >اشتراكات</a>
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
            <!--==================== HOME ====================-->
            <section class="home grid" id="home">
                <div class="home__container">
                    <div class="home__content container">
                        <h1 class="home__title">
                            لقد صُمم جسمك ليتحرك بالتزامن مع أهدافك                         </h1>
                        <p class="home__description">
                            يمكنك الآن المضي قدماً مع أحدث تقنيات التمرين والتحفيز المتواصل
                        </p>

                      

                        <a href="#specialty">
                            <img src="assets/img/scroll.png" alt="" class="home__scroll">
                        </a>
                    </div>
                </div>

                <img src="assets/img/home.png" alt="" class="home__img">
            </section>

            <!--==================== ESPECIALTY ====================-->
            <div class="specialty section container" id="specialty">
                <div class="specialty__container">
                    <div class="specialty__box">
                        <h2 class="section__title">
                            اختاري تمرينك المفضل
                        </h2>
    
                        
                    </div>

                    <div class="specialty__category">
                        <div class="specialty__group specialty__line">
                            <img src="assets/img/specialty1.png" alt="" class="specialty__img">

                            <h3 class="specialty__title">التعليم</h3>
                            <p class="specialty__description">
                                حولي موهبتك إلى مهنة مع التعليم من نادي اللياقة حيث يمكنك الحصول على افضل تدريب في الشرق الاوسط
                            </p>
                        </div>

                        <div class="specialty__group specialty__line">
                            <img src="assets/img/specialty2.png" alt="" class="specialty__img">

                            <h3 class="specialty__title">التدريب الشخصي</h3>
                            <p class="specialty__description">
                                يقوم خبراؤنا بدراسة قدراتك واحتياجك الجسدية بعد ذلك بابتكار خطه صحية متكاملة خاصة بك
                            </p>
                        </div>

                        <div class="specialty__group">
                            <img src="assets/img/specialty3.png" alt="" class="specialty__img">

                            <h3 class="specialty__title">الحصص</h3>
                            <p class="specialty__description">
                                أكتشفي برامج تدريب متنوعة مع حصص نادي اللياقة العديدة التي تحفزك وتلهمك
                            </p>
                        </div>
                    </div>
                </div>
            </div>

           

            <!--==================== QUALITY ====================-->
            <section class="quality section" id="premium">
                <div class="quality__container container">
                    <h2 class="section__title">
                        عن نادي اللياقة | قصتنا
                    </h2>

                    <div class="quality__content grid">
                        <div class="quality__images">
                            <img src="assets/img/quality1.png" alt="" class="quality__img-big">
                            <img src="assets/img/quality2.png" alt="" class="quality__img-small">
                        </div>

                        <div class="quality__data">
                            <h1 class="quality__title">  نادي اللياقة </h1>
                            
                            <span class="quality__special">نادي نسائي متكامل</span>
                            <p class="quality__description">
                                تُعد سلسلة أندية "نادي اللياقة النسائي الشرق الأوسط" من سلاسل أندية اللياقة البدنية الرائدة في العالم، حيث تضم 60 نادياً في 51 موقعاً في أرجاء منطقة الشرق الأوسط في كلٍ من الإمارات العربية المتحدة والبحرين وقطر والمملكة العربية السعودية
                            </p>

                            <div class="quality__buttons">
                                

                            </div>
                        </div>
                    </div>
                </div>
            </section>

            

            <!--==================== BLOG ====================-->
            <section class="blog section" id="blog">
                <div class="blog__container container">
                    <h2 class="section__title">
                        مظهر جديد , شعور جديد,طاقة جديدة | استمتعي بالتجربة الجديدة
                    </h2>

                    <div class="blog__content grid">
                        <article class="blog__card">
                            <div class="blog__image">
                                <img src="assets/img/blog1.png" alt="" class="blog__img">
                                <a href="personal-trainer.php" class="blog__button">
                                    <i class='bx bx-right-arrow-alt'></i>
                                </a>
                            </div>

                            <div class="blog__data">
                                <h2 class="blog__title">
                                    مدرب شخصي
                                </h2>
                                <p class="blog__description">
                                    بمساعدة خبرائنا، نقوم بإعداد برنامج تدريب شخصي متكامل ليتناسب مع احتياجاتك، نمط حياتك وميزانيتك. يحرص خبرائنا المتخصصين بعلم وظائف الجسم والتمارين الرياضية على تقييم لياقتك ليتمكنوا من تطبيق معرفتهم في مساعدتك لتحقيق أهدافك
                                </p>

                                
                            </div>
                        </article>

                        <article class="blog__card">
                            <div class="blog__image">
                                <img src="assets/img/blog2.png" alt="" class="blog__img">
                                <a href="Subscriptions.php" class="blog__button">
                                    <i class='bx bx-right-arrow-alt'></i>
                                </a>
                            </div>

                            <div class="blog__data">
                                <h2 class="blog__title">
                                    خيارات العضوية
                                </h2>
                                <p class="blog__description">
                                    عضوية تناسب نمط حياتك
بالنسبة الينا، نادي اللياقة النسائي هو نمط عيش متكامل. لذلك قمنا بالتركيز على تصميم مرافقنا بعناية فائقة لضمان أعلى مستوى من الجودة في جميع مراحل تجربتك معنا
                                </p>

                               
                            </div>
                            
                        </article>
                        <article class="blog__card">
                            <div class="blog__image">
                                <img src="assets/img/blog3.png" alt="" class="blog__img">
                                <a href="education.php" class="blog__button">
                                    <i class='bx bx-right-arrow-alt'></i>
                                </a>
                            </div>

                            <div class="blog__data">
                                <h2 class="blog__title">
                                    التعليم
                                </h2>
                                <p class="blog__description">
                                    هل تريدين أن تصبحي مدربةً شخصيةً معتمدة؟ يقدم نادي اللياقة النسائي السعودية برامج تدريب مكثفة لاعتماد وتأهيل المدربين. 
                                </p>

                               
                            </div>
                            
                        </article>
                        <article class="blog__card">
                            <div class="blog__image">
                                <img src="assets/img/blog4.png" alt="" class="blog__img">
                                <a href="Classes.php" class="blog__button">
                                    <i class='bx bx-right-arrow-alt'></i>
                                </a>
                            </div>

                            <div class="blog__data">
                                <h2 class="blog__title">
                                    الحصص المبتكرة
                                </h2>
                                <p class="blog__description">
                                    ان جسمك مخصص للحركة نحو هدف. ونحن نستطيع مساعدتك للمضي قدماً في التدريب الصحيح المتوازن الذي يمدك بالحافز. اجمع بين صالتنا الرياضية المجهزة بالكامل مع تكنيكات التمارين الخاصة كتمرين الحركة الديناميكية لاكتشاف طرق جديدة للتحدي
                                </p>

                               
                            </div>
                            
                        </article>
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