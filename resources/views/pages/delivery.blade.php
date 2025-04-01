<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Delivery Status - Amanda Bakery</title>
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

        /* Delivery Status Styles */
        .delivery-container {
            display: flex;
            margin: 40px 0;
            gap: 30px;
        }

        .delivery-info {
            flex: 1;
        }

        .delivery-title {
            font-family: 'Playfair Display', serif;
            font-size: 36px;
            font-weight: 700;
            color: #5e3e25;
            margin-bottom: 10px;
        }

        .delivery-subtitle {
            color: #888;
            font-size: 16px;
            margin-bottom: 30px;
        }

        .shipping-item {
            margin-bottom: 30px;
            padding: 20px;
            border-radius: 10px;
            background-color: #fff;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.05);
        }

        .shipping-header {
            display: flex;
            align-items: center;
            margin-bottom: 15px;
        }

        .shipping-icon {
            width: 40px;
            height: 40px;
            display: flex;
            align-items: center;
            justify-content: center;
            margin-right: 15px;
            color: #5e3e25;
            font-size: 20px;
        }

        .shipping-details h3 {
            font-size: 14px;
            color: #888;
            margin-bottom: 5px;
        }

        .shipping-details p {
            font-weight: 600;
            color: #5e3e25;
            font-size: 16px;
        }

        .shipping-status {
            margin-left: auto;
            padding: 6px 12px;
            border-radius: 20px;
            font-size: 12px;
            font-weight: 500;
        }

        .status-delivered {
            background-color: #efffe4;
            color: #4a9c13;
        }

        .status-transit {
            background-color: #ebf5ff;
            color: #008ceb;
        }

        .status-pending {
            background-color: #fff2e5;
            color: #ffa618;
        }

        .timeline {
            margin-top: 20px;
            padding-left: 20px;
        }

        .timeline-item {
            position: relative;
            padding-left: 30px;
            padding-bottom: 30px;
        }

        .timeline-item:last-child {
            padding-bottom: 0;
        }

        .timeline-item::before {
            content: '';
            position: absolute;
            left: 0;
            top: 0;
            width: 12px;
            height: 12px;
            border-radius: 50%;
            background-color: #5e3e25;
            z-index: 1;
        }

        .timeline-item::after {
            content: '';
            position: absolute;
            left: 5px;
            top: 12px;
            width: 2px;
            height: calc(100% - 12px);
            background-color: #ddd;
        }

        .timeline-item:last-child::after {
            display: none;
        }

        .timeline-date {
            font-weight: 600;
            color: #5e3e25;
            margin-bottom: 5px;
        }

        .timeline-time {
            color: #888;
            font-size: 12px;
            margin-bottom: 5px;
        }

        .timeline-location {
            color: #666;
            font-size: 14px;
        }

        .map-container {
            flex: 1;
            border-radius: 10px;
            overflow: hidden;
            height: 680px;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.05);
        }

        .map-container iframe {
            width: 100%;
            height: 100%;
            border: none;
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
            .delivery-container {
                flex-direction: column;
            }

            .map-container {
                height: 400px;
            }
        }

        @media (max-width: 768px) {
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

            .shipping-header {
                flex-direction: column;
                align-items: flex-start;
                gap: 10px;
            }

            .shipping-status {
                margin-left: 0;
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
                    <a href="products.html">Product</a>
                    <a href="index.html#location">Location</a>
                    <a href="index.html#contact">Contact us</a>
                    <a href="invoice.html">Invoices</a>
                </div>
                <div class="nav-icons">
                    <a href="delivery-status.html" class="active"><i class="fas fa-truck"></i></a>
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

    <!-- Delivery Status Content -->
    <div class="container">
        <div class="delivery-container">
            <div class="delivery-info">
                <h1 class="delivery-title">Your Delivery</h1>
                <p class="delivery-subtitle">3 shipment</p>

                <!-- Shipping Item 1 -->
                <div class="shipping-item">
                    <div class="shipping-header">
                        <div class="shipping-icon">
                            <i class="fas fa-truck"></i>
                        </div>
                        <div class="shipping-details">
                            <h3>Shipping ID</h3>
                            <p>#AJ2241009</p>
                        </div>
                        <div class="shipping-status status-delivered">Delivered</div>
                    </div>
                </div>

                <!-- Shipping Item 2 -->
                <div class="shipping-item">
                    <div class="shipping-header">
                        <div class="shipping-icon">
                            <i class="fas fa-truck"></i>
                        </div>
                        <div class="shipping-details">
                            <h3>Shipping ID</h3>
                            <p>#AB8871245</p>
                        </div>
                        <div class="shipping-status status-transit">Transit</div>
                    </div>

                    <div class="timeline">
                        <div class="timeline-item">
                            <div class="timeline-date">21 May 2025</div>
                            <div class="timeline-time">09:00 AM</div>
                            <div class="timeline-location">Pick up - Jl. Raya Baturraden</div>
                        </div>
                        <div class="timeline-item">
                            <div class="timeline-date">21 May 2025</div>
                            <div class="timeline-time">09:00 AM</div>
                            <div class="timeline-location">On the way - Jl. Raya Baturraden</div>
                        </div>
                        <div class="timeline-item">
                            <div class="timeline-date">21 May 2025</div>
                            <div class="timeline-time">09:00 AM</div>
                            <div class="timeline-location">Transit - Jl. Raya Baturraden</div>
                        </div>
                        <div class="timeline-item">
                            <div class="timeline-date">21 May 2025</div>
                            <div class="timeline-time">09:00 AM</div>
                            <div class="timeline-location">Pick up - Jl. Raya Baturraden</div>
                        </div>
                        <div class="timeline-item">
                            <div class="timeline-date">21 May 2025 est</div>
                            <div class="timeline-time">09:00 AM</div>
                            <div class="timeline-location">Delivered - Jl. Raya Baturraden</div>
                        </div>
                    </div>
                </div>

                <!-- Shipping Item 3 -->
                <div class="shipping-item">
                    <div class="shipping-header">
                        <div class="shipping-icon">
                            <i class="fas fa-truck"></i>
                        </div>
                        <div class="shipping-details">
                            <h3>Shipping ID</h3>
                            <p>#DG0911238</p>
                        </div>
                        <div class="shipping-status status-pending">Pending</div>
                    </div>
                </div>
            </div>

            <div class="map-container">
                <iframe id="google-map" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3956.408676308593!2d109.23679967476191!3d-7.419942092590498!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e655f000c13a2f9%3A0x84562247cc5984b1!2sArmanda%20Bakery!5e0!3m2!1sid!2sid!4v1742963496174!5m2!1sid!2sid" width="100%" height="100%" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
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