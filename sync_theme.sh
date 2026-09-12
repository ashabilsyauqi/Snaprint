#!/bin/bash
# Sync changes from Desktop git repo to XAMPP htdocs Snaprint theme
TARGET="/Applications/XAMPP/xamppfiles/htdocs/Snaprint/wp-content/themes/snaprint"
SOURCE="$(dirname "$0")"

echo "Syncing theme files to XAMPP..."
rsync -av --exclude '.git' --exclude 'sync_theme.sh' "$SOURCE/" "$TARGET/"
chmod -R 755 "$TARGET"
echo "Theme synced successfully!"
