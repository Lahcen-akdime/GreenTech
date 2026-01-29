<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create Product - GreenTech Admin</title>
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

        /* Form Container */
        .form-container {
            max-width: 900px;
            margin: 0 auto;
            background: white;
            padding: 3rem;
            border-radius: 24px;
            box-shadow: 0 4px 20px rgba(0, 0, 0, 0.08);
            border: 1px solid rgba(144, 169, 85, 0.2);
        }

        .form-header {
            margin-bottom: 2.5rem;
        }

        .form-header h2 {
            font-family: 'DM Serif Display', serif;
            font-size: 2rem;
            color: var(--forest-green);
            margin-bottom: 0.5rem;
            font-weight: 400;
        }

        .form-header p {
            color: var(--text-mid);
            font-size: 1rem;
        }

        /* Form Groups */
        .product-form {
            display: flex;
            flex-direction: column;
            gap: 2rem;
        }

        .form-row {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 1.5rem;
        }

        .form-group {
            display: flex;
            flex-direction: column;
            gap: 0.75rem;
        }

        .form-group.full-width {
            grid-column: 1 / -1;
        }

        .form-group label {
            font-weight: 600;
            color: var(--text-dark);
            font-size: 0.9rem;
            text-transform: uppercase;
            letter-spacing: 0.05em;
            display: flex;
            align-items: center;
            gap: 0.5rem;
        }

        .form-group label .required {
            color: #c05050;
        }

        .form-group input,
        .form-group select,
        .form-group textarea {
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

        .form-group input:focus,
        .form-group select:focus,
        .form-group textarea:focus {
            border-color: var(--moss-green);
            box-shadow: 0 0 0 4px rgba(79, 119, 45, 0.1);
            background: white;
        }

        .form-group textarea {
            min-height: 150px;
            resize: vertical;
        }

        .form-group select {
            cursor: pointer;
        }

        /* AI Generate Section */
        .ai-section {
            background: linear-gradient(135deg, rgba(144, 169, 85, 0.05), rgba(79, 119, 45, 0.05));
            padding: 2rem;
            border-radius: 16px;
            border: 2px dashed rgba(144, 169, 85, 0.3);
            display: flex;
            flex-direction: column;
            gap: 1rem;
            align-items: center;
            text-align: center;
        }

        .ai-section h3 {
            font-family: 'DM Serif Display', serif;
            font-size: 1.3rem;
            color: var(--forest-green);
            font-weight: 400;
            display: flex;
            align-items: center;
            gap: 0.5rem;
        }

        .ai-section p {
            color: var(--text-mid);
            font-size: 0.95rem;
            max-width: 500px;
        }

        .ai-generate-btn {
            padding: 1rem 2.5rem;
            background: linear-gradient(135deg, var(--moss-green), var(--sage-green));
            color: white;
            border: none;
            border-radius: 16px;
            font-family: 'Karla', sans-serif;
            font-weight: 600;
            font-size: 1rem;
            cursor: pointer;
            transition: all 0.3s ease;
            display: flex;
            align-items: center;
            gap: 0.75rem;
        }

        .ai-generate-btn:hover {
            transform: translateY(-2px);
            box-shadow: 0 8px 24px rgba(79, 119, 45, 0.4);
        }

        /* Form Actions */
        .form-actions {
            display: flex;
            gap: 1rem;
            justify-content: flex-end;
            margin-top: 1rem;
            padding-top: 2rem;
            border-top: 1px solid rgba(144, 169, 85, 0.2);
        }

        .btn {
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

        .btn-primary {
            background: linear-gradient(135deg, var(--moss-green), var(--sage-green));
            color: white;
        }

        .btn-primary:hover {
            transform: translateY(-2px);
            box-shadow: 0 8px 24px rgba(79, 119, 45, 0.4);
        }

        .btn-secondary {
            background: white;
            color: var(--text-dark);
            border: 2px solid rgba(144, 169, 85, 0.3);
        }

        .btn-secondary:hover {
            background: rgba(144, 169, 85, 0.1);
            border-color: var(--moss-green);
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

            .form-row {
                grid-template-columns: 1fr;
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

            .form-container {
                padding: 2rem 1.5rem;
            }

            .top-bar {
                flex-direction: column;
                gap: 1rem;
            }

            .form-actions {
                flex-direction: column;
            }

            .btn {
                width: 100%;
                justify-content: center;
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
            <a href="/home" class="nav-item">
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
            <h1>Create Product</h1>
            <div class="admin-profile">
                <div class="admin-avatar">A</div>
                <div class="admin-info">
                    <div class="admin-name">Admin User</div>
                    <div class="admin-role">Administrator</div>
                </div>
            </div>
        </div>

        <div class="form-container">
            <div class="form-header">
                <h2>Add New Product</h2>
                <p>Fill in the details to add a sustainable product to your catalog</p>
            </div>

            <form class="product-form" method="POST" action="{{ route('store') }}">
                @csrf
                <div class="form-row">
                    <div class="form-group">
                        <label>
                            Product Name
                            <span class="required">*</span>
                        </label>
                        <input 
                            name="name"
                            type="text" 
                            placeholder="e.g., Fougère d'Intérieur"
                            required
                        >
                    </div>

                    <div class="form-group">
                        <label>
                            Price (€)
                            <span class="required">*</span>
                        </label>
                        <input 
                        name="price"
                            type="number" 
                            step="0.01"
                            placeholder="24.99"
                            required
                        >
                    </div>
                </div>

                <div class="form-row">
                    <div class="form-group">
                        <label>
                            Category
                            <span class="required">*</span>
                        </label>
                        <select name="categoryId" required>
                            <option value="">Select a category</option>

                            @foreach($categories as $category)
                            <option value="{{$category->id}}">{{$category->title}}</option>
                            @endforeach
                        </select>
                    </div>

                    <div class="form-group">
                        <label>
                            Stock Quantity
                            <span class="required">*</span>
                        </label>
                        <input 
                        name="stock"
                            type="number" 
                            placeholder="42"
                            required
                        >
                    </div>
                </div>

                <div class="form-group">
                <label for="image">
                    Product Image <span class="required"></span>
                </label>
                <input 
                    type="file" 
                    id="image" 
                    name="image" 
                    accept="image/"
                    required
                >
            </div>

                <div class="form-group full-width">
                    <label>
                        Product Description
                        <span class="required">*</span>
                    </label>
                    <textarea 
                    name="description"
                        placeholder="Describe your sustainable product in detail..."
                        required
                    ></textarea>
                </div>

                <div class="ai-section">
                    <h3>✨ AI-Powered Description</h3>
                    <p>Let our AI help you create compelling, eco-friendly product descriptions that resonate with your customers</p>
                    <button type="button" class="ai-generate-btn">
                        <span>🤖</span>
                        Generate with AI
                    </button>
                </div>

                <div class="form-actions">
                    <a href="/products" type="button" class="btn btn-secondary">
                        <span>✕</span>
                        Cancel
                    </a>
                    <button type="submit" class="btn btn-primary">
                        <span>✓</span>
                        Save Product
                    </button>
                </div>
            </form>
        </div>
    </main>
</body>
</html>