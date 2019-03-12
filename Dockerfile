FROM nginx:alpine

RUN apk add openssl php7-fpm php7-openssl shadow

RUN adduser -D app

RUN mkdir /app

WORKDIR /app

COPY entrypoint.sh /entrypoint.sh
COPY PHP/ /app/
COPY Nginx/default.conf /etc/nginx/conf.d/

RUN sed -i \
        -e "s/user = nobody/;user = nginx/g" \
        -e "s/group = nobody/;group = nginx/g" \
        -e "s/;listen.owner = nobody/listen.owner = nginx/g" \
        -e "s/;listen.group = nobody/listen.group = nginx/g" \
        /etc/php7/php-fpm.d/www.conf

RUN sed -i -e "s/user  nginx;//g" /etc/nginx/nginx.conf

RUN mkdir -p /var/run \
 && touch /var/run/nginx.pid

RUN chown -R app:app /var/log \
 && chown -R app:app /var/cache \
 && chown -R app:app /etc/nginx \
 && chown -R app:app /var/run \
 && chown -R app:app /run \
 && chown -R app:app /app

ENTRYPOINT ["/entrypoint.sh"]

VOLUME /var/log /var/cache

USER app

CMD ["nginx", "-g", "daemon off;"]
