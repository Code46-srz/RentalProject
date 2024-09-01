#!/bin/sh
# Replace the placeholder port in the NGINX config with the PORT environment variable, defaulting to 80 if not set
sed -i "s/listen 80;/listen ${PORT:-80};/" /etc/nginx/conf.d/default.conf

# Start NGINX
nginx -g "daemon off;"
