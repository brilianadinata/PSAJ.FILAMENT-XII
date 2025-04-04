<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home Bakery - Amanda Bakery</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link
        href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@400;500;600;700;800&family=Poppins:wght@300;400;500;600;700&display=swap"
        rel="stylesheet">
    <style>
        /* Reset and Base Styles */
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        html {
            scroll-behavior: smooth;
        }

        body {
            font-family: 'Poppins', sans-serif;
            background-color: #ffffff;
            color: #5e3e25;
            overflow-x: hidden;
        }

        a {
            text-decoration: none;
            color: inherit;
        }

        .container {
            width: 100%;
            max-width: 1200px;
            margin: 0 auto;
            padding: 0 20px;
        }

        /* Header and Navigation */
        header {
            padding: 20px 0;
            background-color: #ffffff;
            position: sticky;
            top: 0;
            z-index: 1000;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
        }

        .navbar {
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .logo {
            width: 60px;
            height: 60px;
        }

        .nav-links {
            display: flex;
            gap: 30px;
        }

        .nav-links a {
            font-size: 16px;
            font-weight: 500;
            position: relative;
            cursor: pointer;
        }

        .nav-links a.active::after {
            content: '';
            position: absolute;
            bottom: -5px;
            left: 0;
            width: 100%;
            height: 2px;
            background-color: #5e3e25;
        }

        .nav-icons {
            display: flex;
            gap: 20px;
            align-items: center;
        }

        .nav-icons i {
            font-size: 18px;
            cursor: pointer;
            color: #5e3e25;
        }

        /* Notification Popup */
        .notification-popup {
            position: absolute;
            top: 70px;
            right: 20px;
            width: 350px;
            background-color: #fff;
            border-radius: 10px;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
            z-index: 1001;
            display: none;
        }

        .notification-header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 15px 20px;
            border-bottom: 1px solid #eee;
        }

        .notification-header h3 {
            font-size: 18px;
            font-weight: 600;
            color: #5e3e25;
        }

        .notification-header span {
            color: #999;
            font-size: 14px;
        }

        .notification-close {
            cursor: pointer;
            font-size: 20px;
            color: #999;
        }

        .notification-list {
            max-height: 400px;
            overflow-y: auto;
        }

        .notification-item {
            display: flex;
            padding: 15px 20px;
            border-bottom: 1px solid #f5f5f5;
        }

        .notification-avatar {
            width: 40px;
            height: 40px;
            border-radius: 50%;
            background-color: #f5f5f5;
            margin-right: 15px;
            flex-shrink: 0;
        }

        .notification-content {
            flex-grow: 1;
        }

        .notification-text {
            font-size: 14px;
            color: #333;
            margin-bottom: 5px;
            line-height: 1.4;
        }

        .notification-link {
            color: #5e3e25;
            font-weight: 500;
            cursor: pointer;
        }

        .notification-time {
            font-size: 12px;
            color: #999;
            text-align: right;
        }

        /* Hero Section */
        .hero {
            display: flex;
            align-items: center;
            justify-content: space-between;
            padding: 50px 0;
            position: relative;
            overflow: hidden;
        }

        .hero-content {
            max-width: 500px;
            z-index: 2;
        }

        .hero-title {
            font-family: 'Playfair Display', serif;
            font-size: 48px;
            font-weight: 700;
            color: #5e3e25;
            margin-bottom: 20px;
            line-height: 1.2;
        }

        .hero-text {
            color: #666;
            margin-bottom: 30px;
            line-height: 1.6;
        }

        .btn {
            display: inline-flex;
            align-items: center;
            padding: 10px 20px;
            border-radius: 30px;
            font-weight: 500;
            cursor: pointer;
            transition: all 0.3s ease;
        }

        .btn-primary {
            background-color: #eebe7f;
            color: #5e3e25;
        }

        .btn-primary:hover {
            background-color: #f4d3a9;
        }

        .hero-image {
            position: absolute;
            right: 0;
            top: 0;
            height: 100%;
            width: 50%;
            z-index: 1;
        }

        .hero-image img {
            height: 100%;
            width: 100%;
            object-fit: cover;
            object-position: left center;
        }

        /* Features Section */
        .features {
            display: flex;
            justify-content: space-between;
            margin: 50px 0 20px;
            position: relative;
            z-index: 2;
        }

        .feature {
            text-align: center;
            max-width: 150px;
        }

        .feature-icon {
            width: 60px;
            height: 60px;
            background-color: #f4f4f4;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            margin: 0 auto 15px;
        }

        .feature-title {
            font-weight: 600;
            margin-bottom: 10px;
            font-size: 14px;
            color: #5e3e25;
        }

        .feature-text {
            color: #666;
            font-size: 12px;
            line-height: 1.4;
        }

        /* Wave Divider */
        .wave-top {
            width: 100%;
            height: 100px;
            background-image: url('https://hebbkx1anhila5yf.public.blob.vercel-storage.com/Background%20navbar-nfXNsc5pfHEewFaicgDaYY6vc1zpRi.png');
            background-size: 100% 100%;
            background-repeat: no-repeat;
            margin-top: 0px;
            position: relative;
        }

        /* Brown Section */
        .brown-section {
            background-color: #5e3e25;
            color: #fff;
            padding: 50px 0;
            position: relative;
        }

        .brown-content {
            display: flex;
            align-items: center;
            justify-content: space-between;
        }

        .brown-image {
            width: 40%;
        }

        .brown-image img {
            width: 100%;
            object-fit: contain;
        }

        .brown-text {
            width: 50%;
        }

        .section-badge {
            display: inline-block;
            padding: 8px 15px;
            background-color: #eebe7f;
            color: #5e3e25;
            border-radius: 20px;
            font-size: 14px;
            font-weight: 500;
            margin-bottom: 20px;
        }

        .section-title {
            font-family: 'Playfair Display', serif;
            font-size: 36px;
            font-weight: 700;
            margin-bottom: 20px;
            line-height: 1.2;
        }

        .section-description {
            margin-bottom: 30px;
            line-height: 1.6;
            font-size: 14px;
            color: rgba(255, 255, 255, 0.9);
        }

        .btn-group {
            display: flex;
            gap: 15px;
        }

        .btn-outline {
            border: 1px solid #fff;
            background-color: transparent;
            color: #fff;
        }

        .btn-outline:hover {
            background-color: rgba(255, 255, 255, 0.1);
        }

        .wave-bottom {
            width: 100%;
            height: 100px;
            background-image: url('https://hebbkx1anhila5yf.public.blob.vercel-storage.com/Background%20navbar-nfXNsc5pfHEewFaicgDaYY6vc1zpRi.png');
            background-size: 100% 100%;
            background-repeat: no-repeat;
            transform: rotate(180deg);
            bottom: 50px;
            position: relative;
        }

        /* Products Section */
        .products-section {
            padding: 80px 0;
            background-color: #fff;
        }

        .section-header {
            text-align: center;
            margin-bottom: 30px;
        }

        .filter-buttons {
            display: flex;
            justify-content: center;
            gap: 15px;
            margin: 30px 0;
        }

        .filter-btn {
            padding: 8px 25px;
            border-radius: 20px;
            cursor: pointer;
            font-weight: 500;
            transition: all 0.3s ease;
            border: none;
            font-family: 'Poppins', sans-serif;
        }

        .filter-btn.active {
            background-color: #5e3e25;
            color: #fff;
        }

        .filter-btn:not(.active) {
            background-color: #f5f5f5;
            color: #5e3e25;
        }

        .filter-btn:hover:not(.active) {
            background-color: #e0e0e0;
        }

        .search-container {
            display: flex;
            justify-content: center;
            margin-bottom: 40px;
        }

        .search-box {
            display: flex;
            align-items: center;
            width: 300px;
            border: 1px solid #ddd;
            border-radius: 30px;
            padding: 8px 15px;
        }

        .search-box input {
            border: none;
            outline: none;
            width: 100%;
            padding: 5px;
            font-size: 14px;
            font-family: 'Poppins', sans-serif;
        }

        .search-box i {
            color: #999;
            margin-right: 10px;
        }

        .products-grid {
            display: grid;
            grid-template-columns: repeat(4, 1fr);
            gap: 25px;
            margin-top: 30px;
        }

        .product-card {
            text-align: center;
        }

        .product-image {
            width: 100%;
            height: 150px;
            margin-bottom: 15px;
        }

        .product-image img {
            width: 100%;
            height: 100%;
            object-fit: contain;
        }

        .product-title {
            font-weight: 600;
            margin-bottom: 5px;
            color: #5e3e25;
            font-size: 16px;
        }

        .product-description {
            color: #666;
            font-size: 12px;
            margin-bottom: 10px;
            line-height: 1.4;
        }

        .product-price {
            font-weight: 600;
            margin-bottom: 15px;
            color: #5e3e25;
        }

        .btn-sm {
            padding: 6px 15px;
            font-size: 12px;
            border-radius: 20px;
        }

        .btn-outline-brown {
            border: 1px solid #5e3e25;
            background-color: transparent;
            color: #5e3e25;
        }

        .btn-outline-brown:hover {
            background-color: #5e3e25;
            color: #fff;
        }

        .view-more {
            text-align: center;
            margin-top: 50px;
        }

        .view-more .btn {
            background-color: #5e3e25;
            color: #fff;
            padding: 10px 25px;
            font-size: 14px;
        }

        .view-more .btn:hover {
            background-color: #68462b;
        }

        /* Contact Section */
        .contact-section {
            padding: 80px 0;
        }

        .contact-container {
            display: flex;
            gap: 50px;
        }

        .map-container {
            flex: 1;
            border-radius: 10px;
            overflow: hidden;
            height: 350px;
        }

        .map-container iframe {
            width: 100%;
            height: 100%;
            border: none;
        }

        .contact-info {
            flex: 1;
        }

        .contact-address {
            margin: 20px 0 30px;
            line-height: 1.8;
            color: #666;
            font-size: 14px;
        }

        /* Footer */
        .footer {
            background-color: #5e3e25;
            color: #fff;
            padding: 40px 0 20px;
            position: relative;
        }

        .footer-wave {
            width: 100%;
            height: 70px;
            background-image: url('https://hebbkx1anhila5yf.public.blob.vercel-storage.com/Background%20navbar-nfXNsc5pfHEewFaicgDaYY6vc1zpRi.png');
            background-size: 100% 100%;
            background-repeat: no-repeat;
            position: absolute;
            top: -40px;
            left: 0;
        }

        .footer-container {
            text-align: center;
        }

        .social-icons {
            display: flex;
            justify-content: center;
            gap: 20px;
            margin: 20px 0;
        }

        .social-icon {
            width: 40px;
            height: 40px;
            background-color: #eebe7f;
            color: #5e3e25;
            border-radius: 5px;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 18px;
            transition: all 0.3s ease;
        }

        .social-icon:hover {
            transform: translateY(-3px);
        }

        .footer-links {
            display: flex;
            justify-content: center;
            gap: 30px;
            margin: 25px 0;
        }

        .footer-links a {
            color: #fff;
            font-size: 14px;
            transition: all 0.3s ease;
        }

        .footer-links a:hover {
            color: #eebe7f;
        }

        .copyright {
            font-size: 14px;
            color: rgba(255, 255, 255, 0.8);
            margin-top: 25px;
        }

        /* Badge for notification count */
        .notification-badge {
            position: absolute;
            top: -8px;
            right: -8px;
            background-color: #ff6b6b;
            color: white;
            border-radius: 50%;
            width: 18px;
            height: 18px;
            font-size: 10px;
            display: flex;
            align-items: center;
            justify-content: center;
            font-weight: bold;
        }

        .bell-icon {
            position: relative;
        }

        /* Responsive Design */
        @media (max-width: 992px) {
            .products-grid {
                grid-template-columns: repeat(3, 1fr);
            }

            .notification-popup {
                width: 300px;
                right: 10px;
            }
        }

        @media (max-width: 768px) {
            .hero {
                flex-direction: column;
                text-align: center;
            }

            .hero-content {
                margin-bottom: 30px;
            }

            .hero-image {
                position: relative;
                width: 100%;
                height: 400px;
                margin-top: 30px;
            }

            .features {
                flex-direction: column;
                align-items: center;
                gap: 30px;
            }

            .brown-content {
                flex-direction: column;
                text-align: center;
            }

            .brown-image {
                width: 60%;
                margin-bottom: 30px;
            }

            .brown-text {
                width: 100%;
            }

            .btn-group {
                justify-content: center;
            }

            .products-grid {
                grid-template-columns: repeat(2, 1fr);
            }

            .contact-container {
                flex-direction: column;
            }

            .notification-popup {
                width: 90%;
                right: 5%;
                left: 5%;
            }
        }

        @media (max-width: 576px) {
            .nav-links {
                display: none;
            }

            .products-grid {
                grid-template-columns: 1fr;
            }
        }
    </style>
