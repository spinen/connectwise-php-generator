#!/bin/sh

# Allow getting version from root project or build directory
if [ -f "VERSION" ]
then
    VERSION=`cat VERSION`
elif [ -f "../VERSION" ]
then
    VERSION=`cat ../VERSION`
fi

git subsplit init gitlab@git.spinen.net:libraries/connectwise-php-generator.git

git subsplit publish --heads="master develop" --tags=${VERSION} src/Client:gitlab@git.spinen.net:libraries/connectwise-php-client.git
git subsplit publish --heads="master develop" --tags=${VERSION} src/Library:gitlab@git.spinen.net:libraries/connectwise-php-library.git

rm -rf .subsplit/
