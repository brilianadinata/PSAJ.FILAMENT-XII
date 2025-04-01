<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Products - Amanda Bakery</title>
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

        /* Hero Banner */
        .hero-banner {
            width: 100%;
            height: 300px;
            position: relative;
            overflow: hidden;
            margin-bottom: 30px;
        }

        .hero-banner img {
            width: 100%;
            height: 100%;
            object-fit: cover;
        }

        /* Product Badge */
        .product-badge {
            display: inline-block;
            padding: 8px 15px;
            background-color: #eebe7f;
            color: #5e3e25;
            border-radius: 20px;
            font-size: 14px;
            font-weight: 500;
            margin: 30px 0 15px;
        }

        /* Product Title */
        .product-page-title {
            font-family: 'Playfair Display', serif;
            font-size: 36px;
            font-weight: 700;
            color: #5e3e25;
            margin-bottom: 30px;
            text-align: center;
        }

        /* Text Center */
        .text-center {
            text-align: center;
        }

        /* Category Section */
        .category-section {
            display: flex;
            justify-content: center;
            gap: 20px;
            margin-bottom: 40px;
            flex-wrap: wrap;
        }

        .category-item {
            text-align: center;
            width: 120px;
        }

        .category-image {
            width: 100px;
            height: 100px;
            border-radius: 50%;
            overflow: hidden;
            margin: 0 auto 10px;
        }

        .category-image img {
            width: 100%;
            height: 100%;
            object-fit: cover;
        }

        .category-name {
            font-weight: 600;
            color: #5e3e25;
            font-size: 14px;
        }

        /* Search and Filter */
        .search-filter {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 30px;
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

        .filter-sort {
            display: flex;
            gap: 15px;
        }

        .filter-btn, .sort-btn {
            display: flex;
            align-items: center;
            gap: 8px;
            padding: 8px 15px;
            border: 1px solid #ddd;
            border-radius: 5px;
            background-color: #fff;
            color: #5e3e25;
            font-family: 'Poppins', sans-serif;
            font-size: 14px;
            cursor: pointer;
        }

        /* Product Results */
        .result-info {
            margin-bottom: 20px;
            color: #666;
            font-size: 14px;
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

        /* Products Grid */
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

        /* Pagination */
        .pagination {
            display: flex;
            justify-content: center;
            align-items: center;
            margin-bottom: 50px;
        }

        .pagination-arrow {
            width: 40px;
            height: 40px;
            display: flex;
            align-items: center;
            justify-content: center;
            cursor: pointer;
            color: #5e3e25;
        }

        .pagination-dots {
            display: flex;
            gap: 10px;
            margin: 0 20px;
        }

        .dot {
            width: 10px;
            height: 10px;
            border-radius: 50%;
            background-color: #d9d9d9;
            cursor: pointer;
        }

        .dot.active {
            width: 30px;
            border-radius: 10px;
            background-color: #5e3e25;
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
            .products-grid {
                grid-template-columns: repeat(2, 1fr);
            }

            .search-filter {
                flex-direction: column;
                gap: 15px;
                align-items: flex-start;
            }

            .search-box {
                width: 100%;
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

            .category-section {
                gap: 10px;
            }

            .category-item {
                width: 80px;
            }

            .category-image {
                width: 70px;
                height: 70px;
            }

            .category-name {
                font-size: 12px;
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
                    <a href="index.html#about">About</a>
                    <a href="products.html" class="active">Product</a>
                    <a href="index.html#location">Location</a>
                    <a href="index.html#contact">Contact us</a>
                    <a href="invoice.html">Invoices</a>
                </div>
                <div class="nav-icons">
                    <a href="delivery-status.html"><i class="fas fa-truck"></i></a>
                    <i class="fas fa-shopping-cart"></i>
                    <div class="bell-icon">
                        <i class="fas fa-bell" id="notificationBell"></i>
                        <span class="notification-badge">5</span>
                    </div>
                    <i class="fas fa-user"></i>
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

    <!-- Hero Banner -->
    <div class="hero-banner">
        <img src="https://hebbkx1anhila5yf.public.blob.vercel-storage.com/Frame%201321314946-1n5eFpBPyjnAMhXlePKH2P24u2bFl6.png" alt="Bread Banner">
    </div>

    <!-- Product Content -->
    <div class="container">
        <div class="text-center">
            <div class="product-badge">Our product</div>
            <h1 class="product-page-title">We make our product with love</h1>
        </div>

        <!-- Categories -->
        <div class="category-section">
            <div class="category-item">
                <div class="category-image">
                    <img src="https://hebbkx1anhila5yf.public.blob.vercel-storage.com/Bread%20Product-wkmDbqLKMjwtlU42eRLQns6XpVejoq.png" alt="All Categories">
                </div>
                <div class="category-name">All categories</div>
            </div>
            <div class="category-item">
                <div class="category-image">
                    <img src="https://hebbkx1anhila5yf.public.blob.vercel-storage.com/Bread%20Product-wkmDbqLKMjwtlU42eRLQns6XpVejoq.png" alt="Breads">
                </div>
                <div class="category-name">Breads</div>
            </div>
            <div class="category-item">
                <div class="category-image">
                    <img src="https://hebbkx1anhila5yf.public.blob.vercel-storage.com/Bread%20Product-wkmDbqLKMjwtlU42eRLQns6XpVejoq.png" alt="Pastries">
                </div>
                <div class="category-name">Pastries</div>
            </div>
            <div class="category-item">
                <div class="category-image">
                    <img src="https://hebbkx1anhila5yf.public.blob.vercel-storage.com/Bread%20Product-wkmDbqLKMjwtlU42eRLQns6XpVejoq.png" alt="Cakes">
                </div>
                <div class="category-name">Cakes</div>
            </div>
            <div class="category-item">
                <div class="category-image">
                    <img src="https://hebbkx1anhila5yf.public.blob.vercel-storage.com/Bread%20Product-wkmDbqLKMjwtlU42eRLQns6XpVejoq.png" alt="Cookies">
                </div>
                <div class="category-name">Cookies</div>
            </div>
            <div class="category-item">
                <div class="category-image">
                    <img src="https://hebbkx1anhila5yf.public.blob.vercel-storage.com/Bread%20Product-wkmDbqLKMjwtlU42eRLQns6XpVejoq.png" alt="Brownies">
                </div>
                <div class="category-name">Brownies</div>
            </div>
        </div>

        <!-- Search and Filter -->
        <div class="search-filter">
            <div class="result-info">
                Showing 1 - 8 of 24 Result
            </div>
            <div class="search-box">
                <i class="fas fa-search"></i>
                <input type="text" placeholder="Search" id="productSearchInput">
            </div>
            <div class="filter-sort">
                <button class="filter-btn">
                    <i class="fas fa-filter"></i>
                    Filters
                </button>
                <button class="sort-btn">
                    <i class="fas fa-sort"></i>
                    Sort
                </button>
            </div>
        </div>

        <!-- Products Grid -->
        <div class="products-grid" id="allProductsGrid">
            <!-- Products will be dynamically generated here -->
        </div>

        <!-- Pagination -->
        <div class="pagination">
            <div class="pagination-arrow">
                <i class="fas fa-chevron-left"></i>
            </div>
            <div class="pagination-dots">
                <div class="dot active"></div>
                <div class="dot"></div>
                <div class="dot"></div>
                <div class="dot"></div>
                <div class="dot"></div>
            </div>
            <div class="pagination-arrow">
                <i class="fas fa-chevron-right"></i>
            </div>
        </div>
    </div>

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
                    <a href="index.html">Home</a>
                    <a href="index.html#about">About</a>
                    <a href="products.html">Product</a>
                    <a href="index.html#location">Location</a>
                    <a href="index.html#contact">Contact</a>
                    <a href="#">Return policy</a>
                </div>
                <p class="copyright">Copyright © 2025 Amanda Bakery. All right reserved</p>
            </div>
        </div>
    </footer>

    <script>
        // Product data
        const allProducts = [
            {
                id: 1,
                name: "Sugarcoat Babka",
                description: "A sweet, swirled delight for bread lovers",
                price: 8.0,
                image: "https://hebbkx1anhila5yf.public.blob.vercel-storage.com/Bread%20Product-wkmDbqLKMjwtlU42eRLQns6XpVejoq.png",
                category: "bread"
            },
            {
                id: 2,
                name: "Chocolate Bread",
                description: "Rich, chocolate-infused goodness",
                price: 8.0,
                image: "https://hebbkx1anhila5yf.public.blob.vercel-storage.com/Bread%20Product-wkmDbqLKMjwtlU42eRLQns6XpVejoq.png",
                category: "bread"
            },
            {
                id: 3,
                name: "Baked Garlic Bread",
                description: "Crispy on the outside, soft on the inside",
                price: 8.0,
                image: "https://hebbkx1anhila5yf.public.blob.vercel-storage.com/Bread%20Product-wkmDbqLKMjwtlU42eRLQns6XpVejoq.png",
                category: "bread"
            },
            {
                id: 4,
                name: "Chocolate Croissant",
                description: "A flaky pastry filled with decadent chocolate",
                price: 8.0,
                image: "https://hebbkx1anhila5yf.public.blob.vercel-storage.com/Bread%20Product-wkmDbqLKMjwtlU42eRLQns6XpVejoq.png",
                category: "pastry"
            },
            {
                id: 5,
                name: "Chocochips Cookie",
                description: "Crunchy, chocolatey, and irresistible",
                price: 8.0,
                image: "https://hebbkx1anhila5yf.public.blob.vercel-storage.com/Bread%20Product-wkmDbqLKMjwtlU42eRLQns6XpVejoq.png",
                category: "cookie"
            },
            {
                id: 6,
                name: "Birthday Cake",
                description: "A beautifully crafted cake for special occasions",
                price: 8.0,
                image: "https://hebbkx1anhila5yf.public.blob.vercel-storage.com/Bread%20Product-wkmDbqLKMjwtlU42eRLQns6XpVejoq.png",
                category: "cake"
            },
            {
                id: 7,
                name: "Sausage Bread",
                description: "A perfect blend of soft bread and savory sausage",
                price: 8.0,
                image: "https://hebbkx1anhila5yf.public.blob.vercel-storage.com/Bread%20Product-wkmDbqLKMjwtlU42eRLQns6XpVejoq.png",
                category: "bread"
            },
            {
                id: 8,
                name: "Wallnut Bread",
                description: "Nutty, wholesome, and perfectly baked",
                price: 8.0,
                image: "https://hebbkx1anhila5yf.public.blob.vercel-storage.com/Bread%20Product-wkmDbqLKMjwtlU42eRLQns6XpVejoq.png",
                category: "bread"
            }
        ];

        // Function to render products
        function renderAllProducts(productsToRender) {
            const productsGrid = document.getElementById('allProductsGrid');
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
        renderAllProducts(allProducts);

        // Search functionality
        const searchInput = document.getElementById('productSearchInput');
        searchInput.addEventListener('input', () => {
            const searchText = searchInput.value.toLowerCase();
            
            const filteredProducts = allProducts.filter(product =>
                product.name.toLowerCase().includes(searchText) ||
                product.description.toLowerCase().includes(searchText)
            );

            renderAllProducts(filteredProducts);
        });

        // Category filtering
        const categoryItems = document.querySelectorAll('.category-item');
        categoryItems.forEach((item, index) => {
            item.addEventListener('click', () => {
                // Reset all categories
                categoryItems.forEach(cat => {
                    cat.style.opacity = '0.7';
                });
                
                // Highlight selected category
                item.style.opacity = '1';
                
                let filteredProducts;
                
                // First item is "All categories"
                if (index === 0) {
                    filteredProducts = allProducts;
                } else {
                    // Map index to category
                    const categories = ['all', 'bread', 'pastry', 'cake', 'cookie', 'brownie'];
                    const selectedCategory = categories[index];
                    
                    filteredProducts = allProducts.filter(product => 
                        product.category.includes(selectedCategory)
                    );
                }
                
                renderAllProducts(filteredProducts);
            });
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
    </script>
</body>

</html>