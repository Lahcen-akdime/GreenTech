<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mes Favoris - GreenTech Solutions</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=DM+Serif+Display:ital@0;1&family=Karla:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <style>
        :root {
            --forest-green: #1a4d2e;
            --moss-green: #4f772d;
            --sage-green: #90a955;
            --soft-cream: #faf8f3;
            --warm-beige: #ede8dc;
            --earth-brown: #8b7355;
            --text-dark: #2d3319;
            --text-mid: #5a5f4a;
            --accent-red: #d8757f;
        }

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Karla', sans-serif;
            background: var(--soft-cream);
            color: var(--text-dark);
            position: relative;
            overflow-x: hidden;
            min-height: 100vh;
        }

        /* Advanced gradient mesh background */
        body::before {
            content: '';
            position: fixed;
            top: -50%;
            right: -20%;
            width: 1000px;
            height: 1000px;
            background: radial-gradient(ellipse at 30% 40%, rgba(216, 117, 127, 0.12) 0%, transparent 50%),
                        radial-gradient(ellipse at 70% 60%, rgba(144, 169, 85, 0.15) 0%, transparent 50%);
            border-radius: 50%;
            z-index: 0;
            animation: morphGradient 25s ease-in-out infinite alternate;
            filter: blur(70px);
        }

        body::after {
            content: '';
            position: fixed;
            bottom: -40%;
            left: -15%;
            width: 800px;
            height: 800px;
            background: radial-gradient(ellipse at 60% 50%, rgba(216, 117, 127, 0.1) 0%, transparent 50%),
                        radial-gradient(ellipse at 40% 60%, rgba(79, 119, 45, 0.12) 0%, transparent 50%);
            border-radius: 50%;
            z-index: 0;
            animation: morphGradient 30s ease-in-out infinite alternate-reverse;
            filter: blur(70px);
        }

        @keyframes morphGradient {
            0%, 100% { transform: translate(0, 0) scale(1) rotate(0deg); }
            50% { transform: translate(40px, -40px) scale(1.1) rotate(5deg); }
        }

        /* Header */
        header {
            background: rgba(255, 255, 255, 0.85);
            backdrop-filter: blur(20px) saturate(180%);
            border-bottom: 1px solid rgba(144, 169, 85, 0.15);
            position: sticky;
            top: 0;
            z-index: 100;
            animation: slideDown 0.8s cubic-bezier(0.4, 0, 0.2, 1);
            box-shadow: 0 8px 32px rgba(0, 0, 0, 0.04);
        }

        @keyframes slideDown {
            from { transform: translateY(-100%); opacity: 0; }
            to { transform: translateY(0); opacity: 1; }
        }

        .header-container {
            max-width: 1400px;
            margin: 0 auto;
            padding: 1.75rem 2.5rem;
            display: flex;
            align-items: center;
            justify-content: space-between;
            gap: 3rem;
        }

        .logo {
            font-family: 'DM Serif Display', serif;
            font-size: 2rem;
            background: linear-gradient(135deg, var(--forest-green) 0%, var(--moss-green) 100%);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
            display: flex;
            align-items: center;
            gap: 0.75rem;
            font-weight: 400;
            letter-spacing: -0.03em;
            text-decoration: none;
        }

        .logo::before {
            content: '🌱';
            font-size: 2.5rem;
            -webkit-text-fill-color: initial;
            animation: leafPulse 3s ease-in-out infinite;
        }

        @keyframes leafPulse {
            0%, 100% { transform: scale(1) rotate(0deg); }
            50% { transform: scale(1.15) rotate(5deg); }
        }

        nav {
            display: flex;
            gap: 3rem;
            align-items: center;
        }

        nav a {
            color: var(--text-mid);
            text-decoration: none;
            font-weight: 600;
            font-size: 0.95rem;
            letter-spacing: 0.03em;
            position: relative;
            padding: 0.5rem 0;
            transition: color 0.4s cubic-bezier(0.4, 0, 0.2, 1);
        }

        nav a::after {
            content: '';
            position: absolute;
            bottom: -4px;
            left: 50%;
            transform: translateX(-50%);
            width: 0;
            height: 3px;
            background: linear-gradient(90deg, var(--accent-red), rgba(216, 117, 127, 0.5));
            border-radius: 2px;
            transition: width 0.5s cubic-bezier(0.4, 0, 0.2, 1);
        }

        nav a:hover {
            color: var(--accent-red);
        }

        nav a:hover::after {
            width: 100%;
        }

        nav a.active {
            color: var(--accent-red);
            font-weight: 700;
        }

        nav a.active::after {
            width: 100%;
        }

        .back-to-catalogue {
            padding: 0.9rem 1.75rem;
            background: rgba(255, 255, 255, 0.6);
            backdrop-filter: blur(10px);
            border: 2px solid rgba(144, 169, 85, 0.25);
            border-radius: 50px;
            color: var(--moss-green);
            font-weight: 700;
            font-size: 0.95rem;
            text-decoration: none;
            transition: all 0.4s cubic-bezier(0.4, 0, 0.2, 1);
            display: flex;
            align-items: center;
            gap: 0.5rem;
        }

        .back-to-catalogue:hover {
            background: var(--moss-green);
            color: white;
            border-color: var(--moss-green);
            transform: translateY(-2px);
            box-shadow: 0 8px 24px rgba(79, 119, 45, 0.3);
        }

        /* Main Content */
        main {
            max-width: 1400px;
            margin: 0 auto;
            padding: 4rem 2.5rem;
            position: relative;
            z-index: 1;
        }

        /* Hero Section with Hearts */
        .wishlist-hero {
            text-align: center;
            margin-bottom: 5rem;
            animation: fadeInUp 1s cubic-bezier(0.4, 0, 0.2, 1) 0.3s both;
            position: relative;
        }

        @keyframes fadeInUp {
            from { opacity: 0; transform: translateY(40px); }
            to { opacity: 1; transform: translateY(0); }
        }

        .wishlist-hero-icon {
            font-size: 5rem;
            margin-bottom: 1.5rem;
            display: inline-block;
            animation: floatHeart 3s ease-in-out infinite;
        }

        @keyframes floatHeart {
            0%, 100% { transform: translateY(0) scale(1); }
            50% { transform: translateY(-15px) scale(1.05); }
        }

        .wishlist-hero h1 {
            font-family: 'DM Serif Display', serif;
            font-size: 4rem;
            background: linear-gradient(135deg, var(--accent-red) 0%, var(--moss-green) 100%);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
            margin-bottom: 1.25rem;
            line-height: 1.15;
            font-weight: 400;
            letter-spacing: -0.02em;
        }

        .wishlist-hero p {
            font-size: 1.25rem;
            color: var(--text-mid);
            max-width: 650px;
            margin: 0 auto 2rem;
            font-weight: 300;
            line-height: 1.7;
        }

        .wishlist-stats {
            display: flex;
            justify-content: center;
            gap: 3rem;
            flex-wrap: wrap;
        }

        .stat-item {
            background: rgba(255, 255, 255, 0.5);
            backdrop-filter: blur(20px);
            padding: 1.5rem 2.5rem;
            border-radius: 24px;
            border: 1px solid rgba(216, 117, 127, 0.2);
            box-shadow: 0 8px 24px rgba(0, 0, 0, 0.06);
        }

        .stat-value {
            font-size: 2.5rem;
            font-weight: 700;
            background: linear-gradient(135deg, var(--accent-red), var(--moss-green));
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
            margin-bottom: 0.25rem;
        }

        .stat-label {
            font-size: 0.9rem;
            color: var(--text-mid);
            font-weight: 600;
            text-transform: uppercase;
            letter-spacing: 0.08em;
        }

        /* Empty State */
        .empty-wishlist {
            text-align: center;
            padding: 5rem 2rem;
            background: rgba(255, 255, 255, 0.5);
            backdrop-filter: blur(20px);
            border-radius: 32px;
            border: 2px dashed rgba(216, 117, 127, 0.3);
            max-width: 600px;
            margin: 0 auto;
            animation: fadeIn 1s cubic-bezier(0.4, 0, 0.2, 1);
        }

        .empty-wishlist-icon {
            font-size: 6rem;
            margin-bottom: 2rem;
            opacity: 0.6;
        }

        .empty-wishlist h3 {
            font-family: 'DM Serif Display', serif;
            font-size: 2rem;
            color: var(--text-dark);
            margin-bottom: 1rem;
            font-weight: 400;
        }

        .empty-wishlist p {
            color: var(--text-mid);
            font-size: 1.1rem;
            margin-bottom: 2rem;
            line-height: 1.6;
        }

        .explore-btn {
            display: inline-block;
            padding: 1.25rem 3rem;
            background: linear-gradient(135deg, var(--moss-green), var(--sage-green));
            color: white;
            border-radius: 50px;
            font-weight: 700;
            font-size: 1.05rem;
            text-decoration: none;
            transition: all 0.4s cubic-bezier(0.4, 0, 0.2, 1);
        }

        .explore-btn:hover {
            transform: translateY(-4px);
            box-shadow: 0 12px 32px rgba(79, 119, 45, 0.35);
        }

        /* Premium Wishlist Grid */
        .wishlist-grid {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(350px, 1fr));
            gap: 3rem;
            animation: fadeIn 1s cubic-bezier(0.4, 0, 0.2, 1) 0.5s both;
        }

        @keyframes fadeIn {
            from { opacity: 0; }
            to { opacity: 1; }
        }

        .wishlist-card {
            background: white;
            border-radius: 28px;
            overflow: hidden;
            box-shadow: 0 4px 24px rgba(0, 0, 0, 0.08);
            transition: all 0.5s cubic-bezier(0.4, 0, 0.2, 1);
            position: relative;
            border: 2px solid rgba(216, 117, 127, 0.1);
        }

        .wishlist-card:hover {
            transform: translateY(-12px) scale(1.02);
            box-shadow: 0 24px 60px rgba(216, 117, 127, 0.2);
            border-color: var(--accent-red);
        }

        .wishlist-image-wrapper {
            position: relative;
            overflow: hidden;
        }

        .wishlist-image {
            width: 100%;
            height: 350px;
            background: linear-gradient(135deg, var(--warm-beige), var(--soft-cream));
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 7rem;
            position: relative;
            transition: transform 0.7s cubic-bezier(0.4, 0, 0.2, 1);
        }

        .wishlist-card:hover .wishlist-image {
            transform: scale(1.15) rotate(-3deg);
        }

        .wishlist-image::after {
            content: '';
            position: absolute;
            bottom: 0;
            left: 0;
            right: 0;
            height: 65%;
            background: linear-gradient(to top, rgba(255, 255, 255, 0.6), transparent);
            transition: opacity 0.5s ease;
        }

        .wishlist-card:hover .wishlist-image::after {
            opacity: 0.2;
        }

        /* Remove Button */
        .remove-from-wishlist {
            position: absolute;
            top: 1.5rem;
            right: 1.5rem;
            width: 56px;
            height: 56px;
            background: rgba(255, 255, 255, 0.95);
            backdrop-filter: blur(10px);
            border-radius: 50%;
            border: 2px solid var(--accent-red);
            display: flex;
            align-items: center;
            justify-content: center;
            cursor: pointer;
            transition: all 0.4s cubic-bezier(0.4, 0, 0.2, 1);
            z-index: 10;
            box-shadow: 0 4px 16px rgba(216, 117, 127, 0.3);
        }

        .remove-from-wishlist::before {
            content: '❤️';
            font-size: 2rem;
            transition: all 0.3s ease;
        }

        .remove-from-wishlist:hover {
            transform: scale(1.2) rotate(10deg);
            background: var(--accent-red);
            box-shadow: 0 8px 28px rgba(216, 117, 127, 0.5);
        }

        .remove-from-wishlist:hover::before {
            content: '💔';
        }

        .category-badge {
            position: absolute;
            top: 1.5rem;
            left: 1.5rem;
            background: rgba(255, 255, 255, 0.95);
            backdrop-filter: blur(10px);
            padding: 0.6rem 1.5rem;
            border-radius: 24px;
            font-size: 0.75rem;
            font-weight: 700;
            text-transform: uppercase;
            letter-spacing: 0.1em;
            border: 1.5px solid;
            z-index: 2;
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.08);
        }

        .category-badge.plantes {
            color: var(--forest-green);
            background: rgba(144, 169, 85, 0.25);
            border-color: var(--sage-green);
        }

        .category-badge.graines {
            color: var(--moss-green);
            background: rgba(79, 119, 45, 0.25);
            border-color: var(--moss-green);
        }

        .category-badge.outils {
            color: var(--earth-brown);
            background: rgba(139, 115, 85, 0.25);
            border-color: var(--earth-brown);
        }

        .wishlist-info {
            padding: 2.25rem;
        }

        .wishlist-name {
            font-family: 'DM Serif Display', serif;
            font-size: 1.75rem;
            color: var(--forest-green);
            margin-bottom: 0.5rem;
            font-weight: 400;
            letter-spacing: -0.01em;
            line-height: 1.3;
        }

        .wishlist-description {
            color: var(--text-mid);
            font-size: 0.95rem;
            line-height: 1.6;
            margin-bottom: 1.5rem;
        }

        .wishlist-price {
            font-size: 2rem;
            font-weight: 700;
            background: linear-gradient(135deg, var(--accent-red), var(--moss-green));
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
            margin-bottom: 1.5rem;
            display: flex;
            align-items: center;
            gap: 0.75rem;
        }

        .wishlist-price::before {
            content: '';
            width: 45px;
            height: 3px;
            background: linear-gradient(90deg, var(--accent-red), transparent);
            border-radius: 2px;
        }

        .wishlist-actions {
            display: flex;
            gap: 1rem;
        }

        .action-btn {
            flex: 1;
            padding: 1rem;
            border: none;
            border-radius: 16px;
            font-family: 'Karla', sans-serif;
            font-weight: 700;
            font-size: 0.95rem;
            cursor: pointer;
            transition: all 0.4s cubic-bezier(0.4, 0, 0.2, 1);
            display: flex;
            align-items: center;
            justify-content: center;
            gap: 0.5rem;
        }

        .btn-view {
            background: linear-gradient(135deg, var(--moss-green), var(--sage-green));
            color: white;
        }

        .btn-view:hover {
            transform: translateY(-3px);
            box-shadow: 0 8px 24px rgba(79, 119, 45, 0.35);
        }

        .btn-add-cart {
            background: white;
            color: var(--forest-green);
            border: 2px solid rgba(144, 169, 85, 0.3);
        }

        .btn-add-cart:hover {
            background: rgba(144, 169, 85, 0.1);
            border-color: var(--moss-green);
            transform: translateY(-3px);
        }

        /* Responsive */
        @media (max-width: 1024px) {
            .wishlist-grid {
                grid-template-columns: repeat(auto-fill, minmax(300px, 1fr));
                gap: 2.5rem;
            }
        }

        @media (max-width: 768px) {
            .header-container {
                flex-direction: column;
                gap: 1.5rem;
            }

            nav {
                flex-wrap: wrap;
                justify-content: center;
                gap: 1.5rem;
            }

            .wishlist-hero h1 {
                font-size: 2.75rem;
            }

            .wishlist-stats {
                gap: 1.5rem;
            }

            .wishlist-grid {
                grid-template-columns: 1fr;
                gap: 2rem;
            }

            .wishlist-actions {
                flex-direction: column;
            }
        }
    </style>
