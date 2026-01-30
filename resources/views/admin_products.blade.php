<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Products List - GreenTech Admin</title>
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

        /* Products Section */
        .products-header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 2rem;
        }

        .products-header h2 {
            font-family: 'DM Serif Display', serif;
            font-size: 1.8rem;
            color: var(--forest-green);
            font-weight: 400;
        }

        .add-product-btn {
            padding: 1rem 2rem;
            background: linear-gradient(135deg, var(--moss-green), var(--sage-green));
            color: white;
            border: none;
            border-radius: 16px;
            font-family: 'Karla', sans-serif;
            font-weight: 600;
            cursor: pointer;
            transition: all 0.3s ease;
            display: flex;
            align-items: center;
            gap: 0.5rem;
            font-size: 0.95rem;
        }

        .add-product-btn:hover {
            transform: translateY(-2px);
            box-shadow: 0 8px 24px rgba(79, 119, 45, 0.4);
        }

        /* Table Container */
        .table-container {
            background: white;
            border-radius: 24px;
            overflow: hidden;
            box-shadow: 0 4px 20px rgba(0, 0, 0, 0.08);
            border: 1px solid rgba(144, 169, 85, 0.2);
        }

        table {
            width: 100%;
            border-collapse: collapse;
        }

        thead {
            background: linear-gradient(135deg, rgba(79, 119, 45, 0.1), rgba(144, 169, 85, 0.1));
        }

        th {
            padding: 1.5rem 1.5rem;
            text-align: left;
            font-weight: 700;
            color: var(--forest-green);
            text-transform: uppercase;
            font-size: 0.8rem;
            letter-spacing: 0.08em;
            border-bottom: 2px solid rgba(144, 169, 85, 0.3);
        }

        tbody tr {
            transition: all 0.3s ease;
            border-bottom: 1px solid rgba(144, 169, 85, 0.1);
        }

        tbody tr:hover {
            background: rgba(144, 169, 85, 0.05);
        }

        td {
            padding: 1.25rem 1.5rem;
            color: var(--text-dark);
            font-size: 0.95rem;
        }

        .product-image-cell {
            width: 80px;
        }

        .product-thumbnail {
            width: 60px;
            height: 60px;
            border-radius: 12px;
            background: linear-gradient(135deg, var(--warm-beige), var(--soft-cream));
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 2rem;
            border: 1px solid rgba(144, 169, 85, 0.2);
        }

        .product-name-cell {
            font-weight: 600;
            color: var(--forest-green);
        }

        .product-price-cell {
            font-weight: 600;
            color: var(--moss-green);
            font-size: 1.05rem;
        }

        .category-badge {
            display: inline-block;
            padding: 0.4rem 1rem;
            border-radius: 20px;
            font-size: 0.75rem;
            font-weight: 600;
            text-transform: uppercase;
            letter-spacing: 0.05em;
        }

        .category-badge.plantes {
            background: rgba(144, 169, 85, 0.2);
            color: var(--forest-green);
            border: 1px solid var(--sage-green);
        }

        .category-badge.graines {
            background: rgba(79, 119, 45, 0.2);
            color: var(--moss-green);
            border: 1px solid var(--moss-green);
        }

        .category-badge.outils {
            background: rgba(139, 115, 85, 0.2);
            color: var(--earth-brown);
            border: 1px solid var(--earth-brown);
        }

        .stock-cell {
            font-weight: 500;
        }

        /* Action Buttons */
        .action-buttons {
            display: flex;
            gap: 0.5rem;
        }

        .action-btn {
            padding: 0.6rem 1rem;
            border: none;
            border-radius: 12px;
            cursor: pointer;
            font-family: 'Karla', sans-serif;
            font-weight: 600;
            font-size: 0.85rem;
            transition: all 0.3s ease;
            display: flex;
            align-items: center;
            gap: 0.4rem;
        }

        .edit-btn {
            background: rgba(144, 169, 85, 0.15);
            color: var(--moss-green);
            border: 1px solid rgba(144, 169, 85, 0.3);
        }

        .edit-btn:hover {
            background: var(--sage-green);
            color: white;
            transform: translateY(-2px);
            box-shadow: 0 4px 12px rgba(144, 169, 85, 0.3);
        }

        .delete-btn {
            background: rgba(200, 80, 80, 0.15);
            color: #c05050;
            border: 1px solid rgba(200, 80, 80, 0.3);
        }

        .delete-btn:hover {
            background: #c05050;
            color: white;
            transform: translateY(-2px);
            box-shadow: 0 4px 12px rgba(200, 80, 80, 0.3);
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

            .table-container {
                overflow-x: auto;
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

            .top-bar {
                flex-direction: column;
                gap: 1rem;
            }

            .products-header {
                flex-direction: column;
                align-items: flex-start;
                gap: 1rem;
            }
        }
        .pagination_style {
    display: flex;
    justify-content: center;
    align-items: center;
    margin: 3rem 0;
    gap: 0.5rem;
}

.pagination_style nav {
    display: flex;
    gap: 0.5rem;
    align-items: center;
}

.pagination_style ul {
    display: flex;
    gap: 0.5rem;
    list-style: none;
    padding: 0;
    margin: 0;
    align-items: center;
}

.pagination_style li {
    margin: 0;
}

.pagination_style a,
.pagination_style span {
    display: inline-flex;
    align-items: center;
    justify-content: center;
    min-width: 2.5rem;
    height: 2.5rem;
    padding: 0 0.75rem;
    font-size: 0.95rem;
    font-weight: 500;
    color: #64748b;
    background: #ffffff;
    border: 1px solid #e2e8f0;
    border-radius: 0.5rem;
    text-decoration: none;
    transition: all 0.2s cubic-bezier(0.4, 0, 0.2, 1);
    cursor: pointer;
    user-select: none;
}

.pagination_style a:hover {
    color: #0f172a;
    background: #f8fafc;
    border-color: #cbd5e1;
    transform: translateY(-1px);
    box-shadow: 0 4px 6px -1px rgba(0, 0, 0, 0.1);
}

.pagination_style a:active {
    transform: translateY(0);
    box-shadow: 0 2px 4px -1px rgba(0, 0, 0, 0.1);
}

.pagination_style .active span,
.pagination_style span[aria-current="page"] {
    color: #ffffff;
    background: linear-gradient(180deg, var(--forest-green) 0%, var(--moss-green) 100%);
    border-color: transparent;
    font-weight: 600;
    box-shadow: 0 4px 12px rgba(102, 126, 234, 0.4);
}

.pagination_style .disabled span,
.pagination_style span[aria-disabled="true"] {
    color: #cbd5e1;
    background: #f8fafc;
    border-color: #f1f5f9;
    cursor: not-allowed;
    opacity: 0.6;
}

.pagination_style svg {
    width: 1.25rem;
    height: 1.25rem;
}

/* Previous/Next text links */
.pagination_style a[rel="prev"],
.pagination_style a[rel="next"] {
    gap: 0.5rem;
    padding: 0 1rem;
    font-weight: 600;
}

/* Dots separator */
.pagination_style .disabled span:not([aria-disabled]) {
    border: none;
    background: transparent;
    color: #94a3b8;
    cursor: default;
    min-width: auto;
    padding: 0 0.25rem;
}

/* Responsive adjustments */
@media (max-width: 640px) {
    .pagination_style a,
    .pagination_style span {
        min-width: 2.25rem;
        height: 2.25rem;
        font-size: 0.875rem;
        padding: 0 0.5rem;
    }
    
    .pagination_style {
        gap: 0.25rem;
    }
    
    .pagination_style ul {
        gap: 0.25rem;
    }
}
/* Search Section */
.search-section {
    background: rgba(255, 255, 255, 0.8);
    backdrop-filter: blur(10px);
    padding: 1.5rem 2rem;
    border-radius: 20px;
    margin-bottom: 2rem;
    border: 1px solid rgba(144, 169, 85, 0.2);
    box-shadow: 0 4px 20px rgba(0, 0, 0, 0.05);
}

.search-container {
    display: flex;
    gap: 1rem;
    align-items: center;
}

.search-input-wrapper {
    flex: 1;
    position: relative;
}

.search-icon {
    position: absolute;
    left: 1.25rem;
    top: 50%;
    transform: translateY(-50%);
    font-size: 1.2rem;
    color: var(--text-mid);
    pointer-events: none;
}

.search-input {
    width: 100%;
    padding: 1rem 1rem 1rem 3.5rem;
    border: 2px solid rgba(144, 169, 85, 0.3);
    border-radius: 16px;
    font-family: 'Karla', sans-serif;
    font-size: 0.95rem;
    color: var(--text-dark);
    background: white;
    transition: all 0.3s ease;
    outline: none;
}

.search-input::placeholder {
    color: var(--text-mid);
    opacity: 0.7;
}

.search-input:focus {
    border-color: var(--moss-green);
    box-shadow: 0 0 0 4px rgba(144, 169, 85, 0.1);
}

.search-btn {
    padding: 1rem 2rem;
    background: linear-gradient(135deg, var(--moss-green), var(--sage-green));
    color: white;
    border: none;
    border-radius: 16px;
    font-family: 'Karla', sans-serif;
    font-weight: 600;
    font-size: 0.95rem;
    cursor: pointer;
    transition: all 0.3s ease;
    display: flex;
    align-items: center;
    gap: 0.5rem;
    white-space: nowrap;
    min-width: 140px;
    justify-content: center;
}

.search-btn:hover {
    transform: translateY(-2px);
    box-shadow: 0 8px 24px rgba(79, 119, 45, 0.4);
}

.search-btn:active {
    transform: translateY(0);
}

/* Responsive Search */
@media (max-width: 768px) {
    .search-container {
        flex-direction: column;
    }
    
    .search-btn {
        width: 100%;
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
            <a href="#" class="nav-item active">
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
        <div class="search-section">
    <form action="{{route('products')}}" method="GET" class="search-container">
        @csrf
        @method('get')
        <div class="search-input-wrapper">
            <span class="search-icon">🔍</span>
            <input 
                type="text" 
                name="name" 
                class="search-input" 
                placeholder="Search products by name, category, or price..."
            >
        </div>
        <button type="submit" class="search-btn">
            <span>🔎</span>
            Search
        </button>
    </form>
</div>

        <div class="products-header">
            <h2>All Products</h2>
            <a href="/create" class="add-product-btn">
                <span>➕</span>
                Add New Product
            </a>
        </div>

        <div class="table-container">
            <table>
                <thead>
                    <tr>
                        <th class="product-image-cell">Image</th>
                        <th>Name</th>
                        <th>Price</th>
                        <th>Category</th>
                        <th>Stock</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($allproducts as $product)
                    <tr>
                        <td class="product-image-cell">
                            <div class="product-thumbnail">🌻</div>
                        </td>
                        <td class="product-name-cell">{{$product->name}}</td>
                        <td class="product-price-cell">{{$product->price}}€</td>
                        <td><span class="category-badge plantes">{{$product->categoryId}}</span></td>
                        <td class="stock-cell">{{$product->stock}}</td>
                        <td>
                            <div class="action-buttons">
                                <a class="action-btn edit-btn" href="/editProductForm/{{$product->id}}">
                                    <span>✏️</span>
                                    Edit
                                </a>
                                <a href="/destroy/{{$product->id}}" class="action-btn delete-btn">
                                    <span>🗑️</span>
                                    Delete
                                </a>
                                 <a href="/show/{{$product->id}}" class="action-btn edit-btn">
                                    <span>👁️</span>
                                    show
                                </a>
                            </div>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
        <div class="pagination_style">
        {{$allproducts->links()}}
        </div>
    </main>
</body>
</html>