#!/bin/sh
set -e

sed -i -e "s/\$PORT/$PORT/g" /etc/nginx/conf.d/default.conf

# echo "SMTP_USERNAME=$SMTP_USERNAME" >> /.env
# echo "SMTP_PASSWORD=$SMTP_PASSWORD" >> /.env
# echo "NONCE_SECRET=$NONCE_SECRET" >> /.env

php-fpm7

exec "$@"
