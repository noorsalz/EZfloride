<!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <!--=============== FAVICON ===============-->
        <link rel="shortcut icon" href="assets/img/favicon.png" type="image/x-icon">

        <!--=============== REMIX ICONS ===============-->
        <link href="https://cdn.jsdelivr.net/npm/remixicon@2.5.0/fonts/remixicon.css" rel="stylesheet">

        <!--=============== SWIPER CSS ===============-->
        <link rel="stylesheet" href="assets/css/swiper-bundle.min.css">

        <!--=============== CSS ===============-->
        <link rel="stylesheet" href="assets/css/styles.css">

        <title>EzFloRide - Used Car Dealership</title>
    </head>
    <body>
        <!--==================== HEADER ====================-->
        <header class="header" id="header">
            <nav class="nav container">
                <a href="#" class="nav__logo">
                    <i class="ri-steering-line"></i>
                    EZFLORIDE
                </a>

                <div class="nav__menu" id="nav-menu">
                    <ul class="nav__list">
                        <li class="nav__item">
                            <a href="#home" class="nav__link active-link">Home</a>
                        </li>

                        <li class="nav__item">
                            <a href="#about" class="nav__link">About</a>
                        </li>

                        <li class="nav__item">
                            <a href="#popular" class="nav__link">Popular</a>
                        </li>

                        <li class="nav__item">
                            <a href="#featured" class="nav__link">Featured</a>
                        </li>
                    </ul>

                    <div class="nav__close" id="nav-close">
                        <i class="ri-close-line"></i>
                    </div>
                </div>

                <!-- Toggle button -->
                <div class="nav__toggle" id="nav-toggle">
                    <i class="ri-menu-line"></i>
                </div>
            </nav>
        </header>

        <!--==================== MAIN ====================-->
        <main class="main">
            <!--==================== HOME ====================-->
            <section class="home section" id="home">
                <div class="shape shape__big"></div>
                <div class="shape shape__small"></div>

                <div class="home__container container grid">
                    <div class="home__data">
                        <h1 class="home__title">
                            Choose The Best Car
                        </h1>

                        <h2 class="home__subtitle">
                            Porsche Mission E
                        </h2>

                        <h3 class="home__elec">
                            <i class="ri-flashlight-fill"></i> Electric car
                        </h3>
                    </div>

                    <img src="assets/img/home.png" alt="" class="home__img">

                    <div class="home__car">
                        <div class="home__car-data">
                            <div class="home__car-icon">
                                <i class="ri-temp-cold-line"></i>
                            </div>
                            <h2 class="home__car-number">24°</h2>
                            <h3 class="home__car-name">TEMPERATURE</h3>
                        </div>

                        <div class="home__car-data">
                            <div class="home__car-icon">
                                <i class="ri-dashboard-3-line"></i>
                            </div>
                            <h2 class="home__car-number">873</h2>
                            <h3 class="home__car-name">MILEAGE</h3>
                        </div>

                        <div class="home__car-data">
                            <div class="home__car-icon">
                                <i class="ri-flashlight-fill"></i>
                            </div>
                            <h2 class="home__car-number">94%</h2>
                            <h3 class="home__car-name">BATTERY</h3>
                        </div>
                    </div>

                    <a href="#about" class="home__button">START</a>
                </div>
            </section>

            <!--==================== ABOUT ====================-->
            <section class="about section" id="about">
                <div class="about__container container grid">
                    <div class="about__group">
                        <img src="assets/img/about.png" alt="" class="about__img">

                        <div class="about__card">
                            <h3 class="about__card-title">2.500+</h3>
                            <p class="about__card-description">
                                Supercharges placed along popular routes
                            </p>
                        </div>
                    </div>

                    <div class="about__data">
                        <h2 class="section__title about__title">
                            Machines With <br> Future Technology
                        </h2>

                        <p class="about__description">
                            See the future with high-performance electric cars produced by 
                            renowned brands. They feature futuristic builds and designs with 
                            new and innovative platforms that last a long time.
                        </p>

                        <a href="#" class="button">Know more</a>
                    </div>
                </div>
            </section>

            <!--==================== POPULAR ====================-->
            <section class="popular section" id="popular">
        <h2 class="section__title">
            Choose Your Car <br> Of The Toyota Brand
        </h2>

        <div class="popular__container container swiper">
            <div class="swiper-wrapper">

            <?php
            include_once "./config/dbconnect.php";
            $sql = "SELECT * FROM product, category WHERE product.category_id=category.category_id";
            $result = $conn->query($sql);
            $count = 1;
            if ($result->num_rows > 0) {
                while ($row = $result->fetch_assoc()) {
            ?>

                <article class="popular__card swiper-slide">
                    <div class="shape shape__smaller"></div>

                    <h1 class="popular__title"><?=$row["product_name"]?></h1>
                    <!-- <h3 class="popular__subtitle"><?=$row["category_name"]?></h3> -->


                    <img src="<?=$row["product_image"]?>" alt="" class="popular__img">

                    <div class="popular__data">
                        <div class="popular__data-group">
                            <i class="ri-price-tag-3-line"></i> <?=$row["price"]?>
                        </div>
                        <div class="popular__data-group">
                            <i class="ri-funds-box-line"></i> <?=$row["some_other_field"]?>
                        </div>
                        <!-- <div class="popular__data-group">
                            <i class="ri-charging-pile-2-line"></i> Electric
                        </div> -->
                    </div>

                    <h3 class="popular__price"><?=$row["price"]?></h3>

                    <button class="button popular__button">
                        <i class="ri-shopping-bag-2-line"></i>
                    </button>
                </article>

            <?php
                }
            }
            ?>

            </div>

            <div class="swiper-pagination"></div>
        </div>
    </section>

            <!--==================== FEATURES ====================-->
            <section class="features section">
                <h2 class="section__title">
                    More Features
                </h2>

                <div class="features__container container grid">
                    <div class="features__group">
                        <img src="assets/img/features.png" alt="" class="features__img">

                        <div class="features__card features__card-1">
                            <h3 class="features__card-title">800v</h3>
                            <p class="features__card-description">Turbo <br> Chargin</p>
                        </div>

                        <div class="features__card features__card-2">
                            <h3 class="features__card-title">350</h3>
                            <p class="features__card-description">Km <br> Range</p>
                        </div>

                        <div class="features__card features__card-3">
                            <h3 class="features__card-title">480</h3>
                            <p class="features__card-description">Km <br> Travel</p>
                        </div>
                    </div>
                </div>
                
                <img src="assets/img/map.svg" alt="" class="features__map">
            </section>

            <!--==================== FEATURED ====================-->
            <section class="featured section" id="featured">
    <h2 class="section__title">
        Our Fleet
    </h2>

    <div class="featured__container container">
        <ul class="featured__filters">
            <li>
                <button class="featured__item active-featured" data-filter="all">
                    <span>All</span>
                </button>
            </li>
            <?php
           
            include_once "./config/dbconnect.php";
            $sql="SELECT * from category";
            $result=$conn-> query($sql);
            if ($result-> num_rows > 0){
                while ($row=$result-> fetch_assoc()) {
                    $category_id = $row['category_id'];
                    $category_name = $row['category_name'];
            ?>
            <li>
                <button class="featured__item" data-filter=".<?php echo $category_name; ?>">
                    <span><?php echo $category_name; ?></span>
                </button>
            </li>
            <?php
                }
            }
            ?>
        </ul>

        <div class="featured__content grid">
            <?php
            $sql="SELECT * from product, category WHERE product.category_id=category.category_id";
            $result=$conn-> query($sql);
            if ($result-> num_rows > 0){
                while ($row=$result-> fetch_assoc()) {
            ?>
            <article class="featured__card mix <?php echo $row["category_name"]; ?>">
                <div class="shape shape__smaller"></div>

                <h1 class="featured__title"><?php echo $row["product_name"]; ?></h1>
                <!-- <h3 class="featured__subtitle"><?php echo $row["category_name"]; ?></h3> -->

                <img src="<?php echo $row["product_image"]; ?>" alt="" class="featured__img">

                <div class="popular__data">
                        <div class="popular__data-group">
                        <i class="ri-price-tag-3-line"></i> $<?= number_format($row["price"]) ?>
                       
                        </div>
                        <div class="popular__data-group">
                            <i class="ri-dashboard-3-line"></i> <?=$row["price"]?> mi
                        </div>
                       <!--  <div class="popular__data-group">
                            <i class="ri-charging-pile-2-line"></i> Electric
                        </div> -->
                    </div>

                <h3 class="featured__price">$<?php echo number_format($row["price"]); ?></h3>


                <button class="button featured__button">
                    <i class="ri-shopping-bag-2-line"></i>
                </button>
            </article>
            <?php
                }
            }
            ?>
        </div>
    </div>