</head>
<body>
    <header>
        <div class="header-container">
            <a href="client-catalogue.html" class="logo">GreenTech Solutions</a>
            <nav>
                <a href="/index">Catalogue</a>
                <a href="#" class="active">Favoris</a>
                <a href="#">Contact</a>
            </nav>
            <a href="/" class="back-to-catalogue">
                ← Retour au Catalogue
            </a>
        </div>
    </header>

    <main>
        <section class="wishlist-hero">
            <div class="wishlist-hero-icon">❤️</div>
            <h1>Mes Produits Favoris</h1>
            <p>Votre collection personnelle de produits durables qui vous inspirent</p>
        </section>

        <div class="wishlist-grid">
            <div class="wishlist-card">
                <div class="wishlist-image-wrapper">
                    <div class="wishlist-image">🌱</div>
                    <div class="category-badge graines">Graines</div>
                    <div class="remove-from-wishlist"></div>
                </div>
                <div class="wishlist-info">
                    <h3 class="wishlist-name">Graines Bio Tomates</h3>
                    <p class="wishlist-description">Graines biologiques certifiées pour cultiver vos propres tomates savoureuses et durables.</p>
                    <div class="wishlist-price">8.50€</div>
                    <div class="wishlist-actions">
                        <button class="action-btn btn-view">👁️ Voir</button>
                        <button class="action-btn btn-add-cart">🛒 Panier</button>
                    </div>
                </div>
            </div>

            <div class="wishlist-card">
                <div class="wishlist-image-wrapper">
                    <div class="wishlist-image">🌺</div>
                    <div class="category-badge plantes">Plantes</div>
                    <div class="remove-from-wishlist"></div>
                </div>
                <div class="wishlist-info">
                    <h3 class="wishlist-name">Orchidée Phalaenopsis</h3>
                    <p class="wishlist-description">Une orchidée élégante qui apportera beauté et sérénité à votre intérieur.</p>
                    <div class="wishlist-price">45.00€</div>
                    <div class="wishlist-actions">
                        <button class="action-btn btn-view">👁️ Voir</button>
                        <button class="action-btn btn-add-cart">🛒 Panier</button>
                    </div>
                </div>
            </div>

            <div class="wishlist-card">
                <div class="wishlist-image-wrapper">
                    <div class="wishlist-image">🪴</div>
                    <div class="category-badge outils">Outils</div>
                    <div class="remove-from-wishlist"></div>
                </div>
                <div class="wishlist-info">
                    <h3 class="wishlist-name">Pot Terre Cuite Bio</h3>
                    <p class="wishlist-description">Pot artisanal en terre cuite naturelle, parfait pour vos plantes d'intérieur.</p>
                    <div class="wishlist-price">18.50€</div>
                    <div class="wishlist-actions">
                        <button class="action-btn btn-view">👁️ Voir</button>
                        <button class="action-btn btn-add-cart">🛒 Panier</button>
                    </div>
                </div>
            </div>
        </div>

        <!-- Empty State (Hidden by default - shown when no favorites) -->
        <!-- 
        <div class="empty-wishlist">
            <div class="empty-wishlist-icon">💚</div>
            <h3>Votre liste est vide</h3>
            <p>Commencez à ajouter vos produits préférés pour créer votre collection personnelle de produits durables.</p>
            <a href="client-catalogue.html" class="explore-btn">Explorer les Produits</a>
        </div>
        -->
    </main>
</body>
</html>