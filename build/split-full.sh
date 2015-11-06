#!/bin/sh

git subsplit init git@github.com:spinen/connectwise-php-library-generator.git

git subsplit publish --heads="master develop" src/Client:git@github.com:spinen/connectwise-php-client.git
git subsplit publish --heads="master develop" src/Library:git@github.com:spinen/connectwise-php-library.git

rm -rf .subsplit/
