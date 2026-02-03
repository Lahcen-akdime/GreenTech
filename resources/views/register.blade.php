<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register - GreenTech Solutions</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=DM+Serif+Display:ital@0;1&family=Karla:wght@300;400;500;600&display=swap" rel="stylesheet">
    <style>
        :root {
            --forest-green: #1a4d2e;
            --moss-green: #4f772d;
            --sage-green: #90a955;
            --soft-cream: #faf8f3;
            --warm-beige: #ede8dc;
            --text-dark: #2d3319;
            --text-mid: #5a5f4a;
        }

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Karla', sans-serif;
            min-height: 100vh;
            background: var(--soft-cream);
            position: relative;
            overflow-x: hidden;
            padding: 2rem 0;
        }

        /* Animated organic shapes background */
        body::before {
            content: '';
            position: fixed;
            top: -30%;
            right: -10%;
            width: 700px;
            height: 700px;
            background: radial-gradient(ellipse at 30% 40%, rgba(144, 169, 85, 0.15) 0%, transparent 60%);
            border-radius: 50%;
            animation: floatBg 25s ease-in-out infinite;
            z-index: 0;
            filter: blur(70px);
        }

        body::after {
            content: '';
            position: fixed;
            bottom: -30%;
            left: -10%;
            width: 600px;
            height: 600px;
            background: radial-gradient(ellipse at 60% 50%, rgba(79, 119, 45, 0.12) 0%, transparent 60%);
            border-radius: 50%;
            animation: floatBg 20s ease-in-out infinite reverse;
            z-index: 0;
            filter: blur(70px);
        }

        @keyframes floatBg {
            0%, 100% { transform: translate(0, 0) scale(1) rotate(0deg); }
            50% { transform: translate(40px, -30px) scale(1.08) rotate(3deg); }
        }

        /* Register Container */
        .register-container {
            position: relative;
            z-index: 10;
            width: 100%;
            max-width: 580px;
            margin: 0 auto;
            animation: fadeInUp 0.8s cubic-bezier(0.4, 0, 0.2, 1);
        }

        @keyframes fadeInUp {
            from { opacity: 0; transform: translateY(30px); }
            to { opacity: 1; transform: translateY(0); }
        }

        .register-card {
            background: rgba(255, 255, 255, 0.95);
            backdrop-filter: blur(20px);
            padding: 3rem 3rem;
            border-radius: 28px;
            box-shadow: 0 12px 48px rgba(0, 0, 0, 0.12);
            border: 1px solid rgba(144, 169, 85, 0.2);
        }

        .register-header {
            text-align: center;
            margin-bottom: 2.5rem;
        }

        .logo-icon {
            font-size: 3.5rem;
            margin-bottom: 1rem;
            display: block;
            animation: gentleFloat 4s ease-in-out infinite;
        }

        @keyframes gentleFloat {
            0%, 100% { transform: translateY(0); }
            50% { transform: translateY(-8px); }
        }

        .register-header h1 {
            font-family: 'DM Serif Display', serif;
            font-size: 2rem;
            color: var(--forest-green);
            margin-bottom: 0.5rem;
            font-weight: 400;
            letter-spacing: -0.02em;
        }

        .register-header p {
            color: var(--text-mid);
            font-size: 0.95rem;
            font-weight: 300;
        }

        /* Form */
        .register-form {
            display: flex;
            flex-direction: column;
            gap: 1.5rem;
        }

        .form-row {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 1rem;
        }

        .form-group {
            display: flex;
            flex-direction: column;
            gap: 0.5rem;
        }

        .form-group.full-width {
            grid-column: 1 / -1;
        }

        .form-group label {
            font-size: 0.85rem;
            font-weight: 600;
            color: var(--text-dark);
            text-transform: uppercase;
            letter-spacing: 0.08em;
        }

        .form-group input {
            padding: 1rem 1.25rem;
            border: 2px solid rgba(144, 169, 85, 0.3);
            border-radius: 16px;
            font-family: 'Karla', sans-serif;
            font-size: 1rem;
            background: var(--soft-cream);
            color: var(--text-dark);
            transition: all 0.3s ease;
            outline: none;
        }

        .form-group input:focus {
            border-color: var(--moss-green);
            box-shadow: 0 0 0 4px rgba(79, 119, 45, 0.1);
            background: white;
        }

        .form-group input::placeholder {
            color: var(--text-mid);
            opacity: 0.6;
        }

        /* Checkbox */
        .checkbox-group {
            display: flex;
            align-items: center;
            gap: 0.75rem;
            margin: 0.5rem 0;
        }

        .checkbox-group input[type="checkbox"] {
            width: 20px;
            height: 20px;
            cursor: pointer;
            accent-color: var(--moss-green);
        }

        .checkbox-group label {
            font-size: 0.9rem;
            color: var(--text-mid);
            font-weight: 400;
            text-transform: none;
            letter-spacing: normal;
            cursor: pointer;
        }

        .checkbox-group label a {
            color: var(--moss-green);
            text-decoration: none;
            font-weight: 600;
            transition: color 0.3s ease;
        }

        .checkbox-group label a:hover {
            color: var(--forest-green);
            text-decoration: underline;
        }

        .register-button {
            padding: 1.1rem 2rem;
            background: linear-gradient(135deg, var(--moss-green), var(--sage-green));
            color: white;
            border: none;
            border-radius: 16px;
            font-family: 'Karla', sans-serif;
            font-size: 1.05rem;
            font-weight: 600;
            cursor: pointer;
            transition: all 0.3s ease;
            margin-top: 0.5rem;
            letter-spacing: 0.02em;
        }

        .register-button:hover {
            transform: translateY(-2px);
            box-shadow: 0 8px 24px rgba(79, 119, 45, 0.4);
        }

        .register-button:active {
            transform: translateY(0);
        }

        .divider {
            display: flex;
            align-items: center;
            gap: 1rem;
            margin: 1.5rem 0;
        }

        .divider::before,
        .divider::after {
            content: '';
            flex: 1;
            height: 1px;
            background: linear-gradient(90deg, transparent, rgba(144, 169, 85, 0.3), transparent);
        }

        .divider span {
            color: var(--text-mid);
            font-size: 0.85rem;
            font-weight: 500;
        }

        /* Social Register */
        .social-register {
            display: flex;
            gap: 1rem;
        }

        .social-button {
            flex: 1;
            padding: 1rem;
            border: 2px solid rgba(144, 169, 85, 0.3);
            border-radius: 16px;
            background: white;
            cursor: pointer;
            transition: all 0.3s ease;
            display: flex;
            align-items: center;
            justify-content: center;
            gap: 0.5rem;
            font-family: 'Karla', sans-serif;
            font-weight: 600;
            font-size: 0.95rem;
            color: var(--text-dark);
        }

        .social-button:hover {
            border-color: var(--moss-green);
            background: rgba(144, 169, 85, 0.05);
            transform: translateY(-2px);
        }

        .social-icon {
            font-size: 1.3rem;
        }

        /* Footer */
        .register-footer {
            text-align: center;
            margin-top: 2rem;
            padding-top: 1.5rem;
            border-top: 1px solid rgba(144, 169, 85, 0.2);
            color: var(--text-mid);
            font-size: 0.95rem;
        }

        .register-footer a {
            color: var(--moss-green);
            text-decoration: none;
            font-weight: 600;
            transition: color 0.3s ease;
        }

        .register-footer a:hover {
            color: var(--forest-green);
            text-decoration: underline;
        }

        /* Responsive */
        @media (max-width: 768px) {
            body {
                padding: 1rem;
            }

            .register-container {
                padding: 0 1rem;
            }

            .register-card {
                padding: 2rem 1.5rem;
            }

            .form-row {
                grid-template-columns: 1fr;
            }

            .social-register {
                flex-direction: column;
            }

            .register-header h1 {
                font-size: 1.75rem;
            }

            .logo-icon {
                font-size: 3rem;
            }
        }
    </style>
