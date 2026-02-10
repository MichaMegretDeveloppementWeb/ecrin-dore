#!/bin/bash

# Script de déploiement pour L'Écrin Doré (restaurant-luxe)
# Usage: ./deploy.sh [--skip-maintenance]

set -e  # Arrêter le script en cas d'erreur

# Configuration
WEB_USER="www-data"  # Adapter selon le serveur (www-data, nginx, apache...)
WEB_GROUP="www-data"
BRANCH="main"

echo "============================================"
echo "  Déploiement - L'Écrin Doré"
echo "============================================"

# Option pour skip la maintenance (utile pour debug)
SKIP_MAINTENANCE=false
if [ "$1" == "--skip-maintenance" ]; then
    SKIP_MAINTENANCE=true
fi

# 1. Activer le mode maintenance
if [ "$SKIP_MAINTENANCE" = false ]; then
    echo "→ Activation du mode maintenance..."
    php artisan down --retry=60
fi

# 2. Récupérer les dernières modifications depuis le dépôt Git
echo "→ Mise à jour du dépôt Git..."
git fetch origin
git reset --hard origin/$BRANCH

# 3. Installer les dépendances PHP
echo "→ Installation des dépendances PHP..."
php composer.phar install --no-dev --optimize-autoloader --no-interaction

# 4. Installer les dépendances Node et compiler les assets
echo "→ Build des assets front-end (Vite + Tailwind)..."
npm ci --no-audit --no-fund
npm run build

# 5. Optimiser les caches pour la production
echo "→ Optimisation des caches..."
php artisan config:cache
php artisan route:cache
php artisan view:cache
php artisan event:cache

# 6. Exécuter les migrations
echo "→ Exécution des migrations..."
php artisan migrate --force

# 7. Corriger les permissions
echo "→ Correction des permissions..."
chown -R $WEB_USER:$WEB_GROUP storage bootstrap/cache
find storage -type d -exec chmod 755 {} \;
find storage -type f -exec chmod 644 {} \;
find bootstrap/cache -type d -exec chmod 755 {} \;
find bootstrap/cache -type f -exec chmod 644 {} \;

# 8. Désactiver le mode maintenance
if [ "$SKIP_MAINTENANCE" = false ]; then
    echo "→ Désactivation du mode maintenance..."
    php artisan up
fi

echo ""
echo "============================================"
echo "  ✓ Déploiement terminé avec succès !"
echo "============================================"
echo ""
echo "Version déployée : $(git rev-parse --short HEAD)"
echo "Branche : $(git branch --show-current)"
echo "Date : $(date '+%Y-%m-%d %H:%M:%S')"
