# Simple app that crawls [url] for data mining

## How to guide

### Clone the app:
```
git clone https://github.com/TheBlinkMan/nr-challenge
```

### How to run the app with Docker Compose:

#### Requirements:
* Internet Access
* PHP
* Docker
* Composer
* Docker Compose *

#### Run this commands:
```
cd nr-challenge
composer install
cp .env.example .env
php artisan key:generate
chmod -R o+rw bootstrap/ storage/
docker-compose up --build
```

### Access the url localhost:8080 using a browser or a CLI tool

### How to run the app without Docker Compose:

#### Run this commands:
##### First, build the docker image.
```
    docker build \
      --file .docker/Dockerfile \
      -t nr-challenge .
```
##### Second, run the image.
```
    docker run \
      --name nr-challenge-app \
      --rm -p 8080:80 nr-challenge
```
