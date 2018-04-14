Simple app that crawls [url] for data mining

Clone the app:

git clone https://github.com/TheBlinkMan/nr-challenge

How to run the app without Docker Compose:

Requirements:
Internet Access
Docker

Run this commands:
First, build the docker image.
    docker build \
      --file .docker/Dockerfile \
      -t nr-challenge .
Second, run the image.
    docker run \
      --name nr-challenge-app \
      --rm -p 8080:80 nr-challenge

How to run the app with Docker Compose:

Run this commands:
Requirements:
Internet Access
Docker
Docker Compose

docker-compose up --build
