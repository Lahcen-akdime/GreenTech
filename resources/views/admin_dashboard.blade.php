<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard - GreenTech Admin</title>
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
            --sidebar-width: 280px;
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
            display: flex;
            min-height: 100vh;
        }

        /* Sidebar */
        .sidebar {
            width: var(--sidebar-width);
            background: linear-gradient(180deg, var(--forest-green) 0%, var(--moss-green) 100%);
            padding: 2rem 0;
            display: flex;
            flex-direction: column;
            position: fixed;
            height: 100vh;
            left: 0;
            top: 0;
            box-shadow: 4px 0 20px rgba(0, 0, 0, 0.1);
            z-index: 100;
        }

        .sidebar-logo {
            padding: 0 2rem;
            margin-bottom: 3rem;
        }

        .sidebar-logo-text {
            font-family: 'DM Serif Display', serif;
            font-size: 1.5rem;
            color: white;
            display: flex;
            align-items: center;
            gap: 0.5rem;
            font-weight: 400;
        }

        .sidebar-logo-text::before {
            content: '🌱';
            font-size: 2rem;
        }

        .sidebar-nav {
            flex: 1;
            display: flex;
            flex-direction: column;
            gap: 0.5rem;
            padding: 0 1rem;
        }

        .nav-item {
            display: flex;
            align-items: center;
            gap: 1rem;
            padding: 1rem 1.5rem;
            color: rgba(255, 255, 255, 0.7);
            text-decoration: none;
            border-radius: 16px;
            transition: all 0.3s ease;
            font-weight: 500;
            font-size: 0.95rem;
        }

        .nav-item:hover {
            background: rgba(255, 255, 255, 0.1);
            color: white;
            transform: translateX(4px);
        }

        .nav-item.active {
            background: rgba(255, 255, 255, 0.2);
            color: white;
            font-weight: 600;
        }

        .nav-icon {
            font-size: 1.3rem;
            width: 24px;
            text-align: center;
        }

        .sidebar-footer {
            padding: 0 2rem;
            margin-top: auto;
        }

        .logout-button {
            width: 100%;
            padding: 1rem;
            background: rgba(255, 255, 255, 0.1);
            border: 2px solid rgba(255, 255, 255, 0.3);
            color: white;
            border-radius: 16px;
            font-family: 'Karla', sans-serif;
            font-weight: 600;
            cursor: pointer;
            transition: all 0.3s ease;
            display: flex;
            align-items: center;
            justify-content: center;
            gap: 0.5rem;
        }

        .logout-button:hover {
            background: rgba(255, 255, 255, 0.2);
            transform: translateY(-2px);
        }

        /* Main Content */
        .main-content {
            flex: 1;
            margin-left: var(--sidebar-width);
            padding: 2rem 3rem;
        }

        /* Top Bar */
        .top-bar {
            background: rgba(255, 255, 255, 0.8);
            backdrop-filter: blur(10px);
            padding: 1.5rem 2rem;
            border-radius: 20px;
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 3rem;
            border: 1px solid rgba(144, 169, 85, 0.2);
            box-shadow: 0 4px 20px rgba(0, 0, 0, 0.05);
        }

        .top-bar h1 {
            font-family: 'DM Serif Display', serif;
            font-size: 2rem;
            color: var(--forest-green);
            font-weight: 400;
        }

        .admin-profile {
            display: flex;
            align-items: center;
            gap: 1rem;
            padding: 0.75rem 1.25rem;
            background: rgba(144, 169, 85, 0.1);
            border-radius: 50px;
            border: 1px solid rgba(144, 169, 85, 0.3);
        }

        .admin-avatar {
            width: 40px;
            height: 40px;
            border-radius: 50%;
            background: linear-gradient(135deg, var(--moss-green), var(--sage-green));
            display: flex;
            align-items: center;
            justify-content: center;
            color: white;
            font-weight: 700;
            font-size: 1.1rem;
        }

        .admin-info {
            display: flex;
            flex-direction: column;
        }

        .admin-name {
            font-weight: 600;
            color: var(--text-dark);
            font-size: 0.95rem;
        }

        .admin-role {
            font-size: 0.8rem;
            color: var(--text-mid);
        }

        /* Action Cards Section */
        .action-cards-section {
            margin-bottom: 3rem;
        }

        .section-header {
            margin-bottom: 2rem;
        }

        .section-header h2 {
            font-family: 'DM Serif Display', serif;
            font-size: 1.8rem;
            color: var(--forest-green);
            margin-bottom: 0.5rem;
            font-weight: 400;
        }

        .section-header p {
            color: var(--text-mid);
            font-size: 1rem;
        }

        .action-cards {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(280px, 1fr));
            gap: 2rem;
            animation: fadeInUp 0.6s ease-out;
        }

        @keyframes fadeInUp {
            from { opacity: 0; transform: translateY(30px); }
            to { opacity: 1; transform: translateY(0); }
        }

        .action-card {
            background: white;
            padding: 2.5rem 2rem;
            border-radius: 24px;
            border: 2px solid transparent;
            cursor: pointer;
            transition: all 0.4s cubic-bezier(0.4, 0, 0.2, 1);
            position: relative;
            overflow: hidden;
        }

        .action-card::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            opacity: 0;
            transition: opacity 0.4s ease;
        }

        .action-card:hover {
            transform: translateY(-8px);
            box-shadow: 0 12px 40px rgba(0, 0, 0, 0.15);
        }

        .action-card:hover::before {
            opacity: 1;
        }

        .action-card.create {
            background: linear-gradient(135deg, rgba(79, 119, 45, 0.05), rgba(144, 169, 85, 0.05));
            border-color: rgba(79, 119, 45, 0.2);
        }

        .action-card.create:hover {
            border-color: var(--moss-green);
            background: linear-gradient(135deg, rgba(79, 119, 45, 0.1), rgba(144, 169, 85, 0.1));
        }

        .action-card.update {
            background: linear-gradient(135deg, rgba(144, 169, 85, 0.05), rgba(26, 77, 46, 0.05));
            border-color: rgba(144, 169, 85, 0.2);
        }

        .action-card.update:hover {
            border-color: var(--sage-green);
            background: linear-gradient(135deg, rgba(144, 169, 85, 0.1), rgba(26, 77, 46, 0.1));
        }

        .action-card.delete {
            background: linear-gradient(135deg, rgba(139, 115, 85, 0.05), rgba(139, 115, 85, 0.02));
            border-color: rgba(139, 115, 85, 0.2);
        }

        .action-card.delete:hover {
            border-color: var(--earth-brown);
            background: linear-gradient(135deg, rgba(139, 115, 85, 0.1), rgba(139, 115, 85, 0.05));
        }

        .action-card.show {
            background: linear-gradient(135deg, rgba(26, 77, 46, 0.05), rgba(79, 119, 45, 0.02));
            border-color: rgba(26, 77, 46, 0.2);
        }

        .action-card.show:hover {
            border-color: var(--forest-green);
            background: linear-gradient(135deg, rgba(26, 77, 46, 0.1), rgba(79, 119, 45, 0.05));
        }

        .card-icon {
            font-size: 3rem;
            margin-bottom: 1.5rem;
            display: block;
        }

        .card-title {
            font-family: 'DM Serif Display', serif;
            font-size: 1.5rem;
            color: var(--forest-green);
            margin-bottom: 0.75rem;
            font-weight: 400;
        }

        .card-description {
            color: var(--text-mid);
            font-size: 0.95rem;
            line-height: 1.6;
            margin-bottom: 1.5rem;
        }

        .card-arrow {
            color: var(--moss-green);
            font-size: 1.5rem;
            opacity: 0;
            transform: translateX(-10px);
            transition: all 0.4s ease;
        }

        .action-card:hover .card-arrow {
            opacity: 1;
            transform: translateX(0);
        }

        /* Stats Overview */
        .stats-overview {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
            gap: 1.5rem;
            margin-top: 3rem;
        }

        .stat-card {
            background: rgba(255, 255, 255, 0.8);
            backdrop-filter: blur(10px);
            padding: 1.75rem;
            border-radius: 20px;
            border: 1px solid rgba(144, 169, 85, 0.2);
            text-align: center;
        }

        .stat-value {
            font-size: 2.5rem;
            font-weight: 700;
            color: var(--moss-green);
            margin-bottom: 0.5rem;
        }

        .stat-label {
            font-size: 0.85rem;
            text-transform: uppercase;
            letter-spacing: 0.08em;
            color: var(--text-mid);
            font-weight: 600;
        }

        /* Responsive */
        @media (max-width: 1024px) {
            .sidebar {
                width: 80px;
            }

            .main-content {
                margin-left: 80px;
            }

            .sidebar-logo-text,
            .nav-item span,
            .sidebar-footer {
                display: none;
            }

            .nav-item {
                justify-content: center;
                padding: 1rem;
            }
        }

        @media (max-width: 768px) {
            .sidebar {
                width: 100%;
                height: auto;
                position: relative;
            }

            .main-content {
                margin-left: 0;
            }

            .top-bar {
                flex-direction: column;
                gap: 1rem;
            }

            .action-cards {
                grid-template-columns: 1fr;
            }
        }
    </style>
