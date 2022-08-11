#!/bin/bash
git pull

rm -rf dist/
mkdir -p dist/
cp src/* dist/ -r

npm i
./node_modules/sass/sass.js --style=compressed scss/index.scss:dist/index.min.css
./node_modules/.bin/webpack --mode=production