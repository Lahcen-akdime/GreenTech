<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gestion des Produits - GreenTech Admin</title>
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
                <a href="admin-dashboard.html" class="admin-nav-item">
                    <svg fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6" />
                    </svg>
                    <span>Vue d'ensemble</span>
                </a>
                <a href="admin-products.html" class="admin-nav-item active">
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
                    <h1 class="admin-title">Gestion des Produits</h1>
                    <p style="color: var(--gray-600); margin-top: 0.25rem;">Gérez votre catalogue de produits</p>
                </div>
                <button class="btn btn-primary" onclick="openAddModal()">
                    <svg width="20" height="20" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4" />
                    </svg>
                    Ajouter un produit
                </button>
            </div>

            <!-- Products Table -->
            <div class="table-container">
                <div class="table-header">
                    <div class="search-container" style="max-width: 400px;">
                        <svg class="search-icon" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" />
                        </svg>
                        <input type="text" class="search-input" placeholder="Rechercher un produit...">
                    </div>
                    <div class="table-actions">
                        <select class="form-select" style="width: auto;">
                            <option>Toutes catégories</option>
                            <option>Plantes</option>
                            <option>Graines</option>
                            <option>Outils</option>
                        </select>
                        <button class="btn btn-outline">
                            <svg width="20" height="20" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 10v6m0 0l-3-3m3 3l3-3m2 8H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z" />
                            </svg>
                            Exporter
                        </button>
                    </div>
                </div>
                <table>
                    <thead>
                        <tr>
                            <th>
                                <input type="checkbox">
                            </th>
                            <th>Image</th>
                            <th>Nom</th>
                            <th>Catégorie</th>
                            <th>Prix</th>
                            <th>Stock</th>
                            <th>Status</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td><input type="checkbox"></td>
                            <td>
                                <img src="https://images.unsplash.com/photo-1459156212016-c812468e2115?w=100&h=100&fit=crop" alt="Product" class="table-image">
                            </td>
                            <td><strong>Ficus Elastica Robusta</strong></td>
                            <td><span class="badge badge-primary">Plantes</span></td>
                            <td><strong>29,99 €</strong></td>
                            <td>12</td>
                            <td><span class="badge badge-success">En stock</span></td>
                            <td class="table-actions-cell">
                                <button class="btn btn-icon btn-sm" title="Modifier">
                                    <svg width="16" height="16" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15.232 5.232l3.536 3.536m-2.036-5.036a2.5 2.5 0 113.536 3.536L6.5 21.036H3v-3.572L16.732 3.732z" />
                                    </svg>
                                </button>
                                <button class="btn btn-icon btn-sm" style="color: var(--danger);" title="Supprimer" onclick="confirmDelete('Ficus Elastica Robusta')">
                                    <svg width="16" height="16" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16" />
                                    </svg>
                                </button>
                            </td>
                        </tr>
                        <tr>
                            <td><input type="checkbox"></td>
                            <td>
                                <img src="https://images.unsplash.com/photo-1485955900006-10f4d324d411?w=100&h=100&fit=crop" alt="Product" class="table-image">
                            </td>
                            <td><strong>Monstera Deliciosa</strong></td>
                            <td><span class="badge badge-primary">Plantes</span></td>
                            <td><strong>34,99 €</strong></td>
                            <td>3</td>
                            <td><span class="badge badge-warning">Stock limité</span></td>
                            <td class="table-actions-cell">
                                <button class="btn btn-icon btn-sm">
                                    <svg width="16" height="16" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15.232 5.232l3.536 3.536m-2.036-5.036a2.5 2.5 0 113.536 3.536L6.5 21.036H3v-3.572L16.732 3.732z" />
                                    </svg>
                                </button>
                                <button class="btn btn-icon btn-sm" style="color: var(--danger);" onclick="confirmDelete('Monstera Deliciosa')">
                                    <svg width="16" height="16" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16" />
                                    </svg>
                                </button>
                            </td>
                        </tr>
                        <tr>
                            <td><input type="checkbox"></td>
                            <td>
                                <img src="https://images.unsplash.com/photo-1466692476868-aef1dfb1e735?w=100&h=100&fit=crop" alt="Product" class="table-image">
                            </td>
                            <td><strong>Graines de Tomate Bio</strong></td>
                            <td><span class="badge badge-primary">Graines</span></td>
                            <td><strong>5,99 €</strong></td>
                            <td>48</td>
                            <td><span class="badge badge-success">En stock</span></td>
                            <td class="table-actions-cell">
                                <button class="btn btn-icon btn-sm">
                                    <svg width="16" height="16" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15.232 5.232l3.536 3.536m-2.036-5.036a2.5 2.5 0 113.536 3.536L6.5 21.036H3v-3.572L16.732 3.732z" />
                                    </svg>
                                </button>
                                <button class="btn btn-icon btn-sm" style="color: var(--danger);" onclick="confirmDelete('Graines de Tomate Bio')">
                                    <svg width="16" height="16" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16" />
                                    </svg>
                                </button>
                            </td>
                        </tr>
                        <tr>
                            <td><input type="checkbox"></td>
                            <td>
                                <img src="https://images.unsplash.com/photo-1416879595882-3373a0480b5b?w=100&h=100&fit=crop" alt="Product" class="table-image">
                            </td>
                            <td><strong>Sécateur Professionnel</strong></td>
                            <td><span class="badge badge-primary">Outils</span></td>
                            <td><strong>19,99 €</strong></td>
                            <td>0</td>
                            <td><span class="badge badge-danger">Rupture</span></td>
                            <td class="table-actions-cell">
                                <button class="btn btn-icon btn-sm">
                                    <svg width="16" height="16" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15.232 5.232l3.536 3.536m-2.036-5.036a2.5 2.5 0 113.536 3.536L6.5 21.036H3v-3.572L16.732 3.732z" />
                                    </svg>
                                </button>
                                <button class="btn btn-icon btn-sm" style="color: var(--danger);" onclick="confirmDelete('Sécateur Professionnel')">
                                    <svg width="16" height="16" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16" />
                                    </svg>
                                </button>
                            </td>
                        </tr>
                        <tr>
                            <td><input type="checkbox"></td>
                            <td>
                                <img src="https://images.unsplash.com/photo-1509937528035-ad76254b0356?w=100&h=100&fit=crop" alt="Product" class="table-image">
                            </td>
                            <td><strong>Collection Succulentes</strong></td>
                            <td><span class="badge badge-primary">Plantes</span></td>
                            <td><strong>12,99 €</strong></td>
                            <td>24</td>
                            <td><span class="badge badge-success">En stock</span></td>
                            <td class="table-actions-cell">
                                <button class="btn btn-icon btn-sm">
                                    <svg width="16" height="16" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15.232 5.232l3.536 3.536m-2.036-5.036a2.5 2.5 0 113.536 3.536L6.5 21.036H3v-3.572L16.732 3.732z" />
                                    </svg>
                                </button>
                                <button class="btn btn-icon btn-sm" style="color: var(--danger);" onclick="confirmDelete('Collection Succulentes')">
                                    <svg width="16" height="16" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16" />
                                    </svg>
                                </button>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>

            <!-- Pagination -->
            <div class="pagination">
                <button class="pagination-item">
                    <svg width="16" height="16" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7" />
                    </svg>
                </button>
                <button class="pagination-item active">1</button>
                <button class="pagination-item">2</button>
                <button class="pagination-item">3</button>
                <button class="pagination-item">
                    <svg width="16" height="16" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
                    </svg>
                </button>
            </div>
        </main>
    </div>

    <!-- Add/Edit Product Modal -->
    <div id="productModal" class="modal-overlay" style="display: none;">
        <div class="modal">
            <div class="modal-header">
                <h2 class="modal-title">Ajouter un produit</h2>
                <button class="modal-close" onclick="closeModal()">
                    <svg width="24" height="24" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                    </svg>
                </button>
            </div>
            <div class="modal-body">
                <form>
                    <!-- Product Name -->
                    <div class="form-group">
                        <label for="productName" class="form-label required">Nom du produit</label>
                        <input type="text" id="productName" class="form-input" placeholder="Ex: Ficus Elastica Robusta" required>
                    </div>

                    <!-- Category and Price -->
                    <div class="form-row">
                        <div class="form-group">
                            <label for="category" class="form-label required">Catégorie</label>
                            <select id="category" class="form-select" required>
                                <option value="">Sélectionner...</option>
                                <option value="plantes">Plantes</option>
                                <option value="graines">Graines</option>
                                <option value="outils">Outils</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="price" class="form-label required">Prix (€)</label>
                            <input type="number" id="price" class="form-input" placeholder="29.99" step="0.01" min="0" required>
                        </div>
                    </div>

                    <!-- Description with AI Generation -->
                    <div class="form-group">
                        <div style="display: flex; justify-content: space-between; align-items: center; margin-bottom: var(--spacing-xs);">
                            <label for="description" class="form-label required" style="margin-bottom: 0;">Description</label>
                            <button type="button" class="btn-ai" onclick="generateWithAI()">
                                <svg width="18" height="18" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 3v4M3 5h4M6 17v4m-2-2h4m5-16l2.286 6.857L21 12l-5.714 2.143L13 21l-2.286-6.857L5 12l5.714-2.143L13 3z" />
                                </svg>
                                Générer avec l'IA
                            </button>
                        </div>
                        <textarea id="description" class="form-textarea" placeholder="Décrivez votre produit..." rows="5" required></textarea>
                        <p class="form-help">L'IA peut vous aider à générer une description professionnelle basée sur le nom et la catégorie du produit.</p>
                    </div>

                    <!-- Stock -->
                    <div class="form-group">
                        <label for="stock" class="form-label required">Quantité en stock</label>
                        <input type="number" id="stock" class="form-input" placeholder="12" min="0" required>
                    </div>

                    <!-- Images Upload -->
                    <div class="form-group">
                        <label class="form-label">Images du produit</label>
                        <div class="file-upload-area">
                            <svg class="file-upload-icon" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 16a4 4 0 01-.88-7.903A5 5 0 1115.9 6L16 6a5 5 0 011 9.9M15 13l-3-3m0 0l-3 3m3-3v12" />
                            </svg>
                            <p class="file-upload-text">Cliquez pour télécharger ou glissez-déposez</p>
                            <p class="file-upload-hint">PNG, JPG, WEBP jusqu'à 5MB</p>
                            <input type="file" accept="image/*" multiple style="display: none;">
                        </div>
                        <div class="file-preview">
                            <!-- Preview images will appear here -->
                        </div>
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-outline" onclick="closeModal()">Annuler</button>
                <button type="submit" class="btn btn-primary">
                    <svg width="20" height="20" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                    </svg>
                    Enregistrer
                </button>
            </div>
        </div>
    </div>

    <!-- Delete Confirmation Modal -->
    <div id="deleteModal" class="modal-overlay" style="display: none;">
        <div class="modal" style="max-width: 480px;">
            <div class="modal-header">
                <h2 class="modal-title" style="color: var(--danger);">
                    <svg width="24" height="24" fill="none" stroke="currentColor" viewBox="0 0 24 24" style="display: inline-block; vertical-align: middle;">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 9v2m0 4h.01m-6.938 4h13.856c1.54 0 2.502-1.667 1.732-3L13.732 4c-.77-1.333-2.694-1.333-3.464 0L3.34 16c-.77 1.333.192 3 1.732 3z" />
                    </svg>
                    Confirmer la suppression
                </h2>
                <button class="modal-close" onclick="closeDeleteModal()">
                    <svg width="24" height="24" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                    </svg>
                </button>
            </div>
            <div class="modal-body">
                <div class="alert alert-warning">
                    <svg width="20" height="20" fill="currentColor" viewBox="0 0 24 24">
                        <path fill-rule="evenodd" d="M8.257 3.099c.765-1.36 2.722-1.36 3.486 0l5.58 9.92c.75 1.334-.213 2.98-1.742 2.98H4.42c-1.53 0-2.493-1.646-1.743-2.98l5.58-9.92zM11 13a1 1 0 11-2 0 1 1 0 012 0zm-1-8a1 1 0 00-1 1v3a1 1 0 002 0V6a1 1 0 00-1-1z" clip-rule="evenodd" />
                    </svg>
                    <span>Cette action est irréversible !</span>
                </div>
                <p style="margin-top: var(--spacing-md);">Êtes-vous sûr de vouloir supprimer le produit :</p>
                <div style="padding: var(--spacing-sm); background: var(--gray-50); border-radius: var(--radius-lg); margin-top: var(--spacing-sm);">
                    <strong id="deleteProductName"></strong>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-outline" onclick="closeDeleteModal()">Annuler</button>
                <button type="button" class="btn btn-danger" onclick="deleteProduct()">
                    <svg width="20" height="20" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16" />
                    </svg>
                    Supprimer définitivement
                </button>
            </div>
        </div>
    </div>

    <!-- AI Generation Loading Modal -->
    <div id="aiLoadingModal" class="modal-overlay" style="display: none;">
        <div class="modal" style="max-width: 420px;">
            <div class="modal-body" style="text-align: center; padding: var(--spacing-xl);">
                <div style="margin-bottom: var(--spacing-md);">
                    <svg class="spinner" width="48" height="48" fill="none" stroke="currentColor" viewBox="0 0 24 24" style="color: var(--primary);">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 4v5h.582m15.356 2A8.001 8.001 0 004.582 9m0 0H9m11 11v-5h-.581m0 0a8.003 8.003 0 01-15.357-2m15.357 2H15" />
                    </svg>
                </div>
                <h3 style="margin-bottom: var(--spacing-sm);">Génération en cours...</h3>
                <p style="color: var(--gray-600);">L'IA crée une description professionnelle pour votre produit.</p>
                <div style="margin-top: var(--spacing-md); background: var(--gray-50); padding: var(--spacing-sm); border-radius: var(--radius-lg);">
                    <div style="height: 8px; background: var(--gray-200); border-radius: var(--radius-full); overflow: hidden;">
                        <div style="height: 100%; width: 60%; background: linear-gradient(90deg, var(--primary), #6366f1); animation: loading 1.5s ease-in-out infinite;"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>