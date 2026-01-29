<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Delete Product - GreenTech Admin</title>
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
            margin-bottom: 2rem;
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

        /* Modal Overlay */
        .modal-overlay {
            position: fixed;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background: rgba(26, 77, 46, 0.6);
            backdrop-filter: blur(8px);
            display: flex;
            align-items: center;
            justify-content: center;
            z-index: 1000;
            animation: fadeIn 0.3s ease-out;
        }

        @keyframes fadeIn {
            from { opacity: 0; }
            to { opacity: 1; }
        }

        /* Modal */
        .modal {
            background: white;
            border-radius: 24px;
            padding: 3rem;
            max-width: 500px;
            width: 90%;
            box-shadow: 0 20px 60px rgba(0, 0, 0, 0.3);
            border: 2px solid rgba(200, 80, 80, 0.3);
            animation: slideUp 0.4s cubic-bezier(0.4, 0, 0.2, 1);
            position: relative;
        }

        @keyframes slideUp {
            from { 
                opacity: 0; 
                transform: translateY(30px) scale(0.95); 
            }
            to { 
                opacity: 1; 
                transform: translateY(0) scale(1); 
            }
        }

        .modal-icon {
            width: 80px;
            height: 80px;
            margin: 0 auto 2rem;
            background: linear-gradient(135deg, rgba(200, 80, 80, 0.15), rgba(200, 80, 80, 0.05));
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 2.5rem;
            border: 3px solid rgba(200, 80, 80, 0.3);
        }

        .modal-header {
            text-align: center;
            margin-bottom: 2rem;
        }

        .modal-header h2 {
            font-family: 'DM Serif Display', serif;
            font-size: 2rem;
            color: #c05050;
            margin-bottom: 0.75rem;
            font-weight: 400;
        }

        .modal-header p {
            color: var(--text-mid);
            font-size: 1rem;
            line-height: 1.6;
        }

        /* Product Info in Modal */
        .product-preview {
            background: rgba(200, 80, 80, 0.05);
            padding: 1.5rem;
            border-radius: 16px;
            margin-bottom: 2rem;
            border: 1px solid rgba(200, 80, 80, 0.2);
        }

        .product-preview-item {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 0.75rem 0;
            border-bottom: 1px solid rgba(200, 80, 80, 0.1);
        }

        .product-preview-item:last-child {
            border-bottom: none;
        }

        .product-preview-label {
            font-weight: 600;
            color: var(--text-mid);
            font-size: 0.9rem;
            text-transform: uppercase;
            letter-spacing: 0.05em;
        }

        .product-preview-value {
            font-weight: 600;
            color: var(--text-dark);
            font-size: 1rem;
        }

        /* Warning Box */
        .warning-box {
            background: rgba(255, 200, 100, 0.15);
            border: 2px solid rgba(255, 180, 50, 0.4);
            border-radius: 12px;
            padding: 1.25rem;
            margin-bottom: 2rem;
            display: flex;
            align-items: center;
            gap: 1rem;
        }

        .warning-icon {
            font-size: 2rem;
            flex-shrink: 0;
        }

        .warning-text {
            color: var(--text-dark);
            font-size: 0.95rem;
            line-height: 1.5;
        }

        /* Modal Actions */
        .modal-actions {
            display: flex;
            gap: 1rem;
            justify-content: center;
        }

        .modal-btn {
            padding: 1rem 2.5rem;
            border: none;
            border-radius: 16px;
            font-family: 'Karla', sans-serif;
            font-weight: 600;
            font-size: 1rem;
            cursor: pointer;
            transition: all 0.3s ease;
            display: flex;
            align-items: center;
            gap: 0.5rem;
        }

        .modal-btn-cancel {
            background: white;
            color: var(--text-dark);
            border: 2px solid rgba(144, 169, 85, 0.3);
        }

        .modal-btn-cancel:hover {
            background: rgba(144, 169, 85, 0.1);
            border-color: var(--moss-green);
        }

        .modal-btn-delete {
            background: linear-gradient(135deg, #c05050, #d06060);
            color: white;
        }

        .modal-btn-delete:hover {
            transform: translateY(-2px);
            box-shadow: 0 8px 24px rgba(200, 80, 80, 0.4);
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
                padding: 1rem;
            }

            .modal {
                padding: 2rem 1.5rem;
            }

            .modal-actions {
                flex-direction: column;
            }

            .modal-btn {
                width: 100%;
                justify-content: center;
            }

            .top-bar {
                flex-direction: column;
                gap: 1rem;
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
            <a href="admin-dashboard.html" class="nav-item">
                <span class="nav-icon">📊</span>
                <span>Dashboard</span>
            </a>
            <a href="admin-products.html" class="nav-item active">
                <span class="nav-icon">📦</span>
                <span>Products</span>
            </a>
            <a href="#" class="nav-item">
                <span class="nav-icon">🏷️</span>
                <span>Categories</span>
            </a>
        </nav>
        
        <div class="sidebar-footer">
            <button class="logout-button">
                <span>🚪</span>
                Logout
            </button>
        </div>
    </aside>

    <main class="main-content">
        <div class="top-bar">
            <h1>Products</h1>
            <div class="admin-profile">
                <div class="admin-avatar">A</div>
                <div class="admin-info">
                    <div class="admin-name">Admin User</div>
                    <div class="admin-role">Administrator</div>
                </div>
            </div>
        </div>

        <!-- Modal Overlay -->
        <div class="modal-overlay">
            <div class="modal">
                <div class="modal-icon">⚠️</div>
                
                <div class="modal-header">
                    <h2>Delete Product?</h2>
                    <p>This action cannot be undone. The product will be permanently removed from your catalog.</p>
                </div>

                <div class="product-preview">
                    <div class="product-preview-item">
                        <span class="product-preview-label">Product Name</span>
                        <span class="product-preview-value">Fougère d'Intérieur</span>
                    </div>
                    <div class="product-preview-item">
                        <span class="product-preview-label">Category</span>
                        <span class="product-preview-value">Plantes</span>
                    </div>
                    <div class="product-preview-item">
                        <span class="product-preview-label">Price</span>
                        <span class="product-preview-value">24.99€</span>
                    </div>
                    <div class="product-preview-item">
                        <span class="product-preview-label">Stock</span>
                        <span class="product-preview-value">42 units</span>
                    </div>
                </div>

                <div class="warning-box">
                    <span class="warning-icon">⚠️</span>
                    <div class="warning-text">
                        <strong>Warning:</strong> Deleting this product will remove it from all customer views and cannot be recovered.
                    </div>
                </div>

                <div class="modal-actions">
                    <button class="modal-btn modal-btn-cancel">
                        <span>✕</span>
                        Cancel
                    </button>
                    <button class="modal-btn modal-btn-delete">
                        <span>🗑️</span>
                        Delete Product
                    </button>
                </div>
            </div>
        </div>
    </main>
</body>
</html>