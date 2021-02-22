FROM nginx:1.19.7-alpine

RUN rm -f /etc/nginx/conf.d/default.conf
COPY old-php-56-nginx.conf /etc/nginx/conf.d/old-php-56-nginx.conf

VOLUME /usr/share/nginx/html
