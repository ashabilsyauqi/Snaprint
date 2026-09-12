#!/bin/bash
# ==============================================================================
# Snaprint Production Server Deploy Script
# Jalankan script ini di dalam folder proyek di server (misal: /opt/snaprint)
# ==============================================================================

set -e

echo "=== Memulai Deployment Snaprint Digital Printing ==="

# 1. Cek file .env
if [ ! -f .env ]; then
    echo "[1/4] Membuat .env dari .env.example..."
    cp .env.example .env
    echo ">> Catatan: Anda dapat menyesuaikan port atau password DB di file .env"
else
    echo "[1/4] File .env sudah ada."
fi

# 2. Jalankan Docker Compose
echo "[2/4] Menjalankan container WordPress & MariaDB..."
if command -v docker-compose &> /dev/null; then
    docker-compose up -d
elif docker compose version &> /dev/null; then
    docker compose up -d
else
    echo "Error: docker-compose tidak ditemukan di sistem server!"
    exit 1
fi

echo "[3/4] Menunggu database MariaDB siap..."
sleep 5

# 3. Info Status
echo "[4/4] Status Container:"
docker ps --filter "name=snaprint"

echo ""
echo "======================================================================"
echo "  DEPLOYMENT SUKSES! 🚀"
echo "======================================================================"
echo "• WordPress Container : snaprint-app"
echo "• MariaDB Container   : snaprint-db"
echo "• Port Akses Lokal    : http://localhost:8080 (atau sesuai .env)"
echo ""
echo "Untuk import database awal dengan artikel & kalkulator:"
echo "  1. Siapkan database dengan domain target:"
echo "     ./database/prepare_production_db.sh mysnaprint.com"
echo "  2. Masukkan ke container DB:"
echo "     docker compose exec -T snaprint-db mysql -u snaprint_user -p snaprint_db < database/snaprint_db_production.sql"
echo "======================================================================"
