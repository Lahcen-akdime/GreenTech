<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Login - GreenTech Solutions</title>
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

        /* Login Container */
        .login-container {
            position: relative;
            z-index: 10;
            width: 100%;
            max-width: 500px;
            margin: 0 auto;
            animation: fadeInUp 0.8s cubic-bezier(0.4, 0, 0.2, 1);
        }

        @keyframes fadeInUp {
            from { opacity: 0; transform: translateY(30px); }
            to { opacity: 1; transform: translateY(0); }
        }

        .login-card {
            background: rgba(255, 255, 255, 0.95);
            backdrop-filter: blur(20px);
            padding: 3rem 2.5rem;
            border-radius: 28px;
            box-shadow: 0 12px 48px rgba(0, 0, 0, 0.12);
            border: 1px solid rgba(144, 169, 85, 0.2);
        }

        .login-header {
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

        .login-header h1 {
            font-family: 'DM Serif Display', serif;
            font-size: 2rem;
            color: var(--forest-green);
            margin-bottom: 0.5rem;
            font-weight: 400;
            letter-spacing: -0.02em;
        }

        .login-header p {
            color: var(--text-mid);
            font-size: 0.95rem;
            font-weight: 300;
        }

        /* Form */
        .login-form {
            display: flex;
            flex-direction: column;
            gap: 1.5rem;
        }

        .form-group {
            display: flex;
            flex-direction: column;
            gap: 0.5rem;
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

        .login-button {
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

        .login-button:hover {
            transform: translateY(-2px);
            box-shadow: 0 8px 24px rgba(79, 119, 45, 0.4);
        }

        .login-button:active {
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

        /* Social Login */
        .social-login {
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
        .login-footer {
            text-align: center;
            margin-top: 2rem;
            padding-top: 1.5rem;
            border-top: 1px solid rgba(144, 169, 85, 0.2);
        }

        .login-footer a {
            color: var(--moss-green);
            text-decoration: none;
            font-weight: 600;
            transition: color 0.3s ease;
        }

        .login-footer a:hover {
            color: var(--forest-green);
            text-decoration: underline;
        }

        /* Responsive */
        @media (max-width: 768px) {
            body {
                padding: 1rem;
            }

            .login-container {
                padding: 0 1rem;
            }

            .login-card {
                padding: 2rem 1.5rem;
            }

            .login-header h1 {
                font-size: 1.75rem;
            }

            .logo-icon {
                font-size: 3rem;
            }
        }
    </style>
</head>
<body>
    <div class="login-container">
        <div class="login-card">
            <div class="login-header">
                <span class="logo-icon">🌱</span>
                <h1>Login To GreenTech</h1>
                <p>GreenTech Solutions Dashboard</p>
            </div>

            <form class="login-form" method="POST" action="{{ route('login') }}">
                @csrf
                <div class="form-group">
                    <label for="email">Email Address</label>
                    <input 
                        type="email" 
                        id="email" 
                        placeholder="admin@greentech.com"
                        autocomplete="email"
                        name="email"
                    >
                </div>

                <div class="form-group">
                    <label for="password">Password</label>
                    <input 
                        type="password" 
                        id="password" 
                        placeholder="Enter your password"
                        autocomplete="current-password"
                        name="password"
                    >
                </div>

                <button type="submit" class="login-button">Login to Dashboard</button>
            </form>

            <div class="divider">
                <span>or continue with</span>
            </div>

            <div class="social-login">
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
                You dont have account? <a href="/">Register here</a>
                <br><br>
                <a href="index.html">← Back to Store</a>
            </div>
        </div>
    </div>
</body>
</html>