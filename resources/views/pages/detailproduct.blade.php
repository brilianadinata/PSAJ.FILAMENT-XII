<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sugarcoat Babka - Amanda Bakery</title>
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

        /* Product Detail Section */
        .product-detail {
            padding: 50px 0;
            display: flex;
            gap: 50px;
        }

        .product-image {
            flex: 1;
            max-width: 500px;
        }

        .product-image img {
            width: 100%;
            height: auto;
            object-fit: contain;
        }

        .product-info {
            flex: 1;
        }

        .product-header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 20px;
        }

        .product-title {
            font-family: 'Playfair Display', serif;
            font-size: 36px;
            font-weight: 700;
            color: #5e3e25;
        }

        .product-actions {
            display: flex;
            gap: 15px;
        }

        .product-actions i {
            font-size: 20px;
            cursor: pointer;
        }

        .color-options {
            display: flex;
            gap: 10px;
            margin-bottom: 15px;
        }

        .color-option {
            width: 20px;
            height: 20px;
            border-radius: 50%;
            cursor: pointer;
        }

        .reviews {
            display: flex;
            align-items: center;
            gap: 15px;
            margin-bottom: 20px;
        }

        .review-count {
            color: #8e98a8;
            font-size: 14px;
        }

        .stars {
            display: flex;
            color: #eebe7f;
        }

        .price-container {
            margin-bottom: 30px;
        }

        .current-price {
            font-size: 32px;
            font-weight: 700;
            color: #5e3e25;
        }

        .original-price {
            font-size: 16px;
            color: #8e98a8;
            text-decoration: line-through;
            margin-left: 10px;
        }

        .section-title {
            font-weight: 600;
            margin-bottom: 10px;
            font-size: 18px;
            color: #5e3e25;
        }

        .description {
            color: #666;
            line-height: 1.6;
            margin-bottom: 30px;
        }

        .material {
            color: #666;
            margin-bottom: 30px;
        }

        .btn-container {
            display: flex;
            gap: 15px;
        }

        .btn {
            display: inline-flex;
            align-items: center;
            justify-content: center;
            padding: 12px 25px;
            border-radius: 5px;
            font-weight: 500;
            cursor: pointer;
            transition: all 0.3s ease;
            font-size: 16px;
            min-width: 180px;
        }

        .btn-outline {
            border: 1px solid #5e3e25;
            background-color: transparent;
            color: #5e3e25;
        }

        .btn-outline:hover {
            background-color: #f5f5f5;
        }

        .btn-primary {
            background-color: #5e3e25;
            color: #fff;
            border: none;
        }

        .btn-primary:hover {
            background-color: #4a3118;
        }

        /* Related Products Section */
        .related-products {
            padding: 50px 0;
            position: relative;
        }

        .section-heading {
            font-family: 'Playfair Display', serif;
            font-size: 28px;
            font-weight: 700;
            color: #5e3e25;
            margin-bottom: 30px;
        }

        .products-carousel {
            display: flex;
            gap: 20px;
            overflow-x: hidden;
            position: relative;
            padding: 10px 0;
        }

        .product-card {
            flex: 0 0 calc(25% - 15px);
            text-align: center;
            padding: 15px;
            transition: all 0.3s ease;
        }

        .card-image {
            width: 100%;
            height: 150px;
            margin-bottom: 15px;
        }

        .card-image img {
            width: 100%;
            height: 100%;
            object-fit: contain;
        }

        .card-title {
            font-weight: 600;
            margin-bottom: 5px;
            color: #5e3e25;
            font-size: 16px;
        }

        .card-description {
            color: #666;
            font-size: 12px;
            margin-bottom: 10px;
            line-height: 1.4;
        }

        .card-price {
            font-weight: 600;
            margin-bottom: 15px;
            color: #5e3e25;
        }

        .btn-sm {
            padding: 6px 15px;
            font-size: 12px;
            border-radius: 20px;
            min-width: auto;
        }

        .carousel-nav {
            position: absolute;
            top: 50%;
            transform: translateY(-50%);
            width: 40px;
            height: 40px;
            background-color: #fff;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            cursor: pointer;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
            z-index: 10;
        }

        .carousel-prev {
            left: -20px;
        }

        .carousel-next {
            right: -20px;
        }

        /* Footer */
        .footer {
            background-color: #5e3e25;
            color: #fff;
            padding: 40px 0 20px;
            position: relative;
            margin-top: 50px;
        }

        .footer-wave {
            width: 100%;
            height: 100px;
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

        /* Responsive Design */
        @media (max-width: 992px) {
            .product-detail {
                flex-direction: column;
                align-items: center;
            }

            .product-image {
                max-width: 100%;
            }

            .product-card {
                flex: 0 0 calc(33.33% - 15px);
            }
        }

        @media (max-width: 768px) {
            .product-card {
                flex: 0 0 calc(50% - 15px);
            }

            .btn-container {
                flex-direction: column;
            }
        }

        @media (max-width: 576px) {
            .nav-links {
                display: none;
            }

            .product-card {
                flex: 0 0 100%;
            }
        }
    </style>
</head>

<body>
    <!-- Header -->
    <header>
        <div class="container">
            <div class="navbar">
                <a href="index.html"><img
                        src="https://hebbkx1anhila5yf.public.blob.vercel-storage.com/Logo-UPegvOgo8yj5yiZW66XFLxccXivP68.png"
                        alt="Amanda Bakery Logo" class="logo"></a>
                <div class="nav-links">
                    <a href="index.html">Home</a>
                    <a href="#">About</a>
                    <a href="#" class="active">Product</a>
                    <a href="#">Location</a>
                    <a href="#">Contact us</a>
                </div>
                <div class="nav-icons">
                    <i class="fas fa-truck"></i>
                    <a href="/payment" class="fas fa-shopping-cart">
                        <i class="fas fa-shopping-cart"></i>
                    </a>
                    <i class="fas fa-bell"></i>
                    <i class="fas fa-user"></i>
                </div>
            </div>
        </div>
    </header>

    <!-- Product Detail Section -->
    <section class="container">
        <div class="product-detail">
            <div class="product-image">
                <img src="https://hebbkx1anhila5yf.public.blob.vercel-storage.com/Bread%20Product-wkmDbqLKMjwtlU42eRLQns6XpVejoq.png"
                    alt="Sugarcoat Babka">
            </div>
            <div class="product-info">
                <div class="product-header">
                    <h1 class="product-title">Sugarcoat Babka</h1>
                    <div class="product-actions">
                        <i class="fas fa-shopping-cart"></i>
                        <i class="far fa-bookmark"></i>
                    </div>
                </div>

                <div class="color-options">
                    <div class="color-option" style="background-color: #eebe7f;"></div>
                    <div class="color-option" style="background-color: #8e98a8;"></div>
                    <div class="color-option" style="background-color: #5e3e25;"></div>
                </div>

                <div class="reviews">
                    <span class="review-count">12+ Reviews</span>
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star-half-alt"></i>
                    </div>
                </div>

                <div class="price-container">
                    <span class="current-price">$8.0</span>
                    <span class="original-price">$12.0</span>
                </div>

                <h3 class="section-title">Description</h3>
                <p class="description">
                    Lorem ipsum dolor sit amet consectetur. Nulla maecenas eleifend pellentesque ullamcorper eget ac
                    viverra interdum. Proin lorem venenatis semper odio ipsum. Vulputate turpis mi arcu enim varius
                    cursus massa. Arcu enim eros natoque consequat consectetur.
                </p>

                <h3 class="section-title">Material</h3>
                <p class="material">Wheat 175 gr</p>

                <div class="btn-container">
                    <a href="#" class="btn btn-outline">Add to cart</a>
                    <a href="#" class="btn btn-primary">Check out</a>
                </div>
            </div>
        </div>
    </section>

    <!-- Related Products Section -->
    <section class="container related-products">
        <h2 class="section-heading">Related product</h2>

        <div class="products-carousel">
            <div class="product-card">
                <div class="card-image">
                    <img src="https://hebbkx1anhila5yf.public.blob.vercel-storage.com/Bread%20Product-wkmDbqLKMjwtlU42eRLQns6XpVejoq.png"
                        alt="Sugarcoat Babka">
                </div>
                <h3 class="card-title">Sugarcoat Babka</h3>
                <p class="card-description">Lorem ipsum dolor sit amet.</p>
                <p class="card-price">$8.0</p>
                <a href="#" class="btn btn-outline btn-sm">Check out</a>
            </div>

            <div class="product-card">
                <div class="card-image">
                    <img src="https://hebbkx1anhila5yf.public.blob.vercel-storage.com/Bread%20Product-wkmDbqLKMjwtlU42eRLQns6XpVejoq.png"
                        alt="Chocolate Bread">
                </div>
                <h3 class="card-title">Chocolate Bread</h3>
                <p class="card-description">Lorem ipsum dolor sit amet.</p>
                <p class="card-price">$8.0</p>
                <a href="#" class="btn btn-outline btn-sm">Check out</a>
            </div>

            <div class="product-card">
                <div class="card-image">
                    <img src="https://hebbkx1anhila5yf.public.blob.vercel-storage.com/Bread%20Product-wkmDbqLKMjwtlU42eRLQns6XpVejoq.png"
                        alt="Baked Garlic Bread">
                </div>
                <h3 class="card-title">Baked Garlic Bread</h3>
                <p class="card-description">Lorem ipsum dolor sit amet.</p>
                <p class="card-price">$8.0</p>
                <a href="#" class="btn btn-outline btn-sm">Check out</a>
            </div>

            <div class="product-card">
                <div class="card-image">
                    <img src="https://hebbkx1anhila5yf.public.blob.vercel-storage.com/Bread%20Product-wkmDbqLKMjwtlU42eRLQns6XpVejoq.png"
                        alt="Chocolate Croissant">
                </div>
                <h3 class="card-title">Chocolate Croiss...</h3>
                <p class="card-description">Lorem ipsum dolor sit amet.</p>
                <p class="card-price">$8.0</p>
                <a href="#" class="btn btn-outline btn-sm">Check out</a>
            </div>

            <div class="carousel-nav carousel-prev">
                <i class="fas fa-chevron-left"></i>
            </div>
            <div class="carousel-nav carousel-next">
                <i class="fas fa-chevron-right"></i>
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
                    <a href="#" class="social-icon"><i class="fab fa-instagram"></i></a>
                    <a href="#" class="social-icon"><i class="fab fa-whatsapp"></i></a>
                </div>
                <div class="footer-links">
                    <a href="index.html">Home</a>
                    <a href="#">About</a>
                    <a href="#">Product</a>
                    <a href="#">Location</a>
                    <a href="#">Contact</a>
                    <a href="#">Return policy</a>
                </div>
                <p class="copyright">Copyright © 2025 Amanda Bakery. All right reserved</p>
            </div>
        </div>
    </footer>

    <script>
        // Carousel Navigation
        const prevBtn = document.querySelector('.carousel-prev');
        const nextBtn = document.querySelector('.carousel-next');
        const carousel = document.querySelector('.products-carousel');
        const cardWidth = document.querySelector('.product-card').offsetWidth + 20; // width + gap

        let scrollPosition = 0;

        nextBtn.addEventListener('click', () => {
            if (scrollPosition < carousel.scrollWidth - carousel.clientWidth) {
                scrollPosition += cardWidth;
                carousel.scrollTo({
                    left: scrollPosition,
                    behavior: 'smooth'
                });
            }
        });

        prevBtn.addEventListener('click', () => {
            if (scrollPosition > 0) {
                scrollPosition -= cardWidth;
                carousel.scrollTo({
                    left: scrollPosition,
                    behavior: 'smooth'
                });
            }
        });

        // Color Options
        const colorOptions = document.querySelectorAll('.color-option');

        colorOptions.forEach(option => {
            option.addEventListener('click', () => {
                colorOptions.forEach(opt => opt.style.border = 'none');
                option.style.border = '2px solid #5e3e25';
            });
        });

        // Set first color as selected by default
        colorOptions[0].style.border = '2px solid #5e3e25';
    </script>
</body>

</html>