</head>
<body>
    <div class="register-container">
        <div class="register-card">
            <div class="register-header">
                <span class="logo-icon">🌱</span>
                <h1>Register GreenTech</h1>
                <p>Create your account and start your sustainable journey</p>
            </div>

            <form class="register-form" method="POST" action="{{ route('registerUser') }}">
                @csrf
                <div class="form-row">
                    <div class="form-group">
                        <label for="firstname">Full Name</label>
                        <input 
                            type="text" 
                            id="firstname" 
                            placeholder="John"
                            name="name"
                            required
                        >
                    </div>
                </div>

                <div class="form-group full-width">
                    <label for="email">Email Address</label>
                    <input 
                        type="email" 
                        id="email" 
                        placeholder="john.doe@example.com"
                        autocomplete="email"
                        name="email"
                        required
                    >
                </div>

                <div class="form-group full-width">
                    <label for="password">Password</label>
                    <input 
                        type="password" 
                        id="password" 
                        placeholder="Create a strong password"
                        autocomplete="new-password"
                        name="password"
                        required
                    >
                </div>

                <div class="form-group full-width">
                    <label for="confirm-password">Confirm Password</label>
                    <input 
                        type="password" 
                        id="confirm-password" 
                        placeholder="Re-enter your password"
                        autocomplete="new-password"
                        required
                    >
                </div>

                <div class="checkbox-group">
                    <input type="checkbox" id="terms" required>
                    <label for="terms">
                        I agree to the <a href="#">Terms of Service</a> and <a href="#">Privacy Policy</a>
                    </label>
                </div>

                <div class="checkbox-group">
                    <input type="checkbox" id="newsletter">
                    <label for="newsletter">
                        Send me sustainable gardening tips and exclusive offers
                    </label>
                </div>

                <button type="submit" class="register-button">Create Account</button>
            </form>

            <div class="divider">
                <span>or register with</span>
            </div>

            <div class="social-register">
                <button class="social-button">
                    <span class="social-icon">G</span>
                    Google
                </button>
                <button class="social-button">
                    <span class="social-icon">⚙</span>
                    GitHub
                </button>
            </div>

            <div class="register-footer">
                Already have an account? <a href="/index">Login here</a>
                <br><br>
                <a href="index.html">← Back to Store</a>
            </div>
        </div>
    </div>
</body>
</html>