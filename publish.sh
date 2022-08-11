#!/bin/bash
git restore package-lock.json
git pull

rm -rf dist/
mkdir -p dist/
cp src/* dist/ -r

mkdir -p dist/img/
cp img/* dist/img/ -r

npm i
./node_modules/sass/sass.js --style=compressed scss/index.scss:dist/index.min.css
./node_modules/.bin/webpack --mode=production

mkdir -p dist/webfonts/
cp './node_modules/@font-awesome/fontawesome-free/webfonts/*' dist/webfonts/