# docker php 5.6

A long time ago php 5.6 version was deprecated.  This is a docker image 
meant to run old php code in a container.  It is tested with nginx connected
through FPM (FastCGI Process Manager) and [nginx](https://nginx.org/en/).

My motivation was that I needed to run code developed in this old php 5.6 
version.  This docker image is meant to 

Please check the Image Repository in [Docker Hub](https://hub.docker.com/repository/docker/j2gl/php-5.6-fpm).

## Running

To demonstarte how to use it, follow these steps:

1. Clone this repository
2. Open a terminal window and run.
```sh
cd sample-compose
docker-compose up -d
docker-compose logs -f
```
3. Open your browser and go to http://localhost

Check the dokcer-compose [sample](sample-compose/docker-compose.yml) 
to customize it to your own needs and learn how to use it.

**Database**
To connect to the database 
```sh
mysql -h 127.0.0.1 --port=23306 -u root -pphpdbsecret
```

## TODO

[ ] Add debug support with Xdebug 2.5.5 - See the repo with tag [XDEBUG_2_5_5](https://github.com/xdebug/xdebug/tree/XDEBUG_2_5_5)