<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Armando Bakery - Login</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@400;700&family=Poppins:wght@300;400;500;600&display=swap" rel="stylesheet">
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Poppins', sans-serif;
        }

        body {
            display: flex;
            min-height: 100vh;
            background-color: white;
            overflow-x: hidden;
        }

        .container {
            display: flex;
            width: 100%;
        }

        .login-form {
            width: 45%;
            padding: 40px 80px;
            display: flex;
            flex-direction: column;
        }

        .back-button {
            margin-bottom: 35px;
            width: fit-content;
        }

        .back-button svg {
            width: 24px;
            height: 24px;
            stroke: #5E3E25;
        }

        .logo {
            width: 50px;
            height: 50px;
            margin-bottom: 35px;
        }

        h1 {
            font-family: 'Playfair Display', serif;
            color: #5E3E25;
            font-size: 32px;
            margin-bottom: 8px;
            font-weight: 700;
        }

        .subtitle {
            color: #888;
            margin-bottom: 35px;
            font-size: 14px;
        }

        .form-group {
            margin-bottom: 20px;
        }

        label {
            display: block;
            margin-bottom: 8px;
            color: #5E3E25;
            font-size: 14px;
            font-weight: 500;
        }

        input[type="email"],
        input[type="password"],
        input[type="text"] {
            width: 100%;
            padding: 12px 15px;
            border: 1px solid #ddd;
            border-radius: 5px;
            font-size: 14px;
            outline: none;
        }

        input[type="email"]:focus,
        input[type="password"]:focus,
        input[type="text"]:focus {
            border-color: #5E3E25;
        }

        .password-field {
            position: relative;
        }

        .password-toggle {
            position: absolute;
            right: 15px;
            top: 50%;
            transform: translateY(-50%);
            cursor: pointer;
            color: #ccc;
            background: none;
            border: none;
            padding: 0;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .remember-forgot {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 25px;
        }

        .remember {
            display: flex;
            align-items: center;
            gap: 8px;
        }

        .remember input[type="checkbox"] {
            width: 16px;
            height: 16px;
            accent-color: #5E3E25;
            margin: 0;
        }

        .remember label {
            margin-bottom: 0;
            font-size: 14px;
            color: #333;
            font-weight: 400;
        }

        .forgot {
            color: #888;
            text-decoration: none;
            font-size: 14px;
        }

        .forgot:hover {
            text-decoration: underline;
        }

        .login-btn {
            background-color: #5E3E25;
            color: white;
            border: none;
            padding: 12px;
            border-radius: 5px;
            cursor: pointer;
            font-weight: 500;
            margin-bottom: 25px;
            transition: background-color 0.2s;
        }

        .login-btn:hover {
            background-color: #4a3118;
        }

        .divider {
            display: flex;
            align-items: center;
            margin: 20px 0;
            color: #888;
            font-size: 14px;
        }

        .divider::before,
        .divider::after {
            content: "";
            flex: 1;
            height: 1px;
            background-color: #ddd;
        }

        .divider::before {
            margin-right: 15px;
        }

        .divider::after {
            margin-left: 15px;
        }

        .social-login {
            display: flex;
            gap: 12px;
            margin-bottom: 25px;
        }

        .social-btn {
            flex: 1;
            display: flex;
            align-items: center;
            justify-content: center;
            gap: 8px;
            padding: 11px;
            border: 1px solid #ddd;
            border-radius: 5px;
            background-color: white;
            cursor: pointer;
            font-size: 14px;
            transition: background-color 0.2s;
            color: #333;
        }

        .social-btn:hover {
            background-color: #f5f5f5;
        }

        .google-icon {
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .facebook-icon {
            color: #1877F2;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .signup {
            text-align: center;
            font-size: 14px;
            color: #666;
        }

        .signup a {
            color: #5E3E25;
            text-decoration: none;
            font-weight: 600;
        }

        .signup a:hover {
            text-decoration: underline;
        }

        .image-section {
            width: 55%;
            background-image: linear-gradient(rgba(0, 0, 0, 0.1), rgba(0, 0, 0, 0.1)), url('https://hebbkx1anhila5yf.public.blob.vercel-storage.com/Image%20Login%20Register-u7idCNY0IH7XOT7AGvg4anuCPCiccH.png');
            background-size: cover;
            background-position: center;
            position: fixed;
            right: 0;
            top: 0;
            height: 100vh;
        }

        .footer {
            margin-top: auto;
            text-align: center;
            font-size: 12px;
            color: #888;
            padding-top: 40px;
        }

        .footer a {
            color: #888;
            text-decoration: none;
        }

        .footer a:hover {
            text-decoration: underline;
        }

        @media (max-width: 1200px) {
            .login-form {
                padding: 40px 60px;
            }
        }

        @media (max-width: 991px) {
            .login-form {
                padding: 30px;
                width: 50%;
            }
            .image-section {
                width: 50%;
            }
        }

        @media (max-width: 767px) {
            .image-section {
                display: none;
            }
            .login-form {
                width: 100%;
                padding: 20px;
            }
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="login-form">
            <a href="#" class="back-button">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                    <path d="M19 12H5"></path>
                    <path d="M12 19l-7-7 7-7"></path>
                </svg>
            </a>
            
            <img src="https://hebbkx1anhila5yf.public.blob.vercel-storage.com/Logo-Usx0xwuLtRXWTGW1GnebW8JemLknUR.png" alt="Armando Bakery Logo" class="logo">
            
            <h1>Welcome back !</h1>
            <p class="subtitle">Lorem ipsum dolor sit amet. Lorem ipsum</p>
            
            <div class="form-group">
                <label for="email">Email</label>
                <input type="email" id="email" placeholder="Enter here">
            </div>
            
            <div class="form-group">
                <label for="password">Password</label>
                <div class="password-field">
                    <input type="password" id="password" placeholder="Enter here">
                    <button type="button" class="password-toggle" id="togglePassword">
                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="#ccc" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z"></path>
                            <circle cx="12" cy="12" r="3"></circle>
                        </svg>
                    </button>
                </div>
            </div>
            
            <div class="remember-forgot">
                <div class="remember">
                    <input type="checkbox" id="remember">
                    <label for="remember">Remember me for 30 days</label>
                </div>
                <a href="#" class="forgot">Forgot password?</a>
            </div>
            
            <button class="login-btn">Login</button>
            
            <div class="divider">or</div>
            
            <div class="social-login">
                <button class="social-btn">
                    <span class="google-icon">
                        <svg width="18" height="18" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 48 48">
                            <path fill="#EA4335" d="M24 9.5c3.54 0 6.71 1.22 9.21 3.6l6.85-6.85C35.9 2.38 30.47 0 24 0 14.62 0 6.51 5.38 2.56 13.22l7.98 6.19C12.43 13.72 17.74 9.5 24 9.5z"/>
                            <path fill="#4285F4" d="M46.98 24.55c0-1.57-.15-3.09-.38-4.55H24v9.02h12.94c-.58 2.96-2.26 5.48-4.78 7.18l7.73 6c4.51-4.18 7.09-10.36 7.09-17.65z"/>
                            <path fill="#FBBC05" d="M10.53 28.59c-.48-1.45-.76-2.99-.76-4.59s.27-3.14.76-4.59l-7.98-6.19C.92 16.46 0 20.12 0 24c0 3.88.92 7.54 2.56 10.78l7.97-6.19z"/>
                            <path fill="#34A853" d="M24 48c6.48 0 11.93-2.13 15.89-5.81l-7.73-6c-2.15 1.45-4.92 2.3-8.16 2.3-6.26 0-11.57-4.22-13.47-9.91l-7.98 6.19C6.51 42.62 14.62 48 24 48z"/>
                        </svg>
                    </span>
                    Login with Google
                </button>
                <button class="social-btn">
                    <span class="facebook-icon">
                        <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="#1877F2">
                            <path d="M24 12.073c0-6.627-5.373-12-12-12s-12 5.373-12 12c0 5.99 4.388 10.954 10.125 11.854v-8.385H7.078v-3.47h3.047V9.43c0-3.007 1.792-4.669 4.533-4.669 1.312 0 2.686.235 2.686.235v2.953H15.83c-1.491 0-1.956.925-1.956 1.874v2.25h3.328l-.532 3.47h-2.796v8.385C19.612 23.027 24 18.062 24 12.073z"/>
                        </svg>
                    </span>
                    Login with Facebook
                </button>
            </div>
            
            <div class="signup">
                Doesn't have account yet? <a href="#">Sign up now!</a>
            </div>
            
            <div class="footer">
                © 2024 Armando. All Right Reserved. <a href="#">Terms and Condition</a>
            </div>
        </div>
        
        <div class="image-section"></div>
    </div>

    <script>
        // Toggle password visibility
        document.getElementById('togglePassword').addEventListener('click', function() {
            const passwordInput = document.getElementById('password');
            if (passwordInput.type === 'password') {
                passwordInput.type = 'text';
                this.innerHTML = `<svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="#ccc" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                    <path d="M17.94 17.94A10.07 10.07 0 0 1 12 20c-7 0-11-8-11-8a18.45 18.45 0 0 1 5.06-5.94M9.9 4.24A9.12 9.12 0 0 1 12 4c7 0 11 8 11 8a18.5 18.5 0 0 1-2.16 3.19m-6.72-1.07a3 3 0 1 1-4.24-4.24"></path>
                    <line x1="1" y1="1" x2="23" y2="23"></line>
                </svg>`;
            } else {
                passwordInput.type = 'password';
                this.innerHTML = `<svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="#ccc" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                    <path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z"></path>
                    <circle cx="12" cy="12" r="3"></circle>
                </svg>`;
            }
        });
    </script>
</body>
</html>