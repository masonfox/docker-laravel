# Laravel Docker
> A test volume based docker container dev env with Laravel

### Requirements

Items you'll need to get started:

1. [Docker](https://docs.docker.com/install/)
1. [Composer](https://getcomposer.org/download/)
1. [Node & NPM](https://nodejs.org/en/download/)
1. [Laravel](https://laravel.com/docs/5.6#installing-laravel)
   - For `artisan` server

### Getting Started

There are several different ways you could run this by using docker. If you want to run spin up a simple web server, you can do that by building the image and running the web container (see section below).

In addition, you can spin up the web server, a Redis instance, and a MySQL instance using a single Docker Compose command (see below).

### Docker Compose
> Compose will create containers for a web server, Redis, and MySQL

1. `docker-compose up`
   - Creates instances of:
     1. Web Server - `127.0.0.1:8181`
     1. Redis - `127.0.0.1:9998`
     1. MySQL - `127.0.0.1:9999`
   - Append `-d` to run in the background
1. Run Browserync by running `npm run watch`
1. Edit application and see changes
   - Kill the containers by running `CTRL-C`, or if you ran it in the background, `docker-compose down`.

### Helpful commmands
1. **View containers** - `docker ps`, add `-a` to only show actively running containers
1. **View images** - `docker images`
1. **Kill all containers** - `docker kill $(docker ps -q)`
1. **Kill all images** - `docker image rm $(docker images -q) -f`
1. **Delete volume cache** - `docker-compose rm -v` after stopping containers

Your best friend is `-q`, which returns id's. You can use this to take action on multiple containers at the same time.
