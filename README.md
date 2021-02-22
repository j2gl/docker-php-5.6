# docker PHP 5.6

This is a docker php 5.6 image to run old code since version 5.6 is deprecated long time ago.  
My motivation was that I needed to run code developed in php 5.6.
It is meant to be used as FPM (FastCGI Process Manager) and tested with nginx.

Docker Repository: https://hub.docker.com/repository/docker/j2gl/php-5.6-fpm

## Running

Just follow this steps:

On a terminal window run:
```sh
cd sample-compose
docker-compose up -d
docker-compose logs -f
```

Open your browser and go to http://localhost

Then you can check the dokcer-compose [sample](sample-compose/docker-compose.yml) to learn how to use it.

**Database**
To connect to the database 
```sh
mysql -h 127.0.0.1 --port=23306 -u root -pphpdbsecret
```