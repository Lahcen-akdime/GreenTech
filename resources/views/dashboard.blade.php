<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard - GreenTech Admin</title>
    <link rel="stylesheet" href="{{asset('css/styles.css')}}">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap" rel="stylesheet">
</head>
<body>
    <div class="admin-layout">
        <!-- Sidebar -->
        <aside class="admin-sidebar">
            <!-- Logo -->
            <div class="admin-logo">
                <svg width="32" height="32" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 3v4M3 5h4M6 17v4m-2-2h4m5-16l2.286 6.857L21 12l-5.714 2.143L13 21l-2.286-6.857L5 12l5.714-2.143L13 3z" />
                </svg>
                <span>GreenTech<br><small style="font-size: 0.75rem; color: var(--gray-600); font-weight: 400;">Administration</small></span>
            </div>

            <!-- Navigation -->
            <nav class="admin-nav">
                <a href="admin-dashboard.html" class="admin-nav-item active">
                    <svg fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6" />
                    </svg>
                    <span>Vue d'ensemble</span>
                </a>
                <a href="admin-products.html" class="admin-nav-item">
                    <svg fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M20 7l-8-4-8 4m16 0l-8 4m8-4v10l-8 4m0-10L4 7m8 4v10M4 7v10l8 4" />
                    </svg>
                    <span>Produits</span>
                </a>
                <a href="#" class="admin-nav-item">
                    <svg fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 7h.01M7 3h5c.512 0 1.024.195 1.414.586l7 7a2 2 0 010 2.828l-7 7a2 2 0 01-2.828 0l-7-7A1.994 1.994 0 013 12V7a4 4 0 014-4z" />
                    </svg>
                    <span>Catégories</span>
                </a>
                <a href="#" class="admin-nav-item">
                    <svg fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 11V7a4 4 0 00-8 0v4M5 9h14l1 12H4L5 9z" />
                    </svg>
                    <span>Commandes</span>
                </a>
                <a href="#" class="admin-nav-item">
                    <svg fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4.354a4 4 0 110 5.292M15 21H3v-1a6 6 0 0112 0v1zm0 0h6v-1a6 6 0 00-9-5.197M13 7a4 4 0 11-8 0 4 4 0 018 0z" />
                    </svg>
                    <span>Clients</span>
                </a>
                <a href="#" class="admin-nav-item">
                    <svg fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v14a2 2 0 01-2 2h-2a2 2 0 01-2-2z" />
                    </svg>
                    <span>Statistiques</span>
                </a>
            </nav>

            <!-- Bottom Links -->
            <div style="margin-top: auto; padding-top: var(--spacing-md); border-top: 1px solid var(--gray-200);">
                <a href="#" class="admin-nav-item">
                    <svg fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10.325 4.317c.426-1.756 2.924-1.756 3.35 0a1.724 1.724 0 002.573 1.066c1.543-.94 3.31.826 2.37 2.37a1.724 1.724 0 001.065 2.572c1.756.426 1.756 2.924 0 3.35a1.724 1.724 0 00-1.066 2.573c.94 1.543-.826 3.31-2.37 2.37a1.724 1.724 0 00-2.572 1.065c-.426 1.756-2.924 1.756-3.35 0a1.724 1.724 0 00-2.573-1.066c-1.543.94-3.31-.826-2.37-2.37a1.724 1.724 0 00-1.065-2.572c-1.756-.426-1.756-2.924 0-3.35a1.724 1.724 0 001.066-2.573c-.94-1.543.826-3.31 2.37-2.37.996.608 2.296.07 2.572-1.065z" />
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                    </svg>
                    <span>Paramètres</span>
                </a>
                <a href="index.html" class="admin-nav-item">
                    <svg fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 16l4-4m0 0l-4-4m4 4H7m6 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h4a3 3 0 013 3v1" />
                    </svg>
                    <span>Déconnexion</span>
                </a>
            </div>
        </aside>

        <!-- Main Content -->
        <main class="admin-content">
            <!-- Header -->
            <div class="admin-header">
                <div>
                    <h1 class="admin-title">Dashboard</h1>
                    <p style="color: var(--gray-600); margin-top: 0.25rem;">Bienvenue dans votre espace d'administration</p>
                </div>
                <a href="index.html" class="btn btn-secondary">
                    <svg width="20" height="20" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z" />
                    </svg>
                    Voir le site
                </a>
            </div>

            <!-- Stats Cards -->
            <div class="stats-grid">
                <div class="stat-card">
                    <div class="stat-icon">
                        <svg fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M20 7l-8-4-8 4m16 0l-8 4m8-4v10l-8 4m0-10L4 7m8 4v10M4 7v10l8 4" />
                        </svg>
                    </div>
                    <div class="stat-content">
                        <h3>156</h3>
                        <p>Produits actifs</p>
                        <small style="color: var(--success); font-weight: 600;">+12 ce mois</small>
                    </div>
                </div>

                <div class="stat-card">
                    <div class="stat-icon" style="background: #fef3c7;">
                        <svg style="color: #f59e0b;" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 9v2m0 4h.01m-6.938 4h13.856c1.54 0 2.502-1.667 1.732-3L13.732 4c-.77-1.333-2.694-1.333-3.464 0L3.34 16c-.77 1.333.192 3 1.732 3z" />
                        </svg>
                    </div>
                    <div class="stat-content">
                        <h3>12</h3>
                        <p>Alertes stock</p>
                        <small style="color: var(--warning); font-weight: 600;">Attention requise</small>
                    </div>
                </div>

                <div class="stat-card">
                    <div class="stat-icon" style="background: #fef3c7;">
                        <svg style="color: #eab308;" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11.049 2.927c.3-.921 1.603-.921 1.902 0l1.519 4.674a1 1 0 00.95.69h4.915c.969 0 1.371 1.24.588 1.81l-3.976 2.888a1 1 0 00-.363 1.118l1.518 4.674c.3.922-.755 1.688-1.538 1.118l-3.976-2.888a1 1 0 00-1.176 0l-3.976 2.888c-.783.57-1.838-.197-1.538-1.118l1.518-4.674a1 1 0 00-.363-1.118l-3.976-2.888c-.784-.57-.38-1.81.588-1.81h4.914a1 1 0 00.951-.69l1.519-4.674z" />
                        </svg>
                    </div>
                    <div class="stat-content">
                        <h3>4.8</h3>
                        <p>Note moyenne</p>
                        <small style="color: var(--gray-500); font-weight: 600;">Sur 248 avis</small>
                    </div>
                </div>

                <div class="stat-card">
                    <div class="stat-icon" style="background: #dbeafe;">
                        <svg style="color: #3b82f6;" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                        </svg>
                    </div>
                    <div class="stat-content">
                        <h3>€12,450</h3>
                        <p>Ventes du mois</p>
                        <small style="color: var(--success); font-weight: 600;">+18% vs mois dernier</small>
                    </div>
                </div>
            </div>

            <!-- Recent Products -->
            <div class="table-container">
                <div class="table-header">
                    <h2 style="font-size: 1.25rem; font-weight: 600;">Produits récents</h2>
                    <a href="admin-products.html" class="btn btn-primary">
                        <svg width="20" height="20" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4" />
                        </svg>
                        Nouveau produit
                    </a>
                </div>
                <table>
                    <thead>
                        <tr>
                            <th>Image</th>
                            <th>Nom</th>
                            <th>Catégorie</th>
                            <th>Prix</th>
                            <th>Created-at</th>
                            <th>Updated-at</th>
                            <th>Status</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($allproducts as $product)
                        <tr>
                            <td>
                                <img src="https://images.unsplash.com/photo-1459156212016-c812468e2115?w=100&h=100&fit=crop" alt="Product" class="table-image">
                            </td>
                            <td><strong>{{$product->name}}</strong></td>
                            <td><span class="badge badge-primary">Plantes</span></td>
                            <td><strong>{{$product->price}} €</strong></td>
                            <td>{{$product->created_at}}</td>
                            <td><span class="badge badge-success">{{$product->updated_at}}</span></td>
                            <td class="table-actions-cell">
                                <button class="btn btn-icon btn-sm">
                                    <svg width="16" height="16" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15.232 5.232l3.536 3.536m-2.036-5.036a2.5 2.5 0 113.536 3.536L6.5 21.036H3v-3.572L16.732 3.732z" />
                                    </svg>
                                </button>
                                <button class="btn btn-icon btn-sm" style="color: var(--danger);">
                                    <svg width="16" height="16" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16" />
                                    </svg>
                                </button>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>

            <!-- Recent Activity -->
            <div style="margin-top: var(--spacing-lg);">
                <h2 style="font-size: 1.25rem; font-weight: 600; margin-bottom: var(--spacing-md);">Activité récente</h2>
                <div style="display: flex; flex-direction: column; gap: var(--spacing-sm);">
                    <div style="padding: var(--spacing-sm); border: 1px solid var(--gray-200); border-radius: var(--radius-lg); display: flex; align-items: center; gap: var(--spacing-sm);">
                        <div style="width: 8px; height: 8px; background: var(--success); border-radius: 50%;"></div>
                        <span>Produit <strong>Aloe Vera Bio</strong> ajouté</span>
                        <span style="margin-left: auto; color: var(--gray-500); font-size: 0.875rem;">Il y a 2 heures</span>
                    </div>
                    <div style="padding: var(--spacing-sm); border: 1px solid var(--gray-200); border-radius: var(--radius-lg); display: flex; align-items: center; gap: var(--spacing-sm);">
                        <div style="width: 8px; height: 8px; background: var(--warning); border-radius: 50%;"></div>
                        <span>Stock faible pour <strong>Monstera Deliciosa</strong></span>
                        <span style="margin-left: auto; color: var(--gray-500); font-size: 0.875rem;">Il y a 5 heures</span>
                    </div>
                    <div style="padding: var(--spacing-sm); border: 1px solid var(--gray-200); border-radius: var(--radius-lg); display: flex; align-items: center; gap: var(--spacing-sm);">
                        <div style="width: 8px; height: 8px; background: var(--info); border-radius: 50%;"></div>
                        <span>Produit <strong>Sécateur</strong> modifié</span>
                        <span style="margin-left: auto; color: var(--gray-500); font-size: 0.875rem;">Hier</span>
                    </div>
                </div>
            </div>
        </main>
    </div>
</body>
</html>