</head>
<body>
    <aside class="sidebar">
        <div class="sidebar-logo">
            <div class="sidebar-logo-text">GreenTech</div>
        </div>
        
        <nav class="sidebar-nav">
            <a href="/adminHome" class="nav-item active">
                <span class="nav-icon">📊</span>
                <span>Dashboard</span>
            </a>
            <a href="/products" class="nav-item">
                <span class="nav-icon">📦</span>
                <span>Products</span>
            </a>
            <a href="#" class="nav-item">
                <span class="nav-icon">🏷️</span>
                <span>Categories</span>
            </a>
        </nav>
        
        <div class="sidebar-footer">
            <a href="/logout" class="logout-button">
                <span>🚪</span>
                Logout
            </a>
        </div>
    </aside>

    <main class="main-content">
        <div class="top-bar">
            <h1>Dashboard</h1>
            <h2>Welcome back {{$username}} !!</h2>
            <div class="admin-profile">
                <div class="admin-avatar">A</div>
                <div class="admin-info">
                    <div class="admin-name">Admin</div>
                    <div class="admin-role">Administrator</div>
                </div>
            </div>
        </div>

        <section class="action-cards-section">
            <div class="section-header">
                <h2>Product Management</h2>
                <p>Choose an action to manage your sustainable product catalog</p>
            </div>

            <div class="action-cards">
                <div class="action-card create">
                    <span class="card-icon">➕</span>
                    <h3 class="card-title">Create Product</h3>
                    <p class="card-description">Add new sustainable products to your catalog with detailed information</p>
                    <span class="card-arrow">→</span>
                </div>

                <!-- <div class="action-card update">
                    <span class="card-icon">✏️</span>
                    <h3 class="card-title">Update Product</h3>
                    <p class="card-description">Edit existing product details, pricing, and availability</p>
                    <span class="card-arrow">→</span>
                </div> -->

                <!-- <div class="action-card delete">
                    <span class="card-icon">🗑️</span>
                    <h3 class="card-title">Delete Product</h3>
                    <p class="card-description">Remove products from your catalog permanently</p>
                    <span class="card-arrow">→</span>
                </div> -->

                <div class="action-card show">
                    <span class="card-icon">👁️</span>
                    <h3 class="card-title">Show Products</h3>
                    <p class="card-description">View and manage your complete product inventory</p>
                    <span class="card-arrow">→</span>
                </div>
            </div>
        </section>

        <section class="stats-overview">
            <div class="stat-card">
                <div class="stat-value">142</div>
                <div class="stat-label">Total Products</div>
            </div>
            <div class="stat-card">
                <div class="stat-value">56</div>
                <div class="stat-label">Plantes</div>
            </div>
            <div class="stat-card">
                <div class="stat-value">48</div>
                <div class="stat-label">Graines</div>
            </div>
            <div class="stat-card">
                <div class="stat-value">38</div>
                <div class="stat-label">Outils</div>
            </div>
        </section>
    </main>
</body>
</html>