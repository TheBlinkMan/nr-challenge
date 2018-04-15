# Simple app that crawls [url] for data mining

## How to guide

### Clone the app:
```
git clone https://github.com/TheBlinkMan/nr-challenge
```

### How to run the app without Docker Compose:

##### Requirements:
* Internet Access
* Docker

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

### How to run the app with Docker Compose:

#### Requirements:
* Internet Access
* Docker
* Docker Compose

#### Run this command:
```
docker-compose up --build
```

### Access the url localhost:8080 using a browser or a CLI tool

### Problems:
If you can't access the website try changing the modes of the folder using
this command:
```
chmod -R o+rw bootstrap/ storage/
```
