<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Invoices - Amanda Bakery</title>
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

        /* Invoice Page Styles */
        .page-title {
            margin: 40px 0 20px;
            font-family: 'Playfair Display', serif;
            color: #5e3e25;
        }

        .page-title h1 {
            font-size: 36px;
            font-weight: 700;
        }

        .page-title span {
            color: #888;
            font-size: 16px;
            font-weight: normal;
            margin-left: 10px;
        }

        .invoice-cards {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(300px, 1fr));
            gap: 30px;
            margin-bottom: 50px;
        }

        .invoice-card {
            background-color: #fff;
            border-radius: 10px;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.05);
            overflow: hidden;
        }

        .invoice-header {
            padding: 20px;
            border-bottom: 1px solid #f0f0f0;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .shipping-id {
            display: flex;
            align-items: center;
        }

        .shipping-id i {
            color: #5e3e25;
            margin-right: 10px;
            font-size: 20px;
        }

        .id-details h3 {
            font-size: 14px;
            color: #888;
            margin-bottom: 5px;
        }

        .id-details p {
            font-weight: 600;
            color: #5e3e25;
        }

        .status {
            padding: 6px 12px;
            border-radius: 20px;
            font-size: 12px;
            font-weight: 500;
        }

        .status-delivered {
            background-color: #efffe4;
            color: #4a9c13;
        }

        .status-canceled {
            background-color: #ffeaea;
            color: #9c1315;
        }

        .invoice-details {
            padding: 20px;
            position: relative;
        }

        .details-header {
            display: flex;
            justify-content: space-between;
            margin-bottom: 20px;
        }

        .details-title {
            font-weight: 600;
            color: #5e3e25;
        }

        .details-menu {
            color: #888;
            cursor: pointer;
        }

        .buyer-details {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            margin-bottom: 20px;
        }

        .detail-group h4 {
            font-size: 12px;
            color: #888;
            margin-bottom: 5px;
        }

        .detail-group p {
            font-size: 14px;
            color: #5e3e25;
        }

        .invoice-items {
            margin-bottom: 20px;
        }

        .invoice-items h3 {
            font-size: 14px;
            color: #5e3e25;
            margin-bottom: 15px;
        }

        .item {
            display: flex;
            align-items: center;
            margin-bottom: 10px;
        }

        .item-image {
            width: 30px;
            height: 30px;
            margin-right: 10px;
        }

        .item-name {
            flex-grow: 1;
            font-size: 14px;
            color: #5e3e25;
        }

        .item-quantity {
            font-size: 14px;
            color: #5e3e25;
            font-weight: 500;
        }

        .invoice-summary {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            margin-bottom: 20px;
        }

        .summary-item h4 {
            font-size: 12px;
            color: #888;
            margin-bottom: 5px;
        }

        .summary-item p {
            font-size: 14px;
            color: #5e3e25;
        }

        .invoice-total {
            display: flex;
            justify-content: space-between;
            margin-bottom: 20px;
        }

        .total-label {
            font-size: 14px;
            color: #5e3e25;
            font-weight: 600;
        }

        .total-amount {
            font-size: 14px;
            color: #5e3e25;
            font-weight: 600;
        }

        .purchase-by {
            display: flex;
            justify-content: space-between;
            margin-bottom: 20px;
        }

        .purchase-label {
            font-size: 14px;
            color: #5e3e25;
        }

        .purchase-logo {
            width: 60px;
        }

        .invoice-action {
            width: 100%;
            padding: 12px;
            border: none;
            background-color: #5e3e25;
            color: #fff;
            border-radius: 5px;
            font-family: 'Poppins', sans-serif;
            font-weight: 500;
            cursor: pointer;
            transition: all 0.3s ease;
        }

        .invoice-action:hover {
            background-color: #4a3219;
        }

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
            .invoice-cards {
                grid-template-columns: repeat(2, 1fr);
            }
        }

        @media (max-width: 768px) {
            .invoice-cards {
                grid-template-columns: 1fr;
            }

            .buyer-details {
                grid-template-columns: 1fr;
                gap: 10px;
            }

            .invoice-summary {
                grid-template-columns: 1fr;
                gap: 10px;
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
                    <a href="index.html#products">Product</a>
                    <a href="index.html#location">Location</a>
                    <a href="index.html#contact">Contact us</a>
                    <a href="invoice.html" class="active">Invoices</a>
                </div>
                <div class="nav-icons">
                    <i class="fas fa-globe"></i>
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

    <!-- Invoice Page Content -->
    <div class="container">
        <div class="page-title">
            <h1>Invoices <span>4 items</span></h1>
        </div>

        <div class="invoice-cards">
            <!-- Invoice Card 1 -->
            <div class="invoice-card">
                <div class="invoice-header">
                    <div class="shipping-id">
                        <i class="fas fa-truck"></i>
                        <div class="id-details">
                            <h3>Shipping ID</h3>
                            <p>#AJ2241009</p>
                        </div>
                    </div>
                    <div class="status status-delivered">Delivered</div>
                </div>
                <div class="invoice-details">
                    <div class="details-header">
                        <div class="details-title">Details</div>
                        <div class="details-menu"><i class="fas fa-ellipsis-v"></i></div>
                    </div>
                    <div class="buyer-details">
                        <div class="detail-group">
                            <h4>Buyer</h4>
                            <p>Ariiq Ammar</p>
                        </div>
                        <div class="detail-group">
                            <h4>Address</h4>
                            <p>Jl. Raya baturraden 221</p>
                        </div>
                        <div class="detail-group">
                            <h4>Method</h4>
                            <p>Delivery</p>
                        </div>
                    </div>
                    <div class="invoice-items">
                        <h3>Items</h3>
                        <div class="item">
                            <img src="https://hebbkx1anhila5yf.public.blob.vercel-storage.com/Bread%20Product-wkmDbqLKMjwtlU42eRLQns6XpVejoq.png" alt="Sugarcoat Babka" class="item-image">
                            <div class="item-name">Sugarcoat Babka</div>
                            <div class="item-quantity">2</div>
                        </div>
                        <div class="item">
                            <img src="https://hebbkx1anhila5yf.public.blob.vercel-storage.com/Bread%20Product-wkmDbqLKMjwtlU42eRLQns6XpVejoq.png" alt="Birthday cake" class="item-image">
                            <div class="item-name">Birthday cake</div>
                            <div class="item-quantity">1</div>
                        </div>
                    </div>
                    <div class="invoice-summary">
                        <div class="summary-item">
                            <h4>Subtotal (3 items)</h4>
                            <p>$8.00</p>
                        </div>
                        <div class="summary-item">
                            <h4>Delivery</h4>
                            <p>Free</p>
                        </div>
                    </div>
                    <div class="invoice-total">
                        <div class="total-label">Total</div>
                        <div class="total-amount">$8.00</div>
                    </div>
                    <div class="purchase-by">
                        <div class="purchase-label">Purchase by</div>
                        <img src="https://hebbkx1anhila5yf.public.blob.vercel-storage.com/qris-logo.png" alt="QRIS" class="purchase-logo">
                    </div>
                    <button class="invoice-action">Track package</button>
                </div>
            </div>

            <!-- Invoice Card 2 -->
            <div class="invoice-card">
                <div class="invoice-header">
                    <div class="shipping-id">
                        <i class="fas fa-truck"></i>
                        <div class="id-details">
                            <h3>Shipping ID</h3>
                            <p>#AJ2241009</p>
                        </div>
                    </div>
                    <div class="status status-canceled">Canceled</div>
                </div>
                <div class="invoice-details">
                    <div class="details-header">
                        <div class="details-title">Details</div>
                        <div class="details-menu"><i class="fas fa-ellipsis-v"></i></div>
                    </div>
                    <div class="buyer-details">
                        <div class="detail-group">
                            <h4>Buyer</h4>
                            <p>Ariiq Ammar</p>
                        </div>
                        <div class="detail-group">
                            <h4>Address</h4>
                            <p>Jl. Raya baturraden 221</p>
                        </div>
                        <div class="detail-group">
                            <h4>Method</h4>
                            <p>Pick up</p>
                        </div>
                    </div>
                    <div class="invoice-items">
                        <h3>Items</h3>
                        <div class="item">
                            <img src="https://hebbkx1anhila5yf.public.blob.vercel-storage.com/Bread%20Product-wkmDbqLKMjwtlU42eRLQns6XpVejoq.png" alt="Sugarcoat Babka" class="item-image">
                            <div class="item-name">Sugarcoat Babka</div>
                            <div class="item-quantity">2</div>
                        </div>
                        <div class="item">
                            <img src="https://hebbkx1anhila5yf.public.blob.vercel-storage.com/Bread%20Product-wkmDbqLKMjwtlU42eRLQns6XpVejoq.png" alt="Birthday cake" class="item-image">
                            <div class="item-name">Birthday cake</div>
                            <div class="item-quantity">1</div>
                        </div>
                    </div>
                    <div class="invoice-summary">
                        <div class="summary-item">
                            <h4>Subtotal (3 items)</h4>
                            <p>$8.00</p>
                        </div>
                        <div class="summary-item">
                            <h4>Delivery</h4>
                            <p>Free</p>
                        </div>
                    </div>
                    <div class="invoice-total">
                        <div class="total-label">Total</div>
                        <div class="total-amount">$8.00</div>
                    </div>
                    <div class="purchase-by">
                        <div class="purchase-label">Purchase by</div>
                        <img src="https://hebbkx1anhila5yf.public.blob.vercel-storage.com/qris-logo.png" alt="QRIS" class="purchase-logo">
                    </div>
                    <button class="invoice-action">See details</button>
                </div>
            </div>

            <!-- Invoice Card 3 -->
            <div class="invoice-card">
                <div class="invoice-header">
                    <div class="shipping-id">
                        <i class="fas fa-truck"></i>
                        <div class="id-details">
                            <h3>Shipping ID</h3>
                            <p>#AJ2241009</p>
                        </div>
                    </div>
                    <div class="status status-delivered">Delivered</div>
                </div>
                <div class="invoice-details">
                    <div class="details-header">
                        <div class="details-title">Details</div>
                        <div class="details-menu"><i class="fas fa-ellipsis-v"></i></div>
                    </div>
                    <div class="buyer-details">
                        <div class="detail-group">
                            <h4>Buyer</h4>
                            <p>Ariiq Ammar</p>
                        </div>
                        <div class="detail-group">
                            <h4>Address</h4>
                            <p>Jl. Raya baturraden 221</p>
                        </div>
                        <div class="detail-group">
                            <h4>Method</h4>
                            <p>Delivery</p>
                        </div>
                    </div>
                    <div class="invoice-items">
                        <h3>Items</h3>
                        <div class="item">
                            <img src="https://hebbkx1anhila5yf.public.blob.vercel-storage.com/Bread%20Product-wkmDbqLKMjwtlU42eRLQns6XpVejoq.png" alt="Sugarcoat Babka" class="item-image">
                            <div class="item-name">Sugarcoat Babka</div>
                            <div class="item-quantity">2</div>
                        </div>
                        <div class="item">
                            <img src="https://hebbkx1anhila5yf.public.blob.vercel-storage.com/Bread%20Product-wkmDbqLKMjwtlU42eRLQns6XpVejoq.png" alt="Birthday cake" class="item-image">
                            <div class="item-name">Birthday cake</div>
                            <div class="item-quantity">1</div>
                        </div>
                    </div>
                    <div class="invoice-summary">
                        <div class="summary-item">
                            <h4>Subtotal (3 items)</h4>
                            <p>$8.00</p>
                        </div>
                        <div class="summary-item">
                            <h4>Delivery</h4>
                            <p>Free</p>
                        </div>
                    </div>
                    <div class="invoice-total">
                        <div class="total-label">Total</div>
                        <div class="total-amount">$8.00</div>
                    </div>
                    <div class="purchase-by">
                        <div class="purchase-label">Purchase by</div>
                        <img src="https://hebbkx1anhila5yf.public.blob.vercel-storage.com/qris-logo.png" alt="QRIS" class="purchase-logo">
                    </div>
                    <button class="invoice-action">Track package</button>
                </div>
            </div>

            <!-- Invoice Card 4 -->
            <div class="invoice-card">
                <div class="invoice-header">
                    <div class="shipping-id">
                        <i class="fas fa-truck"></i>
                        <div class="id-details">
                            <h3>Shipping ID</h3>
                            <p>#AJ2241009</p>
                        </div>
                    </div>
                    <div class="status status-delivered">Delivered</div>
                </div>
                <div class="invoice-details">
                    <div class="details-header">
                        <div class="details-title">Details</div>
                        <div class="details-menu"><i class="fas fa-ellipsis-v"></i></div>
                    </div>
                    <div class="buyer-details">
                        <div class="detail-group">
                            <h4>Buyer</h4>
                            <p>Ariiq Ammar</p>
                        </div>
                        <div class="detail-group">
                            <h4>Address</h4>
                            <p>Jl. Raya baturraden 221</p>
                        </div>
                        <div class="detail-group">
                            <h4>Method</h4>
                            <p>Delivery</p>
                        </div>
                    </div>
                    <div class="invoice-items">
                        <h3>Items</h3>
                        <div class="item">
                            <img src="https://hebbkx1anhila5yf.public.blob.vercel-storage.com/Bread%20Product-wkmDbqLKMjwtlU42eRLQns6XpVejoq.png" alt="Sugarcoat Babka" class="item-image">
                            <div class="item-name">Sugarcoat Babka</div>
                            <div class="item-quantity">2</div>
                        </div>
                        <div class="item">
                            <img src="https://hebbkx1anhila5yf.public.blob.vercel-storage.com/Bread%20Product-wkmDbqLKMjwtlU42eRLQns6XpVejoq.png" alt="Birthday cake" class="item-image">
                            <div class="item-name">Birthday cake</div>
                            <div class="item-quantity">1</div>
                        </div>
                    </div>
                    <div class="invoice-summary">
                        <div class="summary-item">
                            <h4>Subtotal (3 items)</h4>
                            <p>$8.00</p>
                        </div>
                        <div class="summary-item">
                            <h4>Delivery</h4>
                            <p>Free</p>
                        </div>
                    </div>
                    <div class="invoice-total">
                        <div class="total-label">Total</div>
                        <div class="total-amount">$8.00</div>
                    </div>
                    <div class="purchase-by">
                        <div class="purchase-label">Purchase by</div>
                        <img src="https://hebbkx1anhila5yf.public.blob.vercel-storage.com/qris-logo.png" alt="QRIS" class="purchase-logo">
                    </div>
                    <button class="invoice-action">Track package</button>
                </div>
            </div>
        </div>

        <div class="pagination">
            <div class="pagination-arrow">
                <i class="fas fa-chevron-left"></i>
            </div>
            <div class="pagination-dots">
                <div class="dot"></div>
                <div class="dot active"></div>
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
    <div class="footer-wave-container">
        <div class="footer-wave"></div>
    </div>
    <footer class="footer">
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
                    <a href="index.html#products">Product</a>
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