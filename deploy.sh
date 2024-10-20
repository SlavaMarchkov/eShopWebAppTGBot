#!/bin/bash

set -e

echo "Deploying..."

git pull origin develop

composer install --no-dev --prefer-dist --optimize-autoloader

echo "Deploy done!"