</section>


            <!--==================== OFFER ====================-->
            <section class="offer section">
                <div class="offer__container container grid">
                    <img src="assets/img/offer-bg.png" alt="" class="offer__bg">

                    <div class="offer__data">
                        <h2 class="section__title offer__title">
                            Do You Want To Receive <br> Special Offers?
                        </h2>

                        <p class="offer__description">
                            Be the first to receive all the information about our 
                            products and new cars by email by subscribing to our 
                            mailing list.
                        </p>

                        <a href="#" class="button">
                            Subscribe Now
                        </a>
                    </div>

                    <img src="assets/img/offer.png" alt="" class="offer__img">
                </div>
            </section>

            <!--==================== LOGOS ====================-->
           <!--  <section class="logos section">
                <div class="logos__container container grid">
                    <div class="logos__content">
                        <img src="assets/img/logo1.png" alt="" class="logos__img">
                    </div>
                    <div class="logos__content">
                        <img src="assets/img/logo2.png" alt="" class="logos__img">
                    </div>
                    <div class="logos__content">
                        <img src="assets/img/logo3.png" alt="" class="logos__img">
                    </div>
                    <div class="logos__content">
                        <img src="assets/img/logo4.png" alt="" class="logos__img">
                    </div>
                    <div class="logos__content">
                        <img src="assets/img/logo5.png" alt="" class="logos__img">
                    </div>
                    <div class="logos__content">
                        <img src="assets/img/logo6.png" alt="" class="logos__img">
                    </div>
                </div>
            </section> -->
        </main>

        <!--==================== FOOTER ====================-->
        <footer class="footer section">
            <div class="shape shape__big"></div>
            <div class="shape shape__small"></div>

            <div class="footer__container container grid">
                <div class="footer__content">
                    <a href="#" class="footer__logo">
                        <i class="ri-steering-line"></i> EzFloRide
                    </a>
                    <p class="footer__description">
                        We offer the best cars of <br> 
                        the most recognized brands in <br> 
                        the world.
                    </p>
                </div>

                <div class="footer__content">
                    <h3 class="footer__title">
                        Company
                    </h3>

                    <ul class="footer__links">
                        <li>
                            <a href="#about" class="footer__link">About</a>    
                        </li>
                        <li>
                            <a href="#featured" class="footer__link">Cars</a>
                        </li>
                        <li>
                            <a href="#" class="footer__link">History</a>
                        </li>
                        <!-- <li>
                            <a href="#" class="footer__link">Shop</a>
                        </li> -->
                    </ul>
                </div>

                <div class="footer__content">
                    <h3 class="footer__title">
                        Information
                    </h3>

                    <ul class="footer__links">
                        <li>
                            <a href="#" class="footer__link">Request a quote</a>
                        </li>
                       
                        <li>
                            <a href="#" class="footer__link">Contact us</a>
                        </li>
                        
                    </ul>
                </div>

                <div class="footer__content">
                    <h3 class="footer__title">
                        Follow us
                    </h3>

                    <ul class="footer__social">
                        <a href="https://www.facebook.com/" target="_blank" class="footer__social-link">
                            <i class="ri-facebook-fill"></i>
                        </a>
                        <a href="https://www.instagram.com/ezfloride?igsh=YnY0ZnkzNXJzZ2Y4" target="_blank" class="footer__social-link">
                            <i class="ri-instagram-line"></i>
                        </a>
                        <!-- <a href="https://twitter.com/" target="_blank" class="footer__social-link">
                            <i class="ri-twitter-line"></i>
                        </a> -->
                    </ul>
                </div>
            </div>

            <span class="footer__copy">
                &#169; EzFloRide. All rigths reserved
            </span>
        </footer>


        <!--========== SCROLL UP ==========-->
        <a href="#" class="scrollup" id="scroll-up">
            <i class="ri-arrow-up-line"></i>
        </a>

        <!--=============== SCROLL REVEAL ===============-->
        <script src="assets/js/scrollreveal.min.js"></script>

        <!--=============== SWIPER JS ===============-->
        <script src="assets/js/swiper-bundle.min.js"></script>

        <!--=============== MIXITUP JS ===============-->
        <script src="assets/js/mixitup.min.js"></script>

        <!--=============== MAIN JS ===============-->
        <script src="assets/js/main.js"></script>
    </body>
</html>