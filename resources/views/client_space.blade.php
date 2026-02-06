<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Catalogue - GreenTech Solutions</title>
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
        }

        /* Organic background with gradient mesh effect */
        body::before {
            content: '';
            position: fixed;
            top: -50%;
            right: -20%;
            width: 1000px;
            height: 1000px;
            background: radial-gradient(ellipse at 30% 40%, rgba(144, 169, 85, 0.15) 0%, transparent 50%),
                radial-gradient(ellipse at 70% 60%, rgba(79, 119, 45, 0.1) 0%, transparent 50%);
            border-radius: 50%;
            z-index: 0;
            animation: morphGradient 25s ease-in-out infinite alternate;
            filter: blur(60px);
        }

        body::after {
            content: '';
            position: fixed;
            bottom: -40%;
            left: -15%;
            width: 800px;
            height: 800px;
            background: radial-gradient(ellipse at 60% 50%, rgba(216, 117, 127, 0.08) 0%, transparent 50%),
                radial-gradient(ellipse at 40% 60%, rgba(144, 169, 85, 0.12) 0%, transparent 50%);
            border-radius: 50%;
            z-index: 0;
            animation: morphGradient 30s ease-in-out infinite alternate-reverse;
            filter: blur(70px);
        }

        @keyframes morphGradient {

            0%,
            100% {
                transform: translate(0, 0) scale(1) rotate(0deg);
            }

            50% {
                transform: translate(40px, -40px) scale(1.1) rotate(5deg);
            }
        }

        /* Header with glassmorphism */
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
            from {
                transform: translateY(-100%);
                opacity: 0;
            }

            to {
                transform: translateY(0);
                opacity: 1;
            }
        }

        .header-container {
            max-width: 1400px;
            margin: 0 auto;
            padding: 1.75rem 2.5rem;
            display: flex;
            align-items: center;
            justify-content: space-between;
            gap: 3rem;
            position: relative;
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
        }

        .logo::before {
            content: '🌱';
            font-size: 2.5rem;
            -webkit-text-fill-color: initial;
            animation: leafPulse 3s ease-in-out infinite;
        }

        @keyframes leafPulse {

            0%,
            100% {
                transform: scale(1) rotate(0deg);
            }

            50% {
                transform: scale(1.15) rotate(5deg);
            }
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
            background: linear-gradient(90deg, var(--moss-green), var(--sage-green));
            border-radius: 2px;
            transition: width 0.5s cubic-bezier(0.4, 0, 0.2, 1);
        }

        nav a:hover {
            color: var(--forest-green);
        }

        nav a:hover::after {
            width: 100%;
        }

        nav a.active {
            color: var(--forest-green);
            font-weight: 700;
        }

        nav a.active::after {
            width: 100%;
        }

        /* Enhanced header actions */
        .header-actions {
            display: flex;
            align-items: center;
            gap: 1.5rem;
        }

        .search-bar {
            position: relative;
            width: 350px;
        }

        .search-bar input {
            width: 100%;
            padding: 0.9rem 1.25rem 0.9rem 3rem;
            border: 2px solid rgba(144, 169, 85, 0.25);
            border-radius: 50px;
            background: rgba(255, 255, 255, 0.6);
            backdrop-filter: blur(10px);
            font-family: 'Karla', sans-serif;
            font-size: 0.95rem;
            transition: all 0.4s cubic-bezier(0.4, 0, 0.2, 1);
            outline: none;
            color: var(--text-dark);
        }

        .search-bar input:focus {
            border-color: var(--moss-green);
            background: white;
            box-shadow: 0 0 0 4px rgba(79, 119, 45, 0.08), 0 8px 24px rgba(79, 119, 45, 0.12);
            transform: translateY(-1px);
        }

        .search-bar::before {
            content: '🔍';
            position: absolute;
            left: 1.25rem;
            top: 50%;
            transform: translateY(-50%);
            font-size: 1.1rem;
            pointer-events: none;
        }

        .wishlist-btn {
            position: relative;
            padding: 0.9rem 1.5rem;
            background: rgba(255, 255, 255, 0.6);
            backdrop-filter: blur(10px);
            border: 2px solid rgba(216, 117, 127, 0.3);
            border-radius: 50px;
            color: var(--accent-red);
            font-weight: 700;
            font-size: 0.95rem;
            cursor: pointer;
            transition: all 0.4s cubic-bezier(0.4, 0, 0.2, 1);
            display: flex;
            align-items: center;
            gap: 0.5rem;
            text-decoration: none;
        }

        .wishlist-btn:hover {
            background: var(--accent-red);
            color: white;
            border-color: var(--accent-red);
            transform: translateY(-2px);
            box-shadow: 0 8px 24px rgba(216, 117, 127, 0.3);
        }

        .wishlist-count {
            background: var(--accent-red);
            color: white;
            width: 24px;
            height: 24px;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 0.75rem;
            font-weight: 700;
            transition: all 0.3s ease;
        }

        .wishlist-btn:hover .wishlist-count {
            background: white;
            color: var(--accent-red);
        }

        /* Main Content */
        main {
            max-width: 1400px;
            margin: 0 auto;
            padding: 4rem 2.5rem;
            position: relative;
            z-index: 1;
        }

        .hero-section {
            text-align: center;
            margin-bottom: 5rem;
            animation: fadeInUp 1s cubic-bezier(0.4, 0, 0.2, 1) 0.3s both;
        }

        @keyframes fadeInUp {
            from {
                opacity: 0;
                transform: translateY(40px);
            }

            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        .hero-section h1 {
            font-family: 'DM Serif Display', serif;
            font-size: 4rem;
            background: linear-gradient(135deg, var(--forest-green) 0%, var(--moss-green) 50%, var(--sage-green) 100%);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
            margin-bottom: 1.25rem;
            line-height: 1.15;
            font-weight: 400;
            letter-spacing: -0.02em;
        }

        .hero-section p {
            font-size: 1.25rem;
            color: var(--text-mid);
            max-width: 650px;
            margin: 0 auto;
            font-weight: 300;
            line-height: 1.7;
        }

        /* Enhanced Filter Sidebar */
        .content-wrapper {
            display: grid;
            grid-template-columns: 300px 1fr;
            gap: 3.5rem;
            align-items: start;
        }

        .filter-sidebar {
            background: rgba(255, 255, 255, 0.5);
            backdrop-filter: blur(20px) saturate(180%);
            padding: 2.5rem;
            border-radius: 28px;
            border: 1px solid rgba(144, 169, 85, 0.15);
            position: sticky;
            top: 140px;
            animation: fadeInLeft 1s cubic-bezier(0.4, 0, 0.2, 1) 0.5s both;
            box-shadow: 0 8px 32px rgba(0, 0, 0, 0.06);
        }

        @keyframes fadeInLeft {
            from {
                opacity: 0;
                transform: translateX(-40px);
            }

            to {
                opacity: 1;
                transform: translateX(0);
            }
        }

        .filter-sidebar h3 {
            font-family: 'DM Serif Display', serif;
            font-size: 1.75rem;
            color: var(--forest-green);
            margin-bottom: 2rem;
            font-weight: 400;
            letter-spacing: -0.01em;
        }

        .filter-group {
            margin-bottom: 2.5rem;
        }

        .filter-group h4 {
            font-size: 0.8rem;
            text-transform: uppercase;
            letter-spacing: 0.12em;
            color: var(--text-mid);
            margin-bottom: 1.25rem;
            font-weight: 700;
        }

        .filter-option {
            padding: 1rem 1.25rem;
            margin-bottom: 0.75rem;
            border-radius: 16px;
            cursor: pointer;
            transition: all 0.4s cubic-bezier(0.4, 0, 0.2, 1);
            background: transparent;
            border: 1.5px solid transparent;
            display: flex;
            align-items: center;
            gap: 0.75rem;
            font-size: 1rem;
            color: var(--text-dark);
            font-weight: 500;
        }

        .filter-option:hover {
            background: rgba(144, 169, 85, 0.08);
            border-color: rgba(144, 169, 85, 0.25);
            transform: translateX(6px);
        }

        .filter-option.active {
            background: linear-gradient(135deg, var(--moss-green), var(--sage-green));
            color: white;
            font-weight: 700;
            box-shadow: 0 6px 20px rgba(79, 119, 45, 0.25);
            border-color: transparent;
        }

        .filter-option::before {
            content: '';
            width: 20px;
            height: 20px;
            border: 2px solid currentColor;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            transition: all 0.3s ease;
            flex-shrink: 0;
        }

        .filter-option.active::before {
            background: white;
            border-color: white;
            box-shadow: inset 0 0 0 5px var(--moss-green);
        }

        /* Premium Product Grid */
        .product-grid {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(320px, 1fr));
            gap: 2.5rem;
            animation: fadeIn 1s cubic-bezier(0.4, 0, 0.2, 1) 0.7s both;
        }

        @keyframes fadeIn {
            from {
                opacity: 0;
            }

            to {
                opacity: 1;
            }
        }

        .product-card {
            background: white;
            border-radius: 24px;
            overflow: hidden;
            box-shadow: 0 4px 24px rgba(0, 0, 0, 0.06);
            transition: all 0.5s cubic-bezier(0.4, 0, 0.2, 1);
            position: relative;
            cursor: pointer;
            border: 1px solid rgba(144, 169, 85, 0.08);
        }

        .product-card:hover {
            transform: translateY(-12px) scale(1.02);
            box-shadow: 0 20px 50px rgba(79, 119, 45, 0.18);
            border-color: rgba(144, 169, 85, 0.2);
        }

        .product-image-wrapper {
            position: relative;
            overflow: hidden;
        }

        .product-image {
            width: 100%;
            height: 280px;
            background: linear-gradient(135deg, var(--warm-beige), var(--soft-cream));
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 6rem;
            position: relative;
            transition: transform 0.6s cubic-bezier(0.4, 0, 0.2, 1);
        }

        .product-card:hover .product-image {
            transform: scale(1.1) rotate(2deg);
        }

        .product-image::after {
            content: '';
            position: absolute;
            bottom: 0;
            left: 0;
            right: 0;
            height: 20%;
            background: linear-gradient(to top, rgba(255, 255, 255, 0.5), transparent);
            transition: opacity 0.5s ease;
        }

        .product-card:hover .product-image::after {
            opacity: 0.3;
        }

        /* Heart Button - Premium Style */
        .wishlist-heart {
            position: absolute;
            top: 1.25rem;
            right: 1.25rem;
            width: 52px;
            height: 52px;
            background: rgba(255, 255, 255, 0.95);
            backdrop-filter: blur(10px);
            border-radius: 50%;
            border: 2px solid rgba(216, 117, 127, 0.2);
            display: flex;
            align-items: center;
            justify-content: center;
            cursor: pointer;
            transition: all 0.4s cubic-bezier(0.4, 0, 0.2, 1);
            z-index: 10;
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.08);
        }

        .wishlist-heart:hover {
            transform: scale(1.15) rotate(-5deg);
            background: white;
            border-color: var(--accent-red);
            box-shadow: 0 8px 24px rgba(216, 117, 127, 0.3);
        }

        .wishlist-heart::before {
            /* content: '🤍'; */
            font-size: 1.75rem;
            transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1);
        }

        .wishlist-heart.active::before {
            /* content: '❤️'; */
            animation: heartBeat 0.6s ease;
        }

        @keyframes heartBeat {

            0%,
            100% {
                transform: scale(1);
            }

            25% {
                transform: scale(1.3);
            }

            50% {
                transform: scale(0.9);
            }

            75% {
                transform: scale(1.2);
            }
        }

        .wishlist-heart.active {
            background: rgba(216, 117, 127, 0.15);
            border-color: var(--accent-red);
        }

        .category-badge {
            position: absolute;
            top: 1.25rem;
            left: 1.25rem;
            background: rgba(255, 255, 255, 0.95);
            backdrop-filter: blur(10px);
            padding: 0.5rem 1.25rem;
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

        .product-info {
            padding: 2rem;
        }

        .product-name {
            font-family: 'DM Serif Display', serif;
            font-size: 1.5rem;
            color: var(--forest-green);
            margin-bottom: 0.75rem;
            font-weight: 400;
            letter-spacing: -0.01em;
            line-height: 1.3;
        }

        .product-price {
            font-size: 1.75rem;
            font-weight: 700;
            background: linear-gradient(135deg, var(--moss-green), var(--sage-green));
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
            display: flex;
            align-items: center;
            gap: 0.75rem;
        }

        .product-price::before {
            content: '';
            width: 40px;
            height: 3px;
            background: linear-gradient(90deg, var(--sage-green), transparent);
            border-radius: 2px;
        }

        /* Responsive */
        @media (max-width: 1200px) {
            .content-wrapper {
                grid-template-columns: 280px 1fr;
                gap: 2.5rem;
            }

            .product-grid {
                grid-template-columns: repeat(auto-fill, minmax(280px, 1fr));
            }
        }

        @media (max-width: 1024px) {
            .content-wrapper {
                grid-template-columns: 1fr;
            }

            .filter-sidebar {
                position: static;
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

            .header-actions {
                width: 100%;
                flex-direction: column;
            }

            .search-bar {
                width: 100%;
            }

            .hero-section h1 {
                font-size: 2.5rem;
            }

            .product-grid {
                grid-template-columns: 1fr;
            }
        }
    </style>
</head>

<body>
    <header>
        <div class="header-container">
            <div class="logo">GreenTech Solutions</div>
            <nav>
                <a href="#" class="active">Catalogue</a>
                <a href="/logout">Logout</a>
            </nav>
            <h4>Welcome {{$username}} !!</h4>
            <div class="header-actions">
                <div class="search-bar">
                    <input type="text" placeholder="Rechercher des produits durables...">
                </div>
                <a href="/show" class="wishlist-btn">
                    ❤️ Favoris
                </a>
            </div>
        </div>
    </header>

    <main>
        <section class="hero-section">
            <h1>Cultivez Votre Avenir Vert</h1>
            <p>Découvrez notre collection soigneusement sélectionnée de produits de jardinage durables conçus pour nourrir la nature</p>
        </section>

        <div class="content-wrapper">
            <aside class="filter-sidebar">
                <h3>Catégories</h3>
                <div class="filter-group">
                    <h4>Filtrer par Type</h4>
                    <div class="filter-option active">Tous les Produits</div>
                    <div class="filter-option active">Plantes</div>
                    <div class="filter-option active">Graines</div>
                    <div class="filter-option active">Outils</div>
                </div>
            </aside>

            <div class="product-grid">
                @foreach($products as $product)
                <div class="product-card">
                    <div class="product-image-wrapper">
                        <div class="product-image">🌿</div>
                        <div class="category-badge plantes">{{$product->category->title}}</div>
                        <a href="/like/{{$product->id}}" class="wishlist-heart">🤍</a>
                        <!-- <div class="wishlist-hero-icon">❤️</div> -->
                    </div>
                    <div class="product-info">
                        <h3 class="product-name">{{$product->name}}</h3>
                        <div class="product-price">{{$product->stock}}€</div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </main>
</body>

</html>