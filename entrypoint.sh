#!/bin/sh

# Check if the PORT environment variable is set
if [ -z "$PORT" ]; then
  echo "Error: PORT environment variable is not set."
  exit 1
fi

# Replace the placeholder port in laravel.conf with the PORT environment variable
sed -i "s/listen 80;/listen $PORT;/" /etc/nginx/conf.d/default.conf

# Start Nginx
nginx -g "daemon off;"
