#!/bin/sh

git subsplit init gitlab@git.spinen.net:libraries/connectwise-php-generator.git

git subsplit publish --heads="master develop" src/Client:gitlab@git.spinen.net:libraries/connectwise-php-client.git
git subsplit publish --heads="master develop" src/Library:gitlab@git.spinen.net:libraries/connectwise-php-library.git

rm -rf .subsplit/
