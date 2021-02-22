# docker PHP 5.6

This is a docker php 5.6 image to run old code since version 5.6 is deprecated long time ago.  
My motivation was I needed to run an old code developed in php 5.6.
It is meant to be used as FPM (FastCGI Process Manager).

Docker Repository: https://hub.docker.com/repository/docker/j2gl/php-5.6-fpm

## Running

You can check the dokcer-compose [sample](sample-compose/docker-compose.yml) to learn how to use it.


```sh
cd sample-compose
docker-compose up -d
docker-compose logs -f
```

Then go to http://localhost

To connnect to the database 
```sh
mysql -h 127.0.0.1 --port=23306 -u root -pphpdbsecret
```