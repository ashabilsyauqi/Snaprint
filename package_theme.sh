#!/bin/bash
# Script untuk membuat zip tema Snaprint yang siap di-upload ke WordPress admin
DIR="$(cd "$(dirname "$0")" && pwd)"
OUTPUT="${DIR}/snaprint-theme.zip"

echo "Membuat paket tema WordPress: $OUTPUT ..."
rm -f "$OUTPUT"

cd "$DIR"
zip -r "$OUTPUT" . \
    -x "*.git*" \
    -x "*.DS_Store" \
    -x "database/*" \
    -x "sync_theme.sh" \
    -x "package_theme.sh" \
    -x "snaprint-theme.zip" \
    -x "deploy_server.sh" \
    -x "docker-compose.yml" \
    -x "Dockerfile" \
    -x ".gitignore"

echo "Paket tema berhasil dibuat: $OUTPUT ($(du -h "$OUTPUT" | cut -f1))"
