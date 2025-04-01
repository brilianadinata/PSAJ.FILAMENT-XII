<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Cart - Amanda Bakery</title>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
<link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@400;500;600;700;800&family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
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
        border-bottom: 1px solid #f0f0f0;
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
        margin-left: 40px;
    }

    .nav-links a {
        font-size: 16px;
        font-weight: 500;
        position: relative;
        color: #5e3e25;
    }

    .nav-links a.active {
        color: #5e3e25;
        font-weight: 600;
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

    .nav-center {
        display: flex;
        align-items: center;
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

    /* Cart Section */
    .cart-section {
        padding: 50px 0;
        min-height: calc(100vh - 300px);
        background-color: #f9f9f9;
    }

    .cart-header {
        display: flex;
        justify-content: space-between;
        align-items: center;
        margin-bottom: 30px;
    }

    .cart-title {
        font-family: 'Playfair Display', serif;
        font-size: 32px;
        font-weight: 700;
        color: #5e3e25;
    }

    .cart-count {
        color: #8e98a8;
        font-family: 'Poppins', sans-serif;
        font-size: 16px;
        font-weight: normal;
        margin-left: 10px;
    }

    .remove-all {
        color: #5e3e25;
        display: flex;
        align-items: center;
        gap: 5px;
        cursor: pointer;
        background: none;
        border: none;
        font-family: 'Poppins', sans-serif;
        font-size: 14px;
    }

    .cart-content {
        display: grid;
        grid-template-columns: 2fr 1.5fr;
        gap: 30px;
    }

    /* Cart Items */
    .cart-items {
        background: #fff;
        border-radius: 10px;
        padding: 20px;
        box-shadow: 0 2px 10px rgba(0,0,0,0.05);
    }

    .cart-item {
        display: flex;
        align-items: center;
        padding: 20px 0;
        border-bottom: 1px solid #eee;
    }

    .item-checkbox {
        margin-right: 20px;
        width: 18px;
        height: 18px;
        cursor: pointer;
    }

    .item-image {
        width: 80px;
        height: 80px;
        object-fit: contain;
        margin-right: 20px;
    }

    .item-details {
        flex: 1;
    }

    .item-name {
        font-weight: 600;
        margin-bottom: 5px;
        color: #5e3e25;
    }

    .item-category {
        color: #8e98a8;
        font-size: 14px;
    }

    .item-price {
        font-weight: 600;
        font-size: 18px;
        color: #5e3e25;
    }

    .price-per-item {
        font-size: 14px;
        color: #8e98a8;
    }

    .item-controls {
        display: flex;
        align-items: center;
        gap: 20px;
    }

    .quantity-controls {
        display: flex;
        align-items: center;
        gap: 15px;
    }

    .quantity-btn {
        width: 30px;
        height: 30px;
        border: 1px solid #d9d9d9;
        border-radius: 5px;
        display: flex;
        align-items: center;
        justify-content: center;
        cursor: pointer;
        background: none;
        color: #5e3e25;
        font-size: 16px;
    }

    .quantity {
        font-weight: 500;
        color: #5e3e25;
    }

    .remove-item {
        color: #5e3e25;
        cursor: pointer;
        background: none;
        border: none;
        display: flex;
        align-items: center;
    }

    .remove-item i {
        margin-right: 5px;
        font-size: 14px;
    }

    .item-total {
        text-align: right;
        padding-right: 20px;
        font-weight: 600;
        color: #5e3e25;
    }

    /* Cart Summary */
    .cart-summary {
        background: #fff;
        border-radius: 10px;
        padding: 20px;
        box-shadow: 0 2px 10px rgba(0,0,0,0.05);
    }

    .summary-section {
        margin-bottom: 30px;
    }

    .section-title {
        font-weight: 600;
        margin-bottom: 15px;
        color: #5e3e25;
        display: flex;
        justify-content: space-between;
        align-items: center;
    }

    .add-btn {
        display: flex;
        align-items: center;
        gap: 5px;
        color: #5e3e25;
        font-size: 14px;
        cursor: pointer;
        background: none;
        border: none;
    }

    .delivery-options {
        display: flex;
        flex-direction: column;
        gap: 10px;
    }

    .delivery-option {
        display: flex;
        align-items: center;
        gap: 10px;
        padding: 15px;
        border: 1px solid #eeeeee;
        border-radius: 5px;
        cursor: pointer;
    }

    .delivery-option.selected {
        border-color: #5e3e25;
    }

    .delivery-option i {
        font-size: 18px;
        color: #5e3e25;
    }

    .radio-custom {
        width: 18px;
        height: 18px;
        border-radius: 50%;
        border: 1px solid #d9d9d9;
        display: inline-block;
        position: relative;
        margin-right: 10px;
    }

    .radio-custom.selected {
        border-color: #5e3e25;
    }

    .radio-custom.selected::after {
        content: '';
        width: 10px;
        height: 10px;
        background-color: #5e3e25;
        border-radius: 50%;
        position: absolute;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
    }

    .address-preview {
        background: #f4f4f4;
        border-radius: 5px;
        padding: 15px;
        margin-top: 10px;
        position: relative;
        display: flex;
        align-items: center;
    }

    .map-preview {
        width: 60px;
        height: 60px;
        background: #eeeeee;
        border-radius: 5px;
        margin-right: 15px;
    }

    .address-details {
        flex: 1;
    }

    .address-text {
        font-size: 14px;
        margin-bottom: 5px;
        color: #5e3e25;
        font-weight: 500;
    }

    .address-subtext {
        color: #8e98a8;
        font-size: 12px;
    }

    .payment-methods {
        display: flex;
        flex-direction: column;
        gap: 10px;
    }

    .payment-method {
        display: flex;
        align-items: center;
        gap: 10px;
        padding: 15px;
        border: 1px solid #eeeeee;
        border-radius: 5px;
        cursor: pointer;
    }

    .payment-method.selected {
        border-color: #5e3e25;
    }

    .payment-logo {
        height: 20px;
        object-fit: contain;
    }

    .payment-name {
        font-weight: 500;
        color: #5e3e25;
    }

    .summary-row {
        display: flex;
        justify-content: space-between;
        margin-bottom: 10px;
        color: #8e98a8;
        font-size: 14px;
    }

    .summary-total {
        display: flex;
        justify-content: space-between;
        margin-top: 15px;
        padding-top: 15px;
        border-top: 1px solid #eeeeee;
        font-weight: 600;
        color: #5e3e25;
    }

    .checkout-btn {
        width: 100%;
        padding: 15px;
        background: #5e3e25;
        color: #fff;
        border: none;
        border-radius: 5px;
        font-family: 'Poppins', sans-serif;
        font-weight: 500;
        cursor: pointer;
        transition: background-color 0.3s ease;
        font-size: 16px;
    }

    .checkout-btn:hover {
        background: #4a3118;
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
        .cart-content {
            grid-template-columns: 1fr;
        }
    }

    @media (max-width: 768px) {
        .nav-links {
            display: none;
        }

        .cart-item {
            flex-direction: column;
            align-items: flex-start;
            gap: 15px;
        }

        .item-controls {
            width: 100%;
            justify-content: space-between;
        }
    }

    @media (max-width: 576px) {
        .cart-header {
            flex-direction: column;
            align-items: flex-start;
            gap: 10px;
        }
    }
</style>
</head>
<body>
<!-- Header -->
<header>
    <div class="container">
        <div class="navbar">
            <div class="nav-center">
                <a href="index.html"><img src="https://hebbkx1anhila5yf.public.blob.vercel-storage.com/Logo-UPegvOgo8yj5yiZW66XFLxccXivP68.png" alt="Amanda Bakery Logo" class="logo"></a>
                <div class="nav-links">
                    <a href="index.html">Home</a>
                    <a href="#">About</a>
                    <a href="#">Product</a>
                    <a href="#">Location</a>
                    <a href="#">Contact us</a>
                </div>
            </div>
            <div class="nav-icons">
                <i class="fas fa-shopping-cart"></i>
                <i class="fas fa-bell"></i>
                <i class="fas fa-user"></i>
            </div>
        </div>
    </div>
</header>

<!-- Cart Section -->
<section class="cart-section">
    <div class="container">
        <div class="cart-header">
            <h1 class="cart-title">Your cart <span class="cart-count">3 items</span></h1>
            <button class="remove-all">
                <i class="far fa-trash-alt"></i>
                Remove
            </button>
        </div>

        <div class="cart-content">
            <div class="cart-items">
                <div class="cart-item">
                    <input type="checkbox" class="item-checkbox" checked>
                    <img src="https://hebbkx1anhila5yf.public.blob.vercel-storage.com/Bread%20Product-wkmDbqLKMjwtlU42eRLQns6XpVejoq.png" alt="Sugarcoat Babka" class="item-image">
                    <div class="item-details">
                        <h3 class="item-name">Sugarcoat Babka</h3>
                        <p class="item-category">Bread</p>
                        <p class="item-price">$10.00<span class="price-per-item">/item</span></p>
                    </div>
                    <div class="quantity-controls">
                        <button class="quantity-btn decrease-btn">−</button>
                        <span class="quantity">2</span>
                        <button class="quantity-btn increase-btn">+</button>
                    </div>
                    <div class="item-total">
                        <button class="remove-item">
                            <i class="far fa-trash-alt"></i>
                            Remove
                        </button>
                    </div>
                </div>
            </div>

            <div class="cart-summary">
                <div class="summary-section">
                    <h3 class="section-title">Dispatch options</h3>
                    <div class="delivery-options">
                        <div class="delivery-option selected" data-option="delivery">
                            <span class="radio-custom selected"></span>
                            <i class="fas fa-home"></i>
                            Home delivery
                        </div>
                        <div class="delivery-option" data-option="pickup">
                            <span class="radio-custom"></span>
                            <i class="fas fa-store"></i>
                            Pick up
                        </div>
                    </div>
                </div>

                <div class="summary-section">
                    <h3 class="section-title">
                        Address
                        <button class="add-btn">
                            <i class="fas fa-plus"></i>
                            Add
                        </button>
                    </h3>
                    <div class="address-preview">
                        <div class="map-preview"></div>
                        <div class="address-details">
                            <p class="address-text">Jl. Raya Baturaden B...</p>
                            <p class="address-subtext">Indonesia, Central Java</p>
                            <p class="address-subtext">3314</p>
                        </div>
                    </div>
                </div>

                <div class="summary-section">
                    <h3 class="section-title">
                        Payment
                        <button class="add-btn">
                            <i class="fas fa-plus"></i>
                            Add
                        </button>
                    </h3>
                    <div class="payment-methods">
                        <div class="payment-method selected" data-payment="dana">
                            <span class="radio-custom selected"></span>
                            <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/e/eb/Logo_dana_blue.svg/2560px-Logo_dana_blue.svg.png" alt="DANA" class="payment-logo">
                        </div>
                        <div class="payment-method" data-payment="qris">
                            <span class="radio-custom"></span>
                            <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/3/35/QRIS_logo.svg/1200px-QRIS_logo.svg.png" alt="QRIS" class="payment-logo">
                        </div>
                        <div class="payment-method" data-payment="ovo">
                            <span class="radio-custom"></span>
                            <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/e/eb/Logo_ovo_purple.svg/2560px-Logo_ovo_purple.svg.png" alt="OVO" class="payment-logo">
                        </div>
                    </div>
                </div>

                <div class="summary-section">
                    <div class="summary-row">
                        <span>Subtotal (3 items)</span>
                        <span>$8.00</span>
                    </div>
                    <div class="summary-row">
                        <span>Delivery</span>
                        <span>Free</span>
                    </div>
                    <div class="summary-total">
                        <span>Total</span>
                        <span>$8.00</span>
                    </div>
                </div>

                <button class="checkout-btn">Check out</button>
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
    // Delivery Options Selection
    const deliveryOptions = document.querySelectorAll('.delivery-option');
    if (deliveryOptions) {
        deliveryOptions.forEach(option => {
            option.addEventListener('click', () => {
                deliveryOptions.forEach(opt => {
                    opt.classList.remove('selected');
                    opt.querySelector('.radio-custom').classList.remove('selected');
                });
                option.classList.add('selected');
                option.querySelector('.radio-custom').classList.add('selected');
            });
        });
    }

    // Payment Method Selection
    const paymentMethods = document.querySelectorAll('.payment-method');
    if (paymentMethods) {
        paymentMethods.forEach(method => {
            method.addEventListener('click', () => {
                paymentMethods.forEach(m => {
                    m.classList.remove('selected');
                    m.querySelector('.radio-custom').classList.remove('selected');
                });
                method.classList.add('selected');
                method.querySelector('.radio-custom').classList.add('selected');
            });
        });
    }

    // Quantity Controls
    const decreaseBtn = document.querySelector('.decrease-btn');
    const increaseBtn = document.querySelector('.increase-btn');
    const quantityEl = document.querySelector('.quantity');
    const totalPriceEl = document.querySelector('.summary-total span:last-child');
    const subtotalEl = document.querySelector('.summary-row:first-child span:last-child');
    const itemTotalEl = document.querySelector('.cart-header .cart-count');

    let quantity = 2;
    let price = 10.00;
    let total = quantity * price;

    function updatePrice() {
        if (subtotalEl && totalPriceEl) {
            subtotalEl.textContent = `$${total.toFixed(2)}`;
            totalPriceEl.textContent = `$${total.toFixed(2)}`;
        }
    }

    if (decreaseBtn && increaseBtn && quantityEl) {
        decreaseBtn.addEventListener('click', () => {
            if (quantity > 1) {
                quantity--;
                quantityEl.textContent = quantity;
                total = quantity * price;
                updatePrice();
            }
        });

        increaseBtn.addEventListener('click', () => {
            quantity++;
            quantityEl.textContent = quantity;
            total = quantity * price;
            updatePrice();
        });
    }

    // Remove Item
    const removeItemBtn = document.querySelector('.remove-item');
    const cartItem = document.querySelector('.cart-item');

    if (removeItemBtn && cartItem) {
        removeItemBtn.addEventListener('click', () => {
            cartItem.style.display = 'none';
            if (itemTotalEl && subtotalEl && totalPriceEl) {
                itemTotalEl.textContent = '0 items';
                subtotalEl.textContent = '$0.00';
                totalPriceEl.textContent = '$0.00';
            }
        });
    }

    // Remove All
    const removeAllBtn = document.querySelector('.remove-all');

    if (removeAllBtn && cartItem) {
        removeAllBtn.addEventListener('click', () => {
            cartItem.style.display = 'none';
            if (itemTotalEl && subtotalEl && totalPriceEl) {
                itemTotalEl.textContent = '0 items';
                subtotalEl.textContent = '$0.00';
                totalPriceEl.textContent = '$0.00';
            }
        });
    }

    // Checkout Button
    const checkoutBtn = document.querySelector('.checkout-btn');

    if (checkoutBtn) {
        checkoutBtn.addEventListener('click', () => {
            alert('Proceeding to checkout!');
        });
    }
</script>
</body>
</html>