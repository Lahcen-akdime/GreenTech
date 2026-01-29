<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GreenTech Solutions - Sustainable Gardening Products</title>
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
            --earth-brown: #8b7355;
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
            background: linear-gradient(135deg, var(--soft-cream) 0%, var(--warm-beige) 100%);
            color: var(--text-dark);
            position: relative;
            overflow-x: hidden;
        }

        /* Organic background decoration */
        body::before {
            content: '';
            position: fixed;
            top: -50%;
            right: -10%;
            width: 800px;
            height: 800px;
            background: radial-gradient(circle, rgba(144, 169, 85, 0.1) 0%, transparent 70%);
            border-radius: 50%;
            z-index: 0;
            animation: float 20s ease-in-out infinite;
        }

        body::after {
            content: '';
            position: fixed;
            bottom: -30%;
            left: -15%;
            width: 600px;
            height: 600px;
            background: radial-gradient(circle, rgba(79, 119, 45, 0.08) 0%, transparent 70%);
            border-radius: 50%;
            z-index: 0;
            animation: float 25s ease-in-out infinite reverse;
        }

        @keyframes float {
            0%, 100% { transform: translate(0, 0) scale(1); }
            50% { transform: translate(30px, -30px) scale(1.05); }
        }

        /* Header */
        header {
            background: rgba(255, 255, 255, 0.95);
            backdrop-filter: blur(10px);
            border-bottom: 1px solid rgba(144, 169, 85, 0.2);
            position: sticky;
            top: 0;
            z-index: 100;
            animation: slideDown 0.6s ease-out;
        }

        @keyframes slideDown {
            from { transform: translateY(-100%); opacity: 0; }
            to { transform: translateY(0); opacity: 1; }
        }

        .header-container {
            max-width: 1400px;
            margin: 0 auto;
            padding: 1.5rem 2rem;
            display: flex;
            align-items: center;
            justify-content: space-between;
            position: relative;
        }

        .logo {
            font-family: 'DM Serif Display', serif;
            font-size: 1.8rem;
            color: var(--forest-green);
            display: flex;
            align-items: center;
            gap: 0.5rem;
            font-weight: 400;
            letter-spacing: -0.02em;
        }

        .logo::before {
            content: '🌱';
            font-size: 2rem;
            animation: grow 2s ease-in-out infinite;
        }

        @keyframes grow {
            0%, 100% { transform: scale(1); }
            50% { transform: scale(1.1); }
        }

        nav {
            display: flex;
            gap: 2.5rem;
            align-items: center;
        }

        nav a {
            color: var(--text-mid);
            text-decoration: none;
            font-weight: 500;
            font-size: 0.95rem;
            letter-spacing: 0.02em;
            position: relative;
            padding: 0.5rem 0;
            transition: color 0.3s ease;
        }

        nav a::after {
            content: '';
            position: absolute;
            bottom: 0;
            left: 0;
            width: 0;
            height: 2px;
            background: linear-gradient(90deg, var(--moss-green), var(--sage-green));
            transition: width 0.4s cubic-bezier(0.4, 0, 0.2, 1);
        }

        nav a:hover {
            color: var(--forest-green);
        }

        nav a:hover::after {
            width: 100%;
        }

        nav a.active {
            color: var(--forest-green);
            font-weight: 600;
        }

        nav a.active::after {
            width: 100%;
        }

        .search-bar {
            position: relative;
            width: 300px;
        }

        .search-bar input {
            width: 100%;
            padding: 0.75rem 1rem 0.75rem 2.5rem;
            border: 2px solid rgba(144, 169, 85, 0.3);
            border-radius: 50px;
            background: var(--soft-cream);
            font-family: 'Karla', sans-serif;
            font-size: 0.9rem;
            transition: all 0.3s ease;
            outline: none;
        }

        .search-bar input:focus {
            border-color: var(--moss-green);
            box-shadow: 0 0 0 3px rgba(79, 119, 45, 0.1);
        }

        .search-bar::before {
            content: '🔍';
            position: absolute;
            left: 1rem;
            top: 50%;
            transform: translateY(-50%);
            font-size: 1rem;
        }

        /* Main Content */
        main {
            max-width: 1400px;
            margin: 0 auto;
            padding: 3rem 2rem;
            position: relative;
            z-index: 1;
        }

        .hero-section {
            text-align: center;
            margin-bottom: 4rem;
            animation: fadeInUp 0.8s ease-out 0.3s both;
        }

        @keyframes fadeInUp {
            from { opacity: 0; transform: translateY(30px); }
            to { opacity: 1; transform: translateY(0); }
        }

        .hero-section h1 {
            font-family: 'DM Serif Display', serif;
            font-size: 3.5rem;
            color: var(--forest-green);
            margin-bottom: 1rem;
            line-height: 1.2;
            font-weight: 400;
        }

        .hero-section p {
            font-size: 1.2rem;
            color: var(--text-mid);
            max-width: 600px;
            margin: 0 auto;
            font-weight: 300;
            line-height: 1.6;
        }

        /* Filter Sidebar */
        .content-wrapper {
            display: grid;
            grid-template-columns: 280px 1fr;
            gap: 3rem;
            align-items: start;
        }

        .filter-sidebar {
            background: rgba(255, 255, 255, 0.7);
            backdrop-filter: blur(10px);
            padding: 2rem;
            border-radius: 24px;
            border: 1px solid rgba(144, 169, 85, 0.2);
            position: sticky;
            top: 120px;
            animation: fadeInLeft 0.8s ease-out 0.5s both;
        }

        @keyframes fadeInLeft {
            from { opacity: 0; transform: translateX(-30px); }
            to { opacity: 1; transform: translateX(0); }
        }

        .filter-sidebar h3 {
            font-family: 'DM Serif Display', serif;
            font-size: 1.5rem;
            color: var(--forest-green);
            margin-bottom: 1.5rem;
            font-weight: 400;
        }

        .filter-group {
            margin-bottom: 2rem;
        }

        .filter-group h4 {
            font-size: 0.85rem;
            text-transform: uppercase;
            letter-spacing: 0.1em;
            color: var(--text-mid);
            margin-bottom: 1rem;
            font-weight: 600;
        }

        .filter-option {
            padding: 0.75rem 1rem;
            margin-bottom: 0.5rem;
            border-radius: 12px;
            cursor: pointer;
            transition: all 0.3s ease;
            background: transparent;
            border: 1px solid transparent;
            display: flex;
            align-items: center;
            gap: 0.5rem;
            font-size: 0.95rem;
            color: var(--text-dark);
        }

        .filter-option:hover {
            background: rgba(144, 169, 85, 0.1);
            border-color: rgba(144, 169, 85, 0.3);
            transform: translateX(4px);
        }

        .filter-option.active {
            background: linear-gradient(135deg, var(--moss-green), var(--sage-green));
            color: white;
            font-weight: 600;
            box-shadow: 0 4px 12px rgba(79, 119, 45, 0.3);
        }

        .filter-option::before {
            content: '○';
            font-size: 1.2rem;
            transition: content 0.3s ease;
        }

        .filter-option.active::before {
            content: '●';
        }

        /* Product Grid */
        .product-grid {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(300px, 1fr));
            gap: 2rem;
            animation: fadeIn 0.8s ease-out 0.7s both;
        }

        @keyframes fadeIn {
            from { opacity: 0; }
            to { opacity: 1; }
        }

        .product-card {
            background: white;
            border-radius: 20px;
            overflow: hidden;
            box-shadow: 0 4px 20px rgba(0, 0, 0, 0.08);
            transition: all 0.4s cubic-bezier(0.4, 0, 0.2, 1);
            position: relative;
            cursor: pointer;
            border: 1px solid rgba(144, 169, 85, 0.1);
        }

        .product-card:hover {
            transform: translateY(-8px);
            box-shadow: 0 12px 40px rgba(79, 119, 45, 0.2);
        }

        .product-image {
            width: 100%;
            height: 280px;
            background: linear-gradient(135deg, var(--warm-beige), var(--soft-cream));
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 5rem;
            position: relative;
            overflow: hidden;
        }

        .product-image::after {
            content: '';
            position: absolute;
            bottom: 0;
            left: 0;
            right: 0;
            height: 50%;
            background: linear-gradient(to top, rgba(255, 255, 255, 0.4), transparent);
        }

        .product-card:hover .product-image {
            transform: scale(1.05);
        }

        .product-image {
            transition: transform 0.6s cubic-bezier(0.4, 0, 0.2, 1);
        }

        .category-badge {
            position: absolute;
            top: 1rem;
            right: 1rem;
            background: rgba(255, 255, 255, 0.95);
            backdrop-filter: blur(10px);
            padding: 0.4rem 1rem;
            border-radius: 20px;
            font-size: 0.75rem;
            font-weight: 600;
            text-transform: uppercase;
            letter-spacing: 0.08em;
            border: 1px solid rgba(144, 169, 85, 0.3);
            z-index: 2;
        }

        .category-badge.plantes {
            color: var(--forest-green);
            background: rgba(144, 169, 85, 0.2);
            border-color: var(--sage-green);
        }

        .category-badge.graines {
            color: var(--moss-green);
            background: rgba(79, 119, 45, 0.2);
            border-color: var(--moss-green);
        }

        .category-badge.outils {
            color: var(--earth-brown);
            background: rgba(139, 115, 85, 0.2);
            border-color: var(--earth-brown);
        }

        .product-info {
            padding: 1.5rem;
        }

        .product-name {
            font-family: 'DM Serif Display', serif;
            font-size: 1.3rem;
            color: var(--forest-green);
            margin-bottom: 0.5rem;
            font-weight: 400;
        }

        .product-price {
            font-size: 1.5rem;
            font-weight: 600;
            color: var(--moss-green);
            margin-bottom: 0.75rem;
        }

        .product-price::before {
            content: '';
            display: inline-block;
            width: 30px;
            height: 2px;
            background: linear-gradient(90deg, var(--sage-green), transparent);
            margin-right: 0.5rem;
            vertical-align: middle;
        }

        /* Pagination */
        .pagination {
            display: flex;
            justify-content: center;
            gap: 1rem;
            margin-top: 4rem;
            animation: fadeInUp 0.8s ease-out 0.9s both;
        }

        .pagination button {
            padding: 0.75rem 1.5rem;
            border: 2px solid var(--sage-green);
            background: transparent;
            border-radius: 50px;
            font-family: 'Karla', sans-serif;
            font-weight: 600;
            font-size: 0.95rem;
            color: var(--forest-green);
            cursor: pointer;
            transition: all 0.3s ease;
            letter-spacing: 0.02em;
        }

        .pagination button:hover {
            background: var(--moss-green);
            color: white;
            border-color: var(--moss-green);
            transform: translateY(-2px);
            box-shadow: 0 4px 12px rgba(79, 119, 45, 0.3);
        }

        .pagination button.active {
            background: linear-gradient(135deg, var(--moss-green), var(--sage-green));
            color: white;
            border-color: var(--moss-green);
        }

        .pagination button:disabled {
            opacity: 0.4;
            cursor: not-allowed;
        }

        .pagination button:disabled:hover {
            transform: none;
            background: transparent;
            color: var(--forest-green);
            box-shadow: none;
        }

        /* Responsive */
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
                <a href="#" class="active">All Products</a>
                <a href="#">Plantes</a>
                <a href="#">Graines</a>
                <a href="#">Outils</a>
            </nav>
            <div class="search-bar">
                <input type="text" placeholder="Search sustainable products...">
            </div>
        </div>
    </header>

    <main>
        <section class="hero-section">
            <h1>Cultivate Your Green Future</h1>
            <p>Discover our curated collection of sustainable gardening products designed to nurture nature</p>
        </section>

        <div class="content-wrapper">
            <aside class="filter-sidebar">
                <h3>Categories</h3>
                <div class="filter-group">
                    <h4>Filter by Type</h4>
                    <div class="filter-option active">All Products</div>
                    <div class="filter-option">Plantes</div>
                    <div class="filter-option">Graines</div>
                    <div class="filter-option">Outils</div>
                </div>
            </aside>

            <div class="product-grid">
                <div class="product-card">
                    <div class="product-image">🌿</div>
                    <div class="category-badge plantes">Plantes</div>
                    <div class="product-info">
                        <h3 class="product-name">Fougère d'Intérieur</h3>
                        <div class="product-price">24.99€</div>
                    </div>
                </div>

                <div class="product-card">
                    <div class="product-image">🌱</div>
                    <div class="category-badge graines">Graines</div>
                    <div class="product-info">
                        <h3 class="product-name">Graines Bio Tomates</h3>
                        <div class="product-price">8.50€</div>
                    </div>
                </div>

                <div class="product-card">
                    <div class="product-image">🔧</div>
                    <div class="category-badge outils">Outils</div>
                    <div class="product-info">
                        <h3 class="product-name">Sécateur Ergonomique</h3>
                        <div class="product-price">32.00€</div>
                    </div>
                </div>

                <div class="product-card">
                    <div class="product-image">🌺</div>
                    <div class="category-badge plantes">Plantes</div>
                    <div class="product-info">
                        <h3 class="product-name">Orchidée Phalaenopsis</h3>
                        <div class="product-price">45.00€</div>
                    </div>
                </div>

                <div class="product-card">
                    <div class="product-image">🌾</div>
                    <div class="category-badge graines">Graines</div>
                    <div class="product-info">
                        <h3 class="product-name">Graines Aromates Mix</h3>
                        <div class="product-price">12.99€</div>
                    </div>
                </div>

                <div class="product-card">
                    <div class="product-image">🪴</div>
                    <div class="category-badge outils">Outils</div>
                    <div class="product-info">
                        <h3 class="product-name">Pot Terre Cuite Bio</h3>
                        <div class="product-price">18.50€</div>
                    </div>
                </div>

                <div class="product-card">
                    <div class="product-image">🌵</div>
                    <div class="category-badge plantes">Plantes</div>
                    <div class="product-info">
                        <h3 class="product-name">Cactus Collection</h3>
                        <div class="product-price">29.99€</div>
                    </div>
                </div>

                <div class="product-card">
                    <div class="product-image">🌻</div>
                    <div class="category-badge graines">Graines</div>
                    <div class="product-info">
                        <h3 class="product-name">Graines Tournesol Bio</h3>
                        <div class="product-price">6.75€</div>
                    </div>
                </div>

                <div class="product-card">
                    <div class="product-image">🧤</div>
                    <div class="category-badge outils">Outils</div>
                    <div class="product-info">
                        <h3 class="product-name">Gants de Jardinage</h3>
                        <div class="product-price">15.00€</div>
                    </div>
                </div>
            </div>
        </div>

        <div class="pagination">
            <button disabled>← Previous</button>
            <button class="active">1</button>
            <button>2</button>
            <button>3</button>
            <button>Next →</button>
        </div>
    </main>
</body>
</html>