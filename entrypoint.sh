#!/bin/sh
set -e

sed -i -e "s/\$PORT/$PORT/g" /etc/nginx/conf.d/default.conf

echo "SMTP_USERNAME=$SMTP_USERNAME" >> /app/.env
echo "SMTP_PASSWORD=$SMTP_PASSWORD" >> /app/.env
echo "NONCE_SECRET=$NONCE_SECRET" >> /app/.env

php-fpm7

exec "$@"
