#!/bin/bash

mkdir -p dist/

npm i
sass --style=compressed scss/index.scss:dist/index.min.css
./node_modules/.bin/webpack