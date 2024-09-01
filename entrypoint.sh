#!/bin/sh

# Replace the placeholder in the Nginx configuration file with the actual port
sed -i "s/\${PORT}/$PORT/" /etc/nginx/conf.d/default.conf

# Start Nginx
nginx -g "daemon off;"
