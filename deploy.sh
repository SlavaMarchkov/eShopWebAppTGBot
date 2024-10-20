#!/bin/bash

set -e

echo "Deploying..."

git pull origin develop

php82 composer install --no-dev --prefer-dist --optimize-autoloader

echo "Deploy done!"
