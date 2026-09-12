#!/bin/bash
# Script untuk generate database production dengan domain yang diinginkan
# Contoh pemakaian: ./prepare_production_db.sh mysnaprint.com
# atau:            ./prepare_production_db.sh snaprint.co.id

TARGET_DOMAIN="${1:-mysnaprint.com}"
PROTOCOL="${2:-https}"
FULL_URL="${PROTOCOL}://${TARGET_DOMAIN}"

DIR="$(cd "$(dirname "$0")" && pwd)"
SOURCE_SQL="${DIR}/snaprint_db.sql"
OUTPUT_SQL="${DIR}/snaprint_db_production.sql"

if [ ! -f "$SOURCE_SQL" ]; then
    echo "Error: File $SOURCE_SQL tidak ditemukan!"
    exit 1
fi

echo "=== Snaprint Database Production Converter ==="
echo "Sumber       : $SOURCE_SQL"
echo "Target URL   : $FULL_URL"
echo "Output File  : $OUTPUT_SQL"

# Ganti http://localhost/Snaprint menjadi URL target
sed -e "s|http://localhost/Snaprint|${FULL_URL}|g" \
    -e "s|http:\/\/localhost\/Snaprint|${PROTOCOL}:\\\/\\\/${TARGET_DOMAIN}|g" \
    "$SOURCE_SQL" > "$OUTPUT_SQL"

echo "Berhasil! File $OUTPUT_SQL siap di-import ke MySQL / MariaDB server production."
