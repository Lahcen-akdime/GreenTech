<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fougère d'Intérieur - GreenTech Solutions</title>
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
        }

        .header-container {
            max-width: 1400px;
            margin: 0 auto;
            padding: 1.5rem 2rem;
            display: flex;
            align-items: center;
            justify-content: space-between;
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
        }

        .back-link {
            display: inline-flex;
            align-items: center;
            gap: 0.5rem;
            color: var(--text-mid);
            text-decoration: none;
            font-weight: 500;
            padding: 0.75rem 1.5rem;
            border-radius: 50px;
            border: 2px solid rgba(144, 169, 85, 0.3);
            transition: all 0.3s ease;
            background: transparent;
        }

        .back-link:hover {
            background: var(--moss-green);
            color: white;
            border-color: var(--moss-green);
            transform: translateX(-4px);
        }

        .back-link::before {
            content: '←';
            font-size: 1.2rem;
        }

        /* Main Content */
        main {
            max-width: 1200px;
            margin: 0 auto;
            padding: 3rem 2rem;
            position: relative;
            z-index: 1;
        }

        .product-detail-container {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 4rem;
            background: rgba(255, 255, 255, 0.7);
            backdrop-filter: blur(10px);
            padding: 3rem;
            border-radius: 32px;
            border: 1px solid rgba(144, 169, 85, 0.2);
            box-shadow: 0 8px 40px rgba(0, 0, 0, 0.08);
            animation: fadeInScale 0.6s ease-out;
        }

        @keyframes fadeInScale {
            from { opacity: 0; transform: scale(0.95); }
            to { opacity: 1; transform: scale(1); }
        }

        .product-image-large {
            width: 100%;
            height: 500px;
            background: linear-gradient(135deg, var(--warm-beige), var(--soft-cream));
            border-radius: 24px;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 12rem;
            position: relative;
            overflow: hidden;
            border: 1px solid rgba(144, 169, 85, 0.2);
        }

        .product-image-large::after {
            content: '';
            position: absolute;
            bottom: 0;
            left: 0;
            right: 0;
            height: 40%;
            background: linear-gradient(to top, rgba(255, 255, 255, 0.5), transparent);
        }

        .product-details {
            display: flex;
            flex-direction: column;
            gap: 1.5rem;
        }

        .category-badge {
            display: inline-block;
            background: rgba(144, 169, 85, 0.2);
            padding: 0.5rem 1.25rem;
            border-radius: 20px;
            font-size: 0.8rem;
            font-weight: 600;
            text-transform: uppercase;
            letter-spacing: 0.1em;
            color: var(--forest-green);
            border: 1px solid var(--sage-green);
            width: fit-content;
        }

        .product-name {
            font-family: 'DM Serif Display', serif;
            font-size: 3rem;
            color: var(--forest-green);
            line-height: 1.2;
            font-weight: 400;
            margin: 0.5rem 0;
        }

        .product-price {
            font-size: 2.5rem;
            font-weight: 600;
            color: var(--moss-green);
            display: flex;
            align-items: center;
            gap: 1rem;
        }

        .product-price::before {
            content: '';
            display: inline-block;
            width: 50px;
            height: 3px;
            background: linear-gradient(90deg, var(--sage-green), transparent);
        }

        .stock-status {
            display: inline-flex;
            align-items: center;
            gap: 0.5rem;
            padding: 0.75rem 1.5rem;
            border-radius: 50px;
            font-weight: 600;
            font-size: 0.95rem;
            width: fit-content;
        }

        .stock-status.in-stock {
            background: rgba(79, 119, 45, 0.15);
            color: var(--moss-green);
            border: 2px solid var(--moss-green);
        }

        .stock-status.in-stock::before {
            content: '●';
            font-size: 1.2rem;
            animation: pulse 2s ease-in-out infinite;
        }

        @keyframes pulse {
            0%, 100% { opacity: 1; }
            50% { opacity: 0.5; }
        }

        .stock-status.out-of-stock {
            background: rgba(200, 100, 100, 0.15);
            color: #c84040;
            border: 2px solid #c84040;
        }

        .stock-status.out-of-stock::before {
            content: '○';
            font-size: 1.2rem;
        }

        .divider {
            width: 100%;
            height: 1px;
            background: linear-gradient(90deg, transparent, rgba(144, 169, 85, 0.3), transparent);
            margin: 1rem 0;
        }

        .description-section h3 {
            font-family: 'DM Serif Display', serif;
            font-size: 1.5rem;
            color: var(--forest-green);
            margin-bottom: 1rem;
            font-weight: 400;
        }

        .description-section p {
            color: var(--text-mid);
            line-height: 1.8;
            font-size: 1.05rem;
            font-weight: 300;
        }

        .product-features {
            background: rgba(144, 169, 85, 0.05);
            padding: 1.5rem;
            border-radius: 16px;
            border: 1px solid rgba(144, 169, 85, 0.2);
        }

        .product-features h4 {
            font-size: 0.9rem;
            text-transform: uppercase;
            letter-spacing: 0.1em;
            color: var(--text-mid);
            margin-bottom: 1rem;
            font-weight: 600;
        }

        .feature-list {
            display: flex;
            flex-direction: column;
            gap: 0.75rem;
        }

        .feature-item {
            display: flex;
            align-items: center;
            gap: 0.75rem;
            color: var(--text-dark);
            font-size: 0.95rem;
        }

        .feature-item::before {
            content: '✓';
            color: var(--moss-green);
            font-weight: bold;
            font-size: 1.2rem;
        }

        /* Responsive */
        @media (max-width: 1024px) {
            .product-detail-container {
                grid-template-columns: 1fr;
                gap: 2rem;
            }

            .product-image-large {
                height: 400px;
            }
        }

        @media (max-width: 768px) {
            .header-container {
                flex-direction: column;
                gap: 1rem;
            }

            .product-name {
                font-size: 2rem;
            }

            .product-price {
                font-size: 2rem;
            }

            .product-image-large {
                font-size: 8rem;
            }
        }
    </style>
</head>
<body>
    <header>
        <div class="header-container">
            <div class="logo">GreenTech Solutions</div>
            <a href="index.html" class="back-link">Back to Catalogue</a>
        </div>
    </header>

    <main>
        <div class="product-detail-container">
            <div class="product-image-large">🌿</div>
            
            <div class="product-details">
                <div class="category-badge">Plantes</div>
                
                <h1 class="product-name">{{$theproduct->name}}</h1>
                
                <div class="product-price">{{$theproduct->price}}€</div>
                
                <div class="stock-status in-stock">stock : {{$theproduct->stock}} </div>
                
                <div class="divider"></div>
                
                <div class="description-section">
                    <h3>Description</h3>
                    <p>
                       {{$theproduct->description}}
                    </p>
                </div>
                
                <div class="product-features">
                    <h4>Caractéristiques</h4>
                    <div class="feature-list">
                        <div class="feature-item">Hauteur: 30-40 cm</div>
                        <div class="feature-item">Lumière: Mi-ombre</div>
                        <div class="feature-item">Arrosage: Régulier</div>
                        <div class="feature-item">Purifie l'air naturellement</div>
                        <div class="feature-item">Cultivée de manière durable</div>
                        <div class="feature-item">Pot biodégradable inclus</div>
                    </div>
                </div>
            </div>
        </div>
    </main>
</body>
</html>