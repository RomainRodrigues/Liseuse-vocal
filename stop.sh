#!/bin/bash
docker container stop liseuse-convertPtag
docker container rm liseuse-convertPtag

docker container stop liseuse-Ptoaudio
docker container rm liseuse-Ptoaudio

docker volume rm liseuse