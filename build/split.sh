#!/bin/sh

# Allow getting version from root project or build directory
if [ -f "VERSION" ]
then
    VERSION=`cat VERSION`
elif [ -f "../VERSION" ]
then
    VERSION=`cat ../VERSION`
fi

git subsplit init git@github.com:spinen/connectwise-php-library-generator.git

git subsplit publish --heads="master develop" --tags=${VERSION} src/Client:git@github.com:spinen/connectwise-php-client.git
git subsplit publish --heads="master develop" --tags=${VERSION} src/Library:git@github.com:spinen/connectwise-php-library.git

rm -rf .subsplit/
