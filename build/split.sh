#!/bin/sh

git subsplit init gitlab@git.spinen.net:libraries/connectwise-php-generator.git

git subsplit publish --heads="master" --no-tags src/Client:gitlab@git.spinen.net:libraries/connectwise-php-client.git
git subsplit publish --heads="master" --no-tags src/Library:gitlab@git.spinen.net:libraries/connectwise-php-library.git

rm -rf .subsplit/
