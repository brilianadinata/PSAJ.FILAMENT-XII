<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile - Amanda Bakery</title>
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

        /* Profile Section */
        .profile-section {
            padding: 50px 0;
            display: flex;
            gap: 50px;
        }

        .profile-image-section {
            flex: 0 0 300px;
            text-align: center;
        }

        .profile-image-container {
            width: 200px;
            height: 200px;
            margin: 0 auto 20px;
            position: relative;
        }

        .profile-image {
            width: 100%;
            height: 100%;
            border-radius: 50%;
            object-fit: cover;
            background-color: #f5f5f5;
        }

        .add-profile-btn {
            display: inline-block;
            padding: 8px 20px;
            border: 1px solid #5e3e25;
            border-radius: 20px;
            color: #5e3e25;
            font-size: 14px;
            cursor: pointer;
            transition: all 0.3s ease;
        }

        .add-profile-btn:hover {
            background-color: #f5f5f5;
        }

        .image-requirements {
            font-size: 12px;
            color: #8e98a8;
            margin-top: 10px;
            line-height: 1.4;
        }

        /* Form Sections */
        .form-section {
            flex: 1;
        }

        .section-header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 30px;
            padding-bottom: 10px;
            border-bottom: 1px solid #eee;
        }

        .section-title {
            font-size: 18px;
            font-weight: 600;
            color: #5e3e25;
        }

        .edit-btn {
            color: #5e3e25;
            font-size: 14px;
            display: flex;
            align-items: center;
            gap: 5px;
            cursor: pointer;
        }

        .form-group {
            margin-bottom: 20px;
        }

        .form-label {
            display: block;
            margin-bottom: 8px;
            color: #5e3e25;
            font-size: 14px;
        }

        .form-input {
            width: 100%;
            padding: 10px 15px;
            border: 1px solid #ddd;
            border-radius: 5px;
            font-family: 'Poppins', sans-serif;
            font-size: 14px;
        }

        .form-input:focus {
            outline: none;
            border-color: #5e3e25;
        }

        .input-group {
            display: flex;
            align-items: center;
            gap: 10px;
        }

        .change-link {
            color: #5e3e25;
            font-size: 14px;
            text-decoration: underline;
            cursor: pointer;
        }

        .radio-group {
            display: flex;
            gap: 20px;
            margin-top: 5px;
        }

        .radio-label {
            display: flex;
            align-items: center;
            gap: 5px;
            cursor: pointer;
        }

        .date-group {
            display: flex;
            gap: 10px;
        }

        .date-select {
            flex: 1;
            padding: 10px;
            border: 1px solid #ddd;
            border-radius: 5px;
            font-family: 'Poppins', sans-serif;
            font-size: 14px;
        }

        /* Payment Section */
        .payment-section {
            margin-top: 40px;
        }

        .payment-method {
            margin-bottom: 30px;
        }

        .method-title {
            font-size: 16px;
            font-weight: 500;
            margin-bottom: 15px;
            color: #5e3e25;
        }

        .payment-grid {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 15px;
        }

        .payment-select {
            position: relative;
        }

        .payment-select img {
            position: absolute;
            left: 10px;
            top: 50%;
            transform: translateY(-50%);
            width: 20px;
            height: 20px;
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
        @media (max-width: 768px) {
            .profile-section {
                flex-direction: column;
            }

            .payment-grid {
                grid-template-columns: 1fr;
            }

            .nav-links {
                display: none;
            }
        }
    </style>
</head>
<body>
    <!-- Header -->
    <header>
        <div class="container">
            <div class="navbar">
                <a href="index.html"><img src="https://hebbkx1anhila5yf.public.blob.vercel-storage.com/Logo-UPegvOgo8yj5yiZW66XFLxccXivP68.png" alt="Amanda Bakery Logo" class="logo"></a>
                <div class="nav-links">
                    <a href="index.html" class="active">Home</a>
                    <a href="#">About</a>
                    <a href="#">Product</a>
                    <a href="#">Location</a>
                    <a href="#">Contact us</a>
                </div>
                <div class="nav-icons">
                    <i class="fas fa-truck"></i>
                    <i class="fas fa-shopping-cart"></i>
                    <i class="fas fa-bell"></i>
                    <i class="fas fa-user"></i>
                </div>
            </div>
        </div>
    </header>

    <!-- Profile Section -->
    <div class="container">
        <div class="profile-section">
            <div class="profile-image-section">
                <div class="profile-image-container">
                    <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQkGb0KXZff72_aNYCOMxSo3wBXLUugcSQItw&s" alt="Profile" class="profile-image">
                </div>
                <button class="add-profile-btn">Add profile</button>
                <p class="image-requirements">
                    Maximum image size : 1 MB<br>
                    Available with format : .JPEG, .PNG
                </p>
            </div>

            <div class="form-section">
                <!-- Personal Information -->
                <div class="section-header">
                    <h2 class="section-title">Personal</h2>
                    <a href="#" class="edit-btn">
                        <i class="fas fa-pencil-alt"></i>
                        Edit Personal data
                    </a>
                </div>

                <div class="form-group">
                    <label class="form-label">Username</label>
                    <input type="text" class="form-input" placeholder="Insert here">
                </div>

                <div class="form-group">
                    <label class="form-label">Name</label>
                    <input type="text" class="form-input" placeholder="Insert here">
                </div>

                <div class="form-group">
                    <label class="form-label">Email</label>
                    <div class="input-group">
                        <input type="text" class="form-input" value="leelca*********@gmail.com" readonly>
                        <a href="#" class="change-link">Change</a>
                    </div>
                </div>

                <div class="form-group">
                    <label class="form-label">No. Telp</label>
                    <div class="input-group">
                        <input type="text" class="form-input" value="+62 081129292122" readonly>
                        <a href="#" class="change-link">Change</a>
                    </div>
                </div>

                <div class="form-group">
                    <label class="form-label">Gender</label>
                    <div class="radio-group">
                        <label class="radio-label">
                            <input type="radio" name="gender" value="man">
                            Man
                        </label>
                        <label class="radio-label">
                            <input type="radio" name="gender" value="woman">
                            Woman
                        </label>
                        <label class="radio-label">
                            <input type="radio" name="gender" value="prefer-not">
                            Prefer not to say
                        </label>
                    </div>
                </div>

                <div class="form-group">
                    <label class="form-label">DD/MM/YY</label>
                    <div class="date-group">
                        <select class="date-select">
                            <option value="">DD</option>
                            <!-- Add days 1-31 -->
                        </select>
                        <select class="date-select">
                            <option value="">MM</option>
                            <!-- Add months -->
                        </select>
                        <select class="date-select">
                            <option value="">YY</option>
                            <!-- Add years -->
                        </select>
                    </div>
                </div>

                <!-- Payment Section -->
                <div class="payment-section">
                    <div class="section-header">
                        <h2 class="section-title">Payment</h2>
                        <a href="#" class="edit-btn">
                            <i class="fas fa-plus"></i>
                            Add payment
                        </a>
                    </div>

                    <div class="payment-method">
                        <h3 class="method-title">Primary</h3>
                        <div class="payment-grid">
                            <div class="form-group">
                                <label class="form-label">Type</label>
                                <select class="form-input">
                                    <option value="e-wallet">E-Wallet</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label class="form-label">No</label>
                                <input type="text" class="form-input" value="+62 81120183719833">
                            </div>
                            <div class="form-group">
                                <label class="form-label">Methods</label>
                                <div class="payment-select">
                                    <select class="form-input" style="padding-left: 40px;">
                                        <option value="dana">Dana</option>
                                    </select>
                                    <img src="data:image/png;base64,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" alt="Dana">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="form-label">Name</label>
                                <input type="text" class="form-input" placeholder="Sigma akibidi">
                            </div>
                        </div>
                    </div>

                    <div class="payment-method">
                        <h3 class="method-title">Secondary</h3>
                        <div class="payment-grid">
                            <div class="form-group">
                                <label class="form-label">Type</label>
                                <select class="form-input">
                                    <option value="card">Card</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label class="form-label">Card no.</label>
                                <input type="text" class="form-input" placeholder="0000-0000-0000-0000">
                            </div>
                            <div class="form-group">
                                <label class="form-label">Exp. Date</label>
                                <input type="text" class="form-input" placeholder="12/12">
                            </div>
                            <div class="form-group">
                                <label class="form-label">Postal</label>
                                <input type="text" class="form-input" placeholder="2234">
                            </div>
                        </div>
                    </div>
                </div>
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
        // Add days to DD select
        const ddSelect = document.querySelector('.date-select:nth-child(1)');
        for(let i = 1; i <= 31; i++) {
            const option = document.createElement('option');
            option.value = i;
            option.textContent = i.toString().padStart(2, '0');
            ddSelect.appendChild(option);
        }

        // Add months to MM select
        const mmSelect = document.querySelector('.date-select:nth-child(2)');
        const months = ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec'];
        months.forEach((month, index) => {
            const option = document.createElement('option');
            option.value = index + 1;
            option.textContent = month;
            mmSelect.appendChild(option);
        });

        // Add years to YY select
        const yySelect = document.querySelector('.date-select:nth-child(3)');
        const currentYear = new Date().getFullYear();
        for(let i = currentYear - 100; i <= currentYear; i++) {
            const option = document.createElement('option');
            option.value = i;
            option.textContent = i.toString().substr(-2);
            yySelect.appendChild(option);
        }
    </script>
</body>
</html>