</head>

<body>
    <!-- Header -->
    <header>
        <div class="container">
            <div class="navbar">
                <a href="#"><img
                        src="https://hebbkx1anhila5yf.public.blob.vercel-storage.com/Logo-UPegvOgo8yj5yiZW66XFLxccXivP68.png"
                        alt="Amanda Bakery Logo" class="logo"></a>
                <div class="nav-links">
                    <a href="#home" class="active">Home</a>
                    <a href="#about">About</a>
                    <a href="#products">Product</a>
                    <a href="#location">Location</a>
                    <a href="#contact">Contact us</a>
                    <a href="{{ route('pages.invoices') }}">Invoices</a> <!-- Updated to use the invoices route -->
                </div>
                <div class="nav-icons">
                    <i class="fas fa-truck"></i> <!-- Changed from globe to delivery truck -->
                    <a href="{{ route('payment') }}">
                        <i class="fas fa-shopping-cart"></i> 
                    </a>
                    <div class="bell-icon">
                        <i class="fas fa-bell" id="notificationBell"></i>
                        <span class="notification-badge">5</span>
                    </div>
                    <a href="{{ route('profile') }}">
                        <i class="fas fa-user"></i> 
                    </a>
                </div>
            </div>
        </div>
    </header>

    <!-- Notification Popup -->
    <div class="notification-popup" id="notificationPopup">
        <div class="notification-header">
            <h3>Notification <span>(5)</span></h3>
            <div class="notification-close" id="closeNotification">&times;</div>
        </div>
        <div class="notification-list">
            <div class="notification-item">
                <div class="notification-avatar"></div>
                <div class="notification-content">
                    <p class="notification-text">Your delivery will be arriving soon! check out for the details and estimated time <a href="#" class="notification-link">here</a></p>
                </div>
                <div class="notification-time">12:00 AM</div>
            </div>
            <div class="notification-item">
                <div class="notification-avatar"></div>
                <div class="notification-content">
                    <p class="notification-text">A recent sign-in activity to your account <a href="#" class="notification-link">check if its not you</a></p>
                </div>
                <div class="notification-time">12:00 AM</div>
            </div>
            <div class="notification-item">
                <div class="notification-avatar"></div>
                <div class="notification-content">
                    <p class="notification-text">Your delivery will be arriving soon! check out for the details and estimated time <a href="#" class="notification-link">here</a></p>
                </div>
                <div class="notification-time">12:00 AM</div>
            </div>
            <div class="notification-item">
                <div class="notification-avatar"></div>
                <div class="notification-content">
                    <p class="notification-text">Your delivery will be arriving soon! check out for the details and estimated time <a href="#" class="notification-link">here</a></p>
                </div>
                <div class="notification-time">12:00 AM</div>
            </div>
            <div class="notification-item">
                <div class="notification-avatar"></div>
                <div class="notification-content">
                    <p class="notification-text">Your delivery will be arriving soon! check out for the details and estimated time <a href="#" class="notification-link">here</a></p>
                </div>
                <div class="notification-time">12:00 AM</div>
            </div>
        </div>
    </div>

    <!-- Hero Section -->
    <section class="hero" id="home">
        <div class="container" style="display: flex; align-items: center; justify-content: space-between;">
            <div class="hero-content">
                <h1 class="hero-title">Baked with<br>Love & Heart</h1>
                <p class="hero-text">Lorem ipsum dolor sit amet consectetur. Magna ultrices scelerisque eget non non
                    facilisi nibh amet.</p>
                <a href="#" class="btn btn-primary">Learn more <i class="fas fa-arrow-right"
                        style="margin-left: 10px;"></i></a>

                <div class="features">
                    <div class="feature">
                        <div class="feature-icon"></div>
                        <h3 class="feature-title">Best Ingredients</h3>
                        <p class="feature-text">Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
                    </div>
                    <div class="feature">
                        <div class="feature-icon"></div>
                        <h3 class="feature-title">Fast Shipping</h3>
                        <p class="feature-text">Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
                    </div>
                    <div class="feature">
                        <div class="feature-icon"></div>
                        <h3 class="feature-title">Best in town</h3>
                        <p class="feature-text">Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="hero-image">
            <img src="https://hebbkx1anhila5yf.public.blob.vercel-storage.com/Bread-slwohN68kTYoA7gioACcDqko0UZaKn.png"
                alt="Fresh Bread">
        </div>
    </section>

    <!-- Wave Top -->
    <div class="wave-top"></div>

    <!-- Brown Section (About) -->
    <section class="brown-section" id="about">
        <div class="container">
            <div class="brown-content">
                <div class="brown-image">
                    <img src="https://hebbkx1anhila5yf.public.blob.vercel-storage.com/Bread%20Unique-vwpXM8L6jz0Zf78eefNSWJCIHkeD69.png"
                        alt="Unique Bread">
                </div>
                <div class="brown-text">
                    <div class="section-badge">Our Best Seller</div>
                    <h2 class="section-title">Unique & Oriented taste</h2>
                    <p class="section-description">Lorem ipsum dolor sit amet consectetur. Praesebue ultrices velit nisi
                        nulla in amet. Tellus consequat ipsum felis brit dapibus volutpat at eleifend turpis.</p>
                    <div class="btn-group">
                        <a href="#" class="btn btn-primary">Shop Now</a>
                        <a href="#" class="btn btn-outline">Learn More</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Wave Bottom -->
    <div class="wave-bottom"></div>

    <!-- Products Section -->
    <section class="products-section" id="products">
        <div class="container">
            <div class="section-header">
                <div class="section-badge">Our products</div>
                <h2 class="section-title">Unique & Oriented taste</h2>
            </div>

            <div class="filter-buttons">
                <button class="filter-btn active" data-filter="all">All</button>
                <button class="filter-btn" data-filter="pastry">Pastry</button>
                <button class="filter-btn" data-filter="brownies">Brownies</button>
                <button class="filter-btn" data-filter="cake">Cake</button>
                <button class="filter-btn" data-filter="bread">Bread</button>
            </div>

            <div class="search-container">
                <div class="search-box">
                    <i class="fas fa-search"></i>
                    <input type="text" placeholder="Search" id="searchInput">
                </div>
            </div>

            <div class="products-grid" id="productsGrid">
                <!-- Products will be dynamically generated here -->
            </div>

            <div class="view-more">
                <a href="#" class="btn">View more of our products! <i class="fas fa-arrow-right"
                        style="margin-left: 10px;"></i></a>
            </div>
        </div>
    </section>

    <!-- Contact Section -->
    <section class="contact-section" id="location">
        <div class="container">
            <div class="contact-container">
                <div class="map-container">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3956.408676308593!2d109.23679967476191!3d-7.419942092590498!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e655f000c13a2f9%3A0x84562247cc5984b1!2sArmanda%20Bakery!5e0!3m2!1sid!2sid!4v1742963496174!5m2!1sid!2sid" width="100%" height="100%" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
                <div class="contact-info" id="contact">
                    <div class="section-badge">Our Location</div>
                    <h2 class="section-title">Unique & Oriented taste</h2>
                    <p class="contact-address">
                        Jl. Siliwangi 35, Slippen, Purwanggan,<br>
                        Kec. Purwakarta Utara, Kabupaten Banyumas,<br>
                        Jawa Tengah 53116
                    </p>
                    <div class="btn-group">
                        <a href="#" class="btn btn-primary">Contact us</a>
                        <a href="https://www.google.com/maps/place/Armanda+Bakery/@-7.4199421,109.2367997,17z/data=!3m1!4b1!4m6!3m5!1s0x2e655f000c13a2f9:0x84562247cc5984b1!8m2!3d-7.4199421!4d109.2393746!16s%2Fg%2F11x230_2m1!5m1!1e2?entry=ttu&g_ep=EgoyMDI1MDMyMy4wIKXMDSoASAFQAw%3D%3D" target="_blank" class="btn btn-outline"
                            style="color: #5e3e25; border-color: #5e3e25;">Visit us on maps</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer class="footer">
        <div class="footer-wave"></div>
        <div class="container">
            <div class="footer-container">
                <div class="social-icons">
                    <a href="#" class="social-icon"><i class="fab fa-facebook-f"></i></a>
                    <a href="#" class="social-icon"><i class="fab fa-twitter"></i></a>
                    <a href="#" class="social-icon"><i class="fab fa-instagram"></i></a>
                </div>
                <div class="footer-links">
                    <a href="#home">Home</a>
                    <a href="#about">About</a>
                    <a href="#products">Product</a>
                    <a href="#location">Location</a>
                    <a href="#contact">Contact</a>
                    <a href="invoice.html">Invoices</a>
                </div>
                <p class="copyright">Copyright © 2024 Amanda Bakery. All right reserved</p>
            </div>
        </div>
    </footer>

    <script>
        // Product data
        const products = [{
                id: 1,
                name: "Sugarcoat Babka",
                description: "Lorem ipsum dolor sit amet",
                price: 8.0,
                image: "https://hebbkx1anhila5yf.public.blob.vercel-storage.com/Bread%20Product-wkmDbqLKMjwtlU42eRLQns6XpVejoq.png",
                category: "bread"
            },
            {
                id: 2,
                name: "Chocolate Bread",
                description: "Lorem ipsum dolor sit amet",
                price: 8.0,
                image: "https://hebbkx1anhila5yf.public.blob.vercel-storage.com/Bread%20Product-wkmDbqLKMjwtlU42eRLQns6XpVejoq.png",
                category: "bread"
            },
            {
                id: 3,
                name: "Baked Garlic Bread",
                description: "Lorem ipsum dolor sit amet",
                price: 8.0,
                image: "https://hebbkx1anhila5yf.public.blob.vercel-storage.com/Bread%20Product-wkmDbqLKMjwtlU42eRLQns6XpVejoq.png",
                category: "bread"
            },
            {
                id: 4,
                name: "Chocolate Croissant",
                description: "Lorem ipsum dolor sit amet",
                price: 8.0,
                image: "https://hebbkx1anhila5yf.public.blob.vercel-storage.com/Bread%20Product-wkmDbqLKMjwtlU42eRLQns6XpVejoq.png",
                category: "pastry"
            },
            {
                id: 5,
                name: "Sugarcoat Babka",
                description: "Lorem ipsum dolor sit amet",
                price: 8.0,
                image: "https://hebbkx1anhila5yf.public.blob.vercel-storage.com/Bread%20Product-wkmDbqLKMjwtlU42eRLQns6XpVejoq.png",
                category: "bread"
            },
            {
                id: 6,
                name: "Chocolate Bread",
                description: "Lorem ipsum dolor sit amet",
                price: 8.0,
                image: "https://hebbkx1anhila5yf.public.blob.vercel-storage.com/Bread%20Product-wkmDbqLKMjwtlU42eRLQns6XpVejoq.png",
                category: "bread"
            },
            {
                id: 7,
                name: "Baked Garlic Bread",
                description: "Lorem ipsum dolor sit amet",
                price: 8.0,
                image: "https://hebbkx1anhila5yf.public.blob.vercel-storage.com/Bread%20Product-wkmDbqLKMjwtlU42eRLQns6XpVejoq.png",
                category: "bread"
            },
            {
                id: 8,
                name: "Chocolate Croissant",
                description: "Lorem ipsum dolor sit amet",
                price: 8.0,
                image: "https://hebbkx1anhila5yf.public.blob.vercel-storage.com/Bread%20Product-wkmDbqLKMjwtlU42eRLQns6XpVejoq.png",
                category: "pastry"
            }
        ];

        // Function to render products
        function renderProducts(productsToRender) {
            const productsGrid = document.getElementById('productsGrid');
            productsGrid.innerHTML = '';

            productsToRender.forEach(product => {
                const productCard = document.createElement('div');
                productCard.className = 'product-card';
                productCard.innerHTML = `
                    <div class="product-image">
                        <img src="${product.image}" alt="${product.name}">
                    </div>
                    <h3 class="product-title">${product.name}</h3>
                    <p class="product-description">${product.description}</p>
                    <p class="product-price">$${product.price.toFixed(1)}</p>
                    <a href="#" class="btn btn-outline-brown btn-sm">Check out</a>
                `;
                productsGrid.appendChild(productCard);
            });
        }

        // Initial render
        renderProducts(products);

        // Filter functionality
        const filterButtons = document.querySelectorAll('.filter-btn');
        filterButtons.forEach(button => {
            button.addEventListener('click', () => {
                // Update active button
                filterButtons.forEach(btn => btn.classList.remove('active'));
                button.classList.add('active');

                const filter = button.getAttribute('data-filter');

                // Filter products
                let filteredProducts;
                if (filter === 'all') {
                    filteredProducts = products;
                } else {
                    filteredProducts = products.filter(product => product.category === filter);
                }

                // Apply search filter if there's text in the search input
                const searchText = document.getElementById('searchInput').value.toLowerCase();
                if (searchText) {
                    filteredProducts = filteredProducts.filter(product =>
                        product.name.toLowerCase().includes(searchText) ||
                        product.description.toLowerCase().includes(searchText)
                    );
                }

                renderProducts(filteredProducts);
            });
        });

        // Search functionality
        const searchInput = document.getElementById('searchInput');
        searchInput.addEventListener('input', () => {
            const searchText = searchInput.value.toLowerCase();
            const activeFilter = document.querySelector('.filter-btn.active').getAttribute('data-filter');

            let filteredProducts;
            if (activeFilter === 'all') {
                filteredProducts = products;
            } else {
                filteredProducts = products.filter(product => product.category === activeFilter);
            }

            if (searchText) {
                filteredProducts = filteredProducts.filter(product =>
                    product.name.toLowerCase().includes(searchText) ||
                    product.description.toLowerCase().includes(searchText)
                );
            }

            renderProducts(filteredProducts);
        });

        // Add icons to feature circles
        const featureIcons = document.querySelectorAll('.feature-icon');
        const iconClasses = ['fas fa-leaf', 'fas fa-shipping-fast', 'fas fa-award'];

        featureIcons.forEach((icon, index) => {
            const i = document.createElement('i');
            i.className = iconClasses[index];
            i.style.fontSize = '24px';
            i.style.color = '#5e3e25';
            icon.appendChild(i);
        });

        // Notification popup functionality
        const notificationBell = document.getElementById('notificationBell');
        const notificationPopup = document.getElementById('notificationPopup');
        const closeNotification = document.getElementById('closeNotification');

        notificationBell.addEventListener('click', function() {
            if (notificationPopup.style.display === 'block') {
                notificationPopup.style.display = 'none';
            } else {
                notificationPopup.style.display = 'block';
            }
        });

        closeNotification.addEventListener('click', function() {
            notificationPopup.style.display = 'none';
        });

        // Close popup when clicking outside
        document.addEventListener('click', function(event) {
            if (!notificationBell.contains(event.target) && 
                !notificationPopup.contains(event.target)) {
                notificationPopup.style.display = 'none';
            }
        });

        // Smooth scrolling for navigation links
        document.querySelectorAll('a[href^="#"]').forEach(anchor => {
            anchor.addEventListener('click', function(e) {
                e.preventDefault();
                
                const targetId = this.getAttribute('href');
                if (targetId === '#') return;
                
                const targetElement = document.querySelector(targetId);
                if (targetElement) {
                    window.scrollTo({
                        top: targetElement.offsetTop - 80, // Adjust for header height
                        behavior: 'smooth'
                    });
                }
            });
        });
    </script>
</body>

</html>