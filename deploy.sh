#!/bin/bash

set -e

echo "Deploying..."

git pull origin develop

php82 composer.phar install

echo "Deploy done!